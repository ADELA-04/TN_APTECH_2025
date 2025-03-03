@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        ADD Product
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
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Add Product</h3>
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
                                            <a href="#">
                                                <div class="text-tiny">Ecommerce</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Add product</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- form-add-product -->
                                <form class="tf-section-2 form-add-product">
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Product name <span class="tf-color-1">*</span>
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Enter product name"
                                                name="text" tabindex="0" value="" aria-required="true"
                                                required="">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the product
                                                name.</div>
                                        </fieldset>
                                        <fieldset class="description">
                                            <div class="body-title mb-10">Description <span class="tf-color-1">*</span>
                                            </div>
                                            <textarea class="mb-10" name="description" placeholder="Description" tabindex="0" aria-required="true"
                                                required=""></textarea>
                                            <div class="text-tiny">Do not exceed 100 characters when entering the product
                                                name.</div>
                                        </fieldset>
                                        <div class="gap22 cols">
                                            <fieldset class="category">
                                                <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                                                <input class="mb-10" type="text" placeholder="Enter price"
                                                    name="text" tabindex="0" value="" aria-required="true"
                                                    required="">

                                            </fieldset>
                                            <fieldset class="male">
                                                <div class="body-title mb-10">Sale Price <span class="tf-color-1">*</span>
                                                </div>
                                                <input class="mb-10" type="text" placeholder="Enter sale price"
                                                    name="text" tabindex="0" value="" aria-required="true"
                                                    required="">

                                            </fieldset>
                                        </div>
                                        <fieldset>
                                            <div class="body-title mb-10">Atribute Product<a href=""><span
                                                        class="" style="color:#22C55E;margin-left: 10px; font-size:small;">+ Add
                                                        atribute</span></a>

                                        </fieldset>

                                        <div class="gap22 cols" style="margin-bottom: 5px">
                                            <fieldset class="category">
                                                {{-- <div class="body-title mb-10">Atribute <span class="tf-color-1">*</span>
                                                </div> --}}

                                                <input class="mb-10" type="text" placeholder="Enter atribute name"
                                                    name="text" tabindex="0" value="Màu sắc" aria-required="true"
                                                    required="" readonly>

                                            </fieldset>
                                            <fieldset class="male">


                                                <input class="mb-10" type="text" placeholder="Enter atribute values"
                                                    name="text" tabindex="0" value="Xanh Đỏ Vàng"
                                                    aria-required="true" required="" readonly>
                                                    <div class="body-title mb-10 " style="text-align: right">
                                                        <a href=""> <span class="tf-color-1" >- Delete</span></a>

                                                </div>

                                            </fieldset>

                                        </div>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Weigh (kg) <span class="tf-color-1">*</span>
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Enter product name"
                                                name="text" tabindex="0" value="" aria-required="true"
                                                required="">
                                            <div class="text-tiny">Do not exceed 20 characters when entering the Weigh.
                                            </div>
                                        </fieldset>
                                        {{-- <fieldset class="brand">
                                            <div class="body-title mb-10">Status <span class="tf-color-1">*</span></div>
                                            <div class="select">
                                                <select class="">
                                                    <option>Out of stok</option>
                                                    <option>In stok</option>

                                                </select>
                                            </div>
                                        </fieldset> --}}
                                    </div>
                                    <div class="wg-box">

                                        <fieldset>
                                            <div class="body-title mb-10">Upload images</div>
                                            <div class="upload-image mb-16">
                                                <div class="item">
                                                    <img src="{{ asset('assets/images/upload/upload-1.png') }}"
                                                        alt="">
                                                </div>

                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="text-tiny">Drop your images here or select <span
                                                                class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="filename">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-text">You need to add at least 4 images. Pay attention to the
                                                quality of the pictures you add, comply with the background color standards.
                                                Pictures must be in certain dimensions. Notice that the product shows all
                                                the details</div>
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title mb-10">Amount Inventory <span
                                                    class="tf-color-1">*</span>
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Enter product name"
                                                name="text" tabindex="0" value="" aria-required="true"
                                                required="">
                                            <div class="text-tiny">Do not exceed 20 characters when entering Amount
                                                Inventory.</div>
                                        </fieldset>
                                        <fieldset class="brand">
                                            <div class="body-title mb-10">Is visible <span class="tf-color-1">*</span>
                                            </div>
                                            <div class="select">
                                                <select class="">
                                                    <option>Yes</option>
                                                    <option>No</option>

                                                </select>
                                            </div>
                                        </fieldset>
                                        <div class="cols gap10">
                                            <button class="tf-button w-full" type="submit">Save </button>
                                            <button class="tf-button style-1 w-full" type="submit">Cancel</button>

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
@endsection
