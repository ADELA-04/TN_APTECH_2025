@extends('layouts.master')
@section('title')
    <title>order detail custom</title>
@endsection
@section('css')
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
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
        <div class="w-100 position-relative">
            <div class="container">
                <div
                    class="mt-20 sec-title2  position-relative w-100 ">
                    <span><a href="{{ route('orders.index') }}">Theo dõi đơn hàng ></a></span>
                    <span class="mb-0" > <a style="font-family: 'Roboto';" >Chi tiết đơn hàng</a></span>
                </div>

            </div>
        </div>
        <div class="cart-wrap position-relative w-100">
            <form>
                <table class="cart-table w-100">
                    <thead>
                        <tr>

                            <th class="text-center" style="font-family: 'Roboto';">Sản phẩm</th>
                            <th style="font-family: 'Roboto';">Thông số</th>

                            <th style="font-family: 'Roboto';">Đơn giá</th>
                            <th style="font-family: 'Roboto';">Số lượng</th>
                            <th style="font-family: 'Roboto';">Thành tiền</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderDetails as $detail)
                            <tr class="cart-item">
                                <td class="d-flex align-items-center">
                                    <div class="cart-product-box d-flex flex-wrap align-items-center">
                                        <div class="cart-product-img overflow-hidden">

                                            <a href="{{ route('product.detail', $detail->ProductID) }}" title="">
                                                <img class="img-fluid w-60" src="{{ asset($detail->product->Image) }}"
                                                    alt="{{ $detail->product->Name }}"> </a>

                                        </div>
                                        <p style="font-family: 'Roboto';" class="mb-0">
                                            <a style="font-size: 15px" href="{{ route('product.detail', $detail->ProductID) }}"
                                                title="">   {{ Str::limit($detail->product->ProductName, 30) }}</a>
                                        </p>
                                    </div>


                                </td>

                                <td>
                                    <span class="">{{ $detail->Color }} -</span>
                                    <span class="">{{ $detail->Size }}</span>
                                </td>
                                <td><span class="price">{{ number_format($detail->Price, 0, ',', '.') }} VNĐ</span></td>
                                <td>
                                    <span class="">{{ $detail->Quantity }}</span>
                                </td>
                                <td><span
                                        class="price text-color1">{{ number_format($detail->Price * $detail->Quantity, 0, ',', '.') }}
                                        VNĐ</span></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="cart-total v2 w-100" style="border-radius: 0px;">
                        <div style="text-align:right;">
                            <h4 style="color:tomato;font-family: 'Roboto';" >Hóa đơn</h4>
                        </div>

                        <table>
<tr style="border-bottom: none">
                                <td style="font-family: 'Roboto';">Tổng tiền hàng</td>
                               <td><span class="price">{{ number_format($order->TotalAmount-40000, 0, ',', '.') }} VNĐ</span></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto';">Phí vận chuyển</td>
                                <td><span class="price">40.000 VNĐ</span></td>
                            </tr>
                              <tr>
                                <td style="font-family: 'Roboto';">Tổng tiền</td>
                                <td><strong class="price">{{ number_format($order->TotalAmount, 0, ',', '.') }} VNĐ</strong></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto';">Phương thức thanh toán</td>
                                <td><span class="price" style="font-family: 'Roboto';" >{{ $order->PaymentMethod }}</span></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto';">Ngày đặt hàng</td>
                                <td><span class="price">{{ $order->created_at }}</span></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto';">Ghi chú</td>
                                <td><span class="price" style="font-family: 'Roboto';">{{ $order->Notes }}</span></td>
                            </tr>
<tr>
                                <td style="font-family: 'Roboto';">Mã vận đơn</td>
                                <td><span  class="price">{{ $order->ShippingCode }}</span></td>
                            </tr>
                             <tr>
                                <td style="font-family: 'Roboto';">Trang thái đơn hàng</td>
                                <td><span class="price" style="color: rgb(13, 183, 13);font-family: 'Roboto';">{{ $order->OrderStatus }}</span></td>
                            </tr>

                        </table>


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
