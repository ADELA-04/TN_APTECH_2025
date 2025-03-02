@extends('layouts.master')
@section('title')
    <title>Product List</title>
@endsection
@section('css')
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}"/>
<link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css3/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/chosen.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/pe-icon-7-stroke.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/lightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/jquery.scrollbar.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/mobile-menu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts3/flaticon/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css3/style.css') }}">
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

<div class="main-content main-content-product no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Grid Products
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">


                    <ul class="row list-products auto-clear equal-container product-grid">
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-1.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Shark Shirt</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-2.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Summer T-shirt Boy</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-3.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Sea Toy Collection</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-4.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Boy Brown Shirt</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-5.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Autumn Shirt</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-6.jpg') }}" alt="img">
                                        </a>


                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Yellow Shirt</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-7.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Red Cars </a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-20.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Lucky cat</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-9.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Cute Girl Shirt</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-8.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Summerday T-Shirt </a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-21.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Zoo Boy Clothes</a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#">
                                            <img src="{{ asset('assets/images3/product-item-22.jpg') }}" alt="img">
                                        </a>

                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">Hello Boy Shirt </a>
                                    </h5>
                                    <div class="group-info">

                                        <div class="price">
                                            <del>
                                                $65
                                            </del>
                                            <ins>
                                                $45
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="pagination clearfix style2">
                        <div class="nav-link">
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-left"
                                                                aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right"
                                                                aria-hidden="true"></i></a>
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
    <script src="{{ asset('assets/js3/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.plugin-countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery-countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js3/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js3/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js3/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js3/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js3/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js3/chosen.min.js') }}"></script>
    <script src="{{ asset('assets/js3/slick.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.elevateZoom.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('assets/js3/fancybox/source/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js3/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js3/owl.thumbs.min.js') }}"></script>
    <script src="{{ asset('assets/js3/jquery.scrollbar.min.js') }}"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
    <script src="{{ asset('assets/js3/frontend-plugin.js') }}"></script>
@endsection
