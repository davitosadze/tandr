<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>T&R</title>
    <link rel="shortcut icon" href="    {{ asset('front-theme/assets/images/favicon.ico') }}
    ">
    <link rel="stylesheet" href="    {{ asset('front-theme/assets/css/master.css') }}
    ">
    <link rel="stylesheet" href="    {{ asset('front-theme/assets/css/responsive.css') }}
    ">
</head>

<body>

    <!--=== Loader Start ======-->
    <div id="loader-overlay">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <!--=== Loader End ======-->

    <!--=== Wrapper Start ===-->
    <div class="wrapper">

        <!--=== Header Start ===-->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
            <!--=== Start Top Search ===-->
            <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close"
                    id="fullscreen-close-button"><i class="ion-close"></i></a>
                <div id="fullscreen-search-wrapper">
                    <form method="get" id="fullscreen-searchform">
                        <input type="text" value="" placeholder="Type and hit Enter..."
                            id="fullscreen-search-input" class="search-bar-top">
                        <i class="fullscreen-search-icon ion-android-search">
                            <input value="" type="submit">
                        </i>
                    </form>
                </div>
            </div>
            <!--=== End Top Search ===-->

            <div class="container">
                <!--=== Start Atribute Navigation ===-->
                <div class="attr-nav">
                    <ul>

                        <li class="search"><a href="#" id="search-button"><i class="ion-android-search"></i></a>
                        </li>
                    </ul>
                </div>
                <!--=== End Atribute Navigation ===-->

                <!--=== Start Header Navigation ===-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                            class="eicon ion-android-menu"></i> </button>
                    <div class="logo"> <a href="index.html"> <img class="logo logo-display"
                                src="{{ asset('front-theme/assets/images/logo.jpg') }}" alt=""> <img
                                class="logo logo-scrolled" src="{{ asset('front-theme/assets/images/logo.jpg') }}"
                                alt=""> </a> </div>
                </div>
                <!--=== End Header Navigation ===-->

                <!--=== Collect the nav links, forms, and other content for toggling ===-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
                        <li class="dropdown megamenu-fw"> <a href="index.html" class="dropdown-toggle"
                                data-toggle="dropdown">Home</a>
                        <li class="dropdown megamenu-fw"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">About Us</a>
                        <li class="dropdown megamenu-fw"> <a href="index.html" class="dropdown-toggle"
                                data-toggle="dropdown">Career</a>
                        <li class="dropdown megamenu-fw"> <a href="index.html" class="dropdown-toggle"
                                data-toggle="dropdown">Media</a>



                    </ul>
                </div>
                <!--=== /.navbar-collapse ===-->
            </div>
        </nav>
        <!--=== Header End ===-->
        @yield('content')
        <!--=== Footer Start ===-->
        <footer class="footer dark-block" id="footer-fixed">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="widget widget-text">
                                <div class="logo logo-footer"><a href="index.html"> <img class="logo logo-display"
                                            src="{{ asset('front-theme/assets/images/logo.jpg') }}" alt=""></a>
                                </div>
                                <div class="widget-links">
                                    <ul>
                                        <li>Tbilisi, Chirnakhuli Street 2</li>
                                        <li>0322407171</li>
                                        <li>info@trd.ge</li>
                                        <li>T&R Website</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="widget widget-links">
                                <h5 class="widget-title">Links</h5>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Media</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <ul class="social-media">
                                <li><a href="#" class="ion-social-linkedin"></a></li>
                                <li><a href="#" class="ion-social-facebook"></a></li>
                                <li><a href="#" class="ion-social-twitter"></a></li>
                                <li><a href="#" class="ion-social-pinterest"></a></li>
                                <li><a href="#" class="ion-social-instagram"></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="copy-right text-right">© 2023 T&R. All rights reserved</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=== Footer End ===-->

        <!--=== GO TO TOP  ===-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--=== GO TO TOP End ===-->

    </div>
    <!--=== Wrapper End ===-->

    <!--=== Javascript Plugins ===-->
    <script src="{{ asset('front-theme/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-theme/assets/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('front-theme/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('front-theme/assets/js/master.js') }}"></script>

    <!--=== Javascript Plugins End ===-->

</body>

</html>
