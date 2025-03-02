@extends('layouts.master')
@section('title')
    <title>List Address</title>
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
    <style>
        .ho:hover{
  opacity:0.7;
  cursor:pointer;
}
    </style>
@endsection
@section('content')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="sec-title2 position-relative w-100">
                    <h3 class="mb-0">Address</h3>
                </div><!-- Section Title -->
                <div class="checkout-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 mb-3 ho">
                            <div class="not-bar bg-color5 w-100">
                                <p style="color: #ff5700">Location</p>
                                <p><span>CustomeName</span> <span></span></p>
                                <p>+84 0963215791</p>
                                <p>Số 12-Ngõ 87-Đường thôn 1-Bắc Hiên-Hồng Kỳ-Sóc Sơn-Hà Nội</p>

                                <a href="javascript:void(0);" title="">Change <i
                                        class="fi fi-rr-angle-small-down"></i></a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 mb-3 ho">
                            <div class="not-bar bg-color5 w-100">
                                <p style="color: #ff5700">Location</p>
                                <p><span>CustomeName</span> <span></span></p>
                                <p>+84 0963215796</p>
                                <p>Số 12-Ngõ 87-Đường thôn 1-Bắc Hiên-Hồng Kỳ-Sóc Sơn-Hà Nội</p>

                                <a href="javascript:void(0);" title="">Change <i
                                        class="fi fi-rr-angle-small-down"></i></a>
                            </div>
                        </div>
                        <div style="text-align: center">
                            <button class="theme-btn bg-color1"
                            type="submit">Add Address<span></span><span></span><span></span><span></span></button>
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
@endsection
