@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        ADD Customer
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
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Add Customer</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li><a href="#">
                                                <div class="text-tiny">Customer</div>
                                            </a></li>
                                        <li><i class="icon-chevron-right"></i></li>
                                        <li>
                                            <div class="text-tiny">Add Customer</div>
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

                                <form class="tf-section-2 form-add-product" action="{{ route('customer.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Username<span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" name="Username"
                                                placeholder="Enter Username" required>
                                            <div class="text-tiny">Do not exceed 20 characters when entering the Username.
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title mb-10">Password</div>
                                            <div class="password-wrapper">
                                                <input class="mb-10" type="password" name="Password" id="password"
                                                    placeholder="Enter password">
                                                <button type="button" id="toggle-password" class="toggle-password"><i
                                                        class="icon-eye"></i></button>
                                            </div>
                                            <div class="text-tiny">Leave blank to keep the current password.</div>
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">FullName </div>
                                            <input class="mb-10" type="text" name="FullName"
                                                placeholder="Enter FullName">
                                            <div class="text-tiny">Do not exceed 100 characters when entering the FullName.
                                            </div>
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" name="Email" placeholder="Enter Email"
                                                required>
                                        </fieldset>
                                        <fieldset class="brand">
                                            <div class="body-title mb-10">Gender </div>
                                            <div class="select">
                                                <select name="Gender" required>
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                    <option value="2">Other</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title mb-10">Upload images</div>
                                            <div class="upload-image mb-16">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                        <span class="text-tiny">Drop your images here or select <span
                                                                class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="ImageURL"
                                                            accept="image/*" style="display: none;"> </label>
                                                </div>
                                                <div class="item">
                                                    <img id="previewImage" src="" alt="Image Preview"
                                                        style="display:none; max-width: 100%; height: auto;">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Total Order</div>
                                            <input class="mb-10" type="text" name="Total_Order"
                                                placeholder="Enter Total Order" readonly>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Total Spending</div>
                                            <input class="mb-10" type="text" name="Total_Spending"
                                                placeholder="Enter Total Spending" readonly>
                                        </fieldset>
                                    </div>
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Phone<span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" name="Phone"
                                                placeholder="Enter Phone">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the Phone.
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Country</div>
                                            <input class="mb-10" type="text" name="Country"
                                                placeholder="Enter Country">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the Country.
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">City</div>
                                            <input class="mb-10" type="text" name="City"
                                                placeholder="Enter City">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the City.
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">District</div>
                                            <input class="mb-10" type="text" name="District"
                                                placeholder="Enter District">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the District.
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Comune</div>
                                            <input class="mb-10" type="text" name="Comune"
                                                placeholder="Enter Comune">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the Comune.
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">AddressDetail</div>
                                            <input class="mb-10" type="text" name="AddressDetail"
                                                placeholder="Enter AddressDetail">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the
                                                AddressDetail.</div>
                                        </fieldset>
                                        <div class="cols gap10">
                                            <button class="tf-button w-full" type="submit">Save</button>
                                            <button class="tf-button style-1 w-full" type="button"
                                                onclick="window.location='{{ route('managers.m_customer.manager_customer') }}'">Cancel</button>
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
