<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Customer;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Lấy từ khóa tìm kiếm từ request
            $search = $request->input('email'); // Tên biến tìm kiếm

            // Lấy tất cả người dùng, sắp xếp theo thời gian tạo giảm dần
            $users = User::when($search, function ($query) use ($search) {
                return $query->where('Email', 'like', strtolower($search) . '%'); // Tìm kiếm theo email bắt đầu bằng từ khóa
            })
                ->orderBy('created_at', 'desc')
                ->paginate(10); // Lấy 10 người dùng mỗi trang

            return view('managers.m_user.manager_user', compact('users', 'search')); // Truyền dữ liệu đến view
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Ghi lại lỗi vào log
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi lấy dữ liệu.');
        }
    }

    public function create()
    {
        return view('managers.m_user.add_user'); // Chỉ định view cho form thêm người dùng
    }

    public function store(Request $request)
    {
        Log::info($request->all());
        // Xác thực dữ liệu
        $request->validate([
            'Username' => 'required|string|max:12',
            'Email' => 'required|email|unique:users,email',
            'Password' => 'required|string|min:8',
            'Role' => 'required|in:Admin,Staff_Order,Staff_Product',
            'Phone' => 'nullable|numeric|max:10',
        ], [
            'Username.required' => 'Tên tài khoản là bắt buộc.',
            'Username.max' => 'Tên tài không vượt quá 12 kí tự.',
            'Password.required' => 'Mật khẩu là bắt buộc.',
            'Password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'Email.required' => 'Địa chỉ email là bắt buộc.',
            'Role.required' => 'Quyền hạn email là bắt buộc.',
            'Email.unique' => 'Địa chỉ email đã tồn tại.',
            'Phone.max' => 'Số điện thoại không được vượt quá 10 ký tự.',
            'Phone.numeric' => 'Số điện thoại phải là kí tự số.',
        ]);

        // Kiểm tra xem email đã tồn tại trong bảng Users
        if (Customer::where('Email', $request->Email)->exists()) {
            return back()->withErrors([
                'Email' => 'Địa chỉ email đã được đăng kí.',
            ])->withInput(); // Giữ lại các giá trị đã nhập
        }

        try {
            User::create([
                'Username' => $request->Username,
                'Email' => $request->Email,
                'Password' => Hash::make($request->Password), // Mã hóa mật khẩu trước khi lưu
                'Role' => $request->Role,
                'Phone' => $request->Phone,
            ]);

            return redirect()->route('managers.m_user.manager_user')->with('success', 'Thêm thành công!');
        } catch (QueryException $e) {
            Log::error($e->getMessage()); // Ghi lại lỗi
            return redirect()->back()->withErrors(['error' => 'Đã xảy ra lỗi. Vui lòng thử lại sau.']);
        }
    }
    public function edit($userID)
    {
        // Lấy thông tin người dùng theo ID
        $user = User::findOrFail($userID); // Lấy người dùng theo ID

        return view('managers.m_user.update_user', compact('user')); // Truyền biến user vào view
    }

    public function update(Request $request, $userID)
    {
        // Tìm người dùng
        $user = User::findOrFail($userID);

        // Xác thực dữ liệu
         $request->validate([
            'Username' => 'required|string|max:12',
            'Email' => 'required|email|unique:users,email',
            'Password' => 'required|string|min:8',
            'Role' => 'required|in:Admin,Staff_Order,Staff_Product',
            'Phone' => 'nullable|numeric|max:10',
        ], [
            'Username.required' => 'Tên tài khoản là bắt buộc.',
            'Username.max' => 'Tên tài không vượt quá 12 kí tự.',
            'Password.required' => 'Mật khẩu là bắt buộc.',
            'Password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'Email.required' => 'Địa chỉ email là bắt buộc.',
            'Role.required' => 'Quyền hạn email là bắt buộc.',
            'Email.unique' => 'Địa chỉ email đã tồn tại.',
            'Phone.max' => 'Số điện thoại không được vượt quá 10 ký tự.',
            'Phone.numeric' => 'Số điện thoại phải là kí tự số.',
        ]);

        if (Customer::where('Email', $request->Email)->exists()) {
            return back()->withErrors([
                'Email' => 'Địa chỉ email đã được đăng kí.',
            ])->withInput(); // Giữ lại các giá trị đã nhập
        }

        // Cập nhật thông tin người dùng
        $user->Username = $request->input('Username');
        $user->Email = $request->input('Email');
        $user->Phone = $request->input('Phone');

        // Cập nhật mật khẩu mới nếu có
        if ($request->filled('Password')) {
            $user->Password = Hash::make($request->input('Password')); // Mã hóa mật khẩu mới
        }

        try {
            $user->save(); // Lưu thay đổi
            return redirect()->route('managers.m_user.manager_user')->with('success', 'Sửa thành công!');
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Ghi lại lỗi vào log
            return redirect()->back()->withErrors(['error' => 'Đã xảy ra lỗi khi cập nhật thông tin.']);
        }
    }
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('managers.m_user.manager_user')->with('success', 'Xóa thành công!');
        }

        return redirect()->route('managers.m_user.manager_user')->with('error', 'Người dùng không tồn tại.');
    }

    public function editProfile()
    {
        // Lấy thông tin người dùng hiện tại
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

        return view('acounts.profile_admin', compact('user')); // Truyền biến user vào view
    }

    public function updateProfile(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'Username' => 'required|max:12',
            'Email' => 'required|email',
            'Phone' => 'nullable|numeric|digits:10',
            'Avartar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Kiểm tra hình ảnh
        ],[
            'Username.max'=>'Tên không vượt quá 12 kí tự!',
            'Phone.numeric'=>'Điện thoại phải là kí tự số!',
            'Phone.digits'=>'Điện thoại không vượt quá 10 kí tự!',
            'Email.required' => 'Email là bắt buộc!', // Thông báo lỗi nếu email không được cung cấp
    'Email.email' => 'Email không đúng định dạng!',
    'Username.required' => 'Username là bắt buộc!',
        ]
    );

        // Lấy thông tin người dùng hiện tại
        $user = Auth::user();

        // Cập nhật thông tin người dùng
        $user->Username = $request->input('Username');
        $user->Email = $request->input('Email');
        $user->Phone = $request->input('Phone');

        if ($request->hasFile('Avartar')) {
            $file = $request->file('Avartar');

            if ($file->isValid()) {
                $originalName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images3'), $originalName);
                $user->Avartar = 'assets/images3/' . $originalName; // Update the image URL
            }
        }

        try {
            $user->save();
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation errors: ', $e->validator->errors()->all());
            return redirect()->route('profile.edit')->withErrors($e->validator)->withInput();
        }

        return redirect()->route('profile.edit')->with('success', 'Cập nhật hồ sơ cá nhân thành công!');
    }

    public function showChangePasswordForm()
    {
        return view('acounts.repass.repass_admin'); // Chỉ định view cho form đổi mật khẩu
    }

    public function changePassword(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'Password' => 'required|string',
            'new_Password' => 'required|string',
        ], [
            'Password.required' => 'Nhập mật khẩu tại đây.',
            'new_Password.required' => 'Mật khẩu mới là bắt buộc.',

        ]);

        // Lấy thông tin người dùng đang đăng nhập
        $user = Auth::user();

        // Kiểm tra mật khẩu hiện tại
        if (!Hash::check($request->Password, $user->Password)) {
            return redirect()->back()->withErrors(['Password' => 'Mật khẩu hiện tại không chính xác.']);
        }

        // Cập nhật mật khẩu mới mà không mã hóa
        $user->Password = $request->new_Password; // Lưu mật khẩu mới không mã hóa

        try {
            $user->save(); // Lưu thay đổi
            return redirect()->route('profile.changePassword')->with('success', 'Đổi mật khẩu thành công!');
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Ghi lại lỗi vào log
            return redirect()->back()->withErrors(['error' => 'Đã xảy ra lỗi khi đổi mật khẩu.']);
        }
    }
}
