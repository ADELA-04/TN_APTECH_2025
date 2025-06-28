@extends('layouts.master')
@section('title')
    <title>Thanh toán</title>
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
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
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="sec-title2 position-relative w-100">
                    <h3 class="mb-0">Thanh toán</h3>
                </div><!-- Section Title -->
                <div class="checkout-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6">

                            <div class="checkout-form w-100">

                                <form action="{{ route('checkout.store') }}" method="POST">
                                    @csrf <input type="hidden" name="total_amount" value="{{ $finalAmount }}">
                                    <input type="hidden" name="notes" value="{{ request('notes', '') }}">
                                    <input type="hidden" name="notes" value="{{ request('notes', '') }}">

                                    <div class="row mrg30">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Tên khách hàng *</label>
                                                <input required name="full_name" type="text"
                                                    value="{{ $user->FullName }}">

                                            </div>
                                        </div>
                                         <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Địa chỉ nhận hàng *</label>
                                                <input required name="address" type="text" value="{{ $address }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Số điện thoại *</label>
                                                <input placeholder="Số điện thoại phải là số và không quá 10 số" required
                                                    name="phone" type="text" value="{{ $phone }}"
                                                    pattern="^[0-9]{10}$" maxlength="10"
                                                    title="Số điện thoại phải là 10 chữ số"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">

                                            <div class="field-box v2  position-relative w-100">
                                                <label>Ghi chú cho cửa hàng</label>
                                                <textarea name="notes" placeholder="Nhập ghi cho cho cửa hàng..."></textarea>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Hình thức thanh toán *</label>
                                                <select name="payment_method" required>
                                                    {{-- <option>Chuyển khoản</option> --}}
                                                    <option>Thanh toán khi nhận hàng (COD)</option>

                                                </select>
                                            </div>
                                        </div>


                                    </div>

                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="cart-total v2 w-100">
                                <h4 style="font-family: 'Roboto';">Chi tiết đơn hàng</h4>
                                <table>
                                    <tr>
                                        <th>Đơn hàng</th>
                                        <th></th>
                                    </tr>
                                    @foreach ($cartItems as $item)
                                        <tr>

                                            <input type="hidden" name="cart_ids" id="cart-ids"
                                                value="{{ json_encode($cartItems->pluck('CartItemID')) }}">
                                            <td style="font-family: 'Roboto';">{{ $item->product->ProductName }} <span
                                                    style="color: rgb(226, 104, 4)">--{{ $item->Color }}</span><span
                                                    style="color: rgb(226, 104, 4)">--{{ $item->Size }}</span><span
                                                    style="color: rgb(226, 104, 4)">--sl:{{ $item->Quantity }}</span></td>
                                            <td><span
                                                    class="price">{{ number_format($item->product->SalePrice * $item->Quantity, 0) }}
                                                    VNĐ</span></td>
                                        </tr>
                                    @endforeach
                                    {{-- <input type="hidden" name="cart_ids" id="cart-ids" value="{{ json_encode($cartItems->pluck('CartID')) }}">                                    <tr> --}}
                                    <td style="font-family: 'Roboto';">Tổng tiền hàng</td>
                                    <td><span class="price">{{ number_format($totalAmount, 0) }} VNĐ</span></td>
                                    </tr>

                                    <tr>
                                        <td style="font-family: 'Roboto';">Phí vận chuyển</td>
                                        <td><span class="price">{{ number_format($shippingFee, 0) }} VNĐ</span></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'Roboto';">Thành tiền</td>
                                        <td><strong class="price">{{ number_format($finalAmount, 0) }} VNĐ</strong></td>
                                    </tr>
                                </table>

                                <button class="theme-btn bg-color1" type="submit">Thanh
                                    toán<span></span><span></span><span></span><span></span></button>
                                </form>
                            </div>
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
