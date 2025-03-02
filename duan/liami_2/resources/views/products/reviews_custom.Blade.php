@extends('layouts.master')
@section('title')
    <title>Review</title>
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
<style>
    .rating {
    display: flex;
    flex-direction: row-reverse; /* Để xếp ngược từ phải sang trái */
    justify-content: flex-start;
}

.rating input {
    display: none; /* Ẩn các input radio */
}

.rating label {
    font-size: 30px; /* Kích thước sao */
    color: #ccc; /* Màu xám cho sao chưa được chọn */
    cursor: pointer;
}

.rating input:checked ~ label {
    color: #f39c12; /* Màu vàng cho sao đã được chọn */
}

.rating label:hover,
.rating label:hover ~ label {
    color: #f39c12; /* Màu vàng khi hover */
}
</style>
@endsection
@section('content')
<section>
    <div class="w-100 pt-60 pb-120 position-relative">
        <div class="container">
            <div class="sec-title2 position-relative w-100">
                <h3 class="mb-0">Review</h3>
            </div><!-- Section Title -->
            <div class="checkout-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="row mrg30 ">
                            <div class="col-md-6 col-sm-6 col-lg-6">

                                <div class="rating">

                                    <label for="star1" class="star">★</label>
                                    <input type="radio" id="star1" name="rating" value="1">
                                    <label for="star2" class="star">★</label>
                                    <input type="radio" id="star2" name="rating" value="2">
                                    <label for="star3" class="star">★</label>
                                    <input type="radio" id="star3" name="rating" value="3">
                                    <label for="star4" class="star">★</label>
                                    <input type="radio" id="star4" name="rating" value="4">
                                    <label for="star5" class="star">★</label>
                                    <input type="radio" id="star5" name="rating" value="5">
                                </div>
                            </div>
                        </div>
                        <form>

                            <div class="row mrg30">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Comment *</label>
                                        <textarea placeholder="Enter your comment"></textarea>
                                    </div>
                                </div>
                            </div>



                            <button class="theme-btn bg-color1" type="submit">Review<span></span><span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div><!-- Checkout Wrap -->
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
