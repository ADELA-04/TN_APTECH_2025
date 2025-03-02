@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
        Update Blog
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
    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- section-content-right -->
                <div class="section-content-right">
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Update Blog</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li><a href="#">
                                                <div class="text-tiny">Blog</div>
                                            </a></li>
                                        <li><i class="icon-chevron-right"></i></li>
                                        <li>
                                            <div class="text-tiny">Update Blog</div>
                                        </li>
                                    </ul>
                                </div>
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
                                <form class="tf-section-2 form-add-product"
                                action="{{ route('managers.m_blog.update_blog_action', $blog->PostID) }}"
                                method="POST"
                                enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="wg-box">
                                  <fieldset class="name">
                                      <div class="body-title mb-10">Title <span class="tf-color-1">*</span></div>
                                      <input class="mb-10" type="text" name="Title"
                                             placeholder="Enter blog title" value="{{ $blog->Title }}" required>
                                      <div class="text-tiny">Do not exceed 20 characters when entering the blog title.</div>
                                  </fieldset>
                                  <fieldset class="description">
                                      <div class="body-title mb-10">Summary <span class="tf-color-1">*</span></div>
                                      <textarea class="mb-10" name="Summary" placeholder="Summary" required>{{ $blog->Summary }}</textarea>
                                      <div class="text-tiny">Do not exceed 100 characters when entering the summary.</div>
                                  </fieldset>
                                  <fieldset class="description">
                                      <div class="body-title mb-10">Content <span class="tf-color-1">*</span></div>
                                      <textarea class="mb-10" name="Content" placeholder="Content" required>{{ $blog->Content }}</textarea>
                                  </fieldset>
                              </div>
                              <div class="wg-box">
                                <fieldset>
                                    <div class="body-title mb-10">Upload images</div>
                                    <div class="upload-image mb-16">
                                        <div class="item up-load">
                                            <label class="uploadfile" for="myFile">
                                                <span class="icon"><i class="icon-upload-cloud"></i></span>
                                                <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                <input type="file" id="myFile" name="ImageURL" accept="image/*" style="display: none;">
                                            </label>
                                        </div>
                                        <div class="item">
                                            <img id="previewImage" src="{{ asset($blog->ImageURL) }}" alt="Image Preview" style="max-width: 100%; height: auto; {{ $blog->ImageURL ? '' : 'display:none;' }}">
                                        </div>
                                    </div>
                                </fieldset>
                                  <fieldset class="brand">
                                      <div class="body-title mb-10">Is visible <span class="tf-color-1">*</span></div>
                                      <div class="select">
                                          <select name="IsVisible" required>
                                              <option value="1" {{ $blog->IsVisible ? 'selected' : '' }}>Yes</option>
                                              <option value="0" {{ !$blog->IsVisible ? 'selected' : '' }}>No</option>
                                          </select>
                                      </div>
                                  </fieldset>
                                  <div class="cols gap10">
                                      <button class="tf-button w-full" type="submit">Save</button>
                                      <button class="tf-button style-1 w-full" type="button"
                                              onclick="window.location='{{ route('managers.m_blog.manager_blog') }}'">Cancel
                                      </button>
                                  </div>
                              </div>
                          </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->
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


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('myFile');
            const preview = document.getElementById('previewImage');

            fileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function() {
                    preview.src = reader.result;
                    preview.style.display = 'block'; // Hiển thị ảnh
                }

                if (file) {
                    reader.readAsDataURL(file); // Đọc ảnh
                }
            });
        });
    </script>
@endsection
