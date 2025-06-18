@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
       Thêm mới tài khoản nhân viên
    </title>
@endsection

{{-- css --}}
@section('css')
   <!-- Theme Style -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
   <!-- Font -->
   <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
   <!-- Icon -->
   <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
   <!-- Favicon and Touch Icons  -->
   <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
   <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
@endsection

@section('content')
<div id="wrapper">
    <div id="page">
        <div class="layout-wrap">
            <div class="section-content-right">
                <div class="main-content">
                    <div class="main-content-inner">
                        <div class="main-content-wrap">
                            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                <h3>Thêm mới tài khoản</h3>
                                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                    <li><i class="icon-chevron-left"></i></li>
                                    <li><a href="{{ route('managers.m_user.manager_user') }}"><div class="text-tiny">Quay lại</div></a></li>
                                </ul>
                            </div>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form class="form-add-product" action="{{ route('managers.m_user.store_user') }}" method="POST">
                                @csrf
                                <div class="wg-box">
                                    <fieldset>
                                        <div class="body-title mb-10">Tên tài khoản <span class="tf-color-1">*</span></div>
                                        <input class="mb-10" type="text" name="Username" required placeholder="Nhập tên tài khoản..." value="{{ old('Username') }}">
                                        @if ($errors->has('Username'))
                                        <div class="text-tiny" style="color: brown; font-weight: bold;">{{ $errors->first('Username') }}</div>
                                    @endif
                                    </fieldset>
                                    <fieldset>
                                        <div class="body-title mb-10">Mật khẩu <span class="tf-color-1">*</span></div>
                                        <div class="password-wrapper">
                                            <input class="mb-10" type="password" name="Password" id="password" placeholder="Nhập mật khẩu...">
                                            <button type="button" id="toggle-password" class="toggle-password"><i class="icon-eye"></i></button>
                                        </div>
                                        @if ($errors->has('Password'))
                                        <div class="text-tiny" style="color: brown; font-weight: bold;">{{ $errors->first('Password') }}</div>
                                    @endif
                                    </fieldset>
                                    <fieldset>
                                        <div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
                                        <input class="mb-10" value="{{ old('Email') }}" type="email" name="Email" required placeholder="Nhập email...">
                                        @if ($errors->has('Email'))
                                        <div class="text-tiny" style="color: brown; font-weight: bold;">{{ $errors->first('Email') }}</div>
                                    @endif
                                    </fieldset>
                                    <fieldset>
                                        <div class="body-title mb-10">Điện thoại</div>
                                        <input class="mb-10" value="{{ old('Phone') }}" type="text" name="Phone" placeholder="Nhập điện thoại...">
                                        <div class="text-tiny"></div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="body-title mb-10">Phân quyền <span class="tf-color-1">*</span></div>

                                            <select name="Role" required class="mb-10">
                                                <option value="Admin" {{ old('Role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="Staff_Order" {{ old('Role') == 'Staff_Order' ? 'selected' : '' }}>Quản trị đơn hàng</option>
                                                <option value="Staff_Product" {{ old('Role') == 'Staff_Product' ? 'selected' : '' }}>Quản trị bài đăng và sản phẩm</option>
                                            </select>

                                        @if ($errors->has('Role'))
                                        <div class="text-tiny" style="color: brown; font-weight: bold;">{{ $errors->first('Role') }}</div>
                                    @endif
                                    </fieldset>
                                    <div class="cols gap10">
                                        <button class="tf-button w-full" type="submit">Lưu</button>
                                        <a href="{{ route('managers.m_user.manager_user') }}" class="tf-button style-1 w-full">Hủy</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- script --}}
@section('script')
   <!-- Javascript -->
   <script src="{{ asset('assets/js2/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
   <script src="{{ asset('assets/js2/bootstrap-select.min.js') }}"></script>
   <script src="{{ asset('assets/js2/zoom.js') }}"></script>
   <script src="{{ asset('assets/js2/switcher.js') }}"></script>
   <script src="{{ asset('assets/js2/theme-settings.js') }}"></script>
   <script src="{{ asset('assets/js2/main.js') }}"></script>
   <script src="{{ asset('assets/js2/custom.js') }}"></script>
@endsection
