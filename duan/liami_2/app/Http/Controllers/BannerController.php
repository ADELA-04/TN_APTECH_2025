<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{
    // Hiển thị danh sách banner
    public function index(Request $request)
    {
        $searchTerm = $request->input('name');
        $banners = null; // Khởi tạo biến banners

        if ($searchTerm) {
            $banners = Banner::where('BannerID', $searchTerm)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $banners = Banner::orderBy('created_at', 'desc')->paginate(10);
        }

        // Kiểm tra nếu không tìm thấy banner nào
        $notFound = $banners->isEmpty() && $searchTerm ? true : false;

        return view('managers.setting.settingpage.manager_banner', compact('banners', 'notFound'));
    }

    // Hiển thị form tạo mới banner
    public function create()
    {
        return view('managers.setting.settingpage.addBanner');
    }

    // Lưu banner mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required|string',
            'subTitle' => 'required|string',
            'ImageURL' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'Link' => 'required',
        ], [
            'Title.required' => 'Tiêu đề là bắt buộc.',
            'Title.string' => 'Tiêu đề phải là chuỗi.',
            'subTitle.required' => 'Tiêu đề phụ là bắt buộc.',
            'subTitle.string' => 'Tiêu đề phụ phải là chuỗi.',
            'ImageURL.required' => 'Ảnh minh họa là bắt buộc.',
            'ImageURL.image' => 'File phải là hình ảnh.',
            'ImageURL.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif hoặc webp.',
            'ImageURL.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'Link.required' => 'Liên kết là bắt buộc.',
        ]);
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

        $banner = Banner::create([
            'Title' => $request->Title,
            'subTitle' => $request->subTitle,
            'ImageURL' => $imagePath, // Thêm trường này
            'Link' => $request->Link,

        ]);

        return redirect()->route('settings_banner.edit', $banner->BannerID)->with('success', 'Thêm thành công!');
    }

    // Hiển thị form chỉnh sửa banner
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('managers.setting.settingpage.editBanner', compact('banner'));
    }

    // Cập nhật banner trong cơ sở dữ liệu
    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required|string',
            'subTitle' => 'required|string',
            'ImageURL' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'Link' => 'required',
        ], [
            'Title.required' => 'Tiêu đề là bắt buộc.',
            'Title.string' => 'Tiêu đề phải là chuỗi.',
            'subTitle.required' => 'Tiêu đề phụ là bắt buộc.',
            'subTitle.string' => 'Tiêu đề phụ phải là chuỗi.',
            'ImageURL.required' => 'Ảnh minh họa là bắt buộc.',
            'ImageURL.image' => 'File phải là hình ảnh.',
            'ImageURL.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif hoặc webp.',
            'ImageURL.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'Link.required' => 'Liên kết là bắt buộc.',
        ]);

        $banner = Banner::findOrFail($id);

        // Kiểm tra tệp tải lên
        if ($request->hasFile('ImageURL')) {
            $file = $request->file('ImageURL');

            if ($file->isValid()) {
                $originalName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images3'), $originalName);
                $imagePath = 'assets/images3/' . $originalName;

                // Cập nhật đường dẫn hình ảnh
                $banner->ImageURL = $imagePath;
            }
        }
        // Cập nhật các trường khác
        $banner->Title = $request->Title;
        $banner->subTitle = $request->subTitle;
        $banner->Link = $request->Link;
        $banner->save();

        return redirect()->route('settings_banner.edit', $id)->with('success', 'Sửa thành công');
    }


    // Xóa banner
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('managers.settings_banner')->with('success', 'Xóa thành công');
    }
}
