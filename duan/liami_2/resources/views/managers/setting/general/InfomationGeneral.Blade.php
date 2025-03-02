@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Information Shop
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
                                    <h3>General Setting</h3>
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
                                            <div class="text-tiny">Information Shop</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- form-add-product -->
                                <form class=" form-add-product">
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Shop Name <span class="tf-color-1"></span></div>
                                            <input class="mb-10" type="text" placeholder="Enter product shop name"
                                                name="text" tabindex="0" value="" aria-required="true"
                                                required="">
                                            <div class="text-tiny">entering the Shop Name.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Shop Address <span class="tf-color-1"></span>
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Enter product shp address"
                                                name="text" tabindex="0" value="" aria-required="true"
                                                required="">
                                            <div class="text-tiny">entering the Shop Address.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Hotline <span class="tf-color-1"></span></div>
                                            <input class="mb-10" type="text" placeholder="Enter product hotline"
                                                name="text" tabindex="0" value="" aria-required="true"
                                                required="">
                                            <div class="text-tiny">entering the Hotline.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Email Admin <span class="tf-color-1">*</span>
                                            </div>
                                            <input class="mb-10" type="text" placeholder="Enter product email admin"
                                                name="text" tabindex="0" value="" aria-required="true"
                                                required="">
                                            <div class="text-tiny">entering the Email.</div>
                                        </fieldset>
                                        <button type="submit" class="tf-button w180 m-auto">Save</button>

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
    <script src="{{ asset('assets/js2/custom.js') }}"></script>
@endsection
