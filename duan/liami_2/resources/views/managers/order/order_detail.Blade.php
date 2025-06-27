@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Chi tiết đơn hàng
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
              @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Đơn hàng #{{ $order->OrderID }}</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="{{ route('orders.index2') }}">
                                <div class="text-tiny">Quay lại</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                    </ul>
                </div>
                <!-- order-detail -->
                <div class="wg-order-detail">
                    <div class="left flex-grow">
                        <div class="wg-box mb-20">
                            <div class="wg-table table-order-detail">

                                <ul class="flex flex-column">
                                    @foreach ($order->orderDetails as $detail)
                                        <li class="product-item gap14">
                                            <div class="image no-bg">
                                                <a href="{{ route('product.detail', $detail->product->ProductID) }}"> <img
                                                        src="{{ asset($detail->product->Image) }}" alt=""></a>
                                            </div>
                                            <div class="flex items-center justify-between gap40 flex-grow">
                                                <div class="name">
                                                    <div class="text-tiny mb-1">Sản phẩm</div>
                                                    <a href="{{ route('product.detail', $detail->product->ProductID) }}"
                                                        class="body-title-2">{{ Str::limit($detail->product->ProductName, 15, '...') }}</a>
                                                    <span
                                                        style="color: rgb(255, 98, 0); font-size: 13px;;">{{ $detail->Color }}</span>
                                                    <span style="color: rgb(255, 98, 0); font-size: 13px;;"> -
                                                        {{ $detail->Size }}</span>
                                                </div>
                                                <div class="name">
                                                    <div class="text-tiny mb-1">Số lượng</div>
                                                    <div class="body-title-2">{{ $detail->Quantity }}</div>
                                                </div>
                                                <div class="name">
                                                    <div class="text-tiny mb-1">Đơn giá</div>
                                                    <div class="body-title-2">
                                                        {{ number_format($detail->product->SalePrice, 0) }} VNĐ</div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="wg-box mb-24">
                            <div class="wg-table table-cart-totals">
                                <ul class="table-title flex mb-24">
                                    <li>
                                        <div class="body-title">Chi tiết</div>
                                    </li>
                                    <li>
                                        <div class="body-title">Đơn giá</div>
                                    </li>
                                </ul>
                                <ul class="flex flex-column gap14">
                                    <li class="cart-totals-item">
                                        <span class="body-text">Tổng tiền hàng:</span>
                                        <span class="body-title-2">{{ number_format($order->TotalAmount - 40000, 0) }}
                                            VNĐ</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-text">Phí vận chuyển:</span>
                                        <span class="body-title-2"> 40,000 VNĐ</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-text">Phương thức thanh toán:</span>
                                        <span class="body-title-2">{{ $order->PaymentMethod }}</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-title">Ghi chú của khách hàng:</span>
                                        <span class="body-title tf-color-1">{{ $order->Notes }}</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-title">Thành tiền:</span>
                                        <span class="body-title tf-color-1">{{ number_format($order->TotalAmount, 0) }}
                                            VNĐ</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">

                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Thông tin giao hàng</div>
                            <div class="body-text">Tên khách: {{ $order->customer->FullName }}</div>
                            <div class="body-text">Địa chỉ: {{ $order->Address }}</div>
                            <div class="body-text">Số điện thoại: {{ $order->Phone }}</div>
                            <div class="body-text">Email: {{ $order->customer->Email }}</div>
                        </div>

                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Cập nhật trạng thái đơn</div>
                            <form action="{{ route('orders.updateStatus', $order->OrderID) }}" method="POST">
                                @csrf
                                <div class="body-title-2 tf-color-2">
                                    <select name="OrderStatus" required class="mb-10">
                                        <option value="Chờ xác nhận"
                                            {{ $order->OrderStatus == 'Chờ xác nhận' ? 'selected' : '' }}>Chờ xác nhận
                                        </option>
                                        <option value="Đã xác nhận"
                                            {{ $order->OrderStatus == 'Đã xác nhận' ? 'selected' : '' }}>Đã xác nhận
                                        </option>
                                        <option value="Chờ đơn vị vận chuyển"
                                            {{ $order->OrderStatus == 'Chờ đơn vị vận chuyển' ? 'selected' : '' }}>Chờ đơn
                                            vị vận chuyển</option>
                                        <option value="Đã giao cho đơn vị vận chuyển"
                                            {{ $order->OrderStatus == 'Đã giao cho đơn vị vận chuyển' ? 'selected' : '' }}>
                                            Đã giao cho đơn vị vận chuyển</option>
                                        <option value="Đang giao hàng"
                                            {{ $order->OrderStatus == 'Đang giao hàng' ? 'selected' : '' }}>Đang giao hàng
                                        </option>
                                        <option value="Giao hàng thành công"
                                            {{ $order->OrderStatus == 'Giao hàng thành công' ? 'selected' : '' }}>Giao hàng thành
                                            công</option>
                                             <option value="Giao hàng thất bại"
                                            {{ $order->OrderStatus == 'Giao hàng thất bại' ? 'selected' : '' }}>Giao hàng thất bại</option>
                                        <option value="Hoàn trả"
                                            {{ $order->OrderStatus == 'Hoàn trả' ? 'selected' : '' }}>Hoàn trả</option>
                                            <option value="Đã hết hàng"
                                            {{ $order->OrderStatus == 'Đã hết hàng' ? 'selected' : '' }}>Đã hết hàng
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="tf-button style-1 w-full">Cập
                                    nhật</button>
                            </form>
                        </div>
                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Cập nhật mã vận đơn</div>
                            <form action="{{ route('orders.updateShippingCode', $order->OrderID) }}" method="POST">
                                @csrf
                                <div class="body-title-2 tf-color-2">
                                        <input class="mb-10" type="text" name="ShippingCode" value="{{ old('ShippingCode', $order->ShippingCode) }}">

                                </div>
                                <button type="submit" class="tf-button style-1 w-full">Cập
                                    nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /order-detail -->
                <!-- table -->
                <div class="wg-box">
                    <div class="wg-table table-order-track">
                        <ul class="table-title flex mb-24 gap20">
                            <li>
                                <div class="body-title">Ngày đặt</div>
                            </li>
                            <li class="body-title"></li>
<li class="body-title">ID khách hàng</li>
<li class="body-title"></li>
                        </ul>
                        <ul class="flex flex-column gap14">
                            <li class="cart-totals-item">
                                <div class="body-text">{{ $order->created_at }}</div>
                                <div class="body-text"></div>
<div class="body-text">{{ $order->customer->CustomerID }}</div>
                                <div class="body-text"></div>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </div>
                </div>
                <!-- /table -->
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
