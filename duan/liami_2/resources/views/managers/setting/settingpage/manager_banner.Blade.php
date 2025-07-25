@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>Quản lí banner</title>
@endsection

{{-- css --}}
@section('css')
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
@endsection

{{-- content --}}
@section('content')
    <!-- main-content -->
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Quản lí banner trang</h3>
                    <a class="tf-button style-1 w208" href="{{ route('settings_banner.create') }}"><i class="icon-plus"></i>Thêm mới</a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- product-list -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">
                            <form class="form-search" method="GET" action="{{ route('managers.settings_banner') }}"> <!-- Thay your.route.name bằng route chính xác -->
    <fieldset class="name">
        <input type="text" placeholder="Tìm kiếm bằng mã banner..." name="name" required>
    </fieldset>
    <div class="button-submit">
        <button type="submit"><i class="icon-search"></i></button>
    </div>
</form>
                        </div>
                    </div>

                    <div class="wg-table table-product-list">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Banner</div>
                            </li>
                            <li>
                                <div class="body-title">Tiêu đề phụ</div>
                            </li>


                            <li>
                                <div class="body-title">Hành động</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @if (isset($notFound) && $notFound)
    <div class="alert alert-warning">Không tìm thấy.</div>
@endif
                            @foreach ($banners as $banner)
                                <li class="product-item gap14">
                                    <div class="image no-bg">
                                        <img src="{{ asset($banner->ImageURL) }}" alt="">
                                    </div>
                                    <div class="flex items-center justify-between gap20 flex-grow">
                                        <div class="name">
                                            <a href="{{ route('settings_banner.edit', $banner->BannerID) }}"
                                                class="body-title-2">{{ $banner->Title }}</a>
                                        </div>
                                        <div class="body-text">{{ $banner->subTitle }}</div>

                                        <div class="list-icon-function">
                                            <div class="item edit">
                                                <a href="{{ route('settings_banner.edit', $banner->BannerID) }}">
                                                    <i class="icon-edit-3"></i>
                                                </a>
                                            </div>
                                            <div class="user-item">
                                                <form action="{{ route('settings_banner.destroy',  $banner->BannerID) }}" method="POST" onsubmit="return confirm('Xác nhận xóa?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background: none;">
                                                        <i class="icon-trash-2"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="divider"></div>

                </div>
                <!-- /product-list -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content -->
@endsection

{{-- script --}}
@section('script')
    <!-- Javascript -->
    <script src="{{ asset('assets/js2/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js2/zoom.js') }}"></script>
    <script src="{{ asset('assets/js2/switcher.js') }}"></script>
    <script src="{{ asset('assets/js2/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js2/main.js') }}"></script>
@endsection
