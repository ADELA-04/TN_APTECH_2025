(function ($) {
  "use strict";

  let menu_height = $("header").innerHeight(),
    topbar_height = $(".topbar").innerHeight(),
    menubar_height = $(".menubar").innerHeight(),
    scroll = $(window).scrollTop(),
    res_header = $(".responsive-header").innerHeight(),
    pgurl = window.location.href.substr(
      window.location.href.lastIndexOf("/") + 1
    ),
    width = window.innerWidth;

  $(document).ready(function () {
    //===== Delay Animation =====//
    let drop = $(".product-btns > a");
    $(".product-btns").each(function () {
      let delay = 0;
      $(this)
        .find(drop)
        .each(function () {
          $(this).css({ transitionDelay: delay + "ms" });
          delay += 45;
        });
    });
    let drop2 = $(".menu-links > li > ul > li >  ul > li");
    $(".menu-links > li > ul > li").each(function () {
      let delay2 = 0;
      $(this)
        .find(drop2)
        .each(function () {
          $(this).css({ transitionDelay: delay2 + "ms" });
          delay2 += 50;
        });
    });

    //===== Color Active =====//
    $(".products-color > a").on("click", function () {
      $(".products-color > a").removeClass("active");
      $(this).addClass("active");
      return false;
    });

    //===== Sticky Header =====//
    let scroll = $(window).scrollTop();
    if (scroll >= menu_height) {
      $("html").addClass("sticky");
    } else {
      $("html").removeClass("sticky");
    }

    //===== Team Detail Active =====//
    $(".popup-inner").on("click", function (event) {
      event.stopPropagation();
    });

    $(".team-trigger1").on("click", function () {
      $("html").addClass("team-popup1");
      return false;
    });

    $(".popup-close, html, body").on("click", function () {
      $("html").removeClass("team-popup1");
    });

    $(".team-trigger2").on("click", function () {
      $("html").addClass("team-popup2");
      return false;
    });

    $(".popup-close, html, body").on("click", function () {
      $("html").removeClass("team-popup2");
    });

    $(".team-trigger3").on("click", function () {
      $("html").addClass("team-popup3");
      return false;
    });

    $(".popup-close, html, body").on("click", function () {
      $("html").removeClass("team-popup3");
    });

    $(".team-trigger4").on("click", function () {
      $("html").addClass("team-popup4");
      return false;
    });

    $(".popup-close, html, body").on("click", function () {
      $("html").removeClass("team-popup4");
    });

    //===== Cart Menu =====//
    $(".cart-trigger").on("click", function () {
      $("html").addClass("cart-drop-active");
      return false;
    });
    $(".mini-cart-close").on("click", function () {
      $("html").removeClass("cart-drop-active");
      return false;
    });
    $(".remove-cart").on("click", function () {
      $(this).parent().parent().slideUp("normal");
      return false;
    });

    //===== Menu Active =====//
    $("nav ul li a").each(function () {
      if ($(this).attr("href") == pgurl || $(this).attr("href") == "")
        $(this)
          .parent("li")
          .addClass("active")
          .parent()
          .parent()
          .addClass("active")
          .parent()
          .parent()
          .addClass("active");
    });

    //===== Menu Active =====//
    pgurl = window.location.href.substr(
      window.location.href.lastIndexOf("/") + 1
    );
    $(".res-menu ul li a").each(function () {
      if ($(this).attr("href") == pgurl || $(this).attr("href") == "")
        $(this)
          .parent("li")
          .addClass("active")
          .parent()
          .parent()
          .addClass("active-parent")
          .parent()
          .parent()
          .addClass("active-parent");
    });

    //===== Wow Animation Setting =====//
    if ($(".wow").length > 0) {
      var wow = new WOW({
        boxClass: "wow", // default
        animateClass: "animated", // default
        offset: 0, // default
        mobile: true, // default
        live: true, // default
      });
      wow.init();
    }

    //===== Header Search =====//
    $(".search-btn").on("click", function () {
      $(".header-search").addClass("active");
      return false;
    });
    $(".search-close-btn").on("click", function () {
      $(".header-search").removeClass("active");
      return false;
    });

    //===== Responsive Header =====//
    $(".responsive-menu-trigger").on("click", function () {
      $("html").addClass("slidein");
      return false;
    });
    $(".responsive-menu-close").on("click", function () {
      $("html").removeClass("slidein");
      return false;
    });
    $(".responsive-menu li.menu-item-has-children > a").on(
      "click",
      function () {
        $(this).parent().siblings("li").children("ul").slideUp();
        $(this).parent().siblings("li").removeClass("active");
        $(this).parent().children("ul").slideToggle();
        $(this).parent().toggleClass("active");
        return false;
      }
    );

    //===== Counter Up =====//
    if ($.isFunction($.fn.counterUp)) {
      $(".counter").counterUp({
        delay: 10,
        time: 2000,
      });
    }

    //===== Tilt =====//
    if ($.isFunction($.fn.tilt)) {
      jQuery(".tilt").each(function (i, el) {
        var max_tilt = jQuery(el).data("max_tilt");
        var perspective = jQuery(el).data("perspective");
        var scale = jQuery(el).data("scale");
        var speed = jQuery(el).data("speed");
        var tilt = jQuery(el).tilt({
          maxTilt: max_tilt,
          perspective: perspective,
          easing: "cubic-bezier(.03,.98,.52,.99)",
          scale: scale,
          speed: speed,
          transition: true,
          disableAxis: null,
          reset: true,
          glare: false,
          maxGlare: 1,
        });
        tilt.tilt.reset.call(tilt);
      });
    }

    //===== LightBox =====//
    if ($.isFunction($.fn.fancybox)) {
      Fancybox.bind("[data-fancybox], [data-fancybox='gallery']", {
        Image: {
          zoom: false,
        },
      });
    }

    //===== LightBox =====//
    if ($.isFunction($.fn.TouchSpin)) {
      $(".qty").TouchSpin({
        min: 0,
        max: 100,
        boostat: 5,
        maxboostedstep: 10,
        // postfix: '%'
      });
    }

    //===== Scrollbar =====//
    if ($(".mini-cart-list, .responsive-menu").length > 0) {
      let ps = new PerfectScrollbar(".mini-cart-list, .responsive-menu", {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20,
      });
    }

    //===== Accordions =====//
    if ($("#toggle").length > 0) {
      $(function () {
        $("#toggle .toggle-content").hide();
        $("#toggle h4:first").next().slideDown(500).parent().addClass("active");
        $("#toggle h4").on("click", function () {
          if ($(this).next().is(":hidden")) {
            $("#toggle h4").next().slideUp(500).parent().removeClass("active");
            $(this).next().slideDown(500).parent().toggleClass("active");
          }
        });
      });
    }

    //===== Contact Form Validation =====//
    if ($("#email-form").length) {
      $("form#email-form").submit(function (e) {
        e.preventDefault();
        var fname = $("#email-form .fname").val();
        var lname = $("#email-form .lname").val();
        var email = $("#email-form .email").val();
        var phone = $("#email-form .phone").val();
        if (fname == "" || email == "") {
          $(this)
            .children()
            .children(".response")
            .html(
              '<div class="failed alert alert-warning">Please fill the required fields.</div>'
            );
          return false;
        }
        $.ajax({
          url: "sendemail.php",
          method: "POST",
          data: $(this).serialize(),
          beforeSend: () => {
            $(this)
              .children(".response")
              .html(
                '<div class="text-info"><img src="assets/images/preloader.gif"> Loading...</div>'
              );
          },
          success: (data) => {
            $(this).children().children(".response").fadeIn().html(data);
            setTimeout(function () {
              $(this).children().children(".response").fadeOut("slow");
            }, 5000);
            $(this).trigger("reset");
          },
          error: (res) => {
            console.log(res);
            $(this).children().children(".response").fadeIn().html(data);
          },
        });
      });
    }

    /*===== Newsletter Form Validation =====*/
    if ($("#subscribe-form").length) {
      $("form#subscribe-form").submit(function (e) {
        e.preventDefault();
        var email = $(this).children(".email").val();
        var url_link = $(this).children(".url").val();
        if (email.length == 0) {
          $(this)
            .children(".response")
            .html(
              '<div class="failed alert alert-warning">Please fill the required fields.</div>'
            );
          return false;
        }
        $.ajax({
          url: "sendnewsletter.php",
          method: "POST",
          data: $(this).serialize(),
          beforeSend: () => {
            $(this)
              .children(".response")
              .html(
                '<div class="text-info"><img src="assets/images/preloader.gif"> Loading...</div>'
              );
          },
          success: (data) => {
            $(this).children(".response").fadeIn().html(data);
            setTimeout(function () {
              $(this).children(".response").fadeOut("slow");
            }, 5000);
            $(this).trigger("reset");
          },
          error: (res) => {
            console.log(res);
            $(this).children(".response").fadeIn().html(data);
          },
        });
      });
    }

    //===== Slick Carousel =====//
    if ($.isFunction($.fn.slick)) {
      //=== Slider Carousel ===//
      $(".slider-caro").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: false,
        autoplaySpeed: 5000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        speed: 3000,
        draggable: true,
        dots: true,
        pauseOnDotsHover: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              arrows: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: true,
            },
          },
        ],
      });

      $(".slider-caro").on(
        "afterChange",
        function (event, slick, currentSlide) {
          $(".slick-active .slider-cap > *").removeClass("hidden");
          $(".slick-active .slider-cap > *").addClass("animated fadeInUp");
        }
      );

      $(".slider-caro").on(
        "beforeChange",
        function (event, slick, currentSlide) {
          $(".slick-active .slider-cap > *").removeClass("animated fadeInUp");
          $(".slick-active .slider-cap > *").addClass("hidden");
        }
      );

      //=== Slider Ver2 Carousel ===//
      $(".slider-caro2").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: false,
        autoplaySpeed: 5000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        speed: 3000,
        draggable: true,
        dots: false,
        pauseOnDotsHover: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
      });

      $(".slider-caro2").on(
        "afterChange",
        function (event, slick, currentSlide) {
          $(".slick-active .slider-cap > *").removeClass("hidden");
          $(".slick-active .slider-cap > *").addClass("animated fadeInUp");
        }
      );

      $(".slider-caro2").on(
        "beforeChange",
        function (event, slick, currentSlide) {
          $(".slick-active .slider-cap > *").removeClass("animated fadeInUp");
          $(".slick-active .slider-cap > *").addClass("hidden");
        }
      );

      //=== Testimonials Info Carousel ===//
      $(".testi-info-caro").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        // slide: 'li',
        fade: true,
        asNavFor: ".testi-imgs-caro",
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: false,
            },
          },
        ],
      });

      //=== Testimonials Image Carousel ===//
      $(".testi-imgs-caro").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: ".testi-info-caro",
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        dots: false,
        arrows: true,
        // slide: 'li',
        centerPadding: "0",
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: true,
            },
          },
          {
            breakpoint: 770,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: true,
            },
          },
        ],
      });

      //=== Product Carousel ===//
      $(".prod-caro").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        draggable: true,
        dots: true,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 1925,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 1350,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 1210,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 995,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              dots: true,
            },
          },
        ],
      });

      //=== Product Carousel 2 ===//
      $(".prod-caro2").slick({
        arrows: false,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        fade: false,
        autoplay: false,
        autoplaySpeed: 5000,
        speed: 1000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        draggable: true,
        dots: true,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 1925,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 1210,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 995,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

      //=== Product Carousel 3 ===//
      $(".prod-caro3").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        autoplay: false,
        autoplaySpeed: 5000,
        speed: 1000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        draggable: true,
        dots: true,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 1925,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 1210,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 995,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

      //=== Featured Product Carousel ===//
      $(".feat-prd-caro").slick({
        arrows: true,
        centerMode: true,
        centerPadding: "0",
        initialSlide: 0,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        autoplay: false,
        autoplaySpeed: 5000,
        speed: 1000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        draggable: true,
        dots: false,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-small-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-small-right'></i></button>",
        responsive: [
          {
            breakpoint: 1925,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 1210,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 995,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

      //=== Testimonials Carousel ===//
      $(".testi-caro").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: false,
        autoplaySpeed: 5000,
        speed: 1000,
        draggable: true,
        dots: true,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 1210,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              dots: false,
            },
          },
          {
            breakpoint: 995,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              dots: true,
            },
          },
          {
            breakpoint: 770,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
            },
          },
        ],
      });

      //=== Instagram Carousel ===//
      $(".insta-caro").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        centerMode: true,
        centerPadding: "12.1%",
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        autoplay: false,
        autoplaySpeed: 5000,
        speed: 1000,
        draggable: true,
        dots: true,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 1925,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 1610,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 1210,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 995,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 770,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: false,
              dots: true,
            },
          },
        ],
      });

      //=== Product Detail Image Carousel ===//
      $(".product-detail-big-imgs").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        // slide: 'li',
        fade: true,
        asNavFor: ".product-detail-img-nav",
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-small-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-small-right'></i></button>",
        responsive: [
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: false,
            },
          },
        ],
      });

      $(".product-detail-img-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".product-detail-big-imgs",
        dots: false,
        arrows: false,
        // slide: 'li',
        centerPadding: "0",
        focusOnSelect: true,
        vertical: true,
        responsive: [
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: false,
            },
          },
          {
            breakpoint: 770,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: false,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: false,
              vertical: false,
            },
          },
        ],
      });

      //=== Product Detail Image 2 Carousel ===//
      $(".product-detail-big-imgs2").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        // slide: 'li',
        fade: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-small-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-small-right'></i></button>",
        responsive: [
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrows: false,
            },
          },
        ],
      });

      //=== Gallery Carousel ===//
      $(".gallery-caro").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        // slide: 'li',
        fade: true,
        // asNavFor: '.product-detail-img-nav',
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-small-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-small-right'></i></button>",
      });

      //=== Gallery Carousel 2 ===//
      $(".gallery-caro2").slick({
        arrows: true,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        draggable: true,
        dots: true,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow:
          "<button type='button' class='slick-prev'><i class='fi fi-rr-angle-left'></i></button>",
        nextArrow:
          "<button type='button' class='slick-next'><i class='fi fi-rr-angle-right'></i></button>",
        responsive: [
          {
            breakpoint: 1925,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 1350,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 1210,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 995,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              dots: true,
            },
          },
        ],
      });
    }
  }); //===== Document Ready Ends =====//

  //===== Window onLoad =====//
  $(window).on("load", function () {
    //===== Header Spacing =====//
    // $("main").css("padding-top", menu_height);

    //===== Page Loader =====//
    jQuery("#preloader").fadeOut(300);

    //===== Isotope =====//
    if (jQuery(".fltr-itm").length > 0) {
      if (jQuery().isotope) {
        var jQuerycontainer = jQuery(".masonry"); // cache container
        jQuerycontainer.isotope({
          itemSelector: ".fltr-itm",
          columnWidth: 2,
        });
        jQuery(".filter-links a").on("click", function () {
          var selector = jQuery(this).attr("data-filter");
          jQuery(".filter-links li").removeClass("active");
          jQuery(this).parent().addClass("active");
          jQuerycontainer.isotope({ filter: selector });
          return false;
        });
        jQuerycontainer.isotope("layout"); // layout/layout
      }

      jQuery(window).resize(function () {
        if (jQuery().isotope) {
          jQuery(".masonry").isotope("layout"); // layout/relayout on window resize
        }
      });
    }
  }); //===== Window onLoad Ends =====//

  //===== Sticky Header =====//
  $(window).on("scroll", function () {
    "use strict";

    let scroll = $(window).scrollTop();
    if (scroll >= menu_height) {
      $("html").addClass("sticky");
    } else {
      $("html").removeClass("sticky");
    }
  }); //===== Window onScroll Ends =====//
})(jQuery);
