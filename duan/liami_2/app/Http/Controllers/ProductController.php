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

    public function index(Request $request)
    {
        try {
            // Lấy từ khóa tìm kiếm từ request
            $search = $request->input('search'); // Tên biến tìm kiếm

            // Lấy tất cả sản phẩm, sắp xếp theo thời gian tạo giảm dần
            $products = Product::with('category')
                ->when($search, function ($query) use ($search) {
                    return $query->where(function ($query) use ($search) {
                        $query->whereRaw('LOWER(ProductName) LIKE ?', [strtolower($search) . '%']) // Tìm kiếm theo tên sản phẩm
                            ->orWhereRaw('LOWER(ProductID) LIKE ?', [strtolower($search) . '%']); // Tìm kiếm theo mã sản phẩm
                    });
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10); // Lấy 10 sản phẩm mỗi trang

            return view('managers.m_product.manager_product', compact('products', 'search')); // Truyền dữ liệu đến view
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
                'Summary' => 'nullable|string',
                'Description' => 'nullable|string',
                'Price' => 'required|numeric|gt:0',
                'SalePrice' => 'required|numeric|lt:Price|gt:0',
                'Size' => 'required|string',
                'Color' => 'required|string',
                'Material' => 'nullable|string',
                'Weigh' => 'nullable|numeric',
                'Brand' => 'nullable|string',
                'Image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'CategoryID' => 'required|exists:categories,CategoryID',
            ], [
                 'SalePrice.lt' => 'Giá giảm phải nhỏ hơn giá gốc!',
    'SalePrice.required' => 'Giá giảm là bắt buộc!',
    'SalePrice.gt' => 'Giá giảm phải lớn hơn 0!',
    'ProductName.required' => 'Tên sản phẩm là bắt buộc!',
    'Price.required' => 'Giá gốc là bắt buộc!',
    'Price.gt' => 'Giá gốc phải lớn hơn 0!',
    'Price.numeric' => 'Giá gốc phải là số!',
    'SalePrice.numeric' => 'Giá giảm phải là số!',
    'Size.required' => 'Kích thước là bắt buộc!',
    'Color.required' => 'Màu sắc là bắt buộc!',
    'CategoryID.required' => 'Danh mục là bắt buộc!',
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



            return redirect()->route('products.edit', $product->ProductID)->with('success', 'Thêm thành công!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation errors: ', $e->validator->errors()->all());
            return redirect()->route('products.create')->withErrors($e->validator)->withInput();
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
                'Summary' => 'nullable|string',
                'Description' => 'nullable|string',
                'Price' => 'required|numeric|gt:0',
                'SalePrice' => 'required|numeric|lt:Price|gt:0',
                'Size' => 'required|string',
                'Color' => 'required|string',
                'Material' => 'nullable|string',
                'Weigh' => 'nullable|numeric',
                'Brand' => 'nullable|string',
                'Image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'CategoryID' => 'required|exists:categories,CategoryID',
            ], [
                 'SalePrice.lt' => 'Giá giảm phải nhỏ hơn giá gốc!',
    'SalePrice.required' => 'Giá giảm là bắt buộc!',
    'SalePrice.gt' => 'Giá giảm phải lớn hơn 0!',
    'ProductName.required' => 'Tên sản phẩm là bắt buộc!',
    'Price.required' => 'Giá gốc là bắt buộc!',
    'Price.gt' => 'Giá gốc phải lớn hơn 0!',
    'Price.numeric' => 'Giá gốc phải là số!',
    'SalePrice.numeric' => 'Giá giảm phải là số!',
    'Size.required' => 'Kích thước là bắt buộc!',
    'Color.required' => 'Màu sắc là bắt buộc!',
    'CategoryID.required' => 'Danh mục là bắt buộc!',
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

            return redirect()->route('products.edit', $ProductID)->with('success', 'Sửa thành công!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation errors: ', $e->validator->errors()->all());
            return redirect()->route('products.edit', $ProductID)->withErrors($e->validator)->withInput();
        }
    }
    public function destroy($ProductID)
    {
        $product = Product::find($ProductID);

        if ($product) {
            $product->delete();
            return redirect()->route('managers.m_product.manager_product')->with('success', 'Xóa thành công!');
        }

        return redirect()->route('managers.m_product.manager_product')->with('error', 'Không tồn tại.');
    }

}
