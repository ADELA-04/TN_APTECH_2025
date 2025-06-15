@extends('layouts.admin_master')

@section('title')
    <title>Edit Banner</title>
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
                <h3>Edit Banner</h3>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
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

                <form class="form-setting form-style-2" action="{{ route('settings_banner.update', $banner->BannerID) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Thêm phương thức PUT để chỉ định cập nhật -->
                    <div class="wg-box">
                        <div class="left">
                            <h5 class="mb-4">Banner setting</h5>
                            <div class="body-text">Setting image sale, title sale...</div>
                        </div>
                        <div class="right flex-grow">
                            <div class="gap24 mobile-wrap ">
                                <div class="gap24 ">
                    <fieldset class="title mb-24">
                        <div class="body-title mb-10">Title</div>
                        <input class="flex-grow" type="text" name="Title" value="{{ $banner->Title }}" required>
                    </fieldset>

                    <fieldset class="title mb-24">
                        <div class="body-title mb-10">Sub Title</div>
                        <input class="flex-grow" type="text" name="subTitle" value="{{ $banner->subTitle }}">
                    </fieldset>

                    <fieldset class="title mb-24">
                        <div class="body-title mb-10">Image</div>
                        <div class="upload-image style-2">
                            <div class="item up-load">
                                <label class="uploadfile" for="logoFile">
                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="logoFile" name="ImageURL" accept="image/*" style="display: none;">
                                </label>
                            </div>
                            <div class="item mb-24">
                                <img id="previewImage" src="{{ asset($banner->ImageURL) }}" alt="Logo Preview" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="title mb-24">
                        <div class="body-title mb-10">Links Image</div>
                        <input class="flex-grow" type="text" name="Link" value="{{ $banner->Link }}">
                    </fieldset>

                    <fieldset class="title mb-24">
                        <div class="body-title mb-10">Start Date</div>
                        <input class="flex-grow" type="date" name="StartDate" value="{{ old('StartDate', \Carbon\Carbon::parse($banner->StartDate)->format('Y-m-d')) }}" required>
                    </fieldset>

                    <fieldset class="title mb-24">
                        <div class="body-title mb-10">End Date</div>
                        <input class="flex-grow" type="date" name="EndDate" value="{{ old('EndDate', \Carbon\Carbon::parse($banner->EndDate)->format('Y-m-d')) }}" required>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

                    <button type="submit" class="tf-button w180 m-auto">Update</button>
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
