<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>terza</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link rel="stylesheet" href="assets/css/profile.css">
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="#" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/insur-two-icon/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="assets/css/insur.css" />
    <link rel="stylesheet" href="assets/css/insur-responsive.css" />


</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <header class="main-header-two clearfix">
            <div class="main-header-two__top">

                <div class="main-header-two__top-details">
                    <div class="container">
                        <div class="main-header-two__top-details-inner">
                            <div class="main-header-two__logo">
                                <a href="{{'/'}}"><img src="assets/images/resources/terza.png" alt=""></a>
                            </div>
                            @if(Session::get('status'))
                            <ul class="list-unstyled main-header-two__top-details-list">
                                <li>
                                     <div class="text">
                                        <a href="" class="thm-btn comment-form__btn">{{Session:get('status')}}</a>
                                        <!-- <a href="{{'login'}}" class="thm-btn comment-form__btn">Login</a> -->
                                    </div>
                                </li>
                            </ul>
                            @endif
                            <ul class="list-unstyled main-header-two__top-details-list">
                                <li>
                                     <div class="text">
                                        <a href="{{'signup'}}" class="thm-btn comment-form__btn">Signup</a>
                                        <a href="{{'login'}}" class="thm-btn comment-form__btn">Login</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-two__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu-two__wrapper-inner clearfix">
                            <div class="main-menu-two__left">
                                <div class="main-menu-two__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown current megamenu"><a href="{{'/'}}">Home </a></li>
    									<li><a href="{{'about'}}">About Us</a></li>
    									<li class="dropdown current megamenu"><a href="{{'services'}}">Solutions / Services </a> 
                                            <ul>
                                                <li>
                                                    <section class="home-showcase">
                                                        <div class="container">
                                                            <div class="home-showcase__inner">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="home-showcase__item">
                                                                            <ul>
    																			<li><a href="{{'background_checks'}}">Background Checks</a></li>
    																			<li><a href="{{'identity_checks'}}">Identity Checks</a></li>
    																			<li><a href="{{'employment_checks'}}">Employment Checks</a></li>
    																			<li><a href="{{'criminal_history'}}">Criminal History Checks</a></li>
    																			<li><a href="{{'executive_checks'}}">Executive Checks</a></li>
    
    
    																		</ul>
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
    																<div class="col-lg-4">
                                                                        <div class="home-showcase__item">
                                                                            <ul>
    																			<li><a href="{{'police_court_record'}}">Police and Court Record verification</a>
    																			</li>
    																			<li><a href="{{'address_verification'}}">Address Verification</a></li>
    																			<li><a href="{{'database_checks'}}">Database Checks</a></li>
    																			<li><a href="{{'financial_checks'}}">Financial Checks</a></li>
    																			<li><a href="{{'academic_checks'}}">Academic Certificate Checks</a></li>
    
    																		</ul>
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                    <div class="col-lg-4">
                                                                        <div class="home-showcase__item">
    																	    <ul>
                                                                                <li><a href="{{'din_verification'}}">DIN Verification</a></li>
    																	    	<li><a href="{{'drug_test'}}">Drug Test</a></li>
    																	    	<li><a href="{{'tenent_verification'}}">Tenent Verification</a></li>
    																	    	<li><a href="{{'worker'}}">Worker verification</a></li>
    																	    	<li><a href="{{'vendor'}}">Vendor Verification</a></li>
    																		<ul>
                                                                        </div><!-- /.home-showcase__item -->
                                                                    </div><!-- /.col-lg-3 -->
                                                                </div><!-- /.row -->
                                                            </div><!-- /.home-showcase__inner -->
                                                        </div><!-- /.container -->
                                                    </section>
                                                </li>
                                            </ul>
                                        </li>
    								    <li><a href="{{'about'}}">Why Lynx360</a></li>
    								    <li><a href="{{'tenent_verification'}}">Verify Tenent </a></li>
    								    <li><a href="{{'worker'}}">Verify Worker </a></li>
    								    <li><a href="{{'vendor'}}">Verify Vendor</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu-two__right">
                                <div class="main-menu-two__search-box-get-quote">
                                    <div class="main-menu-two__search-box">
                                        <a href="#"
                                            class="main-menu-two__search search-toggler icon-magnifying-glass"></a>

                                    </div>
                                    <div class="main-menu-two__get-quote">
                                        <a href="{{'books'}}" class="thm-btn main-menu-two__get-quote-btn">Book 
                                            Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    
    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>


    <!-- template js -->
    <script src="assets/js/insur.js"></script>

</body>
</html>