@extends('layouts.master')
@section('title')
    <title>Checkout</title>
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
                <div class="sec-title2 position-relative w-100">
                    <h3 class="mb-0">Checkout (2 items)</h3>
                </div><!-- Section Title -->
                <div class="checkout-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="not-bar bg-color5 w-100">
                                <p>Address</p>
                                <p>CustomeName</p>
                                <p>+84 0963215791</p>
                                <p>Số 12-Ngõ 87-Đường thôn 1-Bắc Hiên-Hồng Kỳ-Sóc Sơn-Hà Nội</p>
                                <p>dothom07082004@gmail.com</p>
                                <a href="javascript:void(0);" title="">Change <i
                                        class="fi fi-rr-angle-small-down"></i></a>
                            </div>


                            <div class="checkout-form w-100">

                                <form>
                                    <div class="row mrg30">
                                        <div class="col-md-12 col-sm-12 col-lg-12">

                                            <div class="field-box v2  position-relative w-100">
                                                <label>Other Notes*</label>
                                                <textarea placeholder="Enter notes about your order:"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Shipping *</label>
                                                <input type="text" value="$30.00">

                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Payment *</label>
                                                <select>
                                                    <option>Banking</option>
                                                    <option>COD</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Estimated Delivery Time *</label>
                                                <input type="text" value="20/10/2025">

                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="cart-total v2 w-100">
                                <h4>Your Order</h4>
                                <table>
                                    <tr>
                                        <th>Product</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    <tr>
                                        <td>Commodo Blown Lamp <span>x1</span></td>
                                        <td><span class="price">$117.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Commodo Blown Lamp <span>x1</span></td>
                                        <td><span class="price">$198.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td><span class="price">$323.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td><span class="price">$30.000</span></td>
                                    </tr>
                                    <tr>
                                        <td>Payment</td>
                                        <td><span class="price">COD</span></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><strong class="price">$323.00</strong></td>
                                    </tr>
                                </table>

                                <button class="theme-btn bg-color1"
                                    type="submit">Checkout<span></span><span></span><span></span><span></span></button>
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
