@extends('layouts.master')

@section('title')
    <title>
        LIAMI
    </title>
@endsection
@section('css')
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

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
        css Copy .custom-fit {
            width: 100%;
            /* Chiều rộng 100% của container */
            height: 300px;
            /* Chiều cao cố định (thay đổi theo nhu cầu) */
            object-fit: cover;
            /* Đảm bảo ảnh được cắt xén để không bị méo */
            object-position: center;
            /* Canh giữa ảnh */
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="slider-area-wrap position-relative w-100">
                <div class="slider-caro2 nav-style1">
                    @foreach ($banners as $banner)
                        <div class="slider-item overflow-hidden position-relative d-block w-100">
                            <picture class="img-fluid d-block w-100 ">
                                <source media="(max-width:850px) " src="{{ asset($banner->ImageURL) }}">
                                <img class="img-fluid d-block w-100 custom-fit" src="{{ asset($banner->ImageURL) }}"
                                    alt="">
                            </picture>
                            <div class="slider-cap v2 text-center text-white position-absolute">
                                <h1 class="mb-0 animated fadeInUp">{{ $banner->Title }}<br> </h1>
                                <p class="mb-0 animated fadeInUp" style="font-family: 'Roboto';">
                                    {{ $banner->subTitle }}<br></p>
                                <div
                                    class="btns-group d-flex flex-wrap justify-content-center align-items-center animated fadeInUp">
                                    <a class="theme-btn bg-color1" href="{{ $banner->Link }}" title="">Xem
                                        ngay<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- Slider Area Wrap ok -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-60 bg-color5 pb-60 position-relative">
            <div class="container">
                <div class="services-wrap position-relative text-center w-100">
                    <div class="row mrg30">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-truck-side"></i></span>
                                <h4 class="mb-0" style="font-family: 'Roboto';">Giao hàng nhanh chóng</h4>
                                <p class="mb-0">Giao hàng tận nơi nhanh chóng, tiện lợi và an toàn.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-time-forward"></i></span>
                                <h4 class="mb-0" style="font-family: 'Roboto';">Hoàn trả miễn phí</h4>
                                <p class="mb-0">Khả năng trả lại hàng hóa của bạn.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-heart"></i></span>
                                <h4 class="mb-0" style="font-family: 'Roboto';">Lựa chọn của phái đẹp</h4>
                                <p class="mb-0">Nhiều năm là thương hiệu tài trợ cho các cuộc thi sắc đẹp.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-plane"></i></span>
                                <h4 class="mb-0" style="font-family: 'Roboto';">Bảo hành quốc tế</h4>
                                <p class="mb-0">Liên hệ để được tư vấn các đơn hàng quốc tế.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Wrap ok -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0" style="font-family: 'Roboto';"><span class="text-color4"
                            style="font-family: 'Roboto';">Sản phẩm </span>yêu thích </h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        @foreach ($topViewedProducts as $topViewedProduct)
                            <div class="col-md-4 col-sm-6 col-lg-2">
                                <div class="product-box position-relative w-100">
                                    <div class="product-img overflow-hidden position-relative w-100">
                                        <a style="font-family: 'Roboto';"
                                            href="{{ route('product.detail', $topViewedProduct->ProductID) }}"
                                            title=""><img class="img-fluid w-100"
                                                src="{{ asset($topViewedProduct->Image) }}" alt="Product Image 7"></a>
                                        @if ($topViewedProduct->Price > $topViewedProduct->SalePrice)
                                            @php
                                                $discountPercentage = round(
                                                    (($topViewedProduct->Price - $topViewedProduct->SalePrice) /
                                                        $topViewedProduct->Price) *
                                                        100,
                                                );
                                            @endphp
                                            <div class="discount-badge"
                                                style="position: absolute; top: 10px; right: 10px; background-color: #e76458; color: white; padding: 5px; border-radius: 5px;">
                                                -{{ $discountPercentage }}%
                                            </div>
                                        @endif

                                    </div>
                                    <div class="product-info w-100">
                                        <h4 class="mb-0"><a
                                                href="{{ route('product.detail', $topViewedProduct->ProductID) }}"
                                                title="">{{ $topViewedProduct->ProductName }}</a></h4>
                                        <div style="display: flex; justify-content: center;margin-top:10px">
                                            <div style="margin-right: 10px"><span class="price"
                                                    style="text-decoration: line-through; font-size: 14px;">
                                                    {{ number_format($topViewedProduct->Price, 0, ',', '.') }}
                                                    VND</span></div>
                                            <div><span class="price"
                                                    style="color: #ff0003;font-weight:bold; font-size: 14px;">
                                                    {{ number_format($topViewedProduct->SalePrice, 0, ',', '.') }}
                                                    VND</span></div>
                                        </div>
                                        <div style="text-align: center;" class="mt-20">
                                            <a class=""
                                                href="{{ route('product.detail', $topViewedProduct->ProductID) }}"
                                                title="">
                                                <button class="theme-btn bg-color1"
                                                    style="padding: 8px; margin-bottom: 5px;" type="submit">Xem
                                                    ngay<span></span><span></span><span></span><span></span></button>
                                            </a>
                                        </div>
                                        {{-- <p style="text-align: right"><i class="fas fa-eye"></i> :
                                            {{ $topViewedProduct->View }}</p> --}}

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div><!-- Products Wrap -->

            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">

                    <h2 class="mb-0" style="font-family: 'Roboto';"><span class="text-color4">Tin tức</span> thời trang
                    </h2>
                </div><!-- Section Title -->
                <div class="featured-products-wrap res-row position-relative w-100">
                    <div class="row mrg20">
                        @foreach ($blogs as $blog)
                            <div class="col-md-6 col-sm-12 col-lg-4">
                                <div class="featured-product-box overflow-hidden position-relative w-100">
                                    <div class="featured-product-img overflow-hidden position-relative w-100">
                                        <a href="{{ route('blogs_detail', $blog->PostID) }}"><img class="img-fluid w-100"
                                                src="{{ asset($blog->ImageURL) }}" alt="Featured Product Image 1"></a>
                                    </div>
                                    <div class="featured-product-cap position-absolute w-100">
                                        <h2 style="font-family: 'Roboto';" class="mb-0"><a
                                                href="{{ route('blogs_detail', $blog->PostID) }}"
                                                title="">{{ $blog->Title }}</a></h2>
                                        <p style="font-family: 'Roboto';" class="mb-0">{{ $blog->Summary }}</p>
                                        <a class="theme-btn mid-btn bg-white"
                                            href="{{ route('blogs_detail', $blog->PostID) }}">Xem
                                            ngay<span></span><span></span><span></span><span></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- Featured Itemss Wrap -->
            </div>
        </div>
    </section>

    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0" style="font-family: 'Roboto';"><span class="text-color4">Sản phẩm </span>mới về
                    </h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        @foreach ($newProduct as $newproduct)
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="product-box position-relative w-100">
                                    <div class="product-img overflow-hidden position-relative w-100">
                                        <a href="{{ route('product.detail', $newproduct->ProductID) }}"
                                            title=""><img class="img-fluid w-100"
                                                src="{{ asset($newproduct->Image) }}" alt="Product Image 7"></a>
                                                 @if ($newproduct->Price > $newproduct->SalePrice)
                                            @php
                                                $discountPercentage = round(
                                                    (($newproduct->Price - $newproduct->SalePrice) /
                                                        $newproduct->Price) *
                                                        100,
                                                );
                                            @endphp
                                            <div class="discount-badge"
                                                style="position: absolute; top: 10px; right: 10px; background-color: #e76458; color: white; padding: 5px; border-radius: 5px;">
                                                -{{ $discountPercentage }}%
                                            </div>
                                        @endif
                                    </div>
                                    <div class="product-info w-100">
                                        <h4 class="mb-0"><a
                                                href="{{ route('product.detail', $newproduct->ProductID) }}"
                                                title="">{{ $newproduct->ProductName }}</a></h4>
                                        <div style="display: flex; justify-content: center;margin-top:10px">
                                            <div style="margin-right: 10px"><span class="price"
                                                    style="text-decoration: line-through;  font-size: 14px;">{{ number_format($newproduct->Price, 0, ',', '.') }}
                                                    VND</span></div>
                                            <div><span class="price"
                                                    style="color: #ff0003;font-weight:bold; font-size: 14px;">{{ number_format($newproduct->SalePrice, 0, ',', '.') }}
                                                    VND</span></div>
                                        </div>
                                        <div style="text-align: center;" class="mt-20">
                                            <a class=""
                                                href="{{ route('product.detail', $newproduct->ProductID) }}"
                                                title="">
                                                <button class="theme-btn bg-color1"
                                                    style="padding: 8px; margin-bottom: 5px;" type="submit">Xem
                                                    ngay<span></span><span></span><span></span><span></span></button>
                                            </a>
                                        </div>
                                        {{-- <p style="text-align: right"><i class="fas fa-eye"></i> :
                                            {{ $newproduct->View }}</p> --}}

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div><!-- Products Wrap -->
                <div class="view-more d-block mt-60 position-relative text-center w-100">
                    <a class="theme-btn bg-color4 brd-btn" href="{{ route('product.all') }}" title="">Xem
                        thêm<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
            </div>
        </div>
    </section>


    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="container">
                <div class="sponsors-wrap position-relative w-100">
                    <div class="row align-items-center mrg30">
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-1.png" alt="Sponsor Image 1"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-2.png" alt="Sponsor Image 2"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-3.png" alt="Sponsor Image 3"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-4.png" alt="Sponsor Image 4"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="assets/images/resources/spnsr-img1-5.png" alt="Sponsor Image 5"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Sponsors Wrap ok -->
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
