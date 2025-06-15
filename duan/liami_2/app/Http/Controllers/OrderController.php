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
        $order->Notes = $request->input('notes');
        $order->save();

        // Lấy danh sách cart_ids từ request
        $cartIds = json_decode($request->input('cart_ids'), true);

        // Lấy tất cả CartItems dựa trên cartIds
        $cartItems = CartItem::whereIn('CartItemID', $cartIds)->get();

        // Tạo chi tiết đơn hàng chỉ cho các CartItem có CartID trong mảng
        foreach ($cartItems as $item) {
            if (in_array($item->CartID, $cartIds)) { // Kiểm tra xem CartID có trong mảng không
                $orderDetail = new OrderDetail();
                $orderDetail->OrderID = $order->OrderID;
                $orderDetail->ProductID = $item->ProductID; // Đảm bảo bạn lấy đúng ProductID
                $orderDetail->Quantity = $item->Quantity; // Lấy số lượng
                $orderDetail->Price = $item->product->SalePrice;
                $orderDetail->Color = $item->Color;
                $orderDetail->Size = $item->Size;
                $orderDetail->save();
            }
        }

        return redirect()->route('orders.index')->with('success', 'Đặt hàng thành công!');
    }
}
