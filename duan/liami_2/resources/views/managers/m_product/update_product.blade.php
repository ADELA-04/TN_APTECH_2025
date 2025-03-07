@extends('layouts.admin_master')

@section('title')
    <title>Update Product</title>
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
    <div id="wrapper">
        <div id="page">
            <div class="layout-wrap">
                <div class="section-content-right">
                    <div class="main-content">
                        <div class="main-content-inner">
                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Update Product</h3>
                                </div>
                                <form class="tf-section-2 form-add-product" action="{{ route('products.update', $product->ProductID) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter product name" name="ProductName" value="{{ $product->ProductName }}" required>
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                                            <textarea class="mb-10" name="Description" placeholder="Description" required>{{ $product->Description }}</textarea>
                                        </fieldset>
                                        <div class="gap22 cols">
                                            <fieldset class="category">
                                                <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                                                <input class="mb-10" type="text" placeholder="Enter price" name="Price" value="{{ $product->Price }}" required>
                                            </fieldset>
                                            <fieldset class="male">
                                                <div class="body-title mb-10">Sale Price <span class="tf-color-1">*</span></div>
                                                <input class="mb-10" type="text" placeholder="Enter sale price" name="SalePrice" value="{{ $product->SalePrice }}">
                                            </fieldset>
                                        </div>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Size <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter Size" name="Size" value="{{ $product->Size }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Color <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter Color" name="Color" value="{{ $product->Color }}" required>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Weigh (kg) <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter Weigh" name="Weigh" value="{{ $product->Weigh }}" required>
                                        </fieldset>
                                    </div>

                                    <div class="wg-box">
                                        <fieldset>
                                            <div class="body-title mb-10">Upload images</div>
                                            <div class="upload-image mb-16">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                        <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="Image" accept="image/*" style="display: none;">
                                                    </label>
                                                </div>
                                                <div class="item">
                                                    <img id="previewImage" src="{{ asset($product->Image) }}" alt="Image Preview" style="max-width: 100%; height: auto;">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter brand name" name="Brand" value="{{ $product->Brand }}" required>
                                        </fieldset>
                                        <fieldset class="category">
                                            <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                                            <select name="CategoryID" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->CategoryID }}" {{ $category->CategoryID == $product->CategoryID ? 'selected' : '' }}>{{ $category->CategoryName }}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                        <fieldset class="brand">
                                            <div class="body-title mb-10">Is visible <span class="tf-color-1">*</span></div>
                                            <div class="select">
                                                <select name="IsVisible">
                                                    <option value="1" {{ $product->IsVisible ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ !$product->IsVisible ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <div class="cols gap10">
                                            <button class="tf-button w-full" type="submit">Save </button>
                                            <a href="{{ route('managers.m_product.manager_product') }}" class="tf-button style-1 w-full">Cancel</a>
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
