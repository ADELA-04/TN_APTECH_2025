<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\BlogPost;
use App\Models\Product;

class CartController extends Controller
{
    public function showCart()
    {
        $user = Auth::guard('customer')->user();
        $cartItems = [];
        $totalAmount = 0;

        if ($user) {
            $cart = Cart::where('CustomerID', $user->CustomerID)->first();
            if ($cart) {
                $cartItems = $cart->cartItems()->paginate(10);

                foreach ($cartItems as $item) {
                    $totalAmount += $item->Quantity * $item->product->SalePrice; // Sử dụng SalePrice
                }
            }
        }

        // Lấy dữ liệu cần thiết cho view
        $blogs = BlogPost::orderBy('created_at', 'desc')->paginate(3);
        $newProduct = Product::orderBy('created_at', 'desc')->paginate(8);
        $allProduct = Product::all();
        $settings = Setting::all();
        $banners = Banner::all();
        $topViewedProducts = Product::orderBy('View', 'desc')->take(6)->get();
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $currentUrl = url()->current();

        return view('products.cart', compact(
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
            'user'
        ));
    }

    public function addToCart(Request $request)
    {
        $messages = [
        'quantity.required' => 'Số lượng là bắt buộc.',
        'quantity.integer' => 'Số lượng phải là một số nguyên.',
        'quantity.min' => 'Số lượng phải lớn hơn hoặc bằng 1.',
    ];
        // Xác thực dữ liệu yêu cầu
        $request->validate([
        'product_id' => 'required|exists:products,ProductID',
        'quantity' => 'required|integer|min:1',
        'color' => 'required|string',
        'size' => 'required|string',
    ], $messages);
        // Lấy người dùng đã xác thực
        $user = Auth::guard('customer')->user();

        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!$user) {
            session(['intended_url' => url()->current()]);
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }

        // Tạo hoặc lấy giỏ hàng của người dùng
        $cart = Cart::firstOrCreate(['CustomerID' => $user->CustomerID]);

        // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng
        $existingCartItem = CartItem::where('CartID', $cart->CartID)
            ->where('ProductID', $request->product_id)
            ->where('Color', $request->color)
            ->where('Size', $request->size)
            ->first();

        if ($existingCartItem) {
            // Cập nhật số lượng nếu sản phẩm đã tồn tại
            $existingCartItem->Quantity += $request->quantity;
            $existingCartItem->save();
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            CartItem::create([
                'CartID' => $cart->CartID,
                'ProductID' => $request->product_id,
                'Quantity' => $request->quantity,
                'Color' => $request->color,
                'Size' => $request->size,
            ]);
        }
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }

    public function removeFromCart(Request $request, $cartItemId)
    {
        // kiểm tra đăng nhập
        $user = Auth::guard('customer')->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để xóa sản phẩm khỏi giỏ hàng.');
        }

        // Tìm kiếm
        $cartItem = CartItem::find($cartItemId);

        if ($cartItem) {
            // kiểm tra
            $cart = Cart::where('CustomerID', $user->CustomerID)->first();
            if ($cart && $cart->CartID === $cartItem->CartID) {
                // xóa item
                $cartItem->delete();
                return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
            } else {
                return redirect()->back()->with('error', 'Sản phẩm không tồn tại trong giỏ hàng của bạn.');
            }
        }

        return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
    }
}
