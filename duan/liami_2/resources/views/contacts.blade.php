@extends('layouts.master')

@section('title')
<title>Liên hệ</title>
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
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
@endsection
@section('content')
<section>
    <div class="page-top-wrap w-100 pt-20 bg-color22 pb-20 position-relative">
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" style="font-family: 'Roboto';" title="">Trang chủ</a></li>
                <li class="breadcrumb-item active" style="font-family: 'Roboto';">Liên hệ</li>
            </ol>
        </div>
    </div>
</section>
<section>
    @foreach ($settings as $setting)


    <div class="w-100 pt-120 pb-120 position-relative">
        <div class="container">
            <div class="contact-wrap position-relative w-100">
                <div class="contact-info-map bg-color5 position-relative w-100">
                    <div class="row mrg">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="contact-info position-relative w-100">
                                <h3 style="font-family: 'Roboto';">Thông tin cửa hàng</h3>
                                <ul class="contact-info-list d-flex flex-wrap list-unstyled mb-0">
                                    <li>
                                        <span class="d-block" style="font-family: 'Roboto';">Tên doanh nghiệp</span>
                                        <p class="mb-0" style="font-family: 'Roboto';">{{ $setting->BusinessName }}</p>
                                    </li>
                                    <li>
                                        <span class="d-block" style="font-family: 'Roboto';">Chủ cửa hàng</span>
                                        <p class="mb-0" style="font-family: 'Roboto';">{{ $setting->BossName }}</p>
                                    </li>
                                    <li>
                                        <span class="d-block" style="font-family: 'Roboto';">Điện thoại</span>
                                        <p class="mb-0">{{ $setting->Phone }}</p>
                                    </li>
                                    <li>
                                        <span class="d-block" style="font-family: 'Roboto';">Địa chỉ</span>
                                        <p class="mb-0" style="font-family: 'Roboto';">{{ $setting->Address }}</p>
                                    </li>
                                    <li>
                                        <span class="d-block">Email</span>
                                        <p class="mb-0">{{ $setting->Email }}</p>
                                        <span class="d-block mt-20" style="font-family: 'Roboto';">Kết nối xã hội</span>
                                        <div class=" social-links d-flex flex-wrap">
                                            <a href="https://www.facebook.com/profile.php?id=100083074215224" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/liami.designstore/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="map-box w-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72940.608602043!2d105.85064106944571!3d21.019192181723856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSGFub2ksIEhvw6BuIEtp4bq_bSwgSGFub2ksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1643540184685!5m2!1sen!2s" height="450" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Information & Map -->

            </div><!-- Contact Wrap -->
        </div>
    </div>
    @endforeach
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
