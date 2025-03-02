@extends('layouts.master')

@section('title')
<title>
    Home page
</title>
@endsection
@section('css')
<link rel="stylesheet" href="assets/css/all.min.css">
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
    <div class="w-100 position-relative">
        <div class="slider-area-wrap position-relative w-100">
            <div class="slider-caro2 nav-style1">
                <div class="slider-item overflow-hidden position-relative d-block w-100">
                    <picture class="img-fluid d-block w-100">
                        <source media="(max-width:850px)" src="assets/images/resources/slide-mobile-img2-1.jpg">
                        <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img2-1.jpg" alt="Slide Image 1">
                    </picture>
                    <div class="slider-cap v2 text-center text-white position-absolute">
                        <h1 class="mb-0 animated fadeInUp">Come Visit And Shop <br> With Us In Store</h1>
                        <p class="mb-0 animated fadeInUp">Trying something new is never pretty. But it is pretty awesome. Because no matter <br> how many times.</p>
                        <div class="btns-group d-flex flex-wrap justify-content-center align-items-center animated fadeInUp">
                            <a class="theme-btn bg-color4" href="javascript:void(0);" title="">Shop Women<span></span><span></span><span></span><span></span></a>
                            <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Shop Men<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="slider-item overflow-hidden position-relative d-block w-100">
                    <picture class="img-fluid d-block w-100">
                        <source media="(max-width:850px)" srcset="assets/images/resources/slide-mobile-img2-2.jpg">
                        <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img2-2.jpg" alt="Slide Image 2">
                    </picture>
                    <div class="slider-cap v2 text-center text-white position-absolute">
                        <h1 class="mb-0 hidden">Come Visit And Shop <br> With Us In Store</h1>
                        <p class="mb-0 hidden">Trying something new is never pretty. But it is pretty awesome. Because no matter <br> how many times.</p>
                        <div class="btns-group d-flex flex-wrap justify-content-center align-items-center hidden">
                            <a class="theme-btn bg-color4" href="javascript:void(0);" title="">Shop Women<span></span><span></span><span></span><span></span></a>
                            <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Shop Men<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
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
                            <h4 class="mb-0">Free Shipping</h4>
                            <p class="mb-0">On all orders over $50 CAD/USD</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="serv-box text-center w-100">
                            <span class="d-inline-block text-color4"><i class="fi fi-rr-time-forward"></i></span>
                            <h4 class="mb-0">30 days return</h4>
                            <p class="mb-0">Possibility of returning goods</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="serv-box text-center w-100">
                            <span class="d-inline-block text-color4"><i class="fi fi-rr-heart"></i></span>
                            <h4 class="mb-0">We are Inclusive</h4>
                            <p class="mb-0">Representing all</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="serv-box text-center w-100">
                            <span class="d-inline-block text-color4"><i class="fi fi-rr-plane"></i></span>
                            <h4 class="mb-0">International warrantly</h4>
                            <p class="mb-0">Postal items to countries</p>
                        </div>
                    </div>
                </div>
            </div><!-- Services Wrap ok -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-110 pb-120 position-relative">
        <div class="container">
            <div class="sec-title position-relative w-100">
                <h2 class="mb-0"><span class="text-color4">Womens Fashion</span> New In</h2>
            </div><!-- Section Title -->
            <div class="products-wrap res-row position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-1.jpg" alt="Product Image 1"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-1.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Jersey Graphic Tee</a></h4>
                                <span class="price">$89</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-2.jpg" alt="Product Image 2"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-2.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Long strappy dress</a></h4>
                                <span class="price">$100</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-3.jpg" alt="Product Image 3"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-3.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Long Fit dress</a></h4>
                                <span class="price">$120</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-4.jpg" alt="Product Image 4"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-4.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Grown cotton T-shirt</a></h4>
                                <span class="price">$72</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Products Wrap -->
            <div class="view-more d-block mt-60 position-relative text-center w-100">
                <a class="theme-btn bg-color4 brd-btn" href="{{ route('products.detail') }}" title="">View All Products</a>
            </div><!-- View More -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 bg-color5 pb-120 position-relative">
        <div class="container">
            <div class="new-styles position-relative w-100">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="sec-title position-relative w-100">
                            <span class="d-block text-color4">- Welcome to fashion</span>
                            <h2 class="mb-0">Newest Styles</h2>
                            <p class="mb-0">Trying something new is never pretty. But it is pretty awesome. Because no matter how many times.</p>
                            <a class="theme-btn bg-color4" href="{{ route('products.detail') }}" title="">Shop Now<span></span><span></span><span></span><span></span></a>
                        </div><!-- Section Title -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="products-wrap position-relative w-100">
                            <div class="row prod-caro2 pagi-style1 v2  lft-panel mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-5.jpg" alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img2-5.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Long Fit dress</a></h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-6.jpg" alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img2-6.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Jacket with pouch pocket</a></h4>
                                            <span class="price">$55</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-7.jpg" alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img2-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">New Blend Field Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Products Wrap -->
                    </div>
                </div>
            </div><!-- New Styles -->
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-110 position-relative">
        <div class="container">
            <div class="sec-title position-relative w-100">
                <h2 class="mb-0"><span class="text-color4">Mens Fashion</span> New In</h2>
            </div><!-- Section Title -->
            <div class="products-wrap res-row position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-7.jpg" alt="Product Image 7"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">New Blend Field Jacket</a></h4>
                                <span class="price">$80</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-8.jpg" alt="Product Image 8"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-8.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Skinny mid-rise trousers</a></h4>
                                <span class="price">$70</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-9.jpg" alt="Product Image 9"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-9.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Long Fit T-shirt</a></h4>
                                <span class="price">$50</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="{{ route('products.detail') }}" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-10.jpg" alt="Product Image 10"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img2-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="{{ route('products.detail') }}" title="">Round neck sweater</a></h4>
                                <span class="price">$150</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Products Wrap -->
            <div class="view-more d-block mt-60 position-relative text-center w-100">
                <a class="theme-btn bg-color4 brd-btn" href="{{ route('products.detail') }}" title="">View All Products<span></span><span></span><span></span><span></span></a>
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
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-1.png" alt="Sponsor Image 1"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-2.png" alt="Sponsor Image 2"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-3.png" alt="Sponsor Image 3"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-4.png" alt="Sponsor Image 4"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-5.png" alt="Sponsor Image 5"></a>
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
