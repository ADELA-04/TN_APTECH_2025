@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>Quản lí tin tức</title>
@endsection

{{-- css --}}
@section('css')
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
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
                    <h3>Quản lí tin tức</h3>
                </div>

                <!-- product-list -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="form-search" method="GET" action="{{ route('managers.m_blog.manager_blog') }}">

                                <fieldset class="name">
                                    <input type="text" placeholder="Nhập tên bài đăng muốn tìm..." name="name"
                                        value="{{ request('name') }}" required>
                                </fieldset>
                                <div class="button-submit">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="{{ route('managers.m_blog.add_blog') }}"><i
                                class="icon-plus"></i>Thêm mới</a>
                    </div>

                    <div class="wg-table table-product-list">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Tin tức</div>
                            </li>
                            <li>
                                <div class="body-title">Người đăng</div>
                            </li>
                            <li>
                                <div class="body-title">Ngày tạo</div>
                            </li>
                            <li>
                                <div class="body-title">Hiển thị</div>
                            </li>
                            <li>
                                <div class="body-title">Lượt xem</div>
                            </li>
                            <li>
                                <div class="body-title">Hành động</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @if ($blogs->isEmpty())
                                <div class="alert alert-warning">Không tìm thấy.</div>
                            @else
                                @foreach ($blogs as $blog)
                                    <li class="product-item gap14">
                                        <div class="image no-bg">
                                            <img src="{{ asset($blog->ImageURL) }}" alt="Blog Image">
                                        </div>
                                        <div class="flex items-center justify-between gap20 flex-grow">
                                            <div class="name">
                                                <a href="{{ route('managers.m_blog.edit_blog', $blog->PostID) }}"
                                                    class="body-title-2">{{ $blog->Title }}</a>
                                            </div>
                                            <div class="body-text">{{ $blog->AuthorID }}</div>
                                            <div class="body-text">{{ $blog->created_at->format('d/m/Y') }}</div>
                                            <div class="body-text">{{ $blog->IsVisible ? 'Hiển thị' : 'Ẩn' }}</div>
                                            <div class="body-text">{{ $blog->views }}</div>
                                            <div class="list-icon-function">
                                                <div class="item edit">
                                                    <a href="{{ route('managers.m_blog.edit_blog', $blog->PostID) }}">
                                                        <i class="icon-edit-3"></i>
                                                    </a>
                                                </div>
                                                <div class="user-item">
                                                    <form
                                                        action="{{ route('managers.m_blog.delete_blog', $blog->PostID) }}"
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
                        <div class="text-tiny">Hiện {{ $blogs->count() }}/10 mục</div>
                        <ul class="wg-pagination flex items-center">
                            <li>
                                @if ($blogs->onFirstPage())
                                    <span class="disabled"><i class="icon-chevron-left"></i></span>
                                @else
                                    <a href="{{ $blogs->previousPageUrl() }}"><i class="icon-chevron-left"></i></a>
                                @endif
                            </li>

                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="{{ $blogs->currentPage() == $i ? 'active' : '' }}">
                                    <a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li>
                                @if ($blogs->hasMorePages())
                                    <a href="{{ $blogs->nextPageUrl() }}"><i class="icon-chevron-right"></i></a>
                                @else
                                    <span class="disabled"><i class="icon-chevron-right"></i></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /product-list -->
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
@endsection
