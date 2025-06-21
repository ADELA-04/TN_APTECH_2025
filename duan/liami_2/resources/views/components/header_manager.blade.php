<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .image {
            width: 50px;
            /* Thay đổi kích thước theo nhu cầu */
            height: 50px;
            /* Thay đổi kích thước theo nhu cầu */
            overflow: hidden;
            /* Ẩn phần thừa */
            border-radius: 50%;
            /* Tạo hình tròn */
            display: flex;
            /* Căn giữa nội dung */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            justify-content: center;
            /* Căn giữa theo chiều ngang */
        }

        .image img {
            width: 100%;
            /* Đảm bảo ảnh chiếm toàn bộ không gian */
            height: auto;
            /* Giữ tỷ lệ ảnh */
            object-fit: cover;
            /* Cắt ảnh để vừa với khung hình */
        }
    </style>
</head>

<body>
    <!-- header-dashboard -->
    <div class="header-dashboard">
        <div class="wrap">
            <div class="header-left">
                <a href="index.html">
                    <img class="" id="logo_header_mobile" alt="" src="images/logo/logo.png"
                        data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png" data-width="154px"
                        data-height="52px" data-retina="images/logo/logo@2x.png">
                </a>
                <div class="button-show-hide">
                    <i class="icon-menu-left"></i>
                </div>

            </div>
            <div class="">

                <div class="popup-wrap user type-header">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="header-user wg-user">
                                <span class="image">
                                    <img src="{{ Auth::user()->Avartar ? asset(Auth::user()->Avartar) : asset('assets/images3/cus.jpg') }}"
     alt="{{ Auth::user()->Avartar ? '' : 'Hình đại diện không có' }}">
                                </span>
                                <span class="flex flex-column">
                                    <span class="body-title mb-2">{{ Auth::user()->Username }}</span>
                                    <span class="text-tiny">{{ Auth::user()->Role }}</span>
                                </span>
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3">
                            <li>

                                <a href="{{ route('profile.edit') }}" class="user-item">
                                    <div class="icon">
                                        <i class="icon-settings"></i>
                                    </div>
                                    <div class="body-title-2">Chỉnh sửa cá nhân</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.changePassword') }}" class="user-item">
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <div class="body-title-2">Đổi mật khẩu</div>
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <a href="#" class="user-item"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <div class="icon">
                                        <i class="icon-log-out"></i>
                                    </div>
                                    <div class="body-title-2">Đăng xuất</div>
                                </a>
                            </li>




                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /header-dashboard -->

</body>

</html>
