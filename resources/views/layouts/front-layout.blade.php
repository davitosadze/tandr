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
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                                    class="ion-ios-cart"></i> <span class="badge">3</span> </a>
                            <ul class="dropdown-menu cart-list">
                                <li> <a href="#" class="photo"><img src="assets/images/thumb01.jpg"
                                            class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Casual T-shirt </a></h6>
                                    <p><span class="price">$25.99</span></p>
                                </li>
                                <li> <a href="#" class="photo"><img src="assets/images/thumb02.jpg"
                                            class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Woman Top</a></h6>
                                    <p><span class="price">$15.99</span></p>
                                </li>
                                <li class="total"><span class="pull-left"><strong>Total</strong></span> <span
                                        class="pull-right">: $35.99</span> </li>
                                <li><a href="#"
                                        class="btn btn-default btn-dark btn-block remove-margin">Checkout</a> </li>
                            </ul>
                        </li>
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
                                src="assets/images/logo-white.png" alt=""> <img class="logo logo-scrolled"
                                src="assets/images/logo-black.png" alt=""> </a> </div>
                </div>
                <!--=== End Header Navigation ===-->

                <!--=== Collect the nav links, forms, and other content for toggling ===-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
                        <li class="dropdown megamenu-fw"> <a href="index.html" class="dropdown-toggle"
                                data-toggle="dropdown">Home</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">Home Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="index.html">Home Default</a></li>
                                                    <li><a href="digital-agency.html">Home Digital Agency</a></li>
                                                    <li><a href="creative-agency.html">Home Creative Agency</a></li>
                                                    <li><a href="home-startup.html">Home Startup</a></li>
                                                    <li><a href="home-minimal.html">Home Minimal</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">Home Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="home-app-landing.html">Home App Landing</a></li>
                                                    <li><a href="home-architecture.html">Home Architecture</a></li>
                                                    <li><a href="home-photography.html">Home Photography</a></li>
                                                    <li><a href="home-resume.html">Home Resume</a></li>
                                                    <li><a href="home-fitness.html">Home Fitness</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-3 ===-->
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">Home Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="home-portfolio.html">Home Portfolio</a></li>
                                                    <li><a href="home-restaurant.html">Home Restaurant</a></li>
                                                    <li><a href="home-fashion.html">Home Fashion</a></li>
                                                    <li><a href="home-onepage.html">Home One Page</a></li>
                                                    <li><a href="home-corporate-business.html">Home Corporate
                                                            Business</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--=== end row ===-->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-creative.html">About - Creative</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="404-page.html">404 Page</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="career.html">Careers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                                <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="grid-2col.html">Two Columns</a></li>
                                        <li><a href="grid-3col.html">Three Columns</a></li>
                                        <li><a href="grid-4col.html">Four Columns</a></li>
                                        <li><a href="grid-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="masonry-2col.html">Two Columns</a></li>
                                        <li><a href="masonry-3col.html">Three Columns</a></li>
                                        <li><a href="masonry-4col.html">Four Columns</a></li>
                                        <li><a href="masonry-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Grid - Space</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="grid-space-2col.html">Two Columns</a></li>
                                        <li><a href="grid-space-3col.html">Three Columns</a></li>
                                        <li><a href="grid-space-4col.html">Four Columns</a></li>
                                        <li><a href="grid-space-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Masonry - Space</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="masonry-space-2col.html">Two Columns</a></li>
                                        <li><a href="masonry-space-3col.html">Three Columns</a></li>
                                        <li><a href="masonry-space-4col.html">Four Columns</a></li>
                                        <li><a href="masonry-space-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">Single Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="single-portfolio-one.html">Single Portfolio One</a></li>
                                        <li><a href="single-portfolio-two.html">Single Portfolio Two</a></li>
                                        <li><a href="single-portfolio-three.html">Single Portfolio Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-product.html">Single Product</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="shop-checkout.html">Shop Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown">Elements</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">Element</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="accordions.html">Accordions</a></li>
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="boxed-icons.html">Boxed Icons</a></li>
                                                    <li><a href="contact-form.html">Contact Forms</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-4 ===-->
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">Element</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="google-maps.html">Google Maps</a></li>
                                                    <li><a href="progress-bar.html">Progress Bars</a></li>
                                                    <li><a href="pricing-table.html">Pricing Tables</a></li>
                                                    <li><a href="sliders.html">Sliders</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--=== end col-4 ===-->
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">Element</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="tabs.html">Tabs</a></li>
                                                    <li><a href="theme-icons.html">Theme Icons</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="team-member.html">Team Members</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--=== end row ===-->
                                </li>
                            </ul>
                        </li>
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
                                            src="assets/images/logo-footer-light.png" alt=""></a> </div>
                                <div class="widget-links">
                                    <ul>
                                        <li>44 Shirley Ave. West Chicago, IL 60185</li>
                                        <li>(001) 7878 234 564</li>
                                        <li>hello@gmail.com</li>
                                        <li>www.grandy.com</li>
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
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="widget widget-links">
                                <h5 class="widget-title">Legal</h5>
                                <ul>
                                    <li><a href="#">Privacy Policies</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="widget widget-text">
                                <h5 class="widget-title">Popular Tags</h5>
                                <div class="popular-tags"> <a href="#">Minimal</a> <a href="#">One
                                        Page</a> <a href="#">Design</a> <a href="#">Creative</a> <a
                                        href="#">Apps</a>
                                    <a href="#">Development</a> <a href="#">Tips</a> <a
                                        href="#">Responsive</a>
                                </div>
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
                            <div class="copy-right text-right">© 2017 Grandy. All rights reserved</div>
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
