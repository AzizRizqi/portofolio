@extends('portofolio.index')
@section()
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mona - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Mona - sssModel Agency sssHTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('porto/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('porto/style.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="monaNav">

                    <!-- Background Curve -->
                    <div class="bg-curve" style="background-image: url(./img/core-img/curve.png);"></div>

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="./index.html">Hosme</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">- Home</a></li>
                                        <li><a href="./about.html">- About Us</a></li>
                                        <li><a href="./projects.html">- Projects</a></li>
                                        <li><a href="./models.html">- Models</a></li>
                                        <li><a href="./casting.html">- Casting</a></li>
                                        <li><a href="./blog.html">- Blog</a></li>
                                        <li><a href="./single-blog.html">- Blog Details</a></li>
                                        <li><a href="./contact.html">- Contact</a></li>
                                        <li><a href="#">- Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="./projects.html">Project</a></li>
                                <li><a href="./models.html">Models</a></li>
                                <li><a href="./casting.html">Casting</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">- Blog</a></li>
                                        <li><a href="./single-blog.html">- Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>

                            <!-- Search Icon -->
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i
                                class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control"
                                placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="mona-about-us-area mb-30 section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- About Us Thumbnail -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="about-us-thumbnail mb-50">
                        <span class="line"></span>
                        <img src="./img/bg-img/16.jpg" alt="">
                        <span class="line2"></span>
                    </div>
                </div>

                <!-- About Us Thumbnail -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="about-us-thumbnail mb-50">
                        <span class="line"></span>
                        <img src="./img/bg-img/17.jpg" alt="">
                        <span class="line2"></span>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-4">
                    <div class="about-us-content mb-50">
                        <h2>We Have 20+ Years Practical Experience in Agency</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut
                            labore et dolore magna.</p>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata
                            sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Service Area -->
        <div class="container">
            <div class="service-area mt-80">
                <div class="row">

                    <!-- Single Service Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-service-area mb-50">
                            <i class="icon_film"></i>
                            <h5>Fashion Shows</h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-service-area mb-50">
                            <i class="icon_calendar"></i>
                            <h5>Special Events</h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-service-area mb-50">
                            <i class="icon_camera_alt"></i>
                            <h5>Commercial Photo</h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-service-area mb-50">
                            <i class="icon_house_alt"></i>
                            <h5>Model School</h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Core Value Area Start ***** -->
    <section class="mona-core-value-area bg-gray section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Core Value</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mona-benefits-area mb-80">

                        <!-- Single Benefits Area -->
                        <div class="single-benefits-area d-flex mb-30">
                            <!-- Icon -->
                            <div class="benefits-icon">
                                <i class="icon_box-checked"></i>
                            </div>
                            <!-- Content -->
                            <div class="benefits-content">
                                <h5>Expert Advice</h5>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>

                        <!-- Single Benefits Area -->
                        <div class="single-benefits-area d-flex mb-30">
                            <!-- Icon -->
                            <div class="benefits-icon">
                                <i class="icon_like_alt"></i>
                            </div>
                            <!-- Content -->
                            <div class="benefits-content">
                                <h5>Clients Satisfaction</h5>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>

                        <!-- Single Benefits Area -->
                        <div class="single-benefits-area d-flex mb-30">
                            <!-- Icon -->
                            <div class="benefits-icon">
                                <i class="icon_calendar"></i>
                            </div>
                            <!-- Content -->
                            <div class="benefits-content">
                                <h5>Planning & Strategy</h5>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="mona-video-area mb-80">
                        <img src="./img/bg-img/21.jpg" alt="">
                        <!-- Play Button -->
                        <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="btn video-play-btn"><i
                                class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Core Value Area End ***** -->

    <!-- ***** Team Area Start ***** -->
    <section class="mona-team-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-80">
                        <div class="team-member-thumbnail">
                            <!-- Thumbnail -->
                            <img src="./img/bg-img/22.jpg" alt="">

                            <!-- Share Info -->
                            <div class="share-info">
                                <!-- Share Icon -->
                                <div class="share-icon">
                                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </div>
                                <!-- Others Icon -->
                                <div class="others-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h4>Herbert Ortiz</h4>
                            <h6>Director</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-80">
                        <div class="team-member-thumbnail">
                            <!-- Thumbnail -->
                            <img src="./img/bg-img/23.jpg" alt="">

                            <!-- Share Info -->
                            <div class="share-info">
                                <!-- Share Icon -->
                                <div class="share-icon">
                                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </div>
                                <!-- Others Icon -->
                                <div class="others-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h4>Steve Dunn</h4>
                            <h6>top model</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-80">
                        <div class="team-member-thumbnail">
                            <!-- Thumbnail -->
                            <img src="./img/bg-img/24.jpg" alt="">

                            <!-- Share Info -->
                            <div class="share-info">
                                <!-- Share Icon -->
                                <div class="share-icon">
                                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </div>
                                <!-- Others Icon -->
                                <div class="others-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h4>Philip Bell</h4>
                            <h6>choreographer</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-80">
                        <div class="team-member-thumbnail">
                            <!-- Thumbnail -->
                            <img src="./img/bg-img/25.jpg" alt="">

                            <!-- Share Info -->
                            <div class="share-info">
                                <!-- Share Icon -->
                                <div class="share-icon">
                                    <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </div>
                                <!-- Others Icon -->
                                <div class="others-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h4>Aiden Caldwell</h4>
                            <h6>Model</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Team Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area section-padding-0-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with!
                                    The company has either met or exceeded all of the goals that we initially set for
                                    all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with!
                                    The company has either met or exceeded all of the goals that we initially set for
                                    all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Nazrul Islam</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with!
                                    The company has either met or exceeded all of the goals that we initially set for
                                    all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Williams Rodney</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with!
                                    The company has either met or exceeded all of the goals that we initially set for
                                    all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with!
                                    The company has either met or exceeded all of the goals that we initially set for
                                    all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="./img/bg-img/6.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="./img/bg-img/7.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="./img/bg-img/8.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="./img/bg-img/6.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="./img/bg-img/7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="mona-cta-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <h2>Do You Want To Be A Model?</h2>
                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</h6>
                        <a href="#" class="btn mona-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-footer-widget mb-60">
                        <!-- Logo -->
                        <a href="#" class="d-block mb-4"><img src="./img/core-img/logo.png"
                                alt=""></a>
                        <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet. Suspendisse mattis ante
                            sit amet ante.</p>
                        <div class="copywrite-text">
                            <p>&copy;
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-footer-widget mb-60">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Our Link</h4>

                        <!-- Catagories Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="#">New Faces</a></li>
                                <li><a href="#">Model Of the Week</a></li>
                                <li><a href="#">Classic Women</a></li>
                                <li><a href="#">Privacy Terms</a></li>
                                <li><a href="#">Classic Men</a></li>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Hair & Styles</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="single-footer-widget mb-60">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact</h4>
                        <!-- Footer Content -->
                        <div class="footer-content mb-30">
                            <h4>+01-3-8888-6868</h4>
                            <h6>40 Baria Sreet 133/2 NewYork City</h6>
                        </div>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top"
                                title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top"
                                title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top"
                                title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS ******* -->
    <!-- jQuery js -->
    <script src="{{ asset('../porto/js/jquery.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('../porto/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('../porto/js/bootstrap.min.js') }}"></script>
    <!-- All js -->
    <script src="{{ asset('../porto/js/mona.bundle.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('../porto/js/default-assets/active.js') }}"></script>
@endsection
</body>

</html>
