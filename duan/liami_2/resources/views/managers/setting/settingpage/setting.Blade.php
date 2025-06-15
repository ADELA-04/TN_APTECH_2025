@extends('layouts.admin_master')

@section('title')
    <title>Information Shop</title>
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
                                        <fieldset class="name">

                                            <div class="body-title mb-10">Logo đại diện</div>
                                            <div class="upload-image style-2">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="logoFile">
                                                        <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                        <span class="text-tiny">Drop your images here or select <span
                                                                class="tf-color">click to browse</span></span>
                                                        <input type="file" id="logoFile" name="Logo" accept="image/*"
                                                            style="display: none;">
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <img id="previewImage" src="{{ asset($setting->Logo) }}"
                                                        style="max-width: 100%; height: auto;">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="mb-24">
                                            <div class="body-title mb-10">Favicon</div>
                                            <div class="upload-image style-2">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="faviconFile">
                                                        <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                        <span class="text-tiny">Drop your images here or select <span
                                                                class="tf-color">click to browse</span></span>
                                                        <input type="file" id="faviconFile" name="Favicon"
                                                            accept="image/*" style="display: none;">
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <img id="previewImage2" src="{{ asset($setting->Favicon) }}">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="title mb-24">
                                            <div class="body-title mb-10">Liên kết điều hướng</div>
                                            <input class="flex-grow" type="text" placeholder="Enter navigation link"
                                                name="NavigationLink" tabindex="0"
                                                value="{{ $setting->NavigationLink }}">
                                        </fieldset>
                                        <fieldset class="title mb-24">
                                            <div class="body-title mb-10">Liên kết facebook</div>
                                            <input class="flex-grow" type="text" placeholder="Enter Facebook link"
                                                name="LinkFB" tabindex="0" value="{{ $setting->LinkFB }}">
                                        </fieldset>
                                        <fieldset class="title mb-24">
                                            <div class="body-title mb-10">Liên kết Intagram</div>
                                            <input class="flex-grow" type="text" placeholder="Enter Intagram link"
                                                name="LinkIN" tabindex="0" value="{{ $setting->LinkIN }}">
                                        </fieldset>
                                        <div class="body-title mb-10">Tên doanh nghiệp</div>
                                        <input class="mb-10" type="text" placeholder="Enter Business Name"
                                            name="BusinessName" value="{{ $setting->BusinessName }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Người đại diện</div>
                                            <input class="mb-10" type="text" placeholder="Enter Boss Name"
                                                name="BossName" value="{{ $setting->BossName }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Địa chỉ cửa hàng</div>
                                            <input class="mb-10" type="text" placeholder="Enter Shop Address"
                                                name="Address" value="{{ $setting->Address }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Hotline</div>
                                            <input class="mb-10" type="text" placeholder="Enter the hotline"
                                                name="Phone" value="{{ $setting->Phone }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Email quản trị</div>
                                            <input class="mb-10" type="email" placeholder="Enter email admin"
                                                name="Email" value="{{ $setting->Email }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Kích thước mặc định</div>
                                            <input class="mb-10" type="text" placeholder="Enter Default Weight"
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logoInput = document.getElementById('logoFile');
            const logoPreview = document.getElementById('previewImage');

            const faviconInput = document.getElementById('faviconFile');
            const faviconPreview = document.getElementById('previewImage2');

            logoInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function() {
                    logoPreview.src = reader.result;
                    logoPreview.style.display = 'block'; // Hiển thị ảnh
                }

                if (file) {
                    reader.readAsDataURL(file); // Đọc ảnh
                }
            });

            faviconInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function() {
                    faviconPreview.src = reader.result;
                    faviconPreview.style.display = 'block'; // Hiển thị ảnh
                }

                if (file) {
                    reader.readAsDataURL(file); // Đọc ảnh
                }
            });
        });
    </script>
@endsection
