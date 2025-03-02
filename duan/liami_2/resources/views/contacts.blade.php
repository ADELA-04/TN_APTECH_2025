@extends('layouts.master')

@section('title')
<title>
    Contacts
</title>
@endsection
@section('css')
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/uicons-regular-rounded.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery.bootstrap-touchspin.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
@endsection
@section('content')
<section>
    <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html" title="">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
            <div class="page-title w-100">
                <span class="d-block text-color4">- Contact</span>
                <h2 class="mb-0">Contact Us</h2>
            </div><!-- Page Title -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-120 pb-120 position-relative">
        <div class="container">
            <div class="contact-wrap position-relative w-100">
                <div class="contact-info-map bg-color5 position-relative w-100">
                    <div class="row mrg">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="contact-info position-relative w-100">
                                <h3>Hà Nội</h3>
                                <ul class="contact-info-list d-flex flex-wrap list-unstyled mb-0">
                                    <li>
                                        <span class="d-block">Phone</span>
                                        <p class="mb-0"><a href="tel:(302) 555-0107" title="">84+ 0963215791</a></p>
                                        <p class="mb-0"><a href="tel:(225) 555-0118" title="">84+ 0963215791</a></p>
                                    </li>
                                    <li>
                                        <span class="d-block">Address</span>
                                        <p class="mb-0">Soc Son, Ha Noi, Viet Nam</p>
                                    </li>
                                    <li>
                                        <span class="d-block">Email</span>
                                        <p class="mb-0"><a href="mailto:dothom07082004@gmail.com" title="">dothom07082004@gmail.com</a></p>
                                    </li>
                                    <li>
                                        <span class="d-block">Social</span>
                                        <div class="social-links d-flex flex-wrap">
                                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                            <a href="https://www.pinterest.com/" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="map-box w-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72940.608602043!2d105.85064106944571!3d21.019192181723856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSGFub2ksIEhvw6BuIEtp4bq_bSwgSGFub2ksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1643540184685!5m2!1sen!2s" height="450" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Information & Map -->
                <div class="contact-form-wrap mt-60 bg-color5 position-relative w-100">
                    <div class="row mrg">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <img class="img-fluid w-100" src="assets/images/resources/contact-img.jpg" alt="Contact Image">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="contact-form w-100">
                                <h3>Send us a message</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <form action="#" method="post" id="email-form">
                                    <div class="form-group w-100">
                                        <div class="response w-100"></div>
                                    </div>
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Phone *</label>
                                        <input class="phone" type="tel" name="phone" required>
                                    </div>
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Email Address *</label>
                                        <input class="email" type="email" name="email" required>
                                    </div>
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Other Notes (optional) *</label>
                                        <textarea class="contact_message" name="contact_message" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                                    </div>
                                    <div class="field-btn w-100">
                                        <button class="theme-btn bg-color1" id="submit" type="submit">Submit Now<span></span><span></span><span></span><span></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Form Wrap -->
            </div><!-- Contact Wrap -->
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/aos.min.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/particles.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
@endsection
