@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>Customer Manager</title>
@endsection

{{-- css --}}
@section('css')
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
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
                    <h3>Danh sách khách hàng</h3>
                </div>
                <!-- product-list -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">

                            <form class="form-search" method="GET" action="{{ route('manager_customer') }}">
    <fieldset class="name">
        <input type="text" placeholder="Tìm kiếm bằng mã khách hàng..." name="customer_id" required>
    </fieldset>
    <div class="button-submit">
        <button type="submit"><i class="icon-search"></i></button>
    </div>
</form>
                        </div>

                    </div>

                    <div class="wg-table table-product-list">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Khách hàng</div>
                            </li>
                            <li>
                                <div class="body-title">Email</div>
                            </li>
                            <li>
                                <div class="body-title">Số điện thoại</div>
                            </li>
                            <li>
                                <div class="body-title"> Số đơn hàng</div>
                            </li>

                            <li>
                                <div class="body-title">Hành động</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @if (isset($customers) && $customers->isNotEmpty())
                                @foreach ($customers as $customer)
                                    <li class="product-item gap14">
                                        <div class="image no-bg">
                                            <img src="{{ asset($customer->ProfilePicture) }}" alt="">
                                        </div>
                                        <div class="flex items-center justify-between gap20 flex-grow">
                                            <div class="name">
                                                <a href="{{ route('customers.edit', $customer->CustomerID) }}"
                                                    class="body-title-2">{{ $customer->FullName }}</a>
                                            </div>
                                            <div class="body-text">{{ $customer->Email }}</div>
                                            <div class="body-text">
                                                @if ($customer->orders->isNotEmpty())
                                                    {{ $customer->orders->first()->Phone }}
                                                @else
                                                    Không có số điện thoại
                                                @endif
                                            </div>
                                            <div class="body-text">{{ $customer->orders_count }} Đơn hàng</div>
                                            <div class="list-icon-function">

                                                <div class="user-item">
                                                    <form action="{{ route('customer.destroy', $customer->CustomerID) }}"
                                                        method="POST" onsubmit="return confirm('Xác nhận xóa?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="border: none; background: none;">
                                                            <i class="icon-trash-2"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                               <div class="alert alert-warning">Không tìm thấy.</div>
                            @endif
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Hiện {{ $customers->count() }}/10 mục</div>
                        <ul class="wg-pagination flex items-center">
                            <li>
                                @if ($customers->onFirstPage())
                                    <span class="disabled"><i class="icon-chevron-left"></i></span>
                                @else
                                    <a href="{{ $customers->previousPageUrl() }}"><i class="icon-chevron-left"></i></a>
                                @endif
                            </li>

                            @for ($i = 1; $i <= $customers->lastPage(); $i++)
                                <li class="{{ $customers->currentPage() == $i ? 'active' : '' }}">
                                    <a href="{{ $customers->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li>
                                @if ($customers->hasMorePages())
                                    <a href="{{ $customers->nextPageUrl() }}"><i class="icon-chevron-right"></i></a>
                                @else
                                    <span class="disabled"><i class="icon-chevron-right"></i></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /product-list -->
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
@endsection
