@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Quản lí đơn hàng
    </title>
@endsection

{{-- css --}}
@section('css')
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
@endsection


{{-- content --}}
@section('content')
    <!-- main-content -->
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Quản lí đơn hàng</h3>
                </div>
                <!-- order-list -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">
                            <form class="form-search" method="GET" action="{{ route('orders.index2') }}">
                                <fieldset class="name">
                                    <input type="text" placeholder="Tìm kiếm theo số điện thoại..." name="name"
                                        tabindex="2" value="{{ request('name') }}" aria-required="true" required="">
                                </fieldset>
                                <div class="button-submit">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="wg-table table-all-category">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Đơn hàng</div>
                            </li>
                            <li>
                                <div class="body-title">Ngày đặt</div>
                            </li>
                            <li>
                                <div class="body-title">Khách hàng</div>
                            </li>
                            <li>
                                <div class="body-title">Tổng tiền</div>
                            </li>
                            <li>
                                <div class="body-title">Trạng thái</div>
                            </li>
                            <li>
                                <div class="body-title">Thanh toán</div>
                            </li>
                            <li>
                                <div class="body-title">Hành động</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @if (isset($notFound) && $notFound)
                                <div class="alert alert-warning">Không tìm thấy.</div>
                            @endif

                            @foreach ($orders as $order)
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="{{ asset($order->product_image) }}" alt="">
                                    </div>
                                    <div class="flex items-center justify-between gap20 flex-grow">

                                        <div class="body-text"><a href="{{ route('order.edit', $order->OrderID) }}"
                                                class="body-title-2">#{{ $order->OrderID }}
                                                #{{ $order->ShippingCode }}</a></div>

                                        <div class="body-text">{{ $order->created_at->format('d/m/Y') }}</div>

                                        <div class="body-text">{{ number_format($order->TotalAmount, 0) }} VNĐ</div>
                                        <div class="body-text">{{ $order->customer->FullName }}</div>
                                        <div class="body-text">{{ $order->OrderStatus }}</div>
                                        <div class="body-text">{{ $order->PaymentMethod }}</div>
                                        <div class="list-icon-function">
                                            <div class="item edit">
                                                <a href="{{ route('order.edit', $order->OrderID) }}"> <i
                                                        class="icon-edit-3"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Hiện {{ $orders->count() }}/10 mục</div>
                        <ul class="wg-pagination flex items-center">
                            <li>
                                @if ($orders->onFirstPage())
                                    <span class="disabled"><i class="icon-chevron-left"></i></span>
                                @else
                                    <a href="{{ $orders->previousPageUrl() }}"><i class="icon-chevron-left"></i></a>
                                @endif
                            </li>

                            @for ($i = 1; $i <= $orders->lastPage(); $i++)
                                <li class="{{ $orders->currentPage() == $i ? 'active' : '' }}">
                                    <a href="{{ $orders->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li>
                                @if ($orders->hasMorePages())
                                    <a href="{{ $orders->nextPageUrl() }}"><i class="icon-chevron-right"></i></a>
                                @else
                                    <span class="disabled"><i class="icon-chevron-right"></i></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /order-list -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content-wrap -->

    </div>
    <!-- /main-content -->
@endsection


{{-- script --}}
@section('script')
    <!-- Javascript -->
    <script src="{{ asset('assets/js2/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js2/zoom.js') }}"></script>
    <script src="{{ asset('assets/js2/switcher.js') }}"></script>
    <script src="{{ asset('assets/js2/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js2/main.js') }}"></script>
    <script src="{{ asset('assets/js2/custom.js') }}"></script>
@endsection
