@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Setting Header
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
                    <h3>Setting Header</h3>
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
                            <div class="text-tiny">Setting</div>
                        </li>
                    </ul>
                </div>
                <!-- setting -->

                <form class="form-setting form-style-2">
                    <div class="wg-box">
                        <div class="left">
                            <h5 class="mb-4">Appearance</h5>
                            <div class="body-text">Setting appearance such as editor, language...</div>
                        </div>
                        <div class="right flex-grow">
                            <div class="gap24 mobile-wrap ">
                                <div class="gap24 ">
                                    <fieldset>
                                        <div class="body-title mb-10">Logo Shop</div>
                                        <div class="upload-image style-2">
                                            <div class="item up-load">
                                                <label class="uploadfile" for="logoFile">
                                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                    <span class="text-tiny">Drop your images here or select <span
                                                            class="tf-color">click to browse</span></span>
                                                    <input type="file" id="logoFile" name="LogoImageURL"
                                                        accept="image/*" style="display: none;">
                                                </label>
                                            </div>
                                            <div class="item">
                                                <img id="previewImage" src="" alt="Logo Preview"
                                                    style="display:none; max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset style="margin-top: 15px; " class="mb-24">
                                        <div class="body-title mb-10">Favicon</div>
                                        <div class="upload-image style-2">
                                            <div class="item up-load">
                                                <label class="uploadfile" for="faviconFile">
                                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                    <span class="text-tiny">Drop your images here or select <span
                                                            class="tf-color">click to browse</span></span>
                                                    <input type="file" id="faviconFile" name="FaviconImageURL"
                                                        accept="image/*" style="display: none;">
                                                </label>
                                            </div>
                                            <div class="item">
                                                <img id="previewImage2" src="" alt="Favicon Preview"
                                                    style="display:none; max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Navigation links</div>
                                        <input class="flex-grow" type="text" placeholder="Enter navigation link for logo" name="title" tabindex="0" value="" aria-required="true" required="">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wg-box">
                        <div class="left">
                            <h5 class="mb-4">Header Menu is visible?</h5>
                            <div class="body-text">Config cache for system for optimize speed</div>
                        </div>
                        <div class="right flex-grow">
                            <fieldset class="mb-24">
                                <div class="body-title mb-10">Home is visible?</div>
                                <div class="radio-buttons">
                                    <div class="item">
                                        {{-- có thể thay id để tránh sự trùng lặp --}}
                                        <input class="" type="radio" name="enable-cache" id="enable-cache1">
                                        <label class="" for="enable-cache1"><span
                                                class="body-title-2">Yes</span></label>
                                    </div>
                                    <div class="item">
                                        <input class="" type="radio" name="enable-cache" id="enable-cache2"
                                            checked="">
                                        <label class="" for="enable-cache2"><span
                                                class="body-title-2">No</span></label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mb-24">
                                <div class="body-title mb-10">Shop women is visible?</div>
                                <div class="radio-buttons">
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="rich-editor1">
                                        <label class="" for="cache-admin1"><span
                                                class="body-title-2">Yes</span></label>
                                    </div>
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="rich-editor2"
                                            checked="">
                                        <label class="" for="cache-admin2"><span
                                                class="body-title-2">No</span></label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mb-24">
                                <div class="body-title mb-10">Shop men visible?</div>
                                <div class="radio-buttons">
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="admin-language1">
                                        <label class="" for="cache-admin1"><span
                                                class="body-title-2">Yes</span></label>
                                    </div>
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="admin-language2"
                                            checked="">
                                        <label class="" for="cache-admin2"><span
                                                class="body-title-2">No</span></label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mb-24">
                                <div class="body-title mb-10">Blog is visible?</div>
                                <div class="radio-buttons">
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="enable-cache1">
                                        <label class="" for="cache-admin1"><span
                                                class="body-title-2">Yes</span></label>
                                    </div>
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="enable-cache2"
                                            checked="">
                                        <label class="" for="cache-admin2"><span
                                                class="body-title-2">No</span></label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mb-24">
                                <div class="body-title mb-10">Contact is visible?</div>
                                <div class="radio-buttons">
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="show-column1">
                                        <label class="" for="cache-admin1"><span
                                                class="body-title-2">Yes</span></label>
                                    </div>
                                    <div class="item">
                                        <input class="" type="radio" name="cache-admin" id="show-column1"
                                            checked="">
                                        <label class="" for="cache-admin2"><span
                                                class="body-title-2">No</span></label>
                                    </div>
                                </div>
                            </fieldset>
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
