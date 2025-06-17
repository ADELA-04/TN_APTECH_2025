@extends('layouts.master')
@section('title')
    <title>Product List</title>
@endsection
@section('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


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
    <style>
       .product-thumb img {
    width: 100%;
    height: 300px; /* Chiều cao cố định */
    object-fit: contain; /* Giữ tỉ lệ khung hình và không cắt ảnh */
    object-position: center; /* Căn giữa ảnh trong khung */

}

        .flash {
            top: 10px;
            /* Khoảng cách từ trên */
            right: 10px;
            /* Khoảng cách từ bên phải */
        }

        .badge {
            padding: 5px 10px;
            /* Khoảng cách bên trong */
            font-size: 14px;
            /* Kích thước chữ */
        }
    </style>
@endsection
@section('content')
    <div class="main-content main-content-product left-sidebar ">
        <div class="container">
            <div class="row bg-light mb-10">
                <div class="col-lg-12 ">
                    <div class="breadcrumb-trail breadcrumbs border-bottom-1">
                        <ul class=" breadcrumb pt-10">
                            <li class="trail-item trail-begin ">
                                <a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="trail-item trail-end active" style="margin-left: 10px">
                               > {{ $category->CategoryName ?? 'Tất cả sản phẩm' }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="wrapper-sidebar shop-sidebar">
                        <div class="sidebar">
                            <div class=" ">
                                <h4 class="" style="font-family: 'Roboto';">Giá</h4>
                                <ul class="">
                                    @foreach ($categories as $category)
                                        <li class="mb-2 list-unstyled">
                                            <form action="{{ route('filter.products') }}" method="GET">
                                                <input id="category_{{ $category->CategoryID }}" type="checkbox"
                                                    name="category_id[]" value="{{ $category->CategoryID }}"
                                                    onchange="this.form.submit()"
                                                    @if (isset($selectedCategoryIDs) && in_array($category->CategoryID, $selectedCategoryIDs)) checked @endif>
                                                <label style="font-family: 'Roboto';"
                                                    for="category_{{ $category->CategoryID }}"
                                                    class="">{{ $category->CategoryName }}</label>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="">
                                <h4 class="" style="font-family: 'Roboto';">Thương hiệu</h4>
                                <ul class="">
                                    @foreach ($brands as $brandItem)
                                        @if (!empty($brandItem->Brand))
                                            <li class="mb-2 list-unstyled">
                                                <form action="{{ route('filter.brand.products') }}" method="GET">
                                                    <input id="brand_{{ $brandItem->Brand }}" type="checkbox"
                                                        name="brand" value="{{ $brandItem->Brand }}"
                                                        onchange="this.form.submit()"
                                                        @if (isset($selectedBrand) && $selectedBrand == $brandItem->Brand) checked @endif>
                                                    <label style="font-family: 'Roboto';"
                                                        for="brand_{{ $brandItem->Brand }}"
                                                        class="">{{ $brandItem->Brand }}</label>
                                                </form>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-area shop-grid-content no-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <div class="text-tiny" style="margin-bottom: 10px; text-align: right;;">Hiện
                            {{ $products->count() }}/12 mục</div>
                        @if ($products->isEmpty())
                            <img src="{{ asset('assets\images3\no-found-2.jpg') }}" alt="img">
                        @else
                            <ul class="row list-products auto-clear equal-container product-grid">
                                @foreach ($products as $product)
                                    <li class="product-item col-lg-3 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-1 mt-20 list-unstyled">
                                        <div class="product-inner equal-element position-relative">
                                            <div class="product-top">
                                                <div class="flash position-absolute top-0 end-0">
                                                    <span class="onnew badge bg-color4">
                                                        <span class="text">
                                                            {{ round((($product->Price - $product->SalePrice) / $product->Price) * 100) }}%
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-thumb">
                                                <div class="thumb-inner">
                                                    <a href="{{ route('product.detail', $product->ProductID) }}">
                                                        <img src="{{ asset($product->Image) }}" alt="img"
                                                            class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info mt-2">
                                                <h5 class="product-name product_title">
                                                    <a style="font-family: 'Roboto';"
                                                        href="{{ route('product.detail', $product->ProductID) }}">{{ $product->ProductName }}</a>
                                                </h5>
                                                <div class="group-info text-center">
                                                    <div class="price ">
                                                        <del> {{ number_format($product->Price, 0, ',', '.') }} VNĐ</del>
                                                        <span>-</span>
                                                        <ins class="text-color21">{{ number_format($product->SalePrice, 0, ',', '.') }} VNĐ</ins>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-2">
                                                    <a href="{{ route('product.detail', $product->ProductID) }}"><button class="theme-btn bg-color1" style="padding: 8px; margin-bottom: 5px;" type="submit">Xem
                                                    ngay<span></span><span></span><span></span><span></span></button></a>

                                                </div>

                                                {{-- <p class="text-end mt-2"><i class="fas fa-eye"></i>: {{ $product->View }}
                                                </p> --}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        @endif

                        <div class="text-center">
                            <div class="mb-10">
                                <!-- Liên kết đến trang trước -->
                                @if ($products->onFirstPage())
                                    <span class="page-numbers disabled border border-secondary p-2"><i class="icon fa fa-angle-left"
                                            aria-hidden="true"></i></span>
                                @else
                                    <a href="{{ $products->previousPageUrl() }}" class="page-numbers border border-secondary p-2"><i
                                            class="icon fa fa-angle-left" aria-hidden="true"></i></a>
                                @endif

                                <!-- Liên kết đến các trang -->
                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                    @if ($page == $products->currentPage())
                                        <span class="page-numbers current border border-secondary bg-color4 text-color5 p-2">{{ $page }}</span>
                                    @else
                                        <a href="{{ $url }}" class=" border border-secondary p-2 page-numbers">{{ $page }}</a>
                                    @endif
                                @endforeach

                                <!-- Liên kết đến trang tiếp theo -->
                                @if ($products->hasMorePages())
                                    <a href="{{ $products->nextPageUrl() }}" class="page-numbers"><i
                                            class="border border-secondary p-2 icon fa fa-angle-right" aria-hidden="true"></i></a>
                                @else
                                    <span class="border border-secondary p-2 page-numbers disabled"><i class="icon fa fa-angle-right"
                                            aria-hidden="true"></i></span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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

    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
@endsection
