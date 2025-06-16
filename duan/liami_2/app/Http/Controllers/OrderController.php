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
  public function index2(Request $request)
{
    // Lấy từ khóa tìm kiếm từ request
    $searchTerm = $request->input('name');

    // Lấy tất cả đơn hàng cùng với thông tin khách hàng
    $query = Order::with(['customer', 'orderDetails.product']);

    // Nếu có từ khóa tìm kiếm, thêm điều kiện vào truy vấn
    if ($searchTerm) {
        $query->where('OrderID', 'like', "%{$searchTerm}%");
    }

    // Sắp xếp theo ngày tạo mới nhất
    $orders = $query->orderBy('created_at', 'desc')->paginate(10);

    // Thêm hình ảnh sản phẩm vào mỗi đơn hàng
    foreach ($orders as $order) {
        $firstDetail = $order->orderDetails->first();
        $order->product_image = $firstDetail ? $firstDetail->product->Image : null;
    }

    return view('managers.order.order_List', compact('orders'));
}

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
        // Lấy danh sách đơn hàng
        $orders = Order::with('orderDetails.product')->orderBy('created_at', 'desc')->get();
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
    // hiển thị tranh thanh toán (giỏ hàng)
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
public function edit($id)
{
    // Lấy đơn hàng cùng với thông tin khách hàng và chi tiết đơn hàng
    $order = Order::with(['customer', 'orderDetails.product'])->findOrFail($id);

    return view('managers.order.order_detail', compact('order'));
}
}
