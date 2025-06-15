@extends('layouts.master')

@section('title')
<title>
    Tin tức
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
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
<style>
    .post-img {
        height: 400px; /* Set a fixed height */
        overflow: hidden; /* Hide overflow to maintain aspect ratio */
    }

    .post-img img {
        width: 100%; /* Make the image responsive */
        height: auto; /* Maintain aspect ratio */
        object-fit: cover; /* Cover the entire container */
    }
</style>
@endsection
@section('content')
<section>
    <div class="page-top-wrap w-100 pt-20 bg-color22 pb-20 position-relative">
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" title="" style="font-family: 'Roboto';">Trang chủ</a></li>
                <li class="breadcrumb-item active" style="font-family: 'Roboto';">Tin tức</li>
            </ol>

        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-40 pb-30 position-relative">
        <div class="container">
            <div class="posts-wrap position-relative w-100">
                <div class="row mrg30">
                    @foreach ($blogs as $blog)
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="{{ route('blogs_detail',$blog->PostID) }}" title=""><img class="img-fluid w-100" src="{{ asset($blog->ImageURL) }} " alt="Post Image 1"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 style="font-family: 'Roboto';" class="mb-0"><a href="{{ route('blogs_detail',$blog->PostID) }}" title="">{{ $blog->Title }}</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">{{ $blog->created_at}}</a></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div><!-- Posts Wrap -->
            {{-- <div class="view-more d-block mt-60 position-relative text-center w-100">
                <a class="theme-btn bg-color1 brd-btn" href="blog.html" title="">Load More<span></span><span></span><span></span><span></span></a>
            </div><!-- View More --> --}}
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
