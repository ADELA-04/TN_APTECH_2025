<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Lấy từ khóa tìm kiếm từ request
            $search = $request->input('name');

            // Lấy tất cả bài viết blog, sắp xếp theo thời gian tạo giảm dần
            $blogs = BlogPost::when($search, function ($query) use ($search) {
                return $query->where('Title', 'like', strtolower($search) . '%'); // Tìm kiếm chỉ bắt đầu từ ký tự đầu
            })
                ->orderBy('created_at', 'desc')
                ->paginate(10); // Lấy 10 bài viết mỗi trang

            return view('managers.m_blog.manager_blog', compact('blogs', 'search')); // Truyền dữ liệu đến view
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Ghi lại lỗi vào log
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi lấy dữ liệu.');
        }
    }
    public function create()
    {
        return view('managers.m_blog.create_blog'); // Trả về view tạo blog
    }

    // Lưu bài viết blog mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        try {
            // Xác thực dữ liệu yêu cầu
            $request->validate([
                'Title' => 'required|max:65500',
                'Summary' => 'required|max:65500',
                'Content' => 'required|max:65500',
                'ImageURL' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

            ]);

            // Khởi tạo biến cho đường dẫn ảnh
            $imagePath = null;

            // Kiểm tra tệp tải lên
            if ($request->hasFile('ImageURL')) {
                $file = $request->file('ImageURL');

                if ($file->isValid()) {
                    $originalName = time() . '_' . $file->getClientOriginalName(); // Đổi tên tệp để tránh trùng lặp
                    $file->move(public_path('assets/images3'), $originalName); // Lưu ảnh vào thư mục

                    $imagePath = 'assets/images3/' . $originalName; // Lưu đường dẫn ảnh
                    Log::info("Image stored at: " . $imagePath);
                } else {
                    Log::error("Uploaded file is not valid.");
                    return redirect()->back()->with('error', 'Tệp tải lên không hợp lệ.');
                }
            } else {
                Log::warning("No file uploaded.");
            }

            // Tạo bài viết blog mới
            $blog = BlogPost::create([
                'Title' => $request->Title,
                'Summary' => $request->Summary, // Chuyển đổi ký tự ngắt dòng thành <br>
                'Content' => $request->Content, // Chuyển đổi ký tự ngắt dòng thành <br>
                'ImageURL' => $imagePath,

                'AuthorID' => Auth::id(),
            ]);

            return redirect()->route('managers.m_blog.edit_blog', $blog->PostID)->with('success', 'Thêm thành công!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('managers.m_blog.add_blog')->with('error', 'lỗi.');
        }
    }
    public function edit($PostID)
    {
        $blog = BlogPost::findOrFail($PostID);

        return view('managers.m_blog.update_blog', compact('blog')); // Return the edit view
    }

    public function update(Request $request, $PostID)
    {
        try {
            // Validate the request data
            $request->validate([
                'Title' => 'required',
                'Summary' => 'required',
                'Content' => 'required',
                'ImageURL' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

            ]);

            $blog = BlogPost::findOrFail($PostID); // Find the blog post

            // Handle image upload
            if ($request->hasFile('ImageURL')) {
                $file = $request->file('ImageURL');

                if ($file->isValid()) {
                    $originalName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('assets/images3'), $originalName);
                    $blog->ImageURL = 'assets/images3/' . $originalName; // Update the image URL
                }
            }

            // Update blog post fields
            $blog->Title = $request->Title;
            $blog->Summary = $request->Summary;
            $blog->Content = $request->Content;


            $blog->save(); // Save changes

            return redirect()->route('managers.m_blog.manager_blog')->with('success', 'Sửa thành công!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'lỗi.');
        }
    }
    public function destroy($PostID)
    {
        $blog = BlogPost::find($PostID);

        if ($blog) {
            $blog->delete(); // Delete the blog post
            return redirect()->route('managers.m_blog.manager_blog')->with('success', 'Xóa thành công!');
        }
        return redirect()->route('managers.m_blog.manager_blog')->with('error', 'Không tồn tại.');
    }
}
