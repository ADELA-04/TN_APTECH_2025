@extends('layouts.master')
@section('title')
    <title>Customer</title>
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
@endsection
@section('content')
<section>
    <div class="w-100 pt-60 pb-120 position-relative">
        <div class="container">
            {{-- <div class="sec-title2 position-relative w-100">
                <h3 class="mb-0"></h3>
            </div><!-- Section Title --> --}}
            <div class="checkout-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 col-lg-3" style="text-align: center">
                        <div class="cart-total v2 w-100">
                            <a href="" style="display: block" >Your Profile</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-3">
                        <div class="cart-total v2 w-100 " style="text-align: center">
                            <a style="display: block" href="" >Your Order</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-3">
                        <div class="cart-total v2 w-100 " style="text-align: center">
                            <a style="display: block" href="" >Repassword</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-3">
                        <div class="cart-total v2 w-100 " style="text-align: center">
                            <a style="display: block" href="" >Sign out</a>
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
@endsection
