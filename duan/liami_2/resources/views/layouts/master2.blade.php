<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
       @yield('title')
       @yield('css')
    </head>
    <body>
    <div class="contener">

        @yield('content')


    </div>
    @yield('script')
    </body>
</html>
