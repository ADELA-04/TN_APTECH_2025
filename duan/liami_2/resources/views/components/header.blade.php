<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        .cart-quantity {
            position: absolute;
            /* Đặt vị trí */
            top: -5px;
            /* Điều chỉnh vị trí */
            right: -10px;
            /* Điều chỉnh vị trí */
            background-color: red;
            /* Màu nền */
            color: white;
            /* Màu chữ */
            border-radius: 50%;
            /* Hình tròn */
            width: 17px;
            /* Đặt chiều rộng */
            height: 17px;
            /* Đặt chiều cao */
            display: flex;
            /* Sử dụng flexbox */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            justify-content: center;
            /* Căn giữa theo chiều ngang */
            font-size: 11px;
            /* Kích thước chữ */
        }
    </style>
</head>

<body>
    <header class="style2 w-100">
        <div class="topbar-pad bg-color5 position-relative w-100">
            <div class="container">
                <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="topbar-left d-flex flex-wrap align-items-center">

                    </div><!-- Top Left -->
                    <div class="topbar-mid">
                    </div>
                    <div class="topbar-right">
                        <ul class="links-list d-flex flex-wrap align-items-center mb-0 list-unstyled">
                            @if (Auth::guard('customer')->check())
                                <!-- Kiểm tra nếu Customer đã đăng nhập -->
                                <li>
                                    <a style="font-family: 'Roboto';" href="{{ route('orders.index') }}" title="">Theo dõi đơn
                                        hàng</a>
                                </li>
                                <li>
                                    <a href="#" style="font-family: 'Roboto';" title="">
                                        {{ Auth::guard('customer')->user()->FullName }}
                                        <!-- Hiển thị tên đầy đủ của Customer -->
                                    </a>
                                </li>
                                <li>
                                    <a style="font-family: 'Roboto';" href="{{ route('logout_cus') }}"
                                        title="">Đăng
                                        xuất</a> <!-- Đường dẫn đăng xuất -->
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" style="font-family: 'Roboto';" title="">Đăng
                                        nhập</a>
                                </li>
                                <li>
                                    <a style="font-family: 'Roboto';" href="{{ asset('register') }}"
                                        title="">Đăng kí</a>
                                </li>
                            @endif
                        </ul>
                    </div><!-- Top Right -->
                </div><!-- Topbar Inner -->
            </div>
        </div><!-- Topbar -->
        <div class="logo-menu-wrap position-relative w-100">
            <div class="container">
                <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">

                        <div class="logo">
                            @foreach ($settings as $setting)
                                <h1 class="mb-0"><a href="{{ $setting->NavigationLink }}" title="Home"><img
                                            src="{{ asset($setting->Logo) }}" alt="Logo"></a></h1>
                            @endforeach
                        </div><!-- Logo -->
                    </div>
                    <div class="logo-menu-inner-mid">
                        <nav>
                            <ul>
                                <li class=" {{ request()->is('') ? 'active_head' : '' }}"><a
                                        href="{{ route('home') }}" title="">Trang chủ</a></li>
                                <li
                                    class="menu-item-has-children megamenu-item {{ request()->is('products/product_list') ? 'active_head' : '' }}">
                                    <a href="{{ route('product.all') }}" title="">Sản phẩm</a>
                                    <div class="megamenu-wrap position-absolute w-100">
                                        <div class="container">
                                            <div class="megamenu-inner position-relative w-100">
                                                <div class="row mrg30">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <div class="megamenu-box-wrap position-relative w-100">
                                                            <div class="row mrg30">
                                                                @foreach ($categories as $category)
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">

                                                                            <h4><a style="font-family: 'Roboto';"
                                                                                    href="{{ route('product_list_category', $category->CategoryID) }}">{{ $category->CategoryName }}</a>
                                                                            </h4>
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li>
                                                                                    <ul class="list-unstyled">
                                                                                        @foreach ($category->children as $child)
                                                                                            <li>
                                                                                                <a style="font-family: 'Roboto';"
                                                                                                    href="{{ route('product_list_category', $child->CategoryID) }}">{{ $child->CategoryName }}</a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div><!-- Megamenu Box Wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- Megamenu Inner -->
                                        </div>
                                    </div><!-- Megamenu Wrap -->
                                </li>

                                <li
                                    class="{{ request()->is('blogs') || request()->is('blogs_detail/*') ? 'active_head' : '' }}">
                                    <a href="{{ route('blogs') }}" title="">Tin tức</a>
                                </li>
                                <li class="{{ request()->is('contacts') ? 'active_head' : '' }}"><a
                                        href="{{ route('contacts') }}" title="">Liên hệ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li>
                                <form class="searchform position-relative" action="{{ route('search.products') }}"
                                    method="GET">
                                    <button type="submit"><i class="fi fi-rr-search"></i></button>
                                    <input style="font-family: 'Roboto';" type="search" name="search"
                                        placeholder="Tìm kiếm..." value="{{ request()->input('search') }}">
                                </form>
                            </li>
                              @if (Auth::guard('customer')->check())
                            <li>
                                <a class="d-inline-block" href="{{ route('cart.show') }}" title="">
                                    <i class="fi fi-rr-shopping-bag"></i>
                                    @php
                                        $user = Auth::guard('customer')->user();
                                        $totalQuantity = 0;
                                        if ($user) {
                                            $cart = App\Models\Cart::where('CustomerID', $user->CustomerID)->first();
                                            if ($cart) {
                                                $totalQuantity = $cart->cartItems()->sum('Quantity');
                                            }
                                        }
                                    @endphp
                                    @if ($totalQuantity > 0)
                                        <span class="cart-quantity">{{ $totalQuantity }}</span>
                                    @endif
                                </a>
                            </li>
                              @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div><!-- Logo Menu Wrap -->
    </header><!-- Header ok -->
    <div class="sticky-header w-100">
        <div class="container">
            <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">
                    <div class="logo">
                        @foreach ($settings as $setting)
                            <h1 class="mb-0"><a href="{{ $setting->NavigationLink }}" title="Home"><img
                                        src="{{ asset($setting->Logo) }}" alt="Logo"></a></h1>
                        @endforeach
                    </div><!-- Logo -->
                </div>
                <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                    <nav>
                        <ul>
                            <li class=" megamenu-item"><a href="{{ route('home') }}" title="">Trang chủ</a>
                            <li
                                class="menu-item-has-children megamenu-item {{ request()->is('products/product_list') ? 'active_head' : '' }}">
                                <a href="{{ route('product.all') }}" title="">Sản phẩm</a>
                                <div class="megamenu-wrap position-absolute w-100">
                                    <div class="container">
                                        <div class="megamenu-inner position-relative w-100">
                                            <div class="row mrg30">
                                                @foreach ($categories as $category)
                                                    <div class="col">
                                                        <div class="megamenu-item w-100">

                                                            <h4><a
                                                                    href="{{ route('product_list_category', $category->CategoryID) }}">{{ $category->CategoryName }}</a>
                                                            </h4>
                                                            <ul class="list-unstyled mb-0 w-100">
                                                                <li>
                                                                    <ul class="list-unstyled">
                                                                        @foreach ($category->children as $child)
                                                                            <li>
                                                                                <a href="{{ route('product_list_category', $child->CategoryID) }}"
                                                                                    title="">{{ $child->CategoryName }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div><!-- Megamenu Inner -->
                                    </div>
                                </div><!-- Megamenu Wrap -->
                            </li>
                            <li
                                class="{{ request()->is('blogs') || request()->is('blogs_detail/*') ? 'active_head' : '' }}">
                                <a href="{{ route('blogs') }}" title="">Tin tức</a>
                            </li>
                            <li class="{{ request()->is('contacts') ? 'active_head' : '' }}" megamenu-item"><a
                                    href="{{ route('contacts') }}" title="">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li>
                            <form class="searchform position-relative" action="{{ route('search.products') }}"
                                method="GET">
                                <button type="submit"><i class="fi fi-rr-search"></i></button>
                                <input style="font-family: 'Roboto';" type="search" name="search"
                                    placeholder="Tìm kiếm..." value="{{ request()->input('search') }}">
                            </form>
                        </li>
                        {{-- hiển thị giỏ hàng khi đăng nhập --}}
                        @if (Auth::guard('customer')->check())
                            <li>
                                <a class="d-inline-block" href="{{ route('cart.show') }}" title="">
                                    <i class="fi fi-rr-shopping-bag"></i>
                                    @php
                                        $user = Auth::guard('customer')->user();
                                        $totalQuantity = 0;
                                        if ($user) {
                                            $cart = App\Models\Cart::where('CustomerID', $user->CustomerID)->first();
                                            if ($cart) {
                                                $totalQuantity = $cart->cartItems()->sum('Quantity');
                                            }
                                        }
                                    @endphp
                                    @if ($totalQuantity > 0)
                                        <span class="cart-quantity">{{ $totalQuantity }}</span>
                                    @endif
                                </a>
                            </li>
                              @endif
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Sticky Header ok -->

    <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
        <span class="search-close-btn d-inline-flex flex-wrap justify-content-center align-items-center"><i
                class="fi fi-rr-cross-small"></i></span>
        <form action="{{ route('search.products') }}" method="GET">
            <button type="submit"><i class="fi fi-rr-search"></i></button>
            <input style="font-family: 'Roboto';" type="search" name="search" placeholder="Tìm kiếm..."
                value="{{ request()->input('search') }}">
        </form>
    </div><!-- Header Search -->
    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container">
                <div class="responsive-topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        @foreach ($settings as $setting)
                            <h1 class="mb-0"><a href="{{ $setting->NavigationLink }}" title="Home"><img
                                        src="{{ asset($setting->Logo) }}" alt="Logo"></a></h1>
                        @endforeach

                    </div><!-- Logo -->
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-center">
                        <form class="searchform position-relative" action="{{ route('search.products') }}"
                            method="GET">
                            <button type="submit"><i class="fi fi-rr-search"></i></button>
                            <input style="font-family: 'Roboto';" type="search" name="search"
                                placeholder="Tìm kiếm..." value="{{ request()->input('search') }}">
                        </form>
                    </div>
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li>
                                <a class="responsive-menu-trigger d-inline-block" href="javascript:void(0);"
                                    title=""><i class="fi fi-rr-align-justify"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Responsive Topbar -->
    </div><!-- Responsive Header -->
    <div class="responsive-menu w-100">
        <a class="responsive-menu-close position-absolute" href="javascript:void(0);" title=""><i
                class="fi fi-rr-cross-small"></i></a>
        <ul class="mb-0 list-unstyled w-100">
            <li class=""><a href="{{ route('home') }}" title="">Trang chủ</a>
            </li>
            <li class=""><a href="{{ route('product.all') }}" title="">Tất cả sản phẩm</a>

                @foreach ($categories as $category)
            <li class="menu-item-has-children"><a href="{{ route('product_list_category', $category->CategoryID) }}"
                    title="">{{ $category->CategoryName }}</a>
                @foreach ($category->children as $child)
                    <ul class="children mb-0 list-unstyled w-100">
                        <li>
                            <a href="{{ route('product_list_category', $child->CategoryID) }}"
                                title="">{{ $child->CategoryName }}</a>
                        </li>
                    </ul>
                @endforeach
            </li>
            @endforeach
            <li class="{{ request()->is('blogs') || request()->is('blogs_detail/*') ? 'active_head' : '' }}"><a
                    href="{{ route('blogs') }}" title="">Tin tức</a>

            </li>
            <li class="{{ request()->is('contacts') ? 'active_head' : '' }}"><a href="{{ route('contacts') }}"
                    title="">Liên hệ</a>

            </li>


            </li>
            @if (Auth::guard('customer')->check())
                <!-- Kiểm tra nếu Customer đã đăng nhập -->
                <li>
                    <a href="{{ route('orders.index') }}" title="">Theo dõi đơn hàng</a> <!-- Đường dẫn đăng xuất -->
                </li>
                            <li class=""><a href="{{ route('cart.show') }}" title="">Giỏ hàng</a>

                <li>
                    <a href="#" style="font-family: 'Roboto';" title="">
                        {{ Auth::guard('customer')->user()->FullName }} <!-- Hiển thị tên đầy đủ của Customer -->
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout_cus') }}" title="">Đăng xuất</a> <!-- Đường dẫn đăng xuất -->
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" style="font-family: 'Roboto';" title="">Đăng nhập</a>
                </li>
                <li>
                    <a href="{{ asset('register') }}" title="">Đăng kí</a>
                </li>
            @endif

        </ul>
    </div><!-- Responsive Menu -->
</body>

</html>
