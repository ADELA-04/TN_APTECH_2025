@extends('layouts.admin_master')

@section('title')
    <title>Cài đặt chung</title>
@endsection

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
                                    <h3>Cài đặt chung</h3>

                                </div>

                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="form-add-product" action="{{ route('settings.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- Dòng này là cần thiết -->
                                    <div class="wg-box">

                                        <fieldset class="title mb-24">
                                            <div class="body-title mb-10">Liên kết điều hướng</div>
                                            <input class="flex-grow" type="text"
                                                placeholder="Nhập liên kết điều hướng..." name="NavigationLink"
                                                tabindex="0" value="{{ $setting->NavigationLink }}">
                                        </fieldset>
                                        <fieldset class="title mb-24">
                                            <div class="body-title mb-10">Liên kết facebook</div>
                                            <input class="flex-grow" type="text" placeholder="Nhập liên kết facebook..."
                                                name="LinkFB" tabindex="0" value="{{ $setting->LinkFB }}">
                                        </fieldset>
                                        <fieldset class="title mb-24">
                                            <div class="body-title mb-10">Liên kết Intagram</div>
                                            <input class="flex-grow" type="text" placeholder="Nhập liên kết intagram..."
                                                name="LinkIN" tabindex="0" value="{{ $setting->LinkIN }}">
                                        </fieldset>
                                        <div class="body-title mb-10">Tên doanh nghiệp</div>
                                        <input class="mb-10" type="text" placeholder="Nhập tên doanh nghiệp..."
                                            name="BusinessName" value="{{ $setting->BusinessName }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Người đại diện</div>
                                            <input class="mb-10" type="text" placeholder="Nhập tên người đại diện..."
                                                name="BossName" value="{{ $setting->BossName }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Địa chỉ cửa hàng</div>
                                            <input class="mb-10" type="text" placeholder="Nhập địa chỉ cửa hàng..."
                                                name="Address" value="{{ $setting->Address }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Hotline</div>
                                            <input class="mb-10" type="text" placeholder="Nhập hotline..."
                                                name="Phone" value="{{ $setting->Phone }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Email quản trị</div>
                                            <input class="mb-10" type="email" placeholder="Nhập email quản trị..."
                                                name="Email" value="{{ $setting->Email }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Kích thước mặc định</div>
                                            <input class="mb-10" type="text" placeholder="Nhập kích thước mặc định..."
                                                name="DefaultWeight" value="{{ $setting->DefaultWeight }}" required>

                                        </fieldset>
                                        <div class="cols gap10">
                                            <button type="submit" class="tf-button w-full">Lưu</button>
                                            <button class="tf-button style-1 w-full" type="button"
                                                onclick="window.location='{{ route('managers.manager') }}'">Hủy</button>

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
