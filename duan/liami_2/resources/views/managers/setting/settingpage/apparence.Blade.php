@extends('layouts.admin_master')

@section('title')
    <title>Setting Header</title>
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

<!-- Favicon and Touch Icons -->

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Apparence page</h3>
                    {{-- <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
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
                    </ul> --}}
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form class="form-setting form-style-2" action="{{ route('apparence.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="wg-box">
                        <div class="left">
                            <h5 class="mb-4">Appearance</h5>
                            <div class="body-text">Setting appearance such as editor, language...</div>
                        </div>
                        <div class="right flex-grow">
                            <div class="gap24 mobile-wrap">
                                <div class="gap24">
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Title</div>
                                        <input class="flex-grow" type="text" placeholder="Enter title" name="title" tabindex="0" value="{{ $apparence->Title }}" required>
                                    </fieldset>
                                    <fieldset>
                                        <div class="body-title mb-10">Logo Shop</div>
                                        <div class="upload-image style-2">
                                            <div class="item up-load">
                                                <label class="uploadfile" for="logoFile">
                                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                    <input type="file" id="logoFile" name="LogoImageURL" accept="image/*" style="display: none;">
                                                </label>
                                            </div>
                                            <div class="item">
                                                <img id="previewImage" src="{{ asset($apparence->LogoURL)}}" style="max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-24">
                                        <div class="body-title mb-10">Favicon</div>
                                        <div class="upload-image style-2">
                                            <div class="item up-load">
                                                <label class="uploadfile" for="faviconFile">
                                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                    <input type="file" id="faviconFile" name="FaviconImageURL" accept="image/*" style="display: none;">
                                                </label>
                                            </div>
                                            <div class="item">
                                                <img id="previewImage2" src="{{ asset($apparence->FaviconURL) }}" style="max-width: 100%; height: auto;">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Navigation links</div>
                                        <input class="flex-grow" type="text" placeholder="Enter navigation link" name="NavigationLinks" tabindex="0" value="{{ $apparence->NavigationLinks }}" required>
                                    </fieldset>
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Facebook links</div>
                                        <input class="flex-grow" type="text" placeholder="Enter Facebook link" name="FacebookLinks" tabindex="0" value="{{ $apparence->LinkFB }}" required>
                                    </fieldset>
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Intagram links</div>
                                        <input class="flex-grow" type="text" placeholder="Enter Intagram link" name="InLinks" tabindex="0" value="{{ $apparence->LinkIN }}" required>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="tf-button w180 m-auto">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
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
