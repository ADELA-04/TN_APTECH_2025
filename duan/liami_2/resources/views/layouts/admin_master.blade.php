<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">

    <!-- Font -->
    <link rel="stylesheet" href="assets/font/fonts.css">

    <!-- Icon -->
    <link rel="stylesheet" href="assets/icon/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon.png">
    @yield('title')
    @yield('css')
</head>

<body>
    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                {{-- menu_left --}}
                @include('components.menu_left')
                <!-- section-content-right -->
                <div class="section-content-right">
                    @include('components.header_manager')
                    @yield('content')
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->
    @yield('script')
</body>

</html>
