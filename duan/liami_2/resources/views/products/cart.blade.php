@extends('layouts.master')
@section('title')
    <title>Cart</title>
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
                    <h3 class="mb-0">Your Cart</h3>
                    <a class="d-inline-block text-color4" href="javascript:void(0);" title="">Clear Shopping Cart</a>
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item">

                                    <td class="d-flex align-items-center">
                                        <div style="margin-right: 20px; transform: scale(1.5);">
                                            <input type="checkbox">
                                        </div>
                                        <div class="cart-product-box d-flex flex-wrap align-items-center">
                                            <div class="cart-product-img overflow-hidden">
                                                <a href="product-detail.html" title="">
                                                    <img class="img-fluid w-50"
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
                                        <select name="" id="">
                                            <option value="">Xanh</option>
                                        </select>
                                    </td>
                                    <td><span class="price">$124.00</span></td>
                                    <td>
                                        <div class="product-quanty"><input type="number" class="qty" value="01">
                                        </div>
                                    </td>
                                    <td><span class="price text-color1">$275.00</span></td>
                                    <td>
                                        <a class="remove-product d-inline-block rounded-circle" href="javascript:void(0);"
                                            title=""><i class="fi fi-rr-cross-small"></i></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                        <div class="cart-totals d-flex flex-wrap justify-content-end">
                            <div class="cart-total">
                                <h4>Order Summary</h4>
                                <table>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td><span class="price">$117.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <input type="text" name="" id="" value="$30.00">
                                    </tr>

                                    <tr>
                                        <td>Total</td>
                                        <td><strong class="price">$125.00</strong></td>
                                    </tr>
                                </table>
                                <button class="theme-btn bg-color1" type="submit">
                                    Checkout<span></span><span></span><span></span><span></span></button>
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
