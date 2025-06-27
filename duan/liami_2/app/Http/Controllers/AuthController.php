<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('managers.m_user.sign_up');
    }

 public function register(Request $request)
{
    // Xác thực yêu cầu
    $request->validate([
        'FullName' => 'required|string|max:20',
        'Email' => 'required|string|email|max:255|unique:customers',
        'Password' => 'required|string|min:8|confirmed', // Đảm bảo có trường xác nhận
    ], [
        'FullName.max' => 'Họ và tên không vượt quá 20 kí tự.',
        'FullName.required' => 'Họ và tên là bắt buộc.',
        'Email.required' => 'Địa chỉ email là bắt buộc.',
        'Email.email' => 'Địa chỉ email không hợp lệ.',
        'Email.unique' => 'Địa chỉ email đã tồn tại trong bảng khách hàng.',
        'Password.required' => 'Mật khẩu là bắt buộc.',
        'Password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
        'Password.confirmed' => 'Mật khẩu xác nhận không khớp.',
    ]);

    // Kiểm tra xem email đã tồn tại trong bảng Users
    if (User::where('Email', $request->Email)->exists()) {
        return back()->withErrors([
            'Email' => 'Địa chỉ email đã được đăng kí.',
        ])->withInput(); // Giữ lại các giá trị đã nhập
    }

    // Tạo một customer mới
    Customer::create([
        'FullName' => $request->FullName,
        'Email' => $request->Email,
        'PasswordHash' => Hash::make($request->Password),
        'Gender' => $request->Gender ?? null,
        'ProfilePicture' => 'assets\images3\cus.jpg',
    ]);

    // Chuyển hướng hoặc trả về phản hồi
    return redirect()->route('login')->with('success', 'Đăng kí thành công. Vui lòng đăng nhập!');
}
}
