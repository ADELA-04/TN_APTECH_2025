@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>Edit Customer</title>
@endsection

{{-- css --}}
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
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
                                    <h3>Edit Customer</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li><a href="#">
                                                <div class="text-tiny">Customer</div>
                                            </a></li>
                                        <li><i class="icon-chevron-right"></i></li>
                                        <li>
                                            <div class="text-tiny">Edit Customer</div>
                                        </li>
                                    </ul>
                                </div>

                                {{-- Thông báo thành công --}}
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                {{-- Thông báo lỗi --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form class="tf-section-2 form-add-product" action="{{ route('customers.update', $customer->CustomerID) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Username<span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" name="Username" value="{{ $customer->Username }}" required>
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title mb-10">Password</div>
                                            <div class="password-wrapper">
                                                <input class="mb-10" type="password" name="Password" id="password" placeholder="Enter password" value="{{ old('Password', $customer->PasswordHash) }}">
                                                <button type="button" id="toggle-password" class="toggle-password"><i class="icon-eye"></i></button>
                                            </div>
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">FullName</div>
                                            <input class="mb-10" type="text" name="FullName" value="{{ $customer->FullName }}">
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" name="Email" value="{{ $customer->Email }}" required>
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title mb-10">Upload images</div>
                                            <div class="upload-image mb-16">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                        <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="ImageURL" accept="image/*" style="display: none;">
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <img id="previewImage" src="{{ asset($customer->ProfilePicture) }}" alt="Image Preview" style="max-width: 100%; height: auto;">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Phone<span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" name="Phone" value="{{ $customer->shippingAddress->first()->Phone ?? '' }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Country</div>
                                            <input class="mb-10" type="text" name="Country" value="{{ $customer->shippingAddress->first()->Country ?? '' }}">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">City</div>
                                            <input class="mb-10" type="text" name="City" value="{{ $customer->shippingAddress->first()->City ?? '' }}">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">District</div>
                                            <input class="mb-10" type="text" name="District" value="{{ $customer->shippingAddress->first()->District ?? '' }}">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Comune</div>
                                            <input class="mb-10" type="text" name="Comune" value="{{ $customer->shippingAddress->first()->Comune ?? '' }}">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">AddressDetail</div>
                                            <input class="mb-10" type="text" name="AddressDetail" value="{{ $customer->shippingAddress->first()->AddressDetail ?? '' }}">
                                        </fieldset>
                                        <div class="cols gap10">
                                            <button class="tf-button w-full" type="submit">Update</button>
                                            <button class="tf-button style-1 w-full" type="button" onclick="window.location='{{ route('managers.m_customer.manager_customer') }}'">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
