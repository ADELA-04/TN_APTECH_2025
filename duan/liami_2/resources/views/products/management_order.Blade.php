@extends('layouts.master')
@section('title')
    <title>Danh sách đơn hàng</title>
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
                                    <th class="text-center" style="font-family: 'Roboto';">Hành động</th>
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
                                    <td class="text-center
                                        {{ $order->OrderStatus == 'Chờ xác nhận'
                                            ? 'text-warning'
                                            : ($order->OrderStatus == 'Giao hàng thất bại' ||
                                            $order->OrderStatus == 'Hoàn trả' ||
                                            $order->OrderStatus == 'Đã hết hàng'||
                                            $order->OrderStatus == 'Hủy'
                                                ? 'text-danger'
                                                : 'text-success') }}">
                                        <span class=class="
                                        style="font-family: 'Roboto';">{{ $order->OrderStatus }}</span>
                                    </td>
                                    <td class="text-center"><a href="{{ route('orders.detail',$order->OrderID) }}" class="text-color21">Chi tiết</a></td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>

                    </form>
                </div><!-- Cart Wrap -->
                <div class="text-center mt-40">
    <div class="">
        @if ($orders->onFirstPage())
            <span class="page-numbers disabled border border-secondary p-2"><i class="icon fa fa-angle-left" aria-hidden="true"></i></span>
        @else
            <a href="{{ $orders->previousPageUrl() }}" class="page-numbers border border-secondary p-2"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
        @endif

        @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
            @if ($page == $orders->currentPage())
                <span class="page-numbers current border border-secondary bg-color4 text-color5 p-2">{{ $page }}</span>
            @else
                <a href="{{ $url }}" class="border border-secondary p-2 page-numbers">{{ $page }}</a>
            @endif
        @endforeach

        @if ($orders->hasMorePages())
            <a href="{{ $orders->nextPageUrl() }}" class="page-numbers"><i class="border border-secondary p-2 icon fa fa-angle-right" aria-hidden="true"></i></a>
        @else
            <span class="border border-secondary p-2 page-numbers disabled"><i class="icon fa fa-angle-right"></i></span>
        @endif
    </div>
</div>
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
