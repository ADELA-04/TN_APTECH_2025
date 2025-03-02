@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
       Repassword User
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
                                <h3>Repassword User</h3>
                                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">

                                    <li>
                                        <div class="text-tiny"><a href="" style="font-weight: bold;">Forget password?</a></div>
                                    </li>
                                </ul>
                            </div>
                            <!-- form-add-product -->
                            <form class=" form-add-product" >

                                <div class="wg-box">
                                    <fieldset class="name">
                                        <div class="body-title mb-10">Old Password <span class="tf-color-1">*</span></div>
                                        <input class="mb-10" type="text" placeholder="Enter Old Password" name="text" tabindex="0" value="" aria-required="true" required="">
                                        <div class="text-tiny">entering the Password.</div>
                                    </fieldset>
                                    <fieldset class="name">
                                        <div class="body-title mb-10">New Password <span class="tf-color-1">*</span></div>
                                        <input class="mb-10" type="text" placeholder="Enter New Password" name="text" tabindex="0" value="" aria-required="true" required="">
                                        <div class="text-tiny">entering the Password.</div>
                                    </fieldset>
                                    <fieldset class="name">
                                        <div class="body-title mb-10">Re NewPassword <span class="tf-color-1">*</span></div>
                                        <input class="mb-10" type="text" placeholder="Enter NewPassword" name="text" tabindex="0" value="" aria-required="true" required="">
                                        <div class="text-tiny">entering the RePassword.</div>
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
