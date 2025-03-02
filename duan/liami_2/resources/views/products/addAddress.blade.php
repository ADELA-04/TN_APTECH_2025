@extends('layouts.master')
@section('title')
    <title>Add Address</title>
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
                <h3 class="mb-0">Informatin Address</h3>
            </div><!-- Section Title -->
            <div class="checkout-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 ">
                            <form>
                                <div class="row mrg30">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Your Name *</label>
                                            <input type="text" placeholder="Enter your name\">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Phone *</label>
                                            <input type="tel" placeholder="Enter your phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Count *</label>
                                            <input type="text" placeholder="Enter your address">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>City *</label>
                                            <input type="text" placeholder="Enter your address">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>District *</label>
                                            <input type="text" placeholder="Enter your address">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Comune *</label>
                                            <input type="text" placeholder="Enter your address">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>House number, alley,... *</label>
                                            <input type="text" placeholder="Enter your address">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Email *</label>
                                            <input type="text" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button class="theme-btn bg-color1" type="submit">Add<span></span><span></span><span></span><span></span></button>

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
