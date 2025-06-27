<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\BlogPost;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    //hiển thị bên trang admin
public function index2(Request $request)
{
    // Lấy từ khóa tìm kiếm từ request
    $searchTerm = $request->input('name');
    $orderStatus = $request->input('order_status'); // Lấy trạng thái đơn hàng

    // Lấy tất cả đơn hàng cùng với thông tin khách hàng
    $query = Order::with(['customer', 'orderDetails.product']);

    // Nếu có từ khóa tìm kiếm, thêm điều kiện vào truy vấn
    if ($searchTerm) {
        $query->whereHas('customer', function($q) use ($searchTerm) {
            $q->where('Phone', 'like', "%{$searchTerm}%");
        });
    }

    // Nếu có trạng thái đơn hàng, thêm điều kiện vào truy vấn
    if ($orderStatus) {
        $query->where('OrderStatus', $orderStatus);
    }

    // Sắp xếp theo ngày tạo mới nhất
    $orders = $query->orderBy('created_at', 'desc')->paginate(10);

    // Thêm hình ảnh sản phẩm vào mỗi đơn hàng
    foreach ($orders as $order) {
        $firstDetail = $order->orderDetails->first();
        $order->product_image = $firstDetail ? $firstDetail->product->Image : null;
    }

    // Kiểm tra nếu không tìm thấy đơn hàng nào
    $notFound = $orders->isEmpty() && ($searchTerm || $orderStatus);

    return view('managers.order.order_List', compact('orders', 'notFound'));
}
 // Cập nhật trạng thái đơn hàng admin
    public function updateStatus(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'OrderStatus' => 'required|string|max:255',
        ]);

        // Tìm đơn hàng
        $order = Order::findOrFail($id);

        // Cập nhật trạng thái
        $order->OrderStatus = $request->input('OrderStatus');
        $order->save();

        // Trả về thông báo thành công
        return redirect()->back()->with('success', 'Trạng thái đơn hàng đã được cập nhật thành công!');
    }
    public function updateStatus2(Request $request, $id)
    {
        // Xác thực dữ liệu
         $order = Order::findOrFail($id);

    // Kiểm tra trạng thái hiện tại
    if ($order->OrderStatus === 'Chờ xác nhận') {
        // Cập nhật trạng thái thành "Hủy"
        $order->OrderStatus = $request->input('OrderStatus');
        $order->save();

        return redirect()->back()->with('success', 'Đơn hàng đã được hủy thành công!');
    } else {
        return redirect()->back()->with('error', 'Không thể hủy đơn hàng này.');
    }
    }

    // Cập nhật mã vận đơn
    public function updateShippingCode(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'ShippingCode' => 'required|string|max:255',
        ]);

        // Tìm đơn hàng
        $order = Order::findOrFail($id);

        // Cập nhật mã vận đơn
        $order->ShippingCode = $request->input('ShippingCode');
        $order->save();

        // Trả về thông báo thành công
        return redirect()->back()->with('success', 'Mã vận đơn đã được cập nhật thành công!');
    }



    //danh sách đơn hàng
    public function index()
{
    $blogs = BlogPost::orderBy('created_at', 'desc')->paginate(3);
    $newProduct = Product::orderBy('created_at', 'desc')->paginate(8);
    $allProduct = Product::all();
    $settings = Setting::all();
    $banners = Banner::all();
    $currentUrl = url()->current();
    $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
    $categories = Category::with('children')->whereNull('parent_id')->get();
    $user = Auth::guard('customer')->user();

    // Lấy danh sách đơn hàng của khách hàng đang đăng nhập
    $orders = [];
    if ($user) {
        $orders = Order::with('orderDetails.product')
                       ->where('CustomerID', $user->CustomerID) // Lọc theo CustomerID
                       ->orderBy('created_at', 'desc')
                        ->paginate(5);
    }

    return view('products.management_order', compact(
        'categories',
        'settings',
        'banners',
        'allProduct',
        'newProduct',
        'blogs',
        'topViewedProducts',
        'currentUrl',
        'user',
        'orders',
    ));
}
    //chi tiết đơn hàng bên khách hàng
    public function index_detail($id)
    {
        $order = Order::with('orderDetails')->findOrFail($id);
        $blogs = BlogPost::orderBy('created_at', 'desc')->paginate(3);
        $newProduct = Product::orderBy('created_at', 'desc')->paginate(8);
        $allProduct = Product::all();
        $settings = Setting::all();
        $banners = Banner::all();
        $currentUrl = url()->current();
        $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $user = Auth::guard('customer')->user();
        // Lấy danh sách đơn hàng
        $orders = Order::with('orderDetails.product')->orderBy('created_at', 'desc')->get();
        return view('products.oder_detail_custom', compact(

            'order',
            'categories',
            'settings',
            'banners',
            'allProduct',
            'newProduct',
            'blogs',
            'topViewedProducts',
            'currentUrl',
            'user',
            'orders',
        ));
    }

    // hiển thị trang thanh toán từ giỏ hàng (giỏ hàng)
    public function checkout(Request $request)
    {
        // Lấy thông tin từ các mô hình
        $blogs = BlogPost::orderBy('created_at', 'desc')->paginate(3);
        $newProduct = Product::orderBy('created_at', 'desc')->paginate(8);
        $allProduct = Product::all();
        $settings = Setting::all();
        $banners = Banner::all();
        $currentUrl = url()->current();
        $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $user = Auth::guard('customer')->user();

        // Lấy sản phẩm đã chọn từ yêu cầu
        $selectedProducts = json_decode($request->input('products'), true);
        $cartItems = [];

        if (!empty($selectedProducts)) {
            // Lấy CartItemID từ sản phẩm đã chọn
            $cartItemIds = array_column($selectedProducts, 'id');

            // Lấy các sản phẩm đã chọn dựa trên CartItemID
            $cartItems = CartItem::whereIn('CartItemID', $cartItemIds)->with('product')->get();
            // Tính tổng tiền
            $totalAmount = $cartItems->sum(function ($item) {
                return $item->product->SalePrice * $item->Quantity;
            });

            $shippingFee = 40000; // Phí vận chuyển
            $finalAmount = $totalAmount + $shippingFee;
        } else {
            return redirect()->back()->with('error', 'Không có sản phẩm nào để thanh toán.');
        }

        return view('products.checkout', compact(
            'selectedProducts',
            'cartItems',
            'categories',
            'settings',
            'banners',
            'allProduct',
            'newProduct',
            'blogs',
            'topViewedProducts',
            'currentUrl',
            'totalAmount',
            'shippingFee',
            'finalAmount',
            'user'
        ));
    }

    //Thêm đơn hàng
    public function store(Request $request)
    {
        // Lấy thông tin khách hàng
        $customer = Auth::guard('customer')->user();

        // Tạo đơn hàng
        $order = new Order();
        $order->Address = $request->input('address');
        $order->Phone = $request->input('phone');
        $order->CustomerID = $customer->CustomerID;
        $order->TotalAmount = $request->input('total_amount');
        $order->PaymentMethod = $request->input('payment_method');
         $order->OrderStatus='Chờ xác nhận';
        $order->Notes = $request->input('notes');

        $order->save();

        // Lấy danh sách cart_ids từ request
        $cartIds = json_decode($request->input('cart_ids'), true);
        // Lấy tất cả CartItems dựa trên cartIds
        $cartItems = CartItem::whereIn('CartItemID', $cartIds)->get();

        foreach ($cartItems as $item) {

                $orderDetail = new OrderDetail();
                $orderDetail->OrderID = $order->OrderID;
                $orderDetail->ProductID = $item->ProductID; // Đảm bảo bạn lấy đúng ProductID
                $orderDetail->Quantity = $item->Quantity; // Lấy số lượng
                $orderDetail->Price = $item->product->SalePrice;
                $orderDetail->Color = $item->Color;
                $orderDetail->Size = $item->Size;
                $orderDetail->save();

        }
 // Xóa CartItems đã được đặt hàng
    CartItem::whereIn('CartItemID', $cartIds)->delete();

        return redirect()->route('orders.index')->with('success', 'Đặt hàng thành công!');
    }
    //chi tiết đơn hàng bên admin
public function edit($id)
{
    // Lấy đơn hàng cùng với thông tin khách hàng và chi tiết đơn hàng
    $order = Order::with(['customer', 'orderDetails.product'])->findOrFail($id);

    return view('managers.order.order_detail', compact('order'));
}
//thanh toán bằng nút mua ngay
public function checkout2(Request $request)
{ // Lấy người dùng đã xác thực
        $user = Auth::guard('customer')->user();

        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!$user) {
            session(['intended_url' => url()->current()]);
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để mua hàng.');
        }

    // Kiểm tra số lượng sản phẩm
    $quantity = $request->input('quantity');

    if ($quantity < 1) {
        return redirect()->back()->withErrors(['quantity' => 'Số lượng phải lớn hơn hoặc bằng 1.']);
    }

    // Lấy thông tin từ các mô hình
    $blogs = BlogPost::orderBy('created_at', 'desc')->paginate(3);
    $newProduct = Product::orderBy('created_at', 'desc')->paginate(8);
    $allProduct = Product::all();
    $settings = Setting::all();
    $banners = Banner::all();
    $currentUrl = url()->current();
    $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
    $categories = Category::with('children')->whereNull('parent_id')->get();
    $user = Auth::guard('customer')->user();

    return view('products.checkout2', compact(
        'categories',
        'settings',
        'banners',
        'allProduct',
        'newProduct',
        'blogs',
        'topViewedProducts',
        'currentUrl',
        'user'
    ));
}
    //thực hiện lưu vào csdl
      public function store2(Request $request)
    {
          $customer = Auth::guard('customer')->user();
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|size:10',
            'payment_method' => 'required|string',
            'notes' => 'nullable|string',
            'total_amount' => 'required|numeric',
        ]);

        // Tạo đơn hàng
        $order = Order::create([
            'CustomerID' => $customer->CustomerID, // Giả sử bạn có thông tin khách hàng từ auth
            'TotalAmount' => $validatedData['total_amount'],
            'OrderStatus' => 'Chờ xác nhận', // Hoặc trạng thái mặc định
            'PaymentMethod' => $validatedData['payment_method'],
            'Notes' => $validatedData['notes'],
            'Address' => $validatedData['address'],
            'Phone' => $validatedData['phone'],
        ]);

        // Tạo chi tiết đơn hàng
        OrderDetail::create([
            'OrderID' => $order->OrderID,
            'ProductID' => request()->input('product_id'),
            'Quantity' => request()->input('quantity'),
            'Price' => request()->input('product_price'),
            'Color' => request()->input('color'),
            'Size' => request()->input('size'),
        ]);

        // Redirect hoặc trả về thông báo thành công
        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được tạo thành công!');
    }
}
