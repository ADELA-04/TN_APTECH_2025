<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('managers.m_user.login'); // Đường dẫn đến view đăng nhập
    }

    public function validateCredentials(User $user, #[\SensitiveParameter] array $credentials)
    {
        $plainPassword = $credentials['Password']; // Mật khẩu người dùng nhập vào
        $hashedPassword = $user->getAuthPassword(); // Mật khẩu đã mã hóa từ cơ sở dữ liệu

        // Kiểm tra mật khẩu
        return Hash::check($plainPassword, $hashedPassword);
    }

    public function login(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        // Debug: Kiểm tra giá trị của request
        Log::info($request->all());

        // Tìm người dùng theo email
        $user = User::where('Email', $request->Email)->first();

        // Nếu người dùng tồn tại và mật khẩu đúng
        if ($user && $this->validateCredentials($user, $request->only('Email', 'Password'))) {
            Auth::login($user); // Đăng nhập

            // Kiểm tra vai trò của người dùng
            if ($user->Role === 'Admin') {
                return redirect()->route('managers.index'); // Đường dẫn đến view admin
            } else {
                return redirect()->route('home.index'); // Đường dẫn đến view staff
            }
        }

        // Nếu không thành công, trả về thông báo lỗi
        return back()->withErrors([
            'Email' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Hoặc đường dẫn khác
    }
}
