@extends('layouts.admin_master')

@section('title')
    <title>Chỉnh sửa Banner</title>
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
    <div class="main-content">
        <div class="main-content-inner">
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Chỉnh sửa banner</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li><i class="icon-chevron-left"></i></li>
                        <li><a href="{{ route('managers.settings_banner') }}">
                                <div class="text-tiny">Quay lại</div>
                            </a></li>
                    </ul>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form class="form-setting form-style-2" action="{{ route('settings_banner.update', $banner->BannerID) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Thêm phương thức PUT để chỉ định cập nhật -->
                    <div class="wg-box">
                        <div class="left">
                            <h5 class="mb-4">Cài đặt banner</h5>
                            <div class="body-text">Cài đặt tiêu đề chuẩn SEO, title SEO...</div>
                        </div>
                        <div class="right flex-grow">
                            <div class="gap24 mobile-wrap ">
                                <div class="gap24 ">
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Tiêu đề</div>
                                        <input class="flex-grow" placeholder="Nhập tiêu đề..." type="text" name="Title"
                                            value="{{ $banner->Title }}">
                                        @if ($errors->has('Title'))
                                            <div class="text-tiny" style="color: brown; font-weight: bold;">
                                                {{ $errors->first('Title') }}</div>
                                        @endif
                                    </fieldset>

                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Tiêu đề phụ</div>
                                        <input class="flex-grow" placeholder="Nhập tiêu đề phụ..." type="text"
                                            name="subTitle" value="{{ $banner->subTitle }}">
                                        @if ($errors->has('subTitle'))
                                            <div class="text-tiny" style="color: brown; font-weight: bold;">
                                                {{ $errors->first('subTitle') }}</div>
                                        @endif
                                    </fieldset>

                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Ảnh minh họa</div>
                                        <div class="upload-image style-2">
                                            <div class="item up-load">
                                                <label class="uploadfile" for="logoFile">
                                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                    <span class="text-tiny">Drop your images here or select <span
                                                            class="tf-color">click to browse</span></span>
                                                    <input type="file" id="logoFile" name="ImageURL" accept="image/*"
                                                        style="display: none;">
                                                </label>
                                            </div>
                                            <div class="item mb-24">
                                                <img id="previewImage" src="{{ asset($banner->ImageURL) }}"
                                                    alt="Logo Preview" style="max-width: 100%; height: auto;">
                                            </div>
                                        </div>

                                    </fieldset>

                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Liên kết điều hướng</div>
                                        <input class="flex-grow" type="text" name="Link" value="{{ $banner->Link }}"
                                            placeholder="Nhập liên kết điều hướng...">
                                        @if ($errors->has('Link'))
                                            <div class="text-tiny" style="color: brown; font-weight: bold;">
                                                {{ $errors->first('Link') }}</div>
                                        @endif
                                    </fieldset>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cols gap10">
                        <button type="submit" class="tf-button w-full">Lưu</button>
                        <button class="tf-button style-1 w-full" type="button"
                            onclick="window.location='{{ route('managers.settings_banner') }}'">Hủy</button>
                    </div>


            </div>
            </form>
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
