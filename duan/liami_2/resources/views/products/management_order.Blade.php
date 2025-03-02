@extends('layouts.master')
@section('title')
    <title>management order</title>
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
                <div class="sec-title2 d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                    <h3 class="mb-0">Your Oder</h3>

                </div><!-- Section Title 2 -->
                <div class="cart-wrap position-relative w-100">
                    <form>
                        <table class="cart-table w-100">
                            <thead>
                                <tr>

                                    <th>Product</th>
                                    <th>Atribute</th>

                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item">

                                    <td class="d-flex align-items-center">

                                        <div class="cart-product-box d-flex flex-wrap align-items-center">
                                            <div class="cart-product-img overflow-hidden">
                                                <a href="product-detail.html" title="">
                                                    <img class="img-fluid w-100"
                                                        src="assets/images/resources/cart-img1-1.jpg" alt="Cart Image 1">
                                                </a>
                                            </div>
                                            <h5 class="mb-0">
                                                <a href="product-detail.html" title="">Commodo Blown Lamp</a>
                                            </h5>
                                        </div>


                                    </td>

                                    <td>
                                        <span class="">Color: </span>
                                        <span class="">Xanh </span>
                                    </td>
                                    <td><span class="price">$124.00</span></td>
                                    <td>
                                        <span class="">01 </span>
                                    </td>
                                    <td><span class="price text-color1">$275.00</span></td>


                                </tr>
                            </tbody>

                        </table>
                        <div class="checkout-wrap position-relative w-100">
                            <div class="row mrg30 ">
                                <div class="col-md-12 col-sm-12 mb-3 ho " >
                                    <div class="not-bar bg-color5 w-100 " style="border-radius:0px; text-align: right;">
                                        <p style="color: #ff5700">Complete</p>
                                        <p><span>Total: </span> <span>$335.00</span></p>
                                        <a href="javascript:void(0);" title="">Detail </a>
                                                <div style="text-align: center">
                                                    <button class="theme-btn bg-color1"
                                                    type="submit">Review<span></span><span></span><span></span><span></span></button>
                                                </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </form>
                </div><!-- Cart Wrap -->
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
