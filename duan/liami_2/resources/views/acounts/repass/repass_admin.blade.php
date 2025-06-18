@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
       Đổi mật khẩu
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


<!-- #wrapper -->
<div id="wrapper">
    <!-- #page -->
    <div id="page" class="">
        <!-- layout-wrap -->
       <div class="layout-wrap">

            <!-- section-content-right -->
            <div class="section-content-right">

                <!-- main-content -->
                <div class="main-content">
                    <!-- main-content-wrap -->
                    <div class="main-content-inner">
                        <!-- main-content-wrap -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                        <div class="main-content-wrap">
                            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                <h3>Đổi mật khẩu </h3>

                            </div>

                            <form class=" form-add-product" action="{{ route('profile.changePassword.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="wg-box">
                                    <fieldset>
                                        <div class="body-title mb-10">Mật khẩu cũ <span class="tf-color-1">*</span></div>
                                        <div class="password-wrapper">
                                            <input class="mb-10" type="password" name="Password" placeholder="Nhập mật khẩu cũ..." value="{{ old('Password') }}">
                                            <button type="button" id="toggle-password" class="toggle-password"><i class="icon-eye"></i></button>
                                        </div>
                                        @if ($errors->has('Password'))
                                            <div class="text-tiny" style="color: brown; font-weight: bold;">{{ $errors->first('Password') }}</div>
                                        @endif
                                    </fieldset>
                                    <fieldset>
                                        <div class="body-title mb-10">Mật khẩu mới <span class="tf-color-1">*</span></div>
                                        <div class="password-wrapper">
                                            <input class="mb-10" type="password" name="new_Password" placeholder="Nhập mật khẩu mới..." value="{{ old('new_Password') }}">
                                            <button type="button" id="toggle-password" class="toggle-password"><i class="icon-eye"></i></button>
                                        </div>
                                        @if ($errors->has('new_Password'))
                                            <div class="text-tiny" style="color: brown; font-weight: bold;">{{ $errors->first('new_Password') }}</div>
                                        @endif
                                    </fieldset>

                                    <div class="cols gap10">
                                        <button class="tf-button w-full" type="submit">Lưu </button>
                                        <button class="tf-button style-1 w-full" type="button" onclick="window.location='{{ route('managers.manager') }}'">Hủy</button>

                                    </div>
                                </div>

                            </form>
                            <!-- /form-add-product -->
                        </div>
                        <!-- /main-content-wrap -->
                    </div>
                    <!-- /main-content-wrap -->

                </div>
                <!-- /main-content -->
            </div>
            <!-- /section-content-right -->
        </div>
        <!-- /layout-wrap -->
    </div>
    <!-- /#page -->
</div>
<!-- /#wrapper -->
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

@endsection
