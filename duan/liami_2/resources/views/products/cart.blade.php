@extends('layouts.master')
@section('title')
    <title>Giỏ hàng</title>
@endsection
@section('css')
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
@endsection
@section('content')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="sec-title2 d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                    <h3 class="mb-0" style="font-family: 'Roboto';">Giỏ hàng của bạn</h3>
                </div><!-- Section Title 2 -->
                <div class="cart-wrap position-relative w-100">
                    <form class="text-center" action="{{ route('checkout') }}" method="POST" id="checkout-form">
                        @csrf
                        <input type="hidden" name="products" id="selected-products">
                        <table class="cart-table w-100">
                            <thead>
                                <tr>
                                    <th style="font-family: 'Roboto';">Sản phẩm</th>
                                    <th style="font-family: 'Roboto';">Thông số</th>
                                    <th style="font-family: 'Roboto';">Đơn giá</th>
                                    <th style="font-family: 'Roboto';">Số lượng</th>
                                    <th style="font-family: 'Roboto';">Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr class="cart-item" data-product-id="{{ $item->ProductID }}">
                                        <input type="hidden" class="cart-item-id" value="{{ $item->CartItemID }}">

                                        <td class="d-flex align-items-center">
                                            <div style="margin-right: 20px;">
                                                <input type="checkbox" class="product-select">
                                            </div>
                                            <div class="cart-product-box d-flex flex-wrap align-items-center">
                                                <div class="cart-product-img overflow-hidden">
                                                    <a href="{{ route('product.detail', $item->ProductID) }}">
                                                        <img class="img-fluid w-50"
                                                            src="{{ asset($item->product->Image) }}" alt="Cart Image">
                                                    </a>
                                                </div>
                                                <h5 class="mb-0">
                                                    <a style="font-family: 'Roboto';"
                                                        href="{{ route('product.detail', $item->ProductID) }}">{{ Str::limit($item->product->ProductName, 20, '...') }}</a>
                                                </h5>
                                            </div>
                                        </td>
                                        <td><span>{{ $item->Color }}-{{ $item->Size }}</span></td>
                                        <td><span class="price">{{ number_format($item->product->SalePrice, 0) }}
                                                VNĐ</span></td>
                                        <td><span class="product-quanty">{{ $item->Quantity }}</span></td>
                                        <td><span
                                                class="price text-color1">{{ number_format($item->Quantity * $item->product->SalePrice, 0) }}
                                                VNĐ</span></td>
                                        <td>
                                            <button type="button" class="remove-product" onclick="removeFromCart({{ $item->CartItemID }})">
                                                <i class="fi fi-rr-cross-small"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-30 justify-content-center">
                            <button class="theme-btn bg-color1 " type="submit">
                                Mua hàng<span></span><span></span><span></span><span></span>
                            </button>
                        </div>
                    </form>
                </div><!-- Cart Wrap -->
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
    <script>
        //xóa bằng js
            function removeFromCart(cartItemId) {
            fetch(`/cart/remove/${cartItemId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            });
            location.reload();
        }
        // lấy id cartiterm được check và đẩy sang form thanh toán
        $(document).ready(function() {
            function calculateSelectedTotals() {
                let selectedProducts = [];

                $('.cart-item').each(function() {
                    const isSelected = $(this).find('.product-select').is(':checked');
                    if (isSelected) {
                        const cartItemId = $(this).find('.cart-item-id').val(); // CartItemID
                        const quantity = parseInt($(this).find('.product-quanty').text());

                        selectedProducts.push({
                            id: cartItemId,
                            quantity: quantity
                        });
                    }
                });

                $('#selected-products').val(JSON.stringify(selectedProducts));
            }
            $('.product-select').on('change', function() {
                calculateSelectedTotals();
            });
        });
    </script>
@endsection
