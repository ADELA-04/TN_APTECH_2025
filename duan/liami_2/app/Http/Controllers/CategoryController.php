<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Apparence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Lấy từ khóa tìm kiếm từ request
            $search = $request->input('name'); // Tên biến tìm kiếm

            // Lấy tất cả danh mục, sắp xếp theo thời gian tạo giảm dần
            $categories = Category::when($search, function ($query) use ($search) {
                return $query->whereRaw('LOWER(CategoryName) LIKE ?', [strtolower($search) . '%']); // Tìm kiếm không phân biệt hoa thường từ ký tự đầu
            })
                ->orderBy('created_at', 'desc')
                ->paginate(10); // Lấy 10 danh mục mỗi trang

            return view('managers.m_category.manager_category', compact('categories', 'search')); // Truyền dữ liệu đến view
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Ghi lại lỗi vào log
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi lấy dữ liệu.');
        }
    }

    public function create()
    {
        $parentCategories = Category::all(); // Lấy tất cả danh mục hiện có để hiển thị
        return view('managers.m_category.add_category', compact('parentCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'CategoryName' => 'required|string|max:20',
            'parent_id' => 'nullable|exists:categories,CategoryID',
        ]);

        try {
            Category::create([
                'CategoryName' => $request->CategoryName,
                'parent_id' => $request->parent_id,
            ]);
            return redirect()->route('category.create')
                ->with('success', 'Thêm thành công.');
        } catch (\Exception $e) {
            return redirect()->route('category.create') // Quay lại trang thêm danh mục
                ->with('error', 'Failed to add category: ' . $e->getMessage());
        }
    }
    public function edit($CategoryID)
    {
        $category = Category::findOrFail($CategoryID);
        $parentCategories = Category::all();
        return view('managers.m_category.update_category', compact('category', 'parentCategories'));
    }

    public function update(Request $request, $CategoryID)
    {
        $request->validate([
            'CategoryName' => 'required|string',
            'parent_id' => 'nullable|exists:categories,CategoryID',
        ]);

        try {
            $category = Category::findOrFail($CategoryID);
            $category->update([
                'CategoryName' => $request->CategoryName,
                'parent_id' => $request->parent_id,
            ]);

            return redirect()->route('managers.m_category.manager_category')
                ->with('success', 'Sửa thành công.');
        } catch (\Exception $e) {
            return redirect()->route('managers.m_category.manager_category')
                ->with('error', 'Sửa thất bại: ' . $e->getMessage());
        }
    }
    public function destroy($CategoryID)
    {
        $category = Category::find($CategoryID);

        if ($category) {
            $category->delete(); // Delete the blog post
            return redirect()->route('managers.m_category.manager_category')->with('success', 'Xóa thành công!');
        }

        return redirect()->route('managers.m_category.manager_category')->with('error', 'Danh mục không tồn tại.');
    }
}
