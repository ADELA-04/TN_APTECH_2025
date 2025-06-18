@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Tổng quan
    </title>
@endsection

{{-- css --}}
@section('css')
    <meta charset="utf-8">

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



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
                <div class="tf-section-2 ">
                    <!-- website-visitors -->
                    <div class="wg-box">
                        <div class="flex items-center justify-between">
                            <h5>Tổng quan doanh thu</h5>
                        </div>
                        <div id="line-chart-10"></div>
                    </div>
                    <!-- website-visitors -->
                    <!-- website-visitors -->
                    <div class="wg-box">
                        <div class="flex items-center justify-between">
                            <h5>Top 5 mã sản phẩm bán chạy nhất</h5>

                        </div>
                        <div id="line-chart-9"></div>
                    </div>
                    <!-- website-visitors -->

                </div>
                <div class="tf-section mb-30" style="margin-top: 20px">
                    <!-- orders -->
                    <div class="wg-box">
                        <div class="flex items-center justify-between">
                            <h5>Top 5 sản phẩm được xem nhiều nhất</h5>
                        </div>
                        <div class="wg-table table-product-overview t2">
                            <ul class="table-title flex gap20 mb-14">
                                <li>
                                    <div class="body-title">Sản phẩm</div>
                                </li>
                                <li>
                                    <div class="body-title text-center">Danh mục sản phẩm</div>
                                </li>
                                <li>
                                    <div class="body-title text-center">Mã sản phẩm</div>
                                </li>

                                <li>
                                    <div class="body-title text-center">Lượt xem</div>
                                </li>

                            </ul>

                            @foreach ($topViewedProducts as $topViewedProduct)
                                <div class="divider mb-14"></div>

                                <ul class="flex flex-column gap10">
                                    <li class="product-item gap14">
                                        <div class="image no-bg">
                                            <img src="{{ asset($topViewedProduct->Image) }}" alt="">
                                        </div>
                                        <div class="flex items-center justify-between flex-grow gap20">
                                            <div class="name">
                                                <a href="{{ route('product.detail', $topViewedProduct->ProductID) }}"
                                                    class="body-title-2">{{ $topViewedProduct->ProductName }}</a>
                                            </div>
                                            <div class="body-text text-center"> {{ $topViewedProduct->Category->CategoryName }}</div>
                                            <div class="body-text text-center">{{ $topViewedProduct->ProductID }}</div>

                                            <div class="body-text text-center">{{ $topViewedProduct->View }}</div>

                                        </div>
                                    </li>
                            @endforeach

                            </ul>
                        </div>


                    </div>
                    <!-- /orders -->
                </div>

            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->

    </div>
    <!-- /main-content -->
@endsection

{{-- script --}}
@section('script')
    <script src="assets/js2/jquery.min.js"></script>
    <script src="assets/js2/bootstrap.min.js"></script>
    <script src="assets/js2/bootstrap-select.min.js"></script>
    <script src="assets/js2/zoom.js"></script>
    <script src="assets/js2/jvectormap-1.2.2.min.js"></script>
    <script src="assets/js2/jvectormap-us-lcc.js"></script>
    <script src="assets/js2/jvectormap.js"></script>
    <script src="assets/js2/morris.min.js"></script>
    <script src="assets/js2/raphael.min.js"></script>
    <script src="assets/js2/morris.js"></script>
    <script src="assets/js2/apexcharts/apexcharts.js"></script>
    <script>
        // lấy dữ liệu từ controller đẩy sang để hiển thị ra biểu đồ
        var percentages = @json($percentages);
   var productCodes = @json($productCodes);
     var totalQuantities = @json($totalQuantities);
       </script>
    <script src="assets/js2/apexcharts/line-chart-9.js"></script>
     <script>
         // lấy dữ liệu từ controller đẩy sang để hiển thị ra biểu đồ
        var revenueData = @json($revenueData);
    </script>
    <script src="assets/js2/apexcharts/line-chart-10.js"></script>
    <script src="assets/js2/switcher.js"></script>
    <script src="assets/js2/theme-settings.js"></script>
    <script src="assets/js2/main.js"></script>

@endsection
