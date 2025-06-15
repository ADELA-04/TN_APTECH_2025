@extends('layouts.master')
@section('title')
    <title>LIAMI</title>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="container">
                <div class="product-detail position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="product-detail-imgs position-relative w-100">
                                <span
                                    class="bg-color4 rounded-pill position-absolute">{{ round((($product->Price - $product->SalePrice) / $product->Price) * 100) }}%
                                    OFF</span>
                                <ul class="product-detail-img-nav list-unstyled mb-0">
                                    <li>
                                        <div class="product-detail-mini-img overflow-hidden">
                                            <img class="img-fluid w-100" src="{{ asset($product->Image) }}"
                                                alt="Product Detail Mini Image 1">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="product-detail-big-imgs list-unstyled mb-0">
                                    <li>
                                        <div class="product-detail-big-img overflow-hidden">
                                            <a href="{{ asset($product->Image) }}" data-fancybox="gallery" title="">
                                                <img class="img-fluid w-100" src="{{ asset($product->Image) }}"
                                                    alt="Product Detail Big Image 1">
                                                <i class="fi fi-rr-eye rounded-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- Product Detail Images -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="product-detail-info position-relative w-100">
                                <h2 class="mb-0" style="font-family: 'Roboto';">{{ $product->ProductName }}</h2>
                                <span class="mb-3 d-block price">
                                    <span
                                        style="text-decoration: line-through">{{ number_format($product->Price, 0, ',', '.') }}
                                        VNĐ</span>
                                    <span> - </span>
                                    <span
                                        style="color: #ff0003;font-weight:bold;">{{ number_format($product->SalePrice, 0, ',', '.') }}
                                        VNĐ</span>
                                </span>
                                <p class="mb-4">{{ $product->Summary }}</p>
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->ProductID }}">
                                    <div class="product-bottom d-flex flex-wrap align-items-center w-100">
                                        <div class="mr-05 product-quanty">
                                            <input type="number" name="quantity" class="qty" value="1"
                                                min="1">
                                        </div>
                                        <div>
                                            <select name="color" required>
                                                @foreach (explode(',', $product->Color) as $color)
                                                    <option value="{{ trim($color) }}">{{ trim($color) }}</option>
                                                @endforeach
                                            </select>
                                            <select name="size" required>
                                                @foreach (explode(',', $product->Size) as $size)
                                                    <option value="{{ trim($size) }}">{{ trim($size) }}</option>
                                                @endforeach
                                            </select>
                                            <button class="theme-btn bg-color1 mr-05 mb-10" type="submit">Thêm vào giỏ
                                                hàng</button>

                                        </div>
                                    </div>
                                </form>
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
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" style="font-family: 'Roboto';"
                                data-bs-target="#product-detail-tab1-1" type="button">Mô tả</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product-detail-tab1-2"
                                type="button" style="font-family: 'Roboto';">Thông số sản phẩm</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product-detail-tab1-3"
                                type="button" style="font-family: 'Roboto';">Đánh giá</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-detail-tab1-1">
                            <div class="product-detail-tab-content w-100">
                                <div class="row mrg30">
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <h4 class="mb-0" style="font-family: 'Roboto';">Thông tin mô tả:</h4>
                                        <p class="mb-0">{!! $product->Description !!}</p>
                                        <!-- Hiển thị nội dung với định dạng -->
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        @foreach ($settings as $setting)
                                            <h4 class="mb-0" style="font-family: 'Roboto';">Mọi thắc mắc vui lòng liên
                                                hệ:</h4>
                                            <p class="mb-1" style="font-family: 'Roboto';">Điện thoại:
                                                {{ $setting->Phone }}</p>
                                            <p class="mb-1">Email: {{ $setting->Email }}</p>
                                            <img src="{{ asset('assets/images3/zalo.png') }}" alt=""
                                                style="height: 100px; width: 100px;">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-detail-tab1-2">
                            <div class="product-detail-tab-content w-100">
                                <div class="product-detail-info-table w-100">
                                    <table>
                                        <tr>
                                            <th>Giá</th>
                                            <td>{{ $product->Price }} VNĐ</td>
                                        </tr>
                                        <tr>
                                            <th>Giá giảm</th>
                                            <td>{{ $product->SalePrice }} VNĐ</td>
                                        </tr>
                                        <tr>
                                            <th>Kích thước</th>
                                            <td>{{ $product->Size }}</td>
                                        </tr>
                                        <tr>
                                            <th>Màu sắc</th>
                                            <td>{{ $product->Color }}</td>
                                        </tr>
                                        <tr>
                                            <th>Chất liệu</th>
                                            <td>{{ $product->Material }}</td>
                                        </tr>
                                        <tr>
                                            <th>Khối lượng (kg)</th>
                                            <td>{{ $product->Weigh }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nhà cung cấp</th>
                                            <td>{{ $product->Brand }}</td>
                                        </tr>
                                        <tr>
                                            <th>Danh mục sản phẩm</th>
                                            <td>{{ $product->category->CategoryName }}</td>
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

    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0" style="font-family: 'Roboto';"><span class="text-color4">Sản phẩm </span>liên quan
                    </h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="product-box position-relative w-100">
                                    <div class="product-img overflow-hidden position-relative w-100">
                                        <a href="{{ route('product.detail', $relatedProduct->ProductID) }}"
                                            title="">
                                            <img class="img-fluid w-100" src="{{ asset($relatedProduct->Image) }}"
                                                alt="Product Image 7">
                                        </a>
                                    </div>
                                    <div class="product-info w-100">
                                        <h4 class="mb-0">
                                            <a href="{{ route('product.detail', $relatedProduct->ProductID) }}"
                                                title="">{{ $relatedProduct->ProductName }}</a>
                                        </h4>
                                        <div style="display: flex; justify-content: center; margin-top: 10px;">
                                            <div style="margin-right: 10px">
                                                <span class="price"
                                                    style="text-decoration: line-through">{{ $relatedProduct->Price }}
                                                    VND</span>
                                            </div>
                                            <div>
                                                <span class="price"
                                                    style="color: #ff0003; font-weight:bold;">{{ $relatedProduct->SalePrice }}
                                                    VND</span>
                                            </div>
                                        </div>

                                        <div style="text-align: center;" class="mt-20">
                                            <a class=""
                                                href="{{ route('product.detail', $relatedProduct->ProductID) }}"
                                                title="">
                                                <button class="theme-btn bg-color1" type="submit">Xem
                                                    ngay<span></span><span></span><span></span><span></span></button>
                                            </a>
                                        </div>
                                        {{-- <p style="text-align: right"><i class="fas fa-eye"></i> :
                                            {{ $relatedProduct->View }}</p> --}}
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- Products Wrap -->
                <div class="mb-5 view-more d-block mt-60 position-relative text-center w-100">
                    <a class="theme-btn bg-color4 brd-btn" style="font-family: 'Roboto';"
                        href="{{ route('product.all') }}" title="">Tất cả sản
                        phẩm<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
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
