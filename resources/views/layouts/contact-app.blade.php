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
    <meta property="og:url" content="https://www.dinger.asia/">
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



    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
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

<body>
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
                            <a class="nav-link  dropdown-toggle"> Products <img class="drop-icon1"
                                    src="{{ asset('images/drop.svg') }}"></a>
                            <div class="dropdown-menu">
                                <div class="drop-full-div1" id="drop-full-div">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-4 col-sm-4 col-12 drop-left">
                                                <div class="block-icon3"><img src="{{ asset('images/Vector.svg') }}" />
                                                </div>
                                                <p id="main-menu">Products</p>
                                                <p id="small-p">Discover the best practice of making digital payments at
                                                    every corner of your business </p>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-12 drop-right pl-4 ">
                                                <div class="row">


                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="menu-cap"><a>USECASES</a></p>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/ecommerce/eng') }}">Ecommerce</a></p>
                                                        <p id="small-p">Online transactions for heavy purchases with
                                                            accurate transaction records</p>
                                                    </div>

                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="menu-cap"><a>SOLUTIONS</a></p>
                                                        <p id="sub-menu"><a href="{{ url('/features/eng') }}">Key
                                                                Features</a></p>
                                                        <p id="small-p">The best solution for businesses to get paid
                                                            digitally as quick as possible </p><br>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <br>
                                                        <p id="sub-menu"><a
                                                                href="{{ url('micro/eng') }}">Microfinance</a></p>
                                                        <p id="small-p">Create the best customer experiences
                                                            on any channel</p><br>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/social/eng') }}"></a></p>
                                                        <p id="small-p"></p>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <br>
                                                        <p id="sub-menu"><a href="{{ url('/social/eng') }}">Social
                                                                Merchants</a></p>
                                                        <p id="small-p">Fast and secure check out solution which comes
                                                            with a unified single dashboard</p>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/partnership/eng') }}"></a>
                                                        </p>
                                                        <p id="small-p"></p>
                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <br><br>
                                                        <p id="sub-menu"><a href="{{ url('/invoice/eng') }}">Online Invoicing</a></p>
                                                        <p id="small-p">Organize the customized invoices and enhance the tracking capabilities </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/pricing/eng') }}">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/developers/eng') }}">Developers</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle2"> Company <img class="drop-icon2"
                                    src="{{ asset('images/drop.svg') }}"></a>
                            <div class="dropdown-menu2">
                                <div class="drop-full-div2" id="drop-full-div">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-12 drop-left">
                                                <div class="block-icon3"><img
                                                        src="{{ asset('images/building 1.svg') }}" /> </div>
                                                <p id="main-menu">Company</p>
                                                <p id="small-p">Dinger enables businesses in Myanmar to accept digital
                                                    payments from any accounts in the most simple and efficient way. Do
                                                    more with less.</p>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-12 drop-right  pl-4 ">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="menu-cap"><a>EXPLORE</a></p>
                                                        <p id="sub-menu"><a href="{{ url('/company/eng') }}">About
                                                                Us</a>
                                                        </p><br>

                                                    </div>
                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/career/eng') }}"></a>
                                                        </p>

                                                    </div>

                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/career/eng') }}">Career</a>
                                                        </p><br>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/newsroom/eng') }}">Newsroom</a></p><br>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-12 col-12 pl-5">
                                                        <p id="sub-menu"><a
                                                                href="{{ url('/partnership/eng') }}">Partnership
                                                                Benefits</a></p><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle3"> Support <img class="drop-icon3"
                                    src="{{ asset('images/drop.svg') }}"></a>
                            <div class="dropdown-menu3">
                                <div class="drop-full-div3" id="drop-full-div">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-12 drop-left">
                                                <div class="block-icon3"><img src="{{ asset('images/faq 1.svg') }}" />
                                                </div>
                                                <p id="main-menu">Support</p>
                                                <p id="small-p">Let your business grow revenues by maximizing your
                                                    payment acceptance options.</p>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-12 drop-right pl-4 ">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 col-12 pl-5">
                                                        <p id="menu-cap"><a>GET SUPPORT</a></p>
                                                        <p id="sub-menu"><a href="{{ url('/support/eng') }}">Help &
                                                                Support</a>
                                                        </p><br>

                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/tnc/eng') }}">
                                                            </a></p>

                                                    </div>

                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/contact/eng') }}">Contact
                                                                Us</a></p><br>

                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/reclaim/eng') }}">Reclaim</a>
                                                        </p><br>

                                                    </div>
                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/tnc/eng') }}">
                                                            </a></p>

                                                    </div>

                                                    <div class="col-md-5 col-sm-4 col-12 pl-5">
                                                        <p id="sub-menu"><a href="{{ url('/tnc/eng') }}">Terms and
                                                                Conditions</a></p>
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
                        </div>

                        <li class="nav-item dropdown">
                        <a class="nav-link" target="blank" href="https://portal.dinger.asia/login">Login</a>
                        </li>

                        <a class="nav-link" target="blank" href="https://portal.dinger.asia/signup"><button
                        id="create-acc-btn">Create account</button></a>
                        <div class="dropdown lang-drop">
                            <button onclick="myFunction()" class="dropbtn">
                                <img class="drop-icon4" src="{{ asset('images/drop.svg') }}"><img id="language-icon"
                                    src="{{ asset('images/Eng.png') }}"></button>
                            <div class="dropdown-content">
                            <a href="./">မြန်မာ</a>
                            <a href="#">English</a>
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
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <button onclick="myFunction()" class="dropbtn">
                                    <img class="drop-icon3" src="{{ asset('images/drop.svg') }}"><img id="language-icon"
                                    src="{{ asset('images/Eng.png') }}"></button>
                                    <div class="dropdown-content">
                                        <a href="./">မြန်မာ</a>
                                        <a href="#">English</a>
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
                    <li class="mb-2">Products</li>
                    <ul id="mb-sub-menu">
                        <!-- <li><a href="{{ url('/fb-online-shop') }}">Facebook Online Shop</a></li> -->
                        <li><a href="{{ url('/ecommerce/eng') }}">Ecommerce</a></li>
                        <li><a href="{{ url('/social/eng') }}">Social Merchant</a></li>
                        <li><a href="{{ url('/features/eng') }}">Features</a></li>
                        <li><a href="{{ url('/micro/eng') }}">Microfinance</a></li>
                        <li><a href="{{ url('/pricing/eng') }}">Pricing</a></li>
                        <li><a href="{{ url('/invoice/eng') }}">Online Invoicing</a></li>
                    </ul>
                    <li class="mb-2 pt-3">Company</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/company/eng') }}">About</a></li>
                        <li><a href="{{ url('/career/eng') }}">Career</a></li>
                        <li><a href="{{ url('/partnership/eng') }}">Partnership Benefits</a></li>
                        <li><a href="{{ url('/newsroom/eng') }}">Newsroom</a></li>
                    </ul>
                    <li class="mb-2 pt-3">Support</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/support/eng') }}">Support</a></li>
                        <li><a href="{{ url('/developers/eng') }}">Developers</a></li>
                        <li><a href="{{ url('/contact/eng') }}">Contact Us</a></li>
                        <li><a href="{{ url('/reclaim/eng') }}">Reclaim</a></li>
                        <li><a href="{{ url('/tnc/eng') }}">Terms and Conditions</a></li>
                    </ul>
                    <li id="btn-li"><a target="blank" href="https://portal.dinger.asia/signup"><button
                                id="create-acc-btn">Create account</button></a></li>
                    <div style="text-align:center;" class="mt-2">Already have an account? <a id="login-text"
                            target="blank" href="https://portal.dinger.asia/login">Login</a></div>
                </ul>
            </div>
        </div>

    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <div id="footer-top">
            <h3 class="mb-4 pb-2">Ready to raise sales?</h3>
            <!-- <a href="tel:+959787747310"> -->
            <a href="{{ url('/contact/eng') }}"><button>Contact now</button></a>
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
                                <p>Products</p>
                                <ul id="footer-ul">
                                    <!-- <li><a href="#">Facebook Online Shop</a></li>
                                    <li><a href="#">Ecommerce</a></li> -->
                                    <li><a href="{{ url('/ecommerce/eng') }}">Ecommerce</a></li>
                                    <li><a href="{{ url('/social/eng') }}">Social Merchant</a></li>
                                    <li><a href="{{ url('/features/eng') }}">Features</a></li>
                                    <li><a href="{{ url('/micro/eng') }}">Microfinance</a></li>
                                    <li><a href="{{ url('/pricing/eng') }}">Pricing</a></li>
                                    <li><a href="{{ url('/invoice/eng') }}">Online Invoicing</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 col-sm-6 col-6">
                                <p>Company</p>
                                <ul id="footer-ul">
                                    <li><a href="{{ url('/company/eng') }}">About</a></li>
                                    <li><a href="{{ url('/career/eng') }}">Career</a></li>
                                    <li><a href="{{ url('/partnership/eng') }}">Partnership Benefits</a></li>
                                    <li><a href="{{ url('/newsroom/eng') }}">Newsroom</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 col-sm-6 col-12">
                                <p>Support</p>
                                <ul id="footer-ul">
                                    <li><a href="{{ url('/support/eng') }}">Support</a></li>
                                    <li><a href="{{ url('/contact/eng') }}">Contact Us</a></li>
                                    <li><a href="{{ url('/reclaim/eng') }}">Reclaim</a></li>
                                    <li><a href="{{ url('/tnc/eng') }}">Terms & Conditions</a></li>
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


        </div>

    </footer>

    <script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > 350) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
    </script>
</body>


</html>