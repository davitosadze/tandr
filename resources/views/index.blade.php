@extends('layouts.front-layout')
@section('content')
    <!--=== Hero Slider Start ===-->
    <section class="home-slider">

        <div class="default-slider slick">
            <div class="slide">
                <div class="slide-img parallax-effect"
                    style="background:url(assets/images/slides/home-bg-3.jpg) center center / cover scroll no-repeat;"></div>
                <div class="hero-text-wrap">
                    <div class="hero-text white-color fade-left-text">
                        <div class="container">
                            <div class="white-color text-left">
                                <h1 class="white-color font-700 text-uppercase">We Build <br>Moment of Magic</h1>
                                <h5 class="white-color">We are New York and Chichago digital agency for digital strategy.
                                </h5>
                                <p class="text-left mt-30"><a class="btn btn-color btn-md btn-default remove-margin">Request
                                        a Quote</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">

                <div class="slide-img parallax-effect"
                    style="background:url(assets/images/slides/home-bg-4.jpg) center center / cover scroll no-repeat;">
                </div>
                <div class="hero-text-wrap">
                    <div class="hero-text white-color fade-left-text">
                        <div class="container">
                            <div class="white-color text-left">
                                <h1 class="white-color font-700 text-uppercase">Experience Beautiful</h1>
                                <h5 class="white-color">We provide a rich suite of creative and technical services.</h5>
                                <p class="text-left mt-30"><a
                                        class="btn btn-outline-white btn-md btn-default remove-margin">Our Work</a> <a
                                        class="btn btn-dark btn-md btn-default">About US</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--=== Hero Slider End ===-->

    <!--=== Who We Are Start ===-->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row row-flex">
                <div class="col-md-4">
                    <div class="col-inner spacer dark-bg">
                        <div class="text-center white-color wow fadeInUp" data-wow-delay="0.1s"> <i
                                class="icon-focus font-40px white-icon"></i>
                            <h5 class="text-uppercase mt-40">Branding</h5>
                            <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus
                                consectetur metus posuere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-inner spacer darken-bg">
                        <div class="text-center white-color wow fadeInUp" data-wow-delay="0.2s"> <i
                                class="icon-megaphone font-40px white-icon"></i>
                            <h5 class="text-uppercase mt-40">Marketing</h5>
                            <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus
                                consectetur metus posuere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-inner spacer d-dark-bg">
                        <div class="text-center white-color wow fadeInUp" data-wow-delay="0.3s"> <i
                                class="icon-camera font-40px white-icon"></i>
                            <h5 class="text-uppercase mt-40">Photography</h5>
                            <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus
                                consectetur metus posuere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Who We Are End ===-->


    <!--=== Portfolio Start ===-->
    <section class="white-bg dark-block pattern-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading pb-0">
                    <h2 class="text-uppercase">Our Works</h2>
                    <hr class="dark-bg">
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div id="grandy-folio-filter" class="cbp-l-filters-alignCenter text-sm-center mt-60 mb-100">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item dark">
                            All
                        </div>
                        <div data-filter=".branding" class="cbp-filter-item">
                            Branding
                        </div>
                        <div data-filter=".print" class="cbp-filter-item">
                            Print Design
                        </div>
                        <div data-filter=".ui-ux" class="cbp-filter-item">
                            UI/UX Design
                        </div>
                        <div data-filter=".development" class="cbp-filter-item">
                            Development
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                    <div id="grandy-folio" class="cbp">
                        <div class="cbp-item branding col-md-6 col-sm-6 with-spacing">
                            <div class="portfolio gallery-image-hover text-center">
                                <div class="folio-overlay"></div>
                                <img src="assets/images/portfolio/grid/12.jpg" alt="">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-description">
                                        <h3 class="portfolio-title">Studio Niccolai</h3>
                                        <a href="single-portfolio.html" class="links">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cbp-item print ui-ux col-md-6 col-sm-6 with-spacing">
                            <div class="portfolio gallery-image-hover text-center">
                                <div class="folio-overlay"></div>
                                <img src="assets/images/portfolio/grid/14.jpg" alt="">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-description">
                                        <h3 class="portfolio-title">Thenordic</h3>
                                        <a href="single-portfolio.html" class="links">Print Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cbp-item print development col-md-6 col-sm-6 with-spacing">
                            <div class="portfolio gallery-image-hover text-center">
                                <div class="folio-overlay"></div>
                                <img src="assets/images/portfolio/grid/16.jpg" alt="">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-description">
                                        <h3 class="portfolio-title">Coffee & Tea</h3>
                                        <a href="single-portfolio.html" class="links">Development</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cbp-item branding col-md-6 col-sm-6 with-spacing">
                            <div class="portfolio gallery-image-hover text-center">
                                <div class="folio-overlay"></div>
                                <img src="assets/images/portfolio/grid/17.jpg" alt="">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-description">
                                        <h3 class="portfolio-title">Fach Bureau</h3>
                                        <a href="single-portfolio.html" class="links">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cbp-item branding ui-ux col-md-6 col-sm-6 with-spacing">
                            <div class="portfolio gallery-image-hover text-center">
                                <div class="folio-overlay"></div>
                                <img src="assets/images/portfolio/grid/19.jpg" alt="">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-description">
                                        <h3 class="portfolio-title">Bicker Janna</h3>
                                        <a href="single-portfolio.html" class="links">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cbp-item print development col-md-6 col-sm-6 with-spacing">
                            <div class="portfolio gallery-image-hover text-center">
                                <div class="folio-overlay"></div>
                                <img src="assets/images/portfolio/grid/20.jpg" alt="">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-description">
                                        <h3 class="portfolio-title">Collection </h3>
                                        <a href="single-portfolio.html" class="links">Print, Development</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!--=== Portfolio End ===-->

    <!--=== Our Team Start ===-->
    <section class="dark-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="text-uppercase">Meet Our Team</h2>
                    <hr class="dark-bg">
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-md-12 remove-padding">
                    <div class="team-slider slick">
                        <div class="member">
                            <div class="team-member-container gallery-image-hover"> <img
                                    src="assets/images/team/team-01.jpg" class="img-responsive" alt="team-01">
                                <div class="member-caption">
                                    <div class="member-description">
                                        <div class="member-description-wrap">
                                            <h4 class="member-title">James Brewer</h4>
                                            <p class="member-subtitle">Digital Designer</p>
                                            <ul class="member-icons">
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Member End ===-->

                        <div class="member">
                            <div class="team-member-container gallery-image-hover"> <img
                                    src="assets/images/team/team-02.jpg" class="img-responsive" alt="team-02">
                                <div class="member-caption">
                                    <div class="member-description">
                                        <div class="member-description-wrap">
                                            <h4 class="member-title">Amanda Stone</h4>
                                            <p class="member-subtitle">Lead Developer</p>
                                            <ul class="member-icons">
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Member End ===-->

                        <div class="member">
                            <div class="team-member-container gallery-image-hover"> <img
                                    src="assets/images/team/team-03.jpg" class="img-responsive" alt="team-03">
                                <div class="member-caption">
                                    <div class="member-description">
                                        <div class="member-description-wrap">
                                            <h4 class="member-title">Arthur Stewart</h4>
                                            <p class="member-subtitle">Founder & CEO</p>
                                            <ul class="member-icons">
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Member End ===-->

                        <div class="member">
                            <div class="team-member-container gallery-image-hover"> <img
                                    src="assets/images/team/team-04.jpg" class="img-responsive" alt="team-04">
                                <div class="member-caption">
                                    <div class="member-description">
                                        <div class="member-description-wrap">
                                            <h4 class="member-title">Eden Charles</h4>
                                            <p class="member-subtitle">Art Director</p>
                                            <ul class="member-icons">
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Member End ===-->

                        <div class="member">
                            <div class="team-member-container gallery-image-hover"> <img
                                    src="assets/images/team/team-05.jpg" class="img-responsive" alt="team-04">
                                <div class="member-caption">
                                    <div class="member-description">
                                        <div class="member-description-wrap">
                                            <h4 class="member-title">Lura Rose</h4>
                                            <p class="member-subtitle">Manager</p>
                                            <ul class="member-icons">
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="#"><i
                                                            class="ion-social-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Member End ===-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Our Team End ===-->

    <!--=== Testimonails Start ===-->
    <section class="parallax-bg fixed-bg" data-stellar-background-ratio="0"
        style="background-image: url(assets/images/background/parallax-bg-2.jpg);">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slick testimonial">
                        <!--=== Slide ===-->
                        <div class="testimonial-item">
                            <div class="testimonial-content"> <img class="img-responsive img-circle"
                                    src="assets/images/team/avatar-1.jpg" alt="avatar-1" />
                                <h5>Mark Taylor</h5>
                                <p>Creative Artist </p>
                                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed
                                    id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend
                                    consequat.</h4>
                            </div>
                        </div>
                        <!--=== Slide ===-->
                        <div class="testimonial-item">
                            <div class="testimonial-content"> <img class="img-responsive img-circle"
                                    src="assets/images/team/avatar-2.jpg" alt="avatar-1" />
                                <h5>Janet Peeler</h5>
                                <p>CEO of Arcon</p>
                                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed
                                    id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend
                                    consequat.</h4>
                            </div>
                        </div>
                        <!--=== Slide ===-->
                        <div class="testimonial-item">
                            <div class="testimonial-content"> <img class="img-responsive img-circle"
                                    src="assets/images/team/avatar-3.jpg" alt="avatar-1" />
                                <h5>Scott Williams</h5>
                                <p>CEO & Founder</p>
                                <h4>Quisque hendrerit turpis sit amet tortor condimentum, nec commodo lorem condimentum. Sed
                                    id diam efficitur, mattis tellus ac, malesuada purus. In ultrices nisl sed eleifend
                                    consequat.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Testimonails End ===-->


    <!--=== Clients Start ======-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="client-slider slick">
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/1.png"
                            alt="01" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/2.png"
                            alt="02" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/3.png"
                            alt="03" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/4.png"
                            alt="04" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/5.png"
                            alt="05" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/6.png"
                            alt="06" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/7.png"
                            alt="07" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/8.png"
                            alt="08" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/9.png"
                            alt="09" /> </div>
                    <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/10.png"
                            alt="10" /> </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Clients End ======-->

    <!--=== Blogs Start ===-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2>Our Blogs</h2>
                    <hr class="dark-bg">
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-4">
                    <div class="post wow fadeInUp" data-wow-delay="0.1s">
                        <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-01.jpg"
                                alt="" /> </div>
                        <div class="post-info">
                            <h3><a href="blog-grid.html">Quality never goes out of style</a></h3>
                            <h6>April 28, 2017</h6>
                            <hr>
                            <p class="mt-10">
                                <span>
                                    <a class="extras-wrap" href="#"><i
                                            class="ion-ios-chatboxes-outline"></i><span>5 Comments</span></a>
                                    <span class="extras-wrap"><i class="ion-ios-time-outline"></i><span>5
                                            Minutes</span></span>
                                </span>
                            </p>
                            <a class="readmore" href="#"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <!--=== Post End ===-->

                <div class="col-md-4">
                    <div class="post wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-02.jpg"
                                alt="" /> </div>
                        <div class="post-info">
                            <h3><a href="blog-grid.html">Maths is easy design is hard</a></h3>
                            <h6>May 9, 2015</h6>
                            <hr>
                            <p class="mt-10">
                                <span>
                                    <a class="extras-wrap" href="#"><i
                                            class="ion-ios-chatboxes-outline"></i><span>5 Comments</span></a>
                                    <span class="extras-wrap"><i class="ion-ios-time-outline"></i><span>5
                                            Minutes</span></span>
                                </span>
                            </p>
                            <a class="readmore" href="#"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <!--=== Post End ===-->

                <div class="col-md-4">
                    <div class="post wow fadeInUp" data-wow-delay="0.3s">
                        <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-03.jpg"
                                alt="" /> </div>
                        <div class="post-info">
                            <h3><a href="blog-grid.html">We Are good. Just ask our moms</a></h3>
                            <h6>November 18, 2016</h6>
                            <hr>
                            <p class="mt-10">
                                <span>
                                    <a class="extras-wrap" href="#"><i
                                            class="ion-ios-chatboxes-outline"></i><span>5 Comments</span></a>
                                    <span class="extras-wrap"><i class="ion-ios-time-outline"></i><span>5
                                            Minutes</span></span>
                                </span>
                            </p>
                            <a class="readmore" href="#"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <!--=== Post End ===-->


            </div>
        </div>
    </section>
    <!--=== Blogs End ===-->
@endsection
