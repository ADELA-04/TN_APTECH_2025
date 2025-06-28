<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    public function edit()
{
    $setting = Setting::first(); // Lấy cài đặt đầu tiên
    return view('managers.setting.settingpage.setting', compact('setting'));
}

public function update(Request $request)
{
    // Xác thực dữ liệu nhập vào
    $validatedData = $request->validate([
        'NavigationLink' => 'nullable|string',
        'LinkFB' => 'nullable|url',
        'LinkIN' => 'nullable|url',
        'BusinessName' => 'nullable|string',
        'BossName' => 'nullable|string',
        'Phone' => 'nullable|string',
        'Address' => 'nullable|string',
        'Email' => 'nullable|email',
        'DefaultWeight' => 'nullable',

    ]);

    // Lấy cài đặt hiện tại
    $setting = Setting::first();


    // Cập nhật các trường còn lại
    $setting->fill($validatedData); // Cập nhật tất cả các trường từ validatedData
    $setting->save(); // Lưu cài đặt

    return redirect()->route('settings.edit')->with('success', 'Cài đặt đã được cập nhật thành công!');
}
}
