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

                            <li><a href="{{ asset('acounts/login') }}" title="">Sign In</a></li>

                            <li><a href="{{ asset('acounts/login') }}" title="">Sign In</a></li>
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
                            <h1 class="mb-0 "><a href="{{ asset('') }}" title="Home"><img
                                        src="{{ asset('assets/images/logo.svg')}}" alt="Logo"></a></h1>
                        </div><!-- Logo -->
                    </div>
                    <div class="logo-menu-inner-mid">
                        <nav>
                            <ul>
                                <li class=" {{ request()->is('') ? 'active_head' : '' }}"><a href="{{ asset('') }}" title="">Home</a></li>
                                <li class="menu-item-has-children megamenu-item {{ request()->is('products/product_list') ? 'active_head' : '' }}"><a href="{{ route('products.product_list') }}"
                                        title="">Woments</a>
                                    <div class="megamenu-wrap position-absolute w-100">
                                        <div class="container">
                                            <div class="megamenu-inner position-relative w-100">
                                                <div class="row mrg30">
                                                    <div class="col-md-7 col-sm-12 col-lg-7">
                                                        <div class="megamenu-box-wrap position-relative w-100">
                                                            <div class="row mrg30">

                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Áo</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{ route('products.detail') }}"
                                                                                    title="">Áo sơ mi <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>
                                                                            <li><a href="" title="">Áo vest
                                                                                    <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>

                                                                            <li><a href="" title="">Áo
                                                                                    dài</a></li>
                                                                            <li><a href="" title="">Áo
                                                                                    cộc</a></li>
                                                                            <li><a href="" title="">Giày
                                                                                    <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Quần</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="" title="">Quần
                                                                                    jean</a></li>
                                                                            <li><a href="" title="">Quần
                                                                                    kaki</a></li>
                                                                            <li><a href="" title="">Quần
                                                                                    cộc</a></li>
                                                                            <li><a href="" title="">Quần
                                                                                    leddging <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>
                                                                            <li><a href="" title="">Quần
                                                                                    thể thao</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Đồ bộ</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="" title="">Mùa
                                                                                    hè</a></li>
                                                                            <li><a href="" title="">Mùa
                                                                                    đông</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Giày</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Giày thể thao</a>
                                                                            </li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Giày cao gót</a>
                                                                            </li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Giày sandal</a></li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Dép</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Phụ kiện</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Phụ kiện tóc</a>
                                                                            </li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Trang sức</a></li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Kính</a></li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Dây lưng</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Megamenu Box Wrap -->
                                                    </div>

                                                </div>
                                            </div><!-- Megamenu Inner -->
                                        </div>
                                    </div><!-- Megamenu Wrap -->
                                </li>
                                <li class="menu-item-has-children megamenu-item"><a href="javascript:void(0);"
                                        title="">Ments</a>
                                    <div class="megamenu-wrap position-absolute w-100">
                                        <div class="container">
                                            <div class="megamenu-inner position-relative w-100">
                                                <div class="row mrg30">
                                                    <div class="col-md-7 col-sm-12 col-lg-7">
                                                        <div class="megamenu-box-wrap position-relative w-100">
                                                            <div class="row mrg30">

                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Áo</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{ route('products.detail') }}"
                                                                                    title="">Áo sơ mi <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>
                                                                            <li><a href="" title="">Áo
                                                                                    vest <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>

                                                                            <li><a href="" title="">Áo
                                                                                    dài</a></li>
                                                                            <li><a href="" title="">Áo
                                                                                    cộc</a></li>
                                                                            <li><a href="" title="">Giày
                                                                                    <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Quần</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="" title="">Quần
                                                                                    jean</a></li>
                                                                            <li><a href="" title="">Quần
                                                                                    kaki</a></li>
                                                                            <li><a href="" title="">Quần
                                                                                    cộc</a></li>
                                                                            <li><a href="" title="">Quần
                                                                                    leddging <span
                                                                                        class="badge bg-color4 rounded-pill">New</span></a>
                                                                            </li>
                                                                            <li><a href="" title="">Quần
                                                                                    thể thao</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Đồ bộ</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="" title="">Mùa
                                                                                    hè</a></li>
                                                                            <li><a href="" title="">Mùa
                                                                                    đông</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Giày</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Giày thể thao</a>
                                                                            </li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Giày cao gót</a>
                                                                            </li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Giày sandal</a></li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Dép</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Phụ kiện</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Phụ kiện tóc</a>
                                                                            </li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Trang sức</a></li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Kính</a></li>
                                                                            <li><a href="product-detail.html"
                                                                                    title="">Dây lưng</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Megamenu Box Wrap -->
                                                    </div>

                                                </div>
                                            </div><!-- Megamenu Inner -->
                                        </div>
                                    </div><!-- Megamenu Wrap -->
                                </li>
                                <li class="{{ request()->is('blogs') ? 'active_head' : '' }}"><a href="" title="">Blogs</a>

                                </li>
                                <li class="{{ request()->is('contacts') ? 'active_head' : '' }}"><a href="" title="">Contact</a>

                                </li>


                            </ul>
                        </nav>
                    </div>
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li>
                                <form class="searchform position-relative">
                                    <button type="submit"><i class="fi fi-rr-search"></i></button>
                                    <input type="search" placeholder="Search">
                                </form>
                            </li>
                            <li>
                                <a class="cart-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-shopping-bag"></i></a>
                            </li>
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
                        <h1 class="mb-0"><a href="index.html" title="Home"><img
                                    src="{{ asset('assets/images/logo.svg') }}" alt="Logo"></a></h1>
                    </div><!-- Logo -->
                </div>
                <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                    <nav>
                        <ul>
                            <li class=" megamenu-item"><a href="javascript:void(0);" title="">Home</a>
                            <li class="menu-item-has-children megamenu-item {{ request()->is('products/product_list') ? 'active_head' : '' }}"><a href="{{ route('products.product_list') }}"
                                    title="">Woments</a>
                                <div class="megamenu-wrap position-absolute w-100">
                                    <div class="container">
                                        <div class="megamenu-inner position-relative w-100">
                                            <div class="row mrg30">
                                                <div class="col-md-7 col-sm-12 col-lg-7">
                                                    <div class="megamenu-box-wrap position-relative w-100">
                                                        <div class="row mrg30">
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Áo</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="{{ route('products.detail') }}"
                                                                                title="">Áo sơ mi <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>
                                                                        <li><a href="" title="">Áo vest
                                                                                <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>

                                                                        <li><a href="" title="">Áo
                                                                                dài</a></li>
                                                                        <li><a href="" title="">Áo
                                                                                cộc</a></li>
                                                                        <li><a href="" title="">Giày
                                                                                <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Quần</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="" title="">Quần
                                                                                jean</a></li>
                                                                        <li><a href="" title="">Quần
                                                                                kaki</a></li>
                                                                        <li><a href="" title="">Quần
                                                                                cộc</a></li>
                                                                        <li><a href="" title="">Quần
                                                                                leddging <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>
                                                                        <li><a href="" title="">Quần thể
                                                                                thao</a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Đồ bộ</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="" title="">Mùa
                                                                                hè</a></li>
                                                                        <li><a href="" title="">Mùa
                                                                                đông</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Giày</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="product-detail.html"
                                                                                title="">Giày thể thao</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Giày cao gót</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Giày sandal</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Dép</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Phụ kiện</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="product-detail.html"
                                                                                title="">Phụ kiện tóc</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Trang sức</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Kính</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Dây lưng</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- Megamenu Box Wrap -->
                                                </div>

                                            </div>
                                        </div><!-- Megamenu Inner -->
                                    </div>
                                </div><!-- Megamenu Wrap -->
                            </li>
                            <li class="menu-item-has-children megamenu-item"><a href="javascript:void(0);"
                                    title="">Ments</a>
                                <div class="megamenu-wrap position-absolute w-100">
                                    <div class="container">
                                        <div class="megamenu-inner position-relative w-100">
                                            <div class="row mrg30">
                                                <div class="col-md-7 col-sm-12 col-lg-7">
                                                    <div class="megamenu-box-wrap position-relative w-100">
                                                        <div class="row mrg30">
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Áo</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="{{ route('products.detail') }}"
                                                                                title="">Áo sơ mi <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>
                                                                        <li><a href="" title="">Áo vest
                                                                                <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>

                                                                        <li><a href="" title="">Áo
                                                                                dài</a></li>
                                                                        <li><a href="" title="">Áo
                                                                                cộc</a></li>
                                                                        <li><a href="" title="">Giày
                                                                                <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Quần</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="" title="">Quần
                                                                                jean</a></li>
                                                                        <li><a href="" title="">Quần
                                                                                kaki</a></li>
                                                                        <li><a href="" title="">Quần
                                                                                cộc</a></li>
                                                                        <li><a href="" title="">Quần
                                                                                leddging <span
                                                                                    class="badge bg-color4 rounded-pill">New</span></a>
                                                                        </li>
                                                                        <li><a href="" title="">Quần thể
                                                                                thao</a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Đồ bộ</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="" title="">Mùa
                                                                                hè</a></li>
                                                                        <li><a href="" title="">Mùa
                                                                                đông</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Giày</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="product-detail.html"
                                                                                title="">Giày thể thao</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Giày cao gót</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Giày sandal</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Dép</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="megamenu-item w-100">
                                                                    <h4>Phụ kiện</h4>
                                                                    <ul class="list-unstyled mb-0 w-100">
                                                                        <li><a href="product-detail.html"
                                                                                title="">Phụ kiện tóc</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Trang sức</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Kính</a></li>
                                                                        <li><a href="product-detail.html"
                                                                                title="">Dây lưng</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- Megamenu Box Wrap -->
                                                </div>

                                            </div>
                                        </div><!-- Megamenu Inner -->
                                    </div>
                                </div><!-- Megamenu Wrap -->
                            </li>

                            <li class="{{ request()->is('blogs') ? 'active_head' : '' }}"><a href="" title="">Blogs</a>

                            </li>
                            <li class="{{ request()->is('contacts') ? 'active_head' : '' }}" megamenu-item"><a href="" title="">Contact</a>

                            </li>
                        </ul>
                    </nav>
                    <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                        <li>
                            <form class="searchform position-relative">
                                <button type="submit"><i class="fi fi-rr-search"></i></button>
                                <input type="search" placeholder="Search">
                            </form>

                        </li>
                        <li>
                            <a class="cart-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-shopping-bag"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Sticky Header ok -->
    <div class="mini-cart-wrap position-fixed w-100">
        <div class="mini-cart-dropdown w-100">
            <div class="mini-cart-dropdown-inner w-100">
                <div class="mini-cart-head d-flex flex-wrap align-items-center justify-content-between w-100">
                    <h4>Cart review</h4>
                    <a class="mini-cart-close d-inline-block" href="javascript:void(0);" title=""><i
                            class="fi fi-rr-cross-small"></i></a>
                </div>
                <ul class="mini-cart-list mb-0 list-unstyled position-relative w-100">
                    <li>
                        <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                            <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);"
                                title=""><i class="fi fi-rr-cross-small"></i></a>
                            <div class="mini-cart-img overflow-hidden"><a href="product-detail.html"
                                    title=""><img class="img-fluid w-100"
                                        src="assets/images/resources/mini-cart-img1-1.jpg"
                                        alt="Mini Cart Image 1"></a></div>
                            <div class="mini-cart-info">
                                <h6 class="mb-0"><a href="product-detail.html" title="">Commodo Blown
                                        Lamp</a></h6>
                                <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="product-quanty"><input type="number" class="qty" value="01">
                                    </div>
                                    <span class="price">$275.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                            <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);"
                                title=""><i class="fi fi-rr-cross-small"></i></a>
                            <div class="mini-cart-img overflow-hidden"><a href="product-detail.html"
                                    title=""><img class="img-fluid w-100"
                                        src="assets/images/resources/mini-cart-img1-2.jpg"
                                        alt="Mini Cart Image 2"></a></div>
                            <div class="mini-cart-info">
                                <h6 class="mb-0"><a href="product-detail.html" title="">Commodo Blown
                                        Lamp</a></h6>
                                <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="product-quanty"><input type="number" class="qty" value="01">
                                    </div>
                                    <span class="price">$275.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                            <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);"
                                title=""><i class="fi fi-rr-cross-small"></i></a>
                            <div class="mini-cart-img overflow-hidden"><a href="product-detail.html"
                                    title=""><img class="img-fluid w-100"
                                        src="assets/images/resources/mini-cart-img1-3.jpg"
                                        alt="Mini Cart Image 3"></a></div>
                            <div class="mini-cart-info">
                                <h6 class="mb-0"><a href="product-detail.html" title="">Commodo Blown
                                        Lamp</a></h6>
                                <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="product-quanty"><input type="number" class="qty" value="01">
                                    </div>
                                    <span class="price">$275.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                            <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);"
                                title=""><i class="fi fi-rr-cross-small"></i></a>
                            <div class="mini-cart-img overflow-hidden"><a href="product-detail.html"
                                    title=""><img class="img-fluid w-100"
                                        src="assets/images/resources/mini-cart-img1-4.jpg"
                                        alt="Mini Cart Image 4"></a></div>
                            <div class="mini-cart-info">
                                <h6 class="mb-0"><a href="product-detail.html" title="">Commodo Blown
                                        Lamp</a></h6>
                                <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="product-quanty"><input type="number" class="qty" value="01">
                                    </div>
                                    <span class="price">$275.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mini-cart-bottom w-100">
                    <div class="mini-cart-total d-flex flex-wrap align-items-center justify-content-between">
                        <span>Subtotal:</span>
                        <span class="price">$524.00</span>
                    </div>
                    <div class="btns-group d-flex flex-wrap align-items-center justify-content-between">
                        <a class="theme-btn bg-color1 brd-btn" href="cart.html" title="">View
                            Cart<span></span><span></span><span></span><span></span></a>
                        <a class="theme-btn bg-color1" href="checkout.html"
                            title="">Checkout<span></span><span></span><span></span><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Mini Cart Wrap ok -->
    <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
        <span class="search-close-btn d-inline-flex flex-wrap justify-content-center align-items-center"><i
                class="fi fi-rr-cross-small"></i></span>
        <form>
            <input type="text" placeholder="Search">
            <button type="submit"><i class="fi fi-rr-search"></i></button>
        </form>
    </div><!-- Header Search -->
    <div class="responsive-header position-relative w-100">
        <div class="responsive-topbar w-100">
            <div class="container">
                <div class="responsive-topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        <h1 class="mb-0"><a href="index.html" title="Home"><img src="{{ asset('assets/images/logo.svg') }}"
                                    alt="Logo"></a></h1>
                    </div><!-- Logo -->
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
            <li class=""><a href="javascript:void(0);" title="">Home</a>

            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Woments</a>
                <ul class="children mb-0 list-unstyled w-100">
                    <li><a href="index.html" title="">Áo</a>
                        <ul>

                        </ul>
                    </li>
                    <li><a href="index.html" title="">Quần</a>
                        <ul>

                        </ul>
                    </li>
                    <li><a href="index.html" title="">Đồ bộ</a>
                        <ul>


                        </ul>
                    </li>
                    <li><a href="index.html" title="">Phụ kiện</a>
                        <ul>

                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Ments</a>
                <ul class="children mb-0 list-unstyled w-100">
                    <li><a href="index.html" title="">Áo</a>

                    </li>
                    <li><a href="index.html" title="">Quần</a>
                        <ul>

                        </ul>
                    </li>
                    <li><a href="index.html" title="">Đồ bộ</a>
                        <ul>


                        </ul>
                    </li>
                    <li><a href="index.html" title="">Phụ kiện</a>
                        <ul>

                        </ul>
                    </li>
                </ul>
            </li>

            <li class=""><a href="javascript:void(0);" title="">Blogs</a>

            </li>
            <li class=""><a href="javascript:void(0);" title="">Contact</a>

            </li>

            <li><a href="login.html" title="">Sign In</a></li>
        </ul>
    </div><!-- Responsive Menu -->
</body>

</html>
