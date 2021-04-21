<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/flaticon.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/nice-select.min.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/meanmenu.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/style.css">

    <link rel="stylesheet" href="{{url('')}}/assets/css/responsive.css">
    <title>Eagle Internet</title>
    <link rel="icon" type="image/png" href="{{url('')}}/assets/img/logo.jpg">
</head>
<body>

<div class="preloader">
    <div class="spinner"></div>
</div>


<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="top-header-left">
                        <p><span style="color: white">Call Now : </span> <a href="tel:3346350979">334-635-0979</a></p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="top-header-right">
{{--                        <div class="login-signup-btn">--}}
{{--                            <p><a href="#">Login</a> <span>or</span> <a href="#">Register</a></p>--}}
{{--                        </div>--}}
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="bahama-mobile-nav">
            <div class="logo">
                <a href="{{url('')}}">
                    <img src="{{url('')}}/assets/img/logo.jpg" alt="logo" style="height: 100px!important;width: 150px!important;">
                </a>
            </div>
        </div>
        <div class="bahama-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{url('')}}">
                        <img src="{{url('')}}/assets/img/logo.jpg" alt="logo"  style="height: 80px!important;width: 150px!important;">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{url('')}}" class="nav-link {{\Request::is('/') ? 'active' : ''}}">Home </a></li>
                            <li class="nav-item"><a href="{{url('services')}}" class="nav-link {{\Request::is('services') ? 'active' : ''}}">Services</a></li>
{{--                            <li class="nav-item"><a href="{{url('services')}}" class="nav-link">How it works</a></li>--}}
                            <li class="nav-item"><a href="{{url('aboutus')}}" class="nav-link {{\Request::is('aboutus') ? 'active' : ''}}">About Us</a></li>
                            <li class="nav-item"><a href="{{url('pricing')}}" class="nav-link {{\Request::is('pricing') ? 'active' : ''}}">Pricing</a></li>
                            <li class="nav-item"><a href="https://towercoverage.com" target="_blank" class="nav-link" >Coverage</a></li>
                            <li class="nav-item"><a href="https://portal.eagleinternetservices.com" target="_blank" class="nav-link">Portal</a></li>
                            <li class="nav-item"><a href="{{url('contactus')}}" class="nav-link {{\Request::is('contactus') ? 'active' : ''}}">Contact</a></li>
                        </ul>
{{--                        <div class="others-options">--}}
{{--                            <a href="{{url('contactus')}}" class="btn btn-primary">Get Started</a>--}}
{{--                        </div>--}}
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
                @yield('content')


<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="#"><img src="{{url('')}}/assets/img/logo.jpg" alt="image" style="width: 150px;height: 150px"></a>
{{--                        <p style="color: white!important;">--}}
{{--                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>--}}
{{--                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>--}}
{{--                        </p>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Get In Touch</h3>
                    <div class="widget-contact-info">
                        <p>
                            <a href="#">334-635-0979</a>
                            P.O. Box 275, Demopolis, AL 36732
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <p><i class="far fa-copyright"></i> Copyrights Eagle Internet 2021. All Rights Reserved</p>
        </div>
    </div>
</footer>

<div class="go-top"><i class="fas fa-arrow-up"></i></div>

<script src="{{url('')}}/assets/js/jquery.min.js"></script>

<script src="{{url('')}}/assets/js/popper.min.js"></script>

<script src="{{url('')}}/assets/js/bootstrap.min.js"></script>

<script src="{{url('')}}/assets/js/jquery.meanmenu.js"></script>

<script src="{{url('')}}/assets/js/jquery.magnific-popup.min.js"></script>

<script src="{{url('')}}/assets/js/owl.carousel.min.js"></script>

<script src="{{url('')}}/assets/js/parallax.min.js"></script>

<script src="{{url('')}}/assets/js/jquery.nice-select.min.js"></script>

<script src="{{url('')}}/assets/js/wow.min.js"></script>

<script src="{{url('')}}/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="{{url('')}}/assets/js/form-validator.min.js"></script>

<script src="{{url('')}}/assets/js/contact-form-script.js"></script>

<script src="{{url('')}}/assets/js/bahama-map.js"></script>

<script src="{{url('')}}/assets/js/main.js"></script>
</body>

</html>
