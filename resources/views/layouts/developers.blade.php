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
    <link rel="stylesheet" type="text/css"
        href="<?php echo request()->getSchemeAndHttpHost(); ?>/css/styles.css?key=<?php echo time(); ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'>



    <!-- jQuery and JS bundle w/ Popper.js -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <script>
    $(document).ready(function() {
        $('.testiSlide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
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

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-2 col-xl-3 col-6 d-flex align-items-center">
                    <h3 id="docs">Dinger</h3>
                    <a class="docs-logo" href="{{ url('/eng') }}">
                        <img src="{{ asset('/images/Frame 21.png') }}" alt="Dinger docs">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-10 col-xl-9 col-6 p-lg-0">
                    <ul id="head-menu">
                        <li class="nav-item dropdown">
                           <p class="groove"><a class="nav-link  dropdown-toggle"><img src="{{ asset('/images/search-logo.png') }}" /> Search documentation...</a></p> 
                        </li>
                        <div class="dropdown lang-docs">
                            <li class="nav-item dropdown">
                                <a class="nav-link" target="blank" href="https://portal.dinger.asia/login">Login</a>
                            </li>
                        </div>

                    </ul>
                    <div id="mb-menu-div">
                        <div class="menu">
                            <div class="hamburger-menu-wrapper">
                                <button class="hamburger-menu">
                                    <span>toggle menu</span>
                                </button>
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
                <li class="mb-2">Get Started</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/developers/eng') }}">Home</a></li>
                    </ul>
                    <li class="mb-2">Staging API</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/stagingAPI-intro/eng') }}">Introduction</a></li>
                        <li><a href="{{ url('/Get-token/eng') }}">Get Token</a></li>
                        <li><a href="{{ url('/payAPI/eng') }}">Pay API</a></li>
                        <li><a href="{{ url('/Merchant-callback/eng') }}">Merchant Callback</a></li>
                    </ul>
                    <li class="mb-2 pt-3">Prebuilt Checkout API</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/Workflow/eng') }}">Workflow</a></li>
                        <li><a href="{{ url('/Payload/eng') }}">Payload and Redirect URL</a></li>
                        <li><a href="{{ url('/Payment/eng') }}">Payment Providers</a></li>
                        <li><a href="{{ url('/Encryption/eng') }}">Encryption & Decryption</a></li>
                    </ul>
                    <li class="mb-2 pt-3">Production API</li>
                    <ul id="mb-sub-menu">
                        <li><a href="{{ url('/production-intro/eng') }}">Introduction</a></li>
                        <li><a href="{{ url('/production-gettoken/eng') }}">Get Token</a></li>
                        <li><a href="{{ url('/production-payAPI/eng') }}">Pay API</a></li>
                        <li><a href="{{ url('/production-merchant-callback/eng') }}">Merchant Callback</a></li>
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
        <div class="container">
        <hr class="line">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12">
                <p id="dev-footer"><a> &copy; <?php echo date('Y'); ?> Dinger. All Right Reserved.</a></p>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <p id="dev-footer2"><a href="{{ url('/reclaim/eng') }}"> Reclaim</a></p>
                <p id="dev-footer3"><a href="{{ url('/tnc/eng') }}">Terms & Conditions</a></p>
            </div>
        </div>
        </div>
    </footer>
    <script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
function openCity2(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>


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