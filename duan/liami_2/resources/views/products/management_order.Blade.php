@extends('layouts.master')
@section('title')
    <title>management order</title>
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
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
                 @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
                <div class="sec-title2 d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                    <h3 class="mb-0" style="font-family: 'Roboto';">Đơn hàng của bạn</h3>

                </div><!-- Section Title 2 -->
                <div class="cart-wrap position-relative w-100">
                    <form>
                        <table class="cart-table w-100">
                            <thead>
                                <tr>

                                    <th class="text-center" style="font-family: 'Roboto';">Mã đơn hàng</th>
                                    <th class="text-center" style="font-family: 'Roboto';">Ngày đặt</th>
                                    <th class="text-center" style="font-family: 'Roboto';">Thành tiền</th>
                                    <th class="text-center" style="font-family: 'Roboto';">Trạng thái đơn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)

                                <tr class="cart-item">
                                    <td class=" text-center">
                                         <span>{{  $order->OrderID }}</span>
                                    </td>
                                    <td class=" text-center">
                                        <span class="">{{  $order->created_at}}</span>

                                    </td>
                                    <td class="text-center"><span class="price ">{{  number_format($order->TotalAmount,0)}} VNĐ</span></td>
                                    <td class="text-center">
                                        <span class="">{{ $order->OrderStatus }}</span>
                                    </td>
                                    <td class="text-center"><a href="{{ route('orders.detail',$order->OrderID) }}" class="text-color21">Chi tiết</a></td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>

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
