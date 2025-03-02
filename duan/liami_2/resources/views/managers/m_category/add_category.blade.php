@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        ADD Category
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
@section('content')
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">
                <div class="section-content-right">
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Add Category</h3>
                                </div>
                              {{-- Thông báo thành công --}}
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- Thông báo lỗi --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                                <form class="form-add-product" method="POST"
                                    action="{{ route('managers.m_category.store') }}">
                                    @csrf
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Category Name <span class="tf-color-1">*</span>
                                            </div>
                                            <input class="mb-10" type="text" name="CategoryName"
                                                placeholder="Enter category name" required>
                                            @error('CategoryName')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="text-tiny">Do not exceed 20 characters when entering the category
                                                name.</div>
                                        </fieldset>
                                        <fieldset class="brand">
                                            <div class="body-title mb-10">Parent Category <span class="tf-color-1">*</span>
                                            </div>
                                            <div class="select">
                                                <select name="parent_id">
                                                    <option value="">-- Select Parent Category --</option>
                                                    @foreach ($parentCategories as $parentCategory)
                                                        <option value="{{ $parentCategory->CategoryID }}">
                                                            {{ $parentCategory->CategoryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="brand">
                                            <div class="body-title mb-10">Is Visible <span class="tf-color-1">*</span></div>
                                            <div class="select">
                                                <select name="IsVisible" required>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <div class="cols gap10">
                                            <button class="tf-button w-full" type="submit">Save</button>
                                            <a class="tf-button style-1 w-full"
                                                href="{{ route('managers.m_category.manager_category') }}">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
