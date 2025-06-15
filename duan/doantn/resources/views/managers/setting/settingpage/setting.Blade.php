@extends('layouts.admin_master')

@section('title')
    <title>Information Shop</title>
@endsection

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
        <div id="page">
            <div class="layout-wrap">
                <div class="section-content-right">
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>General Setting</h3>
                                    {{-- <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Information Shop</div>
                                        </li>
                                    </ul> --}}
                                </div>

                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <form class="form-add-product" action="{{ route('settings.update') }}" method="POST">
                                    @csrf
                                    <div class="wg-box">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Business Name</div>
                                            <input class="mb-10" type="text" placeholder="Enter Business Name"
                                                name="BusinessName" value="{{ $setting->BusinessName }}">
                                            <div class="text-tiny">entering Business Name.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Boss Name</div>
                                            <input class="mb-10" type="text" placeholder="Enter Boss Name"
                                                name="BossName" value="{{ $setting->BossName }}">
                                            <div class="text-tiny">entering BossName Name.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Shop Address</div>
                                            <input class="mb-10" type="text" placeholder="Enter Shop Address"
                                                name="Address" value="{{ $setting->Address }}" >
                                            <div class="text-tiny">entering the Shop Address.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Hotline</div>
                                            <input class="mb-10" type="text" placeholder="Enter the hotline"
                                                name="Phone" value="{{ $setting->Phone }}" >
                                            <div class="text-tiny">entering the Phone.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Email Admin</div>
                                            <input class="mb-10" type="email" placeholder="Enter email admin"
                                                name="Email" value="{{ $setting->Email }}" >
                                            <div class="text-tiny">entering the Email.</div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Default Weight</div>
                                            <input class="mb-10" type="text" placeholder="Enter Default Weight"
                                                name="DefaultWeight" value="{{ $setting->DefaultWeight }}" >
                                            <div class="text-tiny">entering the Default Weight.</div>
                                        </fieldset>
                                        <button type="submit" class="tf-button w180 m-auto">Save</button>
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
