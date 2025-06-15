<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #FF5200;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            display: none; /* Ban đầu ẩn nút */
        }
        .back-to-top:hover {
            background-color: #FF5200;
        }
    </style>
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    @yield('title')
    @yield('css')
</head>
<body>
    <div class="contener">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>

    <!-- Nút quay lại đầu trang -->
    <a href="#" class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></a>

    @yield('script')
    <script>
        // Hiện nút khi cuộn xuống
        window.onscroll = function() {
            const backToTopButton = document.getElementById('backToTop');
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        };

        // Cuộn về đầu trang khi nhấn nút
        document.getElementById('backToTop').onclick = function(e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        };
    </script>
</body>
</html>
