@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Quản lí nhân viên
    </title>
@endsection

{{-- css --}}
@section('css')
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">



    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
@endsection


{{-- content --}}
@section('content')
    <!-- main-content -->
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Tất cả tài khoản</h3>
                </div>
                <!-- all-user -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">
                            <!-- Hiển thị thông báo thành công -->
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form class="form-search" method="GET" action="{{ route('managers.m_user.manager_user') }}">
                                <fieldset class="name">
                                    <input type="text" placeholder="Nhập email để tìm kiếm..." name="email" required
                                        value="{{ request('email') }}">
                                </fieldset>
                                <div class="button-submit">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="{{ route('managers.m_user.add_user') }}"><i
                                class="icon-plus"></i>Thêm mới</a>
                    </div>
                    <div class="wg-table table-all-user">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Tên tài khoản</div>
                            </li>
                            <li>
                                <div class="body-title text-center">Điện thoại</div>
                            </li>
                            <li>
                                <div class="body-title text-center">Email</div>
                            </li>
                            <li>
                                <div class="body-title">Hành động</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @if ($users->isEmpty())
                                <div class="alert alert-warning">Không tìm thấy.</div>
                            @else
                                @foreach ($users as $user)
                                    <li class="user-item gap14">
                                         <div class="image no-bg">
<img src="{{ asset($user->Avartar ?? 'assets/images3/cus.jpg') }}" alt="">                                        </div>
                                        <div class="flex items-center justify-between gap20 flex-grow">
                                            <div class="name">
                                                <a href="{{ route('managers.m_user.edit_user', $user->UserID) }}"
                                                    class="body-title-2">{{ $user->Username ?? 'N/A' }}</a>
                                                <div class="text-tiny mt-3">{{ $user->Role ?? 'N/A' }}</div>
                                            </div>
                                            <div class="body-text text-center" style=" text-align: left;">{{ $user->Phone ?? 'N/A' }}
                                            </div>
                                            <div class="body-text text-center">{{ $user->Email ?? 'N/A' }}</div>
                                            <div class="list-icon-function">
                                                <div class="item edit">
                                                    <a href="{{ route('managers.m_user.edit_user', $user->UserID) }}"><i
                                                            class="icon-edit-3"></i></a>
                                                </div>
                                                <div class="user-item">
                                                    <form
                                                        action="{{ route('managers.m_user.delete_user', $user->UserID) }}"
                                                        method="POST" onsubmit="return confirm('Xác nhận xóa?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="border: none; background: none;">
                                                            <i class="icon-trash-2"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Hiện {{ $users->count() }}/10 mục</div>
                        <ul class="wg-pagination flex items-center">
                            <li>
                                @if ($users->onFirstPage())
                                    <span class="disabled"><i class="icon-chevron-left"></i></span>
                                @else
                                    <a href="{{ $users->previousPageUrl() }}"><i class="icon-chevron-left"></i></a>
                                @endif
                            </li>

                            @for ($i = 1; $i <= $users->lastPage(); $i++)
                                <li class="{{ $users->currentPage() == $i ? 'active' : '' }}">
                                    <a href="{{ $users->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li>
                                @if ($users->hasMorePages())
                                    <a href="{{ $users->nextPageUrl() }}"><i class="icon-chevron-right"></i></a>
                                @else
                                    <span class="disabled"><i class="icon-chevron-right"></i></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /all-user -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content -->
@endsection


{{-- script --}}
@section('script')
    <!-- Javascript -->
    <script src="{{ asset('assets/js2/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js2/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js2/zoom.js') }}"></script>
    <script src="{{ asset('assets/js2/switcher.js') }}"></script>
    <script src="{{ asset('assets/js2/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js2/main.js') }}"></script>
    <script src="{{ asset('assets/js2/custom.js') }}"></script>
@endsection
