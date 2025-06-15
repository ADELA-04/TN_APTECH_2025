<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- section-menu-left -->
    <div class="section-menu-left">
        <div class="box-logo">
            <a href="index.html" id="site-logo-inner">
                <img class="" id="logo_header" alt="" src="{{ asset('assets/images/logo.svg') }}"
                    data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png">
            </a>
            <div class="button-show-hide">
                <i class="icon-menu-left"></i>
            </div>
        </div>
        <div class="section-menu-left-wrap" >
            <div class="center">
                {{-- <div class="center-item">
                    <div class="center-heading">Tổng quan</div>
                    <ul class="menu-list">
                        <li class="menu-item {{ request()->is('admin')|| request()->is('managers') ? 'active' : '' }}">
                            <a href="{{ route('managers.manager') }}" class="">
                                <div class="icon"><i class="icon-grid"></i></div>
                                <div class="text">Dashboard</div>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <div class="center-item">
                    <div class="center-heading">Quản lí</div>
                    <ul class="menu-list">
                        {{-- <li class="menu-item has-children">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-file-plus"></i></div>
                                <div class="text">Order</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="oder-list.html" class="active">
                                        <div class="text">Order list</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="oder-detail.html" class="">
                                        <div class="text">Managerment COD</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="oder-tracking.html" class="">
                                        <div class="text">Transaction management
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="menu-item has-children {{ request()->is('products*') ||request()->is('managers/m_product*') ||request()->is('category*') || request()->is('managers/m_category*')|| request()->is('category/create') || request()->is('managers/m_category/store')|| request()->is('category/*/edit') || request()->is('category/*') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-shopping-cart"></i></div>
                                <div class="text">Ecommerce</div>
                            </a>
                            <ul class="sub-menu"> --}}
                                {{-- <li class="sub-menu-item">
                                    <a href="{{ route('managers.m_product.manager_product') }}" class="{{ request()->is('products*') ||request()->is('managers/m_product/manager_product') || request()->is('managers/m_product*') || request()->is('managers/m_product/update_product') ? 'active' : '' }}">
                                        <div class="text">Product</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item ">
                                    <a href="{{ route('managers.m_category.manager_category') }}" class="{{ request()->is('category*') ||request()->is('managers/m_category/manager_category') || request()->is('managers/m_category*') || request()->is('category/create') || request()->is('managers/m_category/store')|| request()->is('category/*/edit') || request()->is('category/*') ? 'active' : '' }}">
                                        <div class="text">Category</div>
                                    </a>
                                </li> --}}
                                {{-- <li class="sub-menu-item">
                                    <a href="product-list.html" class="">
                                        <div class="text">Inventory</div>
                                    </a>
                                </li> --}}

                            {{-- </ul>
                        </li> --}}
                        {{-- </li> --}}
                        {{-- <li
                            class="menu-item {{ request()->is('managers/m_blog/manager_blog') || request()->is('managers/m_blog*') || request()->is('managers/m_blog/update_blog') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_blog.manager_blog') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-file-plus"></i></div>
                                <div class="text">Blog</div>
                            </a>

                        </li> --}}
                        {{-- <li
                        class="menu-item {{ request()->is('managers/m_customer*')? 'active' : '' }} }}">
                        <a href="{{ route('managers.m_customer.manager_customer') }}" class="menu-item-button">
                            <div class="icon"><i class="icon-user"></i></div>
                            <div class="text">Customer</div>
                        </a>

                    </li> --}}
                        <li
                            class="menu-item {{ request()->is('managers/m_user/manager_user') || request()->is('managers/m_user*') || request()->is('managers/m_user/update_user') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_user.manager_user') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-user"></i></div>
                                <div class="text">Tài khoản</div>
                            </a>

                        </li>
                        {{-- <li class="menu-item {{ request()->is('') ? 'active' : '' }}">
                            <a href="report.html" class="">
                                <div class="icon"><i class="icon-pie-chart"></i></div>
                                <div class="text">Report</div>
                            </a>
                        </li> --}}
                    </ul>
                </div>
                {{-- <div class="center-item">
                    <div class="center-heading">Setting</div>
                    <ul class="menu-list">

                        <li class="menu-item has-children {{ request()->is('settings/edit') || request()->is('settings/create') || request()->is('managers/settings/settings_banner')|| request()->is('apparence/edit')  ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="">
                                <div class="icon"><i class="icon-settings"></i></div>
                                <div class="text">Setting</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="{{ route('settings.edit') }}" class="{{ request()->is('settings/edit')  ? 'active' : '' }}">
                                        <div class="text">General Setting</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="{{ route('managers.settings_banner') }}" class="{{ request()->is('settings/create') || request()->is('managers/settings/settings_banner')|| request()->is('settings/*/edit')  ? 'active' : '' }}">
                                        <div class="text">Banner Page</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="{{ route('apparence.edit') }}" class="{{  request()->is('apparence/edit')  ? 'active' : '' }}">
                                        <div class="text">Apparence Page</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="new-page.html" class="">
                                        <div class="text">Shop Address</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="edit-page.html" class="">
                                        <div class="text">Shipping</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div> --}}
            </div>

        </div>
    </div>
    <!-- /section-menu-left -->

</body>

</html>
