<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class BannerController extends Controller
{
    // Hiển thị danh sách banner
    public function index()
    {
        $banners = Banner::orderBy('created_at', 'desc')->paginate(10); // Lấy tất cả banner
        return view('managers.setting.settingpage.manager_banner', compact('banners'));
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
        'subTitle' => 'nullable|string',
        'ImageURL' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'Link' => 'nullable',


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

        $currentDate = now(); // Lấy thời gian hiện tại
        $status = ($currentDate >= $request->StartDate && $currentDate <= $request->EndDate) ? 'active' : 'in_active';
        $banner=Banner::create([
            'Title' => $request->Title,
            'subTitle' => $request->subTitle,
            'ImageURL' => $imagePath, // Thêm trường này
            'Link' => $request->Link,

        ]);

        return redirect()->route('settings_banner.edit',$banner->BannerID)->with('success', 'Thêm thành công!');
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
            'Title' => 'nullable|string',
        'subTitle' => 'nullable|string',
        'LogoImageURL' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Thêm giới hạn kích thước nếu cần
        'Link' => 'nullable',


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

        return redirect()->route('settings_banner.edit',$id)->with('success', 'Sửa thành công');
    }

    // Xóa banner
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('managers.settings_banner')->with('success', 'Xóa thành công');
    }
}
