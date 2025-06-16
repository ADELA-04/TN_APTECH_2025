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
        <div class="section-menu-left-wrap">
            <div class="center">
                <div class="center-item">
                    <div class="center-heading">Tổng quan</div>
                    <ul class="menu-list">
                        <li class="menu-item {{ request()->is('admin') || request()->is('managers') ? 'active' : '' }}">
                            <a href="{{ route('managers.manager') }}" class="">
                                <div class="icon"><i class="icon-grid"></i></div>
                                <div class="text">Tổng quan hệ thống</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="center-item">
                    <div class="center-heading">Quản lí</div>
                    <ul class="menu-list">

                        <li class="menu-item {{ request()->is('orderslist')|| request()->is('orders/*') ? 'active' : '' }}">
                            <a href="{{ route('orders.index2') }}" class=""
                                class="menu-item-button">
                                <div class="icon"><i class="icon-shopping-cart"></i></div>
                                <div class="text">Quản lí đơn hàng</div>
                            </a>
                        </li>
                        <li
                            class="menu-item {{ request()->is('managers/m_product*') || request()->is('products*') || request()->is('products/create') || request()->is('products/update') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_product.manager_product') }}"
                                class="{{ request()->is('managers/m_product/manager_product') || request()->is('managers/m_product*') || request()->is('managers/m_product/update_product') ? 'active' : '' }}"
                                class="menu-item-button">
                                <div class="icon"><i class="icon-shopping-cart"></i></div>
                                <div class="text">Quản lí sản phẩm</div>
                            </a>
                        </li>

                        <li
                            class="menu-item {{ request()->is('managers/m_category*') || request()->is('category/create') || request()->is('managers/m_category/store') || request()->is('category/*/edit') || request()->is('category/*') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_category.manager_category') }}"
                                class="{{ request()->is('managers/m_category/manager_category') || request()->is('managers/m_category*') || request()->is('category/create') || request()->is('managers/m_category/store') || request()->is('category/*/edit') || request()->is('category/*') ? 'active' : '' }}"
                                class="menu-item-button">
                                <div class="icon"><i class="icon-file-plus"></i></div>
                                <div class="text">Quản lí danh mục</div>
                            </a>

                        </li>
                        <li class="menu-item {{ request()->is('manager_customer') ? 'active' : '' }} }}">
                            <a href="{{ route('manager_customer') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-user"></i></div>
                                <div class="text">Quản lí khách hàng</div>
                            </a>

                        </li>

                        <li
                            class="menu-item {{ request()->is('managers/m_user/manager_user') || request()->is('managers/m_user*') || request()->is('managers/m_user/update_user') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_user.manager_user') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-user"></i></div>
                                <div class="text">Quản lí nhân viên</div>
                            </a>

                        </li>
                        <li
                            class="menu-item {{ request()->is('managers/m_blog/manager_blog') || request()->is('managers/m_blog*') || request()->is('managers/m_blog/update_blog') ? 'active' : '' }}">
                            <a href="{{ route('managers.m_blog.manager_blog') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-file-plus"></i></div>
                                <div class="text">Quản lí tin tức</div>
                            </a>

                        </li>

                    </ul>
                </div>
                <div class="center-item">
                    <div class="center-heading">Cài đặt</div>
                    <ul class="menu-list">

                        <li class="menu-item  {{ request()->is('settings/edit') ? 'active' : '' }}">
                            <a href="{{ route('settings.edit') }}"
                                class="{{ request()->is('settings/edit') ? 'active' : '' }}">
                                <div class="icon"><i class="icon-settings"></i></div>
                                <div class="text">Cài đặt chung</div>
                            </a>

                        <li
                            class="menu-item  {{ request()->is('managers/settings/settings_banner') || request()->is('settings/create') || request()->is('settings/*/edit') ? 'active' : '' }}">
                            <a href="{{ route('managers.settings_banner') }}"
                                class="{{ request()->is('managers/settings/settings_banner') || request()->is('settings/create') || request()->is('settings/*/edit') ? 'active' : '' }}">
                                <div class="icon"><i class="icon-settings"></i></div>
                                <div class="text">Quản lí banner</div>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>

        </div>
    </div>


</body>

</html>
