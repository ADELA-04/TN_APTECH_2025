@extends('layouts.master')
@section('title')
    <title>Repassword Customer</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uicons-regular-rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .upload-fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .upload-fieldset .body-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .upload-image {
            display: flex;
            flex-direction: column;
        }

        .upload-image .up-load {
            margin-bottom: 10px;
        }

        .upload-image .item img {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        .uploadfile {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 10px;
            background-color: #fff;
            border: 1px dashed #ccc;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .uploadfile:hover {
            background-color: #f0f0f0;
        }

        .uploadfile .icon {
            margin-right: 8px; /* Khoảng cách giữa icon và text */
        }

        .uploadfile i {
            font-size: 20px; /* Kích thước icon */
            color: #007bff; /* Màu sắc của icon */
        }
    </style>
@endsection
@section('content')
<section>
    <div class="w-100 pt-60 pb-120 position-relative">
        <div class="container">
            <div class="sec-title2 position-relative w-100">
                <h3 class="mb-0">Repassword</h3>
            </div><!-- Section Title -->
            <div class="checkout-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 ">
                            <form>
                                <div class="col-md-12 col-sm-12 col-lg-12 wg-box">
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Old password *</label>
                                        <input type="text" placeholder="Enter your address">
                                    </div>
                                </div>
                                <div class="row mrg30">
                                    <div class="col-md-6 col-sm-6 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>New password *</label>
                                            <input type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Re New password *</label>
                                            <input type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
<p style="text-align: right"><a href="">Forgot password ?</a>
                                </div>
                            </form>
                            <button class="theme-btn bg-color1" type="submit">Save<span></span><span></span><span></span><span></span></button>

                        </div>
                    </div>

                </div>
            </div><!-- Checkout Wrap -->
        </div>
    </div>
</section>
@endsection
@section('script')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('myFile');
            const preview = document.getElementById('previewImage');

            fileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function() {
                    preview.src = reader.result;
                    preview.style.display = 'block'; // Hiển thị ảnh
                }

                if (file) {
                    reader.readAsDataURL(file); // Đọc ảnh
                }
            });
        });
    </script>

@endsection
