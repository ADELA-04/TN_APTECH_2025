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

                        <li class="menu-item ">
                            <a href="{{ route('managers.m_product.manager_product') }}" class=""
                                class="menu-item-button">
                                <div class="icon"><i class="icon-shopping-cart"></i></div>
                                <div class="text">Quản lí đơn hàng</div>
                            </a>
                        </li>

                        <li class="menu-item {{ request()->is('managers/m_customer*') ? 'active' : '' }} }}">
                            <a href="{{ route('managers.m_customer.manager_customer') }}" class="menu-item-button">
                                <div class="icon"><i class="icon-user"></i></div>
                                <div class="text">Quản lí khách hàng</div>
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
