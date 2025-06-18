@extends('layouts.master')

@section('title')
    <title>
        Tin tức chi tiết
    </title>
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
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
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

@endsection
@section('content')
    <section>
        <div class="page-top-wrap w-100 pt-20 bg-color22 pb-20 position-relative">

            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" title="" style="font-family: 'Roboto';">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs') }}" title="" style="font-family: 'Roboto';">Tin tức</a></li>
                    <li class="breadcrumb-item active" style="font-family: 'Roboto';">{{ $blogs_detail->Title }}</li>
                </ol>

            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <aside class="w-100">
                            <div class="widget w-100">
                                <h4 style="font-family: 'Roboto';">Tin tức gần đây</h4>
                                <div class="mini-posts w-100">
                                    @foreach ($blogs as $blog)
                                        <div class="mini-post-box d-flex flex-wrap align-items-center w-100">
                                            <div class="mini-post-img overflow-hidden position-relative"><a
                                                    href="{{ route('blogs_detail',$blog->PostID) }}" title=""><img class="img-fluid w-100"
                                                        src="{{ asset($blog->ImageURL) }}"
                                                        alt="Mini Post Image 1"></a></div>
                                            <div class="mini-post-info">
                                                <h6 style="font-family: 'Roboto';" class="mb-0"><a href="{{ route('blogs_detail',$blog->PostID) }}" title="">{{ $blog->Title }}</a></h6>
                                                <span class="d-block">{{ $blog->created_at }} </span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-9">
                        <div class="post-detail position-relative w-100">
                            <div class="post-detail-info w-100">
                                <h1 class="mb-0" style="font-family: 'Roboto';">{{ $blogs_detail->Title }}</h1>
                                <div class="post-detail-mini-author align-items-center d-flex flex-wrap">

                                    <div class="post-detail-min-author-info">

                                        <span class="d-block">{{ $blogs_detail->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-detail-img position-relative w-100">
                                <img class="img-fluid w-100" src="{{ asset($blogs_detail->ImageURL) }}"
                                    alt="Post Detail Image 2">
                            </div>
                            <div class="post-detail-content w-100">
                                <p style="font-family: 'Roboto';">{!! $blogs_detail->Content
                                 !!}</p>

                            </div>
                            <div class="post-detail-share d-flex flex-wrap align-items-center w-100">
                                <h5 class="mb-0" style="font-family: 'Roboto';">Chia sẻ:</h5>
                                <div class="share-links d-flex flex-wrap">
                                    <a href="javascript:void(0);" title="Chia sẻ trên Facebook" onclick="shareOnFacebook();">
                                        <i class="fab fa-facebook-f"></i> Facebook
                                    </a>
                                </div>
                            </div>
                        </div><!-- Post Detail -->
                    </div>
                </div>
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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '632053302797081', // Thay thế bằng App ID của bạn
                cookie     : true,
                xfbml      : true,
                version    : 'v10.0'
            });
        };

        function shareOnFacebook() {
            FB.login(function(response) {
                if (response.authResponse) {
                    // Người dùng đã đăng nhập
                    FB.ui({
                        method: 'share',
                        href: '{{ $currentUrl }}', // URL của bài viết để chia sẻ
                    }, function(response){});
                } else {
                    alert('Bạn cần đăng nhập để chia sẻ.');
                }
            });
        }
    </script>
</script>
@endsection
