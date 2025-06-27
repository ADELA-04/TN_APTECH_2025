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
                    <div class="flex items-center justify-start gap10 flex-wrap">
                        <div class="flex-grow">
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
                        <div class="wg-filter flex-grow">
                            <form class="form-search" method="GET" action="{{ route('orders.index2') }}">
                                <fieldset class="order-status">
                                    <select name="order_status">
                                        <option value="">Tất cả trạng thái đơn hàng</option>
                                        <option value="Chờ xác nhận">Chờ xác nhận</option>
                                        <option value="Đã xác nhận">Đã xác nhận</option>
                                        <option value="Chờ đơn vị vận chuyển">Chờ đơn vị vận chuyển</option>
                                        <option value="Đã giao cho đơn vị vận chuyển">Đã giao cho đơn vị vận chuyển</option>
                                        <option value="Đang giao hàng">Đang giao hàng</option>
                                        <option value="Giao hàng thành công">Giao hàng thành công</option>
                                        <option value="Giao hàng thất bại">Giao hàng thất bại</option>
                                        <option value="Hoàn trả">Hoàn trả</option>
                                        <option value="Đã hết hàng">Đã hết hàng</option>
                                        <option value="Đã hết hàng">Hủy</option>
                                    </select>
                                </fieldset>
                                <div class="button-submit">
                                    <button type="submit" class="btn " title="Lọc">
                                        <i class="icon-filter"></i> <!-- Sử dụng biểu tượng lọc -->
                                    </button>
                                </div>
                            </form></div>
                    </div>
                    <div class="wg-table table-all-category">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Đơn hàng</div>
                            </li>
                            <li>
                                <div class="body-title text-center">Ngày đặt</div>
                            </li>
                            <li>
                                <div class="body-title text-center">Khách hàng</div>
                            </li>
                            <li>
                                <div class="body-title text-center">Tổng tiền</div>
                            </li>
                            <li>
                                <div class="body-title text-center">Trạng thái</div>
                            </li>
                            <li>
                                <div class="body-title text-center">Thanh toán</div>
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

                                        <div class="body-text text-center">{{ $order->created_at->format('d/m/Y') }}</div>
                                        <div class="body-text text-center">{{ $order->customer->FullName }}</div>

                                        <div class="body-text text-center">{{ number_format($order->TotalAmount, 0) }} VNĐ
                                        </div>
                                        <div
                                            class="body-text text-center
                                                {{ $order->OrderStatus == 'Chờ xác nhận'
                                                    ? 'text-warning'
                                                    : ($order->OrderStatus == 'Giao hàng thất bại' ||
                                                    $order->OrderStatus == 'Hoàn trả' ||
                                                    $order->OrderStatus == 'Đã hết hàng' ||
                                                    $order->OrderStatus == 'Hủy'
                                                        ? 'text-danger'
                                                        : 'text-success') }}">
                                            {{ $order->OrderStatus }}
                                        </div>
                                        <div class="body-text text-center">{{ $order->PaymentMethod }}</div>
                                        <div class="list-icon-function ">
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
