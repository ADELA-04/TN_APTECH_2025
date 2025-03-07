<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeValue;
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
public function create()
{
    $categories = Category::all();
    return view('managers.m_product.add_product', compact('categories'));
}
public function store(Request $request)
{
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thực hiện thao tác này.');
    }

    try {
        $validatedData = $request->validate([
            'ProductName' => 'required|string',
            'Description' => 'nullable|string',
            'Price' => 'required|numeric',
            'SalePrice' => 'nullable|numeric',
            'Size' => 'string',
            'Color' => 'string',
            'Weigh' => 'numeric',
            'Brand' => 'string',
            'Image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'CategoryID' => 'required|exists:categories,CategoryID',

        ]);

        // Xử lý ảnh
        $imagePath = null;
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            if ($file->isValid()) {
                $originalName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images3'), $originalName);
                $imagePath = 'assets/images3/' . $originalName;
            }
        }

        // Tạo sản phẩm
        $product = Product::create(array_merge($validatedData, [
            'CreatedBy' => Auth::id(),
            'Image' => $imagePath,
        ]));



        return redirect()->route('products.create')->with('success', 'Product added successfully!');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return redirect()->route('products.create')->with('error', 'Có lỗi xảy ra khi thêm sản phẩm: ' . $e->getMessage());
    }
}
public function edit($ProductID)
{
    $product = Product::with('category')->findOrFail($ProductID);
    $categories = Category::all();
    return view('managers.m_product.update_product', compact('product', 'categories'));
}
public function update(Request $request, $ProductID)
{
    try {
        $validatedData = $request->validate([
            'ProductName' => 'required|string',
            'Description' => 'nullable|string',
            'Price' => 'required|numeric',
            'SalePrice' => 'nullable|numeric',
            'Size' => 'string',
            'Color' => 'string',
            'Weigh' => 'numeric',
            'Brand' => 'string',
            'Image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'CategoryID' => 'required|exists:categories,CategoryID',
        ]);

        $product = Product::findOrFail($ProductID);

        // Xử lý ảnh
        $imagePath = $product->Image; // Giữ nguyên đường dẫn ảnh cũ
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            if ($file->isValid()) {
                $originalName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images3'), $originalName);
                $imagePath = 'assets/images3/' . $originalName; // Cập nhật đường dẫn ảnh mới
            }
        }

        // Cập nhật sản phẩm
        $product->update(array_merge($validatedData, [
            'Image' => $imagePath,
        ]));

        return redirect()->route('products.edit',$ProductID)->with('success', 'Product updated successfully!');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return redirect()->route('products.edit',$ProductID)->with('error', 'Có lỗi xảy ra khi cập nhật sản phẩm: ' . $e->getMessage());
    }
}
public function destroy($ProductID)
{
    $product = Product::find($ProductID);

    if ($product) {
        $product->delete();
        return redirect()->route('managers.m_product.manager_product')->with('success', 'Product deleted successfully!');
    }

    return redirect()->route('managers.m_product.manager_product')->with('error', 'Product does not exist.');
}

}
