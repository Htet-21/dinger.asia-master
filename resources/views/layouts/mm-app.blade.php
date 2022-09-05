<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Dinger enables businesses to accept digital payment with or without technical resources.">
    <meta content="English" name="language">
    <meta property="og:title" content="Dinger">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:description"
        content="Dinger enables businesses to accept digital payment with or without technical resources.">
    <meta property="og:url" content="https://www.dinger.asia">
    <meta property="og:image" content="https://www.dinger.asia/images/dinger-preview.jpg">
    <meta property="og:site_name" content="Dinger">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="Dinger enables businesses to accept digital payment with or without technical resources.">
    <meta name="twitter:title" content="Dinger">
    <meta content="Myarnmar, Dinger Online shopping, Dinger, E-commerce, Payment" name="generator">
    <meta content="Myanmar, E-commerce, Online Shopping, Facebook, Twitter, Instagram, Dinger, Payments, Newsroom"
        name="keywords">
    <meta content="© Dinger" name="copyright">
    <meta content="#fdcb5d" name="theme-color">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('/images/logo.svg') }}" type="image/svg" sizes="16x16">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo request()->getSchemeAndHttpHost(); ?>/css/styles.css?key=<?php echo time(); ?>" >

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- jQuery and JS bundle w/ Popper.js -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
            $(document).ready(function() {
        $('.testiSlide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [{
                breakpoint: 850,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }]
        });
    });
    $(document).ready(function() {
        $('.partnerSlide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [{
                breakpoint: 850,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }]
        });
    });
    $(document).ready(function() {
        'use strict';
        $('.hamburger-menu').click(function() {

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $('.menu-list').removeClass('menu-active');
                $('.menu-overlay').removeClass('menu-overlay-active');
                $('.hamburger-menu-wrapper').toggleClass('bounce-effect');
            } else {
                $('.menu-list').addClass('menu-active');
                $(this).addClass('active');
                $('.menu-overlay').addClass('menu-overlay-active');
                $('.hamburger-menu-wrapper').toggleClass('bounce-effect');
            }

        });

        $('.dropdown-toggle').click(function() {

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $('.dropdown-menu').removeClass('dropdown-menu-active');
                $('.drop-full-div1').removeClass('drop-full-div-active');
                $('.drop-icon1').removeClass('drop-icon1-active');
            } else {
                $('.dropdown-menu').addClass('dropdown-menu-active');
                $('.drop-icon1').addClass('drop-icon1-active');
                $(this).addClass('active');
                $('.drop-full-div1').addClass('drop-full-div-active');
                $('.dropdown-menu3').removeClass('dropdown-menu-active');
                $('.dropdown-menu2').removeClass('dropdown-menu-active');
                $('.drop-icon2').removeClass('drop-icon1-active');
                $('.drop-icon3').removeClass('drop-icon1-active');
            }

        });

        $('.dropdown-toggle2').click(function() {

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $('.dropdown-menu2').removeClass('dropdown-menu-active');
                $('.drop-full-div2').removeClass('drop-full-div-active');
                $('.drop-icon2').removeClass('drop-icon1-active');
            } else {
                $('.dropdown-menu2').addClass('dropdown-menu-active');
                $('.drop-icon2').addClass('drop-icon1-active');
                $(this).addClass('active');
                $('.dropdown-menu3').removeClass('dropdown-menu-active');
                $('.dropdown-menu').removeClass('dropdown-menu-active');
                $('.drop-full-div2').addClass('drop-full-div-active');
                $('.drop-icon1').removeClass('drop-icon1-active');
                $('.drop-icon3').removeClass('drop-icon1-active');
            }

        });

        $('.dropdown-toggle3').click(function() {

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $('.dropdown-menu3').removeClass('dropdown-menu-active');
                $('.drop-full-div3').removeClass('drop-full-div-active');
                $('.drop-icon3').removeClass('drop-icon1-active');
            } else {
                $('.dropdown-menu3').addClass('dropdown-menu-active');
                $('.drop-icon3').addClass('drop-icon1-active');
                $(this).addClass('active');
                $('.dropdown-menu').removeClass('dropdown-menu-active');
                $('.dropdown-menu2').removeClass('dropdown-menu-active');
                $('.drop-full-div3').addClass('drop-full-div-active');
                $('.drop-icon1').removeClass('drop-icon1-active');
                $('.drop-icon2').removeClass('drop-icon1-active');
            }

        });

    });
    </script>
    <script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    </script>
    <script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    });
    </script>
    <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropup").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropups = document.getElementsByClassName("dropup-content");
            var i;
            for (i = 0; i < dropups.length; i++) {
                var openDropup = dropups[i];
                if (openDropup.classList.contains('show')) {
                    openDropup.classList.remove('show');
                }
            }
        }
    }
    </script>

</head>

<body id="mm-body">
    <header>
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-2 col-xl-1 col-6 d-flex align-items-center">
                    <a class="brand-logo" href="{{ url('/eng') }}">
                        <img src="{{ asset('images/Dinger Logo Black.svg') }}" alt="Dinger Logo">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-10 col-xl-11 col-6 p-lg-0">
                    <ul id="head-menu">

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle"> ထုတ်ကုန်များ <img class="drop-icon1"
                                    src="{{ asset('images/drop.svg') }}"></a>
                            <div class="dropdown-menu">
                                <div class="drop-full-div1" id="drop-full-div">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-4 col-sm-4 col-12 drop-left">
                                                <div class="block-icon3"><img src="{{ asset('images/Vector.svg') }}" />
                                                </div>
                                                <p id="main-menu">ထုတ်ကုန်များ</p>
                                                <p id="small-p">သင်၏လုပ်ငန်းအတွက် အကောင်းဆုံးသောငွေပေးချေမှုကို ရယူပါ။
                                                </p>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-12 drop-right pl-4 ">
                                                <div class="row">


                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="menu-cap"><a>အသုံးပြုနိုင်သူများ </a></p>
                                                        <p id="sub-menu"><a href="{{ url('/ecommerce') }}">Ecommerce</a>
                                                        </p>
                                                        <p id="small-p">များပြားသော ရောင်းဝယ်မှုများအတွက် တိကျမှန်ကန်သော
                                                            စာရင်းများရှိသင့်ပါတယ်။ </p>
                                                    </div>

                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="menu-cap"><a>ဖြေရှင်းချက်များ</a></p>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/features') }}">အဓိကဖြေရှင်းချက် </a></p>
                                                        <p id="small-p">စီးပွားရေးလုပ်ငန်းများအတွက် ဒီဂျစ်တယ်နည်းဖြင့်
                                                            အကောင်းဆုံးငွေလက်ခံနိုင်ရန်အတွက် ရည်ရွယ်သည်။ </p><br>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <br>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('micro') }}">ချေးငွေဝန်ဆောင်မှုပေးသူများ
                                                            </a></p>
                                                        <p id="small-p">သင်တို့၏ချေးငွေတို့ကို အကောင့်မျိုးစုံဖြင့်
                                                            ပြန်လည်ကောက်ခံနိုင်သည်။ </p><br>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/social/eng') }}"></a></p>
                                                        <p id="small-p"></p>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <br>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/social') }}">အွန်လိုင်းရောင်းချသူများ
                                                            </a></p>
                                                        <p id="small-p">လျင်မြန်ပြီး စိတ်ချလုံခြုံရသော
                                                            ငွေလက်ခံမှုများနှင့်အတူ တစ်နေရာတည်းတွင် စာရင်းတွေ
                                                            စိစစ်ကြည့်ရှုနိုင်သော Dashboard များပါဝင်သည်။ </p>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/partnership/eng') }}"></a>
                                                        </p>
                                                        <p id="small-p"></p>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <br><br>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/invoice') }}">အွန်လိုင်းငွေတောင်းခံလွှာ</a></p>
                                                        <p id="small-p">ငွေတောင်းခံလွှာများကို စိတ်ကြိုက်ဖန်တီးပြီး ရရှိရန် ကျန်နေသေးသော ငွေပေးချေမှုများကို သေချာစိစစ် စစ်ဆေးနိုင်ပါပြီ။</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/pricing') }}">စျေးနှုန်းများ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/developers/eng') }}">Developers</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle2"> ကုမ္ပဏီ<img class="drop-icon2"
                                    src="{{ asset('images/drop.svg') }}"></a>
                            <div class="dropdown-menu2">
                                <div class="drop-full-div2" id="drop-full-div">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-12 drop-left">
                                                <div class="block-icon3"><img
                                                        src="{{ asset('images/building 1.svg') }}" /> </div>
                                                <p id="main-menu">ကုမ္ပဏီ </p>
                                                <p id="small-p">Dinger သည် လုပ်ငန်းများ၏ ရည်မှန်းချက်များကို
                                                    ပိုမိုမြန်ဆန်စွာ အောင်မြင်စေရန် ငွေကြေးဆိုင်ရာ
                                                    အကောင်းဆုံးအတွေ့အကြုံများကို ပေးပါသည်။ </p>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-12 drop-right  pl-4 ">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="menu-cap"><a>ရှာဖွေရန် </a></p>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/company') }}">ကျွန်ုပ်တို့အကြောင်း </a>
                                                        </p><br>

                                                    </div>
                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/career') }}"></a>
                                                        </p>

                                                    </div>

                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/career') }}">အလုပ်ခေါ်စာများ</a>
                                                        </p><br>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/newsroom') }}">သတင်းအချက်အလက်များ</a></p>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/partnership') }}">မိတ်ဖက်အဖြစ်ပါဝင်ခြင်း</a>
                                                        </p><br>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle3"> အကူအညီ <img class="drop-icon3"
                                    src="{{ asset('images/drop.svg') }}"></a>
                            <div class="dropdown-menu3">
                                <div class="drop-full-div3" id="drop-full-div">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-12 drop-left">
                                                <div class="block-icon3"><img src="{{ asset('images/faq 1.svg') }}" />
                                                </div>
                                                <p id="main-menu">အကူအညီ </p>
                                                <p id="small-p">အကူအညီလိုအပ်နေပါသလား။ ပိုမိုကောင်းမွန်သောအဖြေတစ်ခုအတွက်
                                                    ကျွန်ုပ်တို့အား အခုပဲဆက်သွယ်လိုက်ပါ။ </p>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-12 drop-right pl-4 ">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="menu-cap"><a>အကူအညီရယူရန် </a></p>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/support') }}">အကူအညီရယူရန်</a>
                                                        </p><br>

                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/tnc') }}">
                                                            </a></p>

                                                    </div>

                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/contact') }}">ဆက်သွယ်ရန် </a>
                                                        </p><br>

                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/reclaim') }}">ပြန်လည်တင်သွင်းခြင်း </a>
                                                        </p><br>

                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/tnc') }}">
                                                            </a></p>

                                                    </div>

                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/tnc') }}">စည်းကမ်းနှင့်သတ်မှတ်ချက်များ
                                                            </a></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <div id="hider2">
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>   
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        <li class="nav-item dropdown">
                            <p class="nav-link  dropdown-toggle3"></p>
                        </li>
                        </div>

                        <li class="nav-item dropdown">
                            <a class="nav-link" target="blank" href="https://portal.dinger.asia/login">အကောင့်ဝင်ရန်</a>
                        </li>

                        <a class="nav-link" target="blank" href="https://portal.dinger.asia/signup"><button
                                id="create-acc-btn">အကောင့်ဖွင့်ရန်</button></a>
                        <div class="dropdown lang-drop">
                            <button onclick="myFunction()" class="dropbtn">
                                <img class="drop-icon4" src="{{ asset('images/drop.svg') }}"><img id="language-myan-icon"
                                    src="{{ asset('images/Myan.png') }}"></button>
                            <div class="dropdown-content">
                                <a href="#">မြန်မာ</a>
                                <a href="{{  Request::url() }}/eng">English</a>
                            </div>
                        </div>
                    </ul>

                    <div id="mb-menu-div">
                        <div class="menu">
                            <div class="hamburger-menu-wrapper">
                                <button class="hamburger-menu">
                                    <span>toggle menu</span>
                                </button>
                                <div class="dropdown lang-drop">
                                    <button onclick="myFunction()" class="dropbtn">
                                    <img class="drop-icon3" src="{{ asset('images/drop.svg') }}"><img id="language-myan-icon"
                                    src="{{ asset('images/Myan.png') }}"></button>
                                    <div class="dropdown-content">
                                        <a href="#">မြန်မာ</a>
                                        <a href="{{  Request::url() }}/eng">English</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="menu-overlay">

        <div class="container menu">

            <div class="menu-list">
                <ul id="mb-ul">
                    <li class="mb-2">ထုတ်ကုန်များ</li>
                    <ul id="mb-sub-menu">
                        <!-- <li><a href="{{ url('/fb-online-shop') }}">Facebook Online Shop</a></li> -->
                        <li><a href="{{ url('/ecommerce') }}">Ecommerce</a></li>
                        <li><a href="{{ url('/social') }}">Social Merchant</a></li>
                        <li><a href="{{ url('/micro') }}">Microfinance</a></li>
                        <li><a href="{{ url('/features') }}">လုပ်ဆောင်ချက်များ</a></li>
                        <li><a href="{{ url('/pricing') }}">စျေးနှုန်းသတ်မှတ်ချက်များ</a></li>
                        <li><a href="{{ url('/invoice') }}">အွန်လိုင်းငွေတောင်းခံလွှာ</a></li>
                    </ul>
                    <li class="mb-2 pt-3">ကုမ္ပဏီအကြောင်း</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/company') }}">ကုမ္ပဏီဖြစ်တည်လာပုံ</a></li>
                        <li><a href="{{ url('/career') }}">အလုပ်ခေါ်စာများ</a></li>
                        <li><a href="{{ url('/newsroom') }}">သတင်းအချက်အလက်မျှဝေပေးခြင်း</a></li>
                        <li><a href="{{ url('/partnership') }}">မိတ်ဖက်အဖြစ်ပါဝင်ခြင်း</a></li>
                    </ul>
                    <li class="mb-2 pt-3">အကူအညီရယူရန်</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/support') }}">အကူအညီ</a></li>
                        <li><a href="{{ url('/developers/eng') }}">Developers</a></li>
                        <li><a href="{{ url('/contact') }}">ဆက်သွယ်ရန်</a></li>
                        <li><a href="{{ url('/reclaim') }}">ပြန်အမ်းငွေသတ်မှတ်ချက်များ</a></li>
                        <li><a href="{{ url('/tnc') }}">စည်းကမ်းနှင့်သတ်မှတ်ချက်များ</a></li>
                    </ul>
                    <li id="btn-li"><a target="blank" href="https://portal.dinger.asia/signup"><button
                                id="create-acc-btn">အကောင့်ဖွင့်ရန်</button></a></li>
                    <div style="text-align:center;" class="mt-2">အကောင့်ရှိပြီးပြီလား? <a id="login-text" target="blank"
                            href="https://portal.dinger.asia/login">ဝင်ရန်</a></div>
                </ul>
            </div>
        </div>

    </div>

    <main id="main-mm">
        @yield('content')
    </main>

    <footer>
        <div id="footer-top">
            <h3 class="mb-4 pb-2">ရောင်းအားမြှင့်တင်ဖို့အဆင်သင့်ပဲလား?</h3>
            <!-- <a href="tel:+959787747310"> -->
            <a href="{{ url('/contact') }}"><button>အခုပဲဆက်သွယ်လိုက်ပါ</button></a>
        </div>

        <div id="footer-bot">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">

                        <div id="subscribe-area">
                            <h2>Subscribe to our newsletters</h2>
                            <form method="POST" action="/news-subscription">

                                @csrf

                                <div class="form-row">

                                    <input name="email" placeholder="Email *" type="email">
                                    <button type="submit" class="subscribe-btn"><img
                                            src="{{ asset('/images/newsletter-icon.svg') }}" /></button>

                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>

                                @if (session()->has('success_news'))
                                <div id="success-block" class="alert alert-success">
                                    {{ session()->get('success_news') }}
                                </div>
                                @endif
                                <p>I confirm that I have read Dinger’s Privacy Policy and I agree to the use of my data
                                    in line therewith.</p>
                            </form>

                            <div id="icon-div">
                                <img src="{{ asset('images/insta.svg') }}" />
                                <img src="{{ asset('images/fb.svg') }}" />
                                <img src="{{ asset('images/mesg.svg') }}" />
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 col-12">

                        <div id="footer-menu" class="row">

                            <div class="col-md-4 col-sm-6 col-6">
                                <p>ထုတ်ကုန်များ</p>
                                <ul id="footer-ul">
                                    <!-- <li><a href="#">Facebook Online Shop</a></li>
                                    <li><a href="#">Ecommerce</a></li> -->
                                    <li><a href="{{ url('/ecommerce') }}">Ecommerce</a></li>
                                    <li><a href="{{ url('/social') }}">Social Merchant</a></li>
                                    <li><a href="{{ url('/micro') }}">Microfinance</a></li>
                                    <li><a href="{{ url('/features') }}">လုပ်ဆောင်ချက်များ</a></li>
                                    <li><a href="{{ url('/pricing') }}">စျေးနှုန်းသတ်မှတ်ချက်များ</a></li>
                                    <li><a href="{{ url('/invoice') }}">အွန်လိုင်းငွေတောင်းခံလွှာ</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 col-sm-6 col-6">
                                <p>ကုမ္ပဏီအကြောင်း</p>
                                <ul id="footer-ul">
                                    <li><a href="{{ url('/company') }}">ကုမ္ပဏီဖြစ်တည်လာပုံ</a></li>
                                    <li><a href="{{ url('/career') }}">အလုပ်အကိုင်</a></li>
                                    <li><a href="{{ url('/newsroom') }}">သတင်းအချက်အလက်မျှဝေပေးခြင်း</a></li>
                                    <li><a href="{{ url('/partnership') }}">မိတ်ဖက်အဖြစ်ပါဝင်ခြင်း</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 col-sm-6 col-12">
                                <p>အကူအညီရယူရန်</p>
                                <ul id="footer-ul">
                                    <li><a href="{{ url('/support') }}">အကူအညီရယူရန်</a></li>
                                    <li><a href="{{ url('/contact') }}">ဆက်သွယ်ရန်</a></li>
                                    <li><a href="{{ url('/reclaim') }}">ပြန်အမ်းငွေသတ်မှတ်ချက်များ</a></li>
                                    <li><a href="{{ url('/tnc') }}">စည်းကမ်းနှင့်သတ်မှတ်ချက်များ</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container mt-md-5 pt-md-5" id="copyright-area">

                <div class="row flex-column-reverse flex-lg-row">

                    <div class="col-md-10 col-sm-12 col-12">
                        <p id="copyright-text">&copy; <?php echo date("Y"); ?> Dinger. All Right Reserved.</p>
                    </div>

                </div>


            </div>

    </footer>

</body>

</html>