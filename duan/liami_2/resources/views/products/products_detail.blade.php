@extends('layouts.master')
@section('title')
<title>Product detail</title>

@endsection
@section('css')
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
    <div class="w-100 pt-60 pb-120 position-relative">
        <div class="container">
            <div class="product-detail position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 col-lg-7">
                        <div class="product-detail-imgs position-relative w-100">
                            <span class="bg-color4 rounded-pill position-absolute">20% OFF</span>
                            <ul class="product-detail-img-nav list-unstyled mb-0">
                                <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-mini-img1-1.jpg') }}" alt="Product Detail Mini Image 1"></div></li>
                                <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-mini-img1-2.jpg') }}" alt="Product Detail Mini Image 2"></div></li>
                                <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-mini-img1-3.jpg') }}" alt="Product Detail Mini Image 3"></div></li>
                                <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-mini-img1-4.jpg') }}" alt="Product Detail Mini Image 4"></div></li>
                            </ul>
                            <ul class="product-detail-big-imgs list-unstyled mb-0">
                                <li><div class="product-detail-big-img overflow-hidden"><a href="{{ asset('assets/images/resources/product-detail-big-img1-1.jpg') }}" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-big-img1-1.jpg') }}" alt="Product Detail Big Image 1"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                                <li><div class="product-detail-big-img overflow-hidden"><a href="{{ asset('assets/images/resources/product-detail-big-img1-2.jpg') }}" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-big-img1-2.jpg') }}" alt="Product Detail Big Image 2"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                                <li><div class="product-detail-big-img overflow-hidden"><a href="{{ asset('assets/images/resources/product-detail-big-img1-3.jpg') }}" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-big-img1-3.jpg') }}" alt="Product Detail Big Image 3"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                                <li><div class="product-detail-big-img overflow-hidden"><a href="{{ asset('assets/images/resources/product-detail-big-img1-4.jpg') }}" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="{{ asset('assets/images/resources/product-detail-big-img1-4.jpg') }}" alt="Product Detail Big Image 4"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                            </ul>
                        </div><!-- Product Detail Images -->
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-5">
                        <div class="product-detail-info position-relative w-100">
                            <div class="product-rate-review d-flex flex-wrap align-items-center">
                                <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star off"></i></span>
                                <a class="d-inline-block review-link" href="javascript:void(0);" title="">(1 customer review)</a>
                            </div>
                            <h2 class="mb-0">New Summer Collection</h2>
                            <span class="d-block price">$155.00 - $255.00</span>
                            <ul class="product-stock-info list-unstyled mb-0">
                                <li>In stock</li>
                                <li>Free delivery available</li>
                                <li>Sales 30% Off Use Code: MOTIVE30</li>
                            </ul>
                            <p class="mb-0">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, hendrerit in rutrum quis, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>
                            <div class="products-color d-flex flex-wrap align-items-center w-100">
                                <span>Colors:</span>
                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                            </div>
                            <div class="products-size d-flex flex-wrap align-items-center w-100">
                                <span>Size:</span>
                                <a href="javascript:void(0);" title="">XS</a>
                                <a href="javascript:void(0);" title="">S</a>
                                <a href="javascript:void(0);" title="">M</a>
                                <a href="javascript:void(0);" title="">L</a>
                                <a href="javascript:void(0);" title="">XL</a>
                            </div>
                            <div class="product-bottom d-flex flex-wrap align-items-center w-100">
                                <div class="product-quanty">
                                    <input type="number" class="qty" value="01">
                                </div>
                                <button class="theme-btn bg-color1" type="submit">Add to Cart<span></span><span></span><span></span><span></span></button>
                                <a class="heart-btn d-inline-block rounded-circle" href="{{ asset('wishlist.html') }}" title=""><i class="fi-rr-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Product Detail -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-110 bg-color5 pb-120 position-relative">
        <div class="container">
            <div class="product-tabs position-relative w-100">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#product-detail-tab1-1" type="button">Description</button></li>
                    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#product-detail-tab1-2" type="button">Additional Information</button></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-detail-tab1-1">
                        <div class="product-detail-tab-content w-100">
                            <div class="row mrg30">
                                <div class="col-md-7 col-sm-12 col-lg-7">
                                    <h4 class="mb-0">Specifications:</h4>
                                    <p class="mb-0">We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.</p>
                                </div>
                                <div class="col-md-5 col-sm-12 col-lg-5">
                                    <h4 class="mb-0">Care & Maintenance:</h4>
                                    <p class="mb-0">Use warm water to describe us as a product team that creates amazing UI/UX experiences, by crafting top-notch user experience.</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <ul class="product-detail-list d-flex flex-wrap list-unstyled mb-0">
                                        <li>
                                            <div class="product-desc-info-box w-100">
                                                <span class="rounded-circle"><i class="fi fi-rr-box-alt"></i></span>
                                                <h4 class="mb-0">Easy Returns</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-desc-info-box w-100">
                                                <span class="rounded-circle"><i class="fi fi-rr-thumbs-up"></i></span>
                                                <h4 class="mb-0">Quality Service</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-desc-info-box w-100">
                                                <span class="rounded-circle"><i class="fi fi-rr-shield-check"></i></span>
                                                <h4 class="mb-0">Original Product</h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-detail-tab1-2">
                        <div class="product-detail-tab-content w-100">
                            <div class="product-detail-info-table w-100">
                                <table>
                                    <tr>
                                        <th>Stand Up</th>
                                        <td>35″L x 24″W x 37-45″H(front to back wheel)</td>
                                    </tr>
                                    <tr>
                                        <th>Folded (w/o wheels)</th>
                                        <td>32.5″L x 18.5″W x 16.5″H</td>
                                    </tr>
                                    <tr>
                                        <th>Folded (w/ wheels)</th>
                                        <td>32.5″L x 24″W x 18.5″H</td>
                                    </tr>
                                    <tr>
                                        <th>Door Pass Through</th>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <th>Frame</th>
                                        <td>Aluminum</td>
                                    </tr>
                                    <tr>
                                        <th>Weight (w/o wheels)</th>
                                        <td>20 LBS</td>
                                    </tr>
                                    <tr>
                                        <th>Weight Capacity</th>
                                        <td>60 LBS</td>
                                    </tr>
                                    <tr>
                                        <th>Width</th>
                                        <td>24″</td>
                                    </tr>
                                    <tr>
                                        <th>Handle height (ground to handle)</th>
                                        <td>37-45″</td>
                                    </tr>
                                    <tr>
                                        <th>Wheels</th>
                                        <td>Aluminum</td>
                                    </tr>
                                    <tr>
                                        <th>Size</th>
                                        <td>S, M, X, XL</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- Product Tabs -->
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
