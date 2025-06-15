@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        add banner
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


{{-- content --}}
@section('content')
    <!-- main-content -->
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Setting banner</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html">
                                <div class="text-tiny">Dashboard</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">add banner</div>
                        </li>
                    </ul>
                </div>
                <!-- setting -->
                <!-- Thông báo thành công hoặc thất bại -->
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
                <form class="form-setting form-style-2" action="{{ route('settings_banner.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
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
                                        <input class="flex-grow" type="text" placeholder="Enter title" name="Title"
                                            tabindex="0" value="" aria-required="true">
                                    </fieldset>
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Sub Title</div>
                                        <input class="flex-grow" type="text" placeholder="Enter title" name="subTitle"
                                            tabindex="0" value="" aria-required="true">
                                    </fieldset>
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Image</div>
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
                                                <img id="previewImage" src="" alt="Logo Preview"
                                                    style="display:none; max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </fieldset>


                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">links Image</div>
                                        <input class="flex-grow" type="text" placeholder="Enter navigation link for logo"
                                            name="Link" tabindex="0" value="" aria-required="true">
                                    </fieldset>
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Start Date</div>
                                        <input class="flex-grow" type="date" placeholder="Enter Start Date"
                                            name="StartDate" tabindex="0" value="" aria-required="true">
                                    </fieldset>
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">End Date</div>
                                        <input class="flex-grow" type="date" placeholder="Enter End Date"
                                            name="EndDate" tabindex="0" value="" aria-required="true">
                                    </fieldset>
                                    {{-- <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Status</div>
                                        <input class="flex-grow" type="text" placeholder="Enter Status" readonly name="Status" tabindex="0" value="" aria-required="true" >
                                    </fieldset> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="tf-button w180 m-auto">Save</button>

            </div>
            </form>
            <!-- /setting -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content-wrap -->
    </div>
    <!-- /main-content -->
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
