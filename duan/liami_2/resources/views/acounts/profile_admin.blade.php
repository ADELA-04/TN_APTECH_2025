@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
       Chỉnh sửa cá nhân
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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                        <div class="main-content-wrap">
                            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                <h3>Chỉnh sửa cá nhân </h3>


                            </div>
                            <!-- form-add-product -->
                            <form class="tf-section-2 form-add-product" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="wg-box">
                                    <fieldset class="name">
                                        <div class="body-title mb-10">Tên đang nhập <span class="tf-color-1">*</span></div>
                                        <input readonly class="mb-10" type="text" placeholder="Nhập tên đăng nhập..." name="Username" tabindex="0" value="{{ $user->Username }}" aria-required="true" required="">

                                    </fieldset>
                                    <fieldset class="name">
                                        <div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
                                        <input readonly class="mb-10" type="text" placeholder="Nhập email..." name="Email" tabindex="0" value="{{ $user->Email }}" aria-required="true" required="">

                                    </fieldset>
                                    <fieldset class="name">
                                        <div class="body-title mb-10">Điện thoại <span class="tf-color-1"></span></div>
                                        <input class="mb-10" type="text" placeholder="Nhập điện thoại..." name="Phone" tabindex="0" value="{{ $user->Phone }}" aria-required="true" required="">

                                    </fieldset>

                                </div>
                                <div class="wg-box">
                                    <fieldset class="title mb-24">
                                        <div class="body-title mb-10">Ảnh đại diện</div>
                                        <div class="upload-image style-2">
                                            <div class="item up-load">
                                                <label class="uploadfile" for="logoFile">
                                                    <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                    <span class="text-tiny">Drop your images here or select <span
                                                            class="tf-color">click to browse</span></span>
                                                    <input type="file" id="logoFile" name="Avartar" accept="image/*"
                                                        style="display: none;">
                                                </label>
                                            </div>
                                            <div class="item mb-24">
                                                <img id="previewImage" src="{{ asset($user->Avartar) }}" alt="Logo Preview"
                                                    style=" max-width: 100%; height: auto;">
                                            </div>
                                        </div>
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
