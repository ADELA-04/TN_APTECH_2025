<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class ProductController extends Controller
{
    public function index()
{
    try {
        $products = Product::with('category')->orderBy('created_at', 'desc')->paginate(10); // Lấy 10 sản phẩm mỗi trang
        return view('managers.m_product.manager_product', compact('products')); // Truyền dữ liệu đến view
    } catch (\Exception $e) {
        Log::error($e->getMessage()); // Ghi lại lỗi vào log
        return redirect()->back()->with('error', 'Có lỗi xảy ra khi lấy dữ liệu.');
    }
}
}
