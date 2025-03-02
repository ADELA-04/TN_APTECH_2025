@extends('layouts.master')

@section('title')
<title>
    Blogs
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
    <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html" title="">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
            <div class="page-title w-100">
                <span class="d-block text-color4">- Blog</span>
                <h2 class="mb-0">Blog</h2>
            </div><!-- Page Title -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-120 position-relative">
        <div class="container">
            <div class="posts-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-1.jpg" alt="Post Image 1"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail.html" title="">They're born from love and bred for individuality</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-2.jpg" alt="Post Image 2"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail.html" title="">The Best High-Street Cleansing Creams</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-3.jpg" alt="Post Image 3"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail.html" title="">Three Of The Best Red Lipsticks For Spring</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="video.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-2.jpg" alt="Post Image 2"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="video.html" title="">How To Layer Sweaters For Extra Warmth & Style</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="quote.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-3.jpg" alt="Post Image 3"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="quote.html" title="">The Best Burn Bags For Understanding Fashion’s</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-1.jpg" alt="Post Image 1"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail.html" title="">Our Spring Cover Star Trends For Spring</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail2.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-3.jpg" alt="Post Image 3"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail2.html" title="">What I Wore This Week: White Jeans</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="audio.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-1.jpg" alt="Post Image 1"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="audio.html" title="">The Past: Check Out The 90s Fashion Revival</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="video.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-2.jpg" alt="Post Image 2"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="video.html" title="">The Top 10 Trends Of Winter 2019 Liami Store</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Posts Wrap -->
            <div class="view-more d-block mt-60 position-relative text-center w-100">
                <a class="theme-btn bg-color1 brd-btn" href="blog.html" title="">Load More<span></span><span></span><span></span><span></span></a>
            </div><!-- View More -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pb-120 position-relative">
        <div class="container">
            <div class="newsletter-wrap bg-color5 position-relative w-100" style="background-image: url(assets/images/resources/newsletter-mockup.png);">
                <div class="row mrg30">
                    <div class="col-md-9 col-sm-12 col-lg-7">
                        <div class="sec-title position-relative">
                            <span class="d-block text-color4">- Our Newsletter</span>
                            <h2 class="mb-0">New Product Notifications</h2>
                        </div><!-- Section Title -->
                        <form id="subscribe-form" method="post" action="#">
                            <div class="field-box position-relative">
                                <i class="fi fi-rr-envelope"></i>
                                <input class="email" type="email" placeholder="Enter your email" name="email" required>
                            </div>
                            <div class="field-btn">
                                <button class="theme-btn bg-color1" type="submit" id="subscribe-button">Subscribe<span></span><span></span><span></span><span></span></button>
                            </div>
                            <div class="response w-100"></div>
                        </form>
                    </div>
                </div>
            </div><!-- Newsletter Wrap -->
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
