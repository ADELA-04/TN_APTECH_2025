<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang của tôi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Thêm font chữ hỗ trợ tiếng Việt -->
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


</head>

<body>
    <footer>
        <div class="w-100 position-relative">
            <div class="container">
                <hr class="mt-0 mb-70">
                <div class="footer-data position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            @foreach ($settings as $setting)
                                <div class="widget w-150">
                                    <div class="logo">
                                        <h1 class="mb-0"><a href="{{ $setting->NavigationLink }}" title="Home"><img
                                                    src="{{ asset($setting->Logo) }}" alt="Logo"></a></h1>
                                    </div><!-- Logo -->
                                    <div class="social-links d-flex flex-wrap">
                                        <a href="{{ $setting->LinkFB }}" title="Facebook" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $setting->LinkIN }}" title="Instagram" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2">
                            <div class="widget w-100">
                                <h5 style="font-family: 'Roboto';">Cửa hàng</h5>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a style="font-family: 'Roboto';" href="{{ asset('product-detail.html') }}"
                                                title="">{{ $category->CategoryName }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2">
                            <div class="widget w-100">
                                <h5>Liami</h5>
                                <ul>
                                    <li><a href="{{ asset('blog-detail.html') }} " style="font-family: 'Roboto';"
                                            title="">Tin tức</a></li>
                                    <li><a href="{{ asset('audio.html') }}" style="font-family: 'Roboto';"
                                            title="">Liên hệ</a></li>
                                    <li><a href="{{ asset('quote.html') }}" style="font-family: 'Roboto';"
                                            title="">Trợ giúp</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-lg-5">
                            <div class="widget w-100">
                                @foreach ($settings as $setting)
                                    <h5>{{ $setting->BusinessName }}</h5>
                                    <ul>
                                        <li style="font-family: 'Roboto';"><span>Người đại diện:
                                            </span>{{ $setting->BossName }}</li>
                                        <li style="font-family: 'Roboto';"><span>Địa chỉ: </span>
                                            {{ $setting->Address }}</li>
                                        <li style="font-family: 'Roboto';"><span>Điện thoại: </span>
                                            {{ $setting->Phone }}</li>
                                        <li style="font-family: 'Roboto';"><span>Email: </span>{{ $setting->Email }}
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!-- Footer Data -->
                <hr class="mt-70 mb-0">
                <div class="bottom-bar d-flex flex-wrap align-items-center justify-content-between w-100">
                    <ul class="bottom-links d-flex flex-wrap align-items-center list-unstyled mb-0">

                        <li><p style="font-family: 'Roboto';">Liami - Thương hiệu thời trang thành lập năm 2023.</p></li>

                    </ul><!-- Bottom Links -->

                </div><!-- Bottom Bar -->
            </div>
        </div>
    </footer><!-- Footer ok -->

</body>

</html>
