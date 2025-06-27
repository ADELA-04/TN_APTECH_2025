<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('managers.m_user.login'); // Đường dẫn đến view đăng nhập
    }

    public function validateCredentials(User $user, array $credentials)
    {
        $plainPassword = $credentials['Password']; // Mật khẩu người dùng nhập vào
        $hashedPassword = $user->getAuthPassword(); // Mật khẩu đã mã hóa từ cơ sở dữ liệu

        // Kiểm tra mật khẩu
        return Hash::check($plainPassword, $hashedPassword);
    }

    public function login(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate(
            [
                'Email' => 'required|email',
                'Password' => 'required',
            ],
            [
                'Email.email' => 'Enail không hợp lệ.',
                'Email.required' => 'Email là bắt buộc.',
                'Password.required' => 'Mật khẩu là bắt buộc',
            ]
        );

        // Debug: Kiểm tra giá trị của request
        Log::info($request->all());

        // Tìm người dùng theo email trong bảng Users
        $user = User::where('Email', $request->Email)->first();

        // Kiểm tra xem người dùng có trong bảng Users
        if ($user && Hash::check($request->Password, $user->Password)) {
            Auth::login($user); // Đăng nhập lưu thông tin người dùng vào session

            // Kiểm tra vai trò của người dùng
            if ($user->Role === 'Admin') {
                return redirect()->route('managers.manager'); // Đường dẫn đến view admin
            } elseif ($user->Role === 'Staff_Order') {
                return redirect()->route('managers.manager'); // Đường dẫn đến view staff
            } elseif ($user->Role === 'Staff_Product') {
                return redirect()->route('managers.manager'); // Đường dẫn đến view staff
            }
        }

        // Tìm customer theo email
        $customer = Customer::where('Email', $request->Email)->first();

        // Nếu customer tồn tại và mật khẩu đúng
        if ($customer && Hash::check($request->Password, $customer->PasswordHash)) {
            // Đăng nhập customer
            Auth::guard('customer')->login($customer);

            return redirect()->route('home')->with('fullname', $customer->FullName); // Chuyển đến trang home
        }

        // Nếu không thành công, trả về thông báo lỗi
        return back()->withErrors([
            'Email' => 'Thông tin đăng nhập không chính xác. Vui lòng nhập lại thông tin!',
        ]);
    }


    // đăng xuất cho quản trị
    public function logout()
    {
        Auth::logout(); // xóa thông tin người dùng khỏi phiên session
        return redirect()->route('login');
    }

    //đăng xuất cho khách hàng
    public function logout_cus()
    {
        Auth::guard('customer')->logout(); // Đăng xuất người dùng

        return redirect('/')->with('success', 'Bạn đã đăng xuất thành công!');
    }
}
