@extends('layouts.master2')
@section('title')
<title>Login</title>

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
.field-box {
    position: relative; /* Để có thể định vị các phần tử con */
}

.input-container {
    position: relative; /* Để có thể định vị nút toggle bên trong */
}

input[type="password"] {
    padding-right: 40px; /* Tạo khoảng trống cho biểu tượng */
    width: 100%; /* Đảm bảo ô nhập chiếm toàn bộ chiều rộng */
}

.toggle-password {
    position: absolute;
    right: 60px; /* Đặt nút ở bên phải */
    transform: translateY(-50%); /* Căn giữa chính xác */
    background: none;
    border: none;
    cursor: pointer;
    color: #aaa; /* Màu sắc cho biểu tượng */
    z-index: 1; /* Đảm bảo biểu tượng nằm trên ô input */
}

.toggle-password:hover {
    color: #333; /* Màu sắc khi hover */
}
</style>
@endsection
@section('content')
<section>
    <div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
        <div class="lg-rg-img position-relative">
            <div class="fixed-bg" style="background-image: url('{{ asset('assets/images/lg-rg-bg.jpg') }}');"></div>
            <div class="logo">
                <h1 class="mb-0">
                    <a href="{{ asset('index.html') }}" title="Home"><img src="{{ asset('assets/images/logo.svg') }}" alt="Logo"></a>
                </h1>
            </div><!-- Logo -->
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">

            <div class="lg-rg-form-inner w-100">
                <h2 class="mb-0">Sign in to LIAMI</h2>
                <p class="mb-0">Enter your detail below</p>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="field-box v2 position-relative w-100">
                        <label>Email</label>
                        <input type="email" name="Email" required>
                    </div>
                    <div class="field-box v2 position-relative w-100">
                        <label>Password</label>
                        <input type="password" name="Password" required id="password">
                        <button type="button" id="toggle-password" class="toggle-password"><i class="fas fa-eye"></i></button>
                    </div>
                    <div class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                        <button class="theme-btn bg-color1" type="submit">Sign In<span></span><span></span><span></span><span></span></button>
                        <a class="d-inline-block simple-btn" href="{{ asset('forgot-password.html') }}" title="">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- Login & Register Wrap -->
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
<script src="{{ asset('assets/js2/custom.js') }}"></script>
@endsection
