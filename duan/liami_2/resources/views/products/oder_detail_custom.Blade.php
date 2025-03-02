@extends('layouts.master')
@section('title')
    <title>order detail custom</title>
@endsection
@section('css')
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <link rel="stylesheet" href="{{ asset('assets/css/style_custom.css') }}">
@endsection
@section('content')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="sec-title2 d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                    <h3 class="mb-0">Your Oder</h3>

                </div><!-- Section Title 2 -->
            <!-- Thanh tiến trình -->
<div class="col-12" style="margin-bottom: 30px; padding: 10px;">
    <div class="wg-box h-full">
        <div class="road-map horizontal">
            <div class="road-map-item active">
                <div class="icon"><i class="fas fa-receipt"></i></div>
                <h6>Receiving orders</h6>
                <div class="body-text">05:43 AM</div>
            </div>
            <div class="road-map-item active">
                <div class="icon"><i class="fas fa-cogs"></i></div>
                <h6>Order processing</h6>
                <div class="body-text">01:21 PM</div>
            </div>
            <div class="road-map-item active">
                <div class="icon"><i class="fas fa-truck"></i></div>
                <h6>Being delivered</h6>
                <div class="body-text">Processing</div>
            </div>
            <div class="road-map-item">
                <div class="icon"><i class="fas fa-check-circle"></i></div>
                <h6>Delivered</h6>
                <div class="body-text">Pending</div>
            </div>
        </div>
    </div>
</div>
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
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="cart-total v2 w-100" style="border-radius: 0px;">
                                <div style="text-align:right;">
                                    <h4 style="color:tomato;">Complete</h4>
                                </div>

                                <table>

                                    <tr>
                                        <td>Shipping</td>
                                        <td><span class="price">$30.000</span></td>
                                    </tr>
                                    <tr>
                                        <td>Payment</td>
                                        <td><span class="price">COD</span></td>
                                    </tr>
                                    <tr>
                                        <td>Estimated Delivery Time</td>
                                        <td><span class="price">20/10/2025</span></td>
                                    </tr>
                                    <tr style="border-bottom: none">
                                        <td>Total</td>
                                        <td><strong class="price">$323.00</strong></td>
                                    </tr>
                                </table>

                                <div style="text-align: center">
                                    <button class="theme-btn bg-color1" type="submit"
                                        style="margin-top: 15px">Review<span></span><span></span><span></span><span></span></button>
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
