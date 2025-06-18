@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
       Thêm mới sản phẩm
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
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
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
                                    <h3>Thêm sản phẩm</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li><i class="icon-chevron-left"></i></li>
                                        <li><a href="{{ route('managers.m_product.manager_product') }}"><div class="text-tiny">Quay lại</div></a></li>
                                    </ul>
                                </div>
                                <!-- form-add-product -->
                                <form class="tf-section-2 form-add-product" action="{{ route('products.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Tên sản phẩm <span class="tf-color-1">*</span>
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Nhập tên sản phẩm..."
                                                name="ProductName" tabindex="0" value="{{ old('ProductName') }}" aria-required="true"
                                                required>
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Mô tả ngắn
                                            </div>
                                            <textarea class="mb-10" name="Summary" placeholder="Nhập mô tả ngắn..." tabindex="0" aria-required="true"
                                                >{{ old('Summary') }}</textarea>
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Mô tả
                                            </div>
                                            <textarea class="mb-10" name="Description" placeholder="Nhập mô tả..." tabindex="0">{{ old('Description') }}</textarea>
                                        </fieldset>
                                        <div class="gap22 cols">
                                            <fieldset class="category">
                                                <div class="body-title mb-10">Giá gốc <span class="tf-color-1">*</span></div>
                                                <input class="mb-10" type="text" placeholder="Nhập giá..."
                                                    name="Price" tabindex="0" value="{{ old('Price') }}"
                                                    required>
                                            </fieldset>
                                            <fieldset class="male">
                                                <div class="body-title mb-10">Giá giảm <span class="tf-color-1">*</span>
                                                </div>
                                                <input class="mb-10" type="text" placeholder="Nhập giá giảm..."
                                                    name="SalePrice" tabindex="0" value="{{ old('SalePrice') }}"
                                                    required>
                                            </fieldset>
                                        </div>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Kích thước
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Nhập kích thước"
                                                name="Size" tabindex="0" value="{{ old('Size') }}"
                                                >
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Màu sắc
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Nhập màu sắc..."
                                                name="Color" tabindex="0" value="{{ old('Color') }}"
                                                >
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Chất liệu
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Nhập chất liệu..."
                                                name="Material" tabindex="0" value="{{ old('Material') }}"
                                                >
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Khối lượng (kg)
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Nhập khối lượng..."
                                                name="Weigh" tabindex="0" value="{{ old('Weigh') }}"
                                                >
                                        </fieldset>
                                    </div>
                                    <div class="wg-box">
                                        <fieldset>
                                            <div class="body-title mb-10">Ảnh minh họa</div>
                                            <div class="upload-image mb-16">
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                        <span class="text-tiny">Drop your images here or select <span
                                                                class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="Image"
                                                            accept="image/*" style="display: none;"> </label>
                                                </div>
                                                <div class="item">
                                                    <img id="previewImage" src="" alt="Image Preview"
                                                        style="display:none; max-width: 100%; height: auto;">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Nhà cung cấp
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Nhập tên nhà cung cấp..."
                                                name="Brand" tabindex="0" value="{{ old('Brand') }}"
                                                >
                                        </fieldset>
                                        <fieldset class="category">
                                            <div class="body-title mb-10">Danh mục sản phẩm <span class="tf-color-1">*</span></div>
                                            <select name="CategoryID" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->CategoryID }}" {{ old('CategoryID') == $category->CategoryID ? 'selected' : '' }}>
                                                        {{ $category->CategoryName }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                        <div class="cols gap10">
                                            <button class="tf-button w-full" type="submit">Lưu </button>
                                            <a class="tf-button style-1 w-full"
                                            href="{{ route('managers.m_product.manager_product') }}">Hủy</a>
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
    <script src="{{ asset('assets/js2/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js2/zoom.js') }}"></script>
    <script src="{{ asset('assets/js2/switcher.js') }}"></script>
    <script src="{{ asset('assets/js2/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js2/main.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            CKEDITOR.replace('Description', {
                filebrowserUploadUrl: "{{ route('upload.image') }}",
                filebrowserUploadMethod: 'form'
            });

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
