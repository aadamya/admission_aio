<?php
 include('config.php');

// for logo

// $result = mysqli_fetch_assoc($selectedata);



// for main body
$selectedatamain  = mysqli_query($config,"SELECT * from mainbody");
$resultmain = mysqli_fetch_assoc($selectedatamain);
$ansnamemain = $resultmain['name'];
$ansaboutmain = $resultmain['about'];
$imagemain = $resultmain['image'];



//
$selectedatanotice  = mysqli_query($config,"SELECT * from noticeboard");
$resultmainnotice = mysqli_fetch_assoc($selectedatanotice);
$ansheadingnotice = $resultmainnotice['heading_notice'];
$ansdescriptionnotice = $resultmainnotice['description_notice'];





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talim - School University & Online Education Template</title>
    <link rel="shortcut icon" href="Front_Page/assets/images/logo/favicon.ico" type="image/x-icon">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="Front_Page/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="Front_Page/assets/css/icofont.min.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/font-awesome/all.min.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/font-awesome/sharp-regular.min.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/font-awesome/sharp-solid.min.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/mean-menu/meanmenu.min.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/swiper-js/swiper-bundle.min.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/slick-slider/slick.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/eocjs-newsticker/eocjs-newsticker.css">
    <link rel="stylesheet" href="Front_Page/assets/vendor/flag-icons/flag-icons.min.css">
    <link rel="stylesheet" href="Front_Page/assets/css/style.css">

    <!-- dark version css -->
    <link rel="stylesheet" href="Front_Page/assets/css/dark-v.css">
</head>

<body class="dark_mode">
    <!-- preloader start -->
                
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content">
                    <img class="loading-logo-text" src="Front_Page/assets/images/logo/logo-text.png" alt="Kidba">
                    <div class="loading-stroke">
                        <img class="loading-logo-icon" src="" alt="Pen">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- sidebar area start -->
    <div class="kidba-menu-sidebar">
        <div class="kidba-menu-sidebar-inner">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="icofont-brand-nexus"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="kidba-menu-sidebar-top mb-40">
                <nav>
                    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                        <button class="active " id="nav-menu-tab" data-bs-toggle="tab" data-bs-target="#nav-menu" type="button" role="tab" aria-controls="nav-menu" aria-selected="true">Menu</button>
                        <button id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false">Info</button>
                    </div>
                </nav>
            </div>
            <div class="kidba-menu-sidebar-bottom">
                <div class="logo mb-40">
                    <a href="index.html">
                        <img src="" alt="logo">
                    </a>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <div class="kidba-sidebar-info-content-331">
                            <ul>
                                <li><i class="icofont-clock-time"></i> 9:30am - 6:30pm, Mon - Sun</li>
                                <li><a href="tel:http://80012345676587"><i class="icofont-phone"></i> +800-123-4567 6587</a></li>
                                <li><i class="icofont-google-map"></i> Anmoore Road Brooklyn, NY 230</li>
                            </ul>
                        </div>
                        <div class="kidba-sidebar-info-social-331">
                            <a href="#" class="header-right-txt"><i class="icofont-facebook"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-twitter"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offwrap"></div>
    <!-- sidebar area end -->


    <!-- HEADER SECTION STARTS HERE ↓ -->
    <div class="tl-header tl-1-header">
        
                 <?php
                    $selectedata  = mysqli_query($config,"SELECT * from header ORDER BY DESC LIMIT 1");
                    while($row = mysqli_fetch_assoc($selectedata)){
                       $ans = $row['logo'];
                    }

                ?>

        <div class="tl-1-header-bottom green-clr pt-20 pb-20" data-bg-color="var(--black-5)">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-6">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="<?php echo $ans;?>" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="d-lg-none d-flex justify-content-end col-6">
                                <button class="tl-hamburger navbar-toggler">
                                    <i class="icofont-navigation-menu"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-7">
                        <div class="tl-nav-menu tl-1-nav-menu">
                            <ul class="justify-content-center">
                                <li class="tl-nav-item tl-dropdown">
                                    <a href="#" role="button">
                                        Home <i class="fa-regular fa-angle-down"></i>
                                    </a>
                                    <ul class="tl-submenu">
                                        <li><a href="index.html">Online Education (LMS)</a></li>
                                        <li><a href="index-2.html">Kindergarten</a></li>
                                        <li><a href="index-3.html">School</a></li>
                                        <li><a href="index-4.html">College</a></li>
                                        <li><a href="index-5.html">University</a></li>
                                        <li><a href="index-6.html">Magazine</a></li>
                                        <li><a href="index-7.html">Dance School</a></li>
                                        <li><a href="index-8.html">Driving School</a></li>
                                        <li><a href="index-9.html">Music School</a></li>
                                        <li><a href="index-10.html">University Two</a></li>
                                        <li><a href="index-11.html">Magazine Two</a></li>
                                        <li><a href="index-12.html">Live Class</a></li>
                                        <li><a href="index-13.html">Online Course</a></li>
                                        <li><a href="index-14.html">Language Club</a></li>
                                    </ul>
                                </li>

                                <li class="tl-nav-item tl-dropdown">
                                    <a href="#" role="button">
                                        Courses <i class="fa-regular fa-angle-down"></i>
                                    </a>
                                    <ul class="tl-submenu">
                                        <li><a href="course.html">Course One</a></li>
                                        <li><a href="course-2.html">Course Two</a></li>
                                        <li><a href="course-3.html">Course Three</a></li>
                                        <li><a href="course-4.html">Course Four</a></li>

                                        <li><a href="course-details.html">Course Details</a></li>
                                    </ul>
                                </li>

                                <li class="tl-nav-item tl-dropdown">
                                    <a href="#" role="button">
                                        Pages <i class="fa-regular fa-angle-down"></i>
                                    </a>
                                    <ul class="tl-submenu">
                                        <li class="tl-dropdown-2">
                                            <a href="#">About <i class="fa-regular fa-angle-right"></i></a>

                                            <ul class="tl-submenu tl-submenu-2">
                                                <li><a href="about.html">About One</a></li>
                                                <li><a href="about-2.html">About Two</a></li>
                                                <li><a href="about-3.html">About Three</a></li>
                                                <li><a href="about-4.html">About Four</a></li>
                                                <li><a href="about-5.html">About Five</a></li>
                                                <li><a href="about-6.html">About Six</a></li>
                                                <li><a href="about-7.html">About Seven</a></li>
                                                <li><a href="about-8.html">About Eight</a></li>
                                            </ul>
                                        </li>
                                        <li class="tl-dropdown-2">
                                            <a href="#">Staff <i class="fa-regular fa-angle-right"></i></a>

                                            <ul class="tl-submenu tl-submenu-2">
                                                <li><a href="staff.html">Staff One</a></li>
                                                <li><a href="staff-2.html">Staff Two</a></li>
                                                <li><a href="staff-3.html">Staff Three</a></li>
                                                <li><a href="staff-4.html">Staff Four</a></li>
                                                <li><a href="staff-5.html">Staff Five</a></li>
                                                <li><a href="staff-6.html">Staff Six</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="staff-profile.html">Staff Profile</a></li>
                                        <li class="tl-dropdown-2">
                                            <a href="#">Event <i class="fa-regular fa-angle-right"></i></a>

                                            <ul class="tl-submenu tl-submenu-2">
                                                <li><a href="event.html">Event One</a></li>
                                                <li><a href="event-2.html">Event Two</a></li>
                                                <li><a href="event-3.html">Event Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="event-details.html">Event Details</a></li>
                                    </ul>
                                </li>

                                <li class="tl-nav-item tl-dropdown">
                                    <a href="#" role="button">
                                        Blog <i class="fa-regular fa-angle-down"></i>
                                    </a>
                                    <ul class="tl-submenu">
                                        <li class="tl-dropdown-2">
                                            <a href="#">Blog <i class="fa-regular fa-angle-right"></i></a>

                                            <ul class="tl-submenu tl-submenu-2">
                                                <li><a href="blog.html">Blog One</a></li>
                                                <li><a href="blog-2.html">Blog Two</a></li>
                                                <li><a href="blog-3.html">Blog Three</a></li>
                                                <li><a href="blog-4.html">Blog Four</a></li>
                                                <li><a href="blog-5.html">Blog Five</a></li>
                                                <li><a href="blog-6.html">Blog Six</a></li>
                                                <li><a href="blog-7.html">Blog Seven</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>

                                <li class="tl-nav-item tl-dropdown">
                                    <a href="#">Contact <i class="fa-regular fa-angle-down"></i></a>

                                    <ul class="tl-submenu">
                                        <li><a href="contact.html">Contact One</a></li>
                                        <li><a href="contact-2.html">Contact Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-3 d-lg-block d-none">
                        <div class="tl-header-actions kb-16-header-actions d-flex justify-content-end align-items-center">
                            <a href="signin.html"><i class="fa-regular fa-user"></i> Sign Up</a>
                            <a href="signup.html" class="tl-def-btn tl-1-header-btn">Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER SECTION ENDS HERE ↑ -->


    <!-- BANNER SECTION STARTS HERE ↓ -->
    <section class="tl-1-banner bg-defaults" data-background="Front_Page/assets/images/tl-1/banner-bg.png" data-bg-color="#F7F3EB">
        <div class="container">
            <div class="row gy-5 tl-1-banner-top pt-100 pb-100 align-items-center">
                <div class="col-lg-7">
                    <div class="tl-1-banner-txt">
                        <h1 class="tl-1-banner-title"><?php echo $ansnamemain;?></h1>
                        <p class="tl-1-banner-descr"><?php echo $ansaboutmain;?></p>
                        <div class="tl-1-banner-btns">
                            <a href="#" class="tl-5-def-btn tl-1-banner-btn-1">I Want a Demo</a>
                            <a href="#" class="tl-def-btn tl-1-banner-btn-2">See a Preview</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="tl-1-banner-img position-relative">
                        <span class="kb-13-banner-img-tag">Live</span>
                        <img src="Front_Page/assets/images/tl-1/banner-img.jpg" alt="Banner Image">
                    </div>
                </div>
            </div>

            <div class="tl-1-banner-bottom pb-145">
                <h6>Notice Board</h6>
                <div class="row justify-content-center g-0">
                    <div class="col-lg-9">
                        <div class="tl-1-members">
                            <h1 style = "color:red"><?php echo $ansheadingnotice;?></h1>
                            <p style="color:white"><?php echo $ansdescriptionnotice;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION ENDS HERE ↑ -->


    <!-- SERVICES SECTION STARTS HERE ↓ -->
    <section class="tl-1-services pt-120 pb-120" data-bg-color="var(--tl-1-bg-coffee)">
        <div class="container">
            <div class="tl-1-section-heading">
                <h2 class="tl-1-section-title">A Collection of Resources For all Thinks eLearning</h2>
            </div>

            <div class="row tl-1-services-row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="tl-1-service">
                        <div class="tl-1-service-heading">
                            <div class="tl-1-service-icon">
                                <img src="Front_Page/assets/images/tl-1/service-1.png" alt="Icon">
                            </div>

                            <span class="tl-1-service-order-numb">01</span>
                        </div>

                        <h4 class="tl-1-service-title"><a href="#">Guides & Templates</a></h4>
                        <p class="tl-1-service-descr">Morbi hendrerit pharetra nunc, eget suscipit lectus posuere quis varius natoque penatibus et magnis dis parturient montes.</p>
                        <a href="#" class="tl-1-service-btn"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="tl-1-service">
                        <div class="tl-1-service-heading">
                            <div class="tl-1-service-icon">
                                <img src="Front_Page/assets/images/tl-1/service-2.png" alt="Icon">
                            </div>

                            <span class="tl-1-service-order-numb">02</span>
                        </div>

                        <h4 class="tl-1-service-title"><a href="#">Weekly Webinars</a></h4>
                        <p class="tl-1-service-descr">Morbi hendrerit pharetra nunc, eget suscipit lectus posuere quis varius natoque penatibus et magnis dis parturient montes.</p>
                        <a href="#" class="tl-1-service-btn"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="tl-1-service">
                        <div class="tl-1-service-heading">
                            <div class="tl-1-service-icon">
                                <img src="Front_Page/assets/images/tl-1/service-3.png" alt="Icon">
                            </div>

                            <span class="tl-1-service-order-numb">03</span>
                        </div>

                        <h4 class="tl-1-service-title"><a href="#">Certification Hold</a></h4>
                        <p class="tl-1-service-descr">Morbi hendrerit pharetra nunc, eget suscipit lectus posuere quis varius natoque penatibus et magnis dis parturient montes.</p>
                        <a href="#" class="tl-1-service-btn"><i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION ENDS HERE ↑ -->


    <!-- ABOUT SECTION STARTS HERE ↓ -->
    <section class="tl-1-about pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center tl-1-about-row">
                <div class="col-lg-6">
                    <div class="tl-1-about-img">
                        <img src="Front_Page/assets/images/tl-13/banner-img.jpg" alt="Banner Image" class="tl-1-about-main-img">
                        <img src="Front_Page/assets/images/tl-1/sticker.png" alt="sticker" class="tl-1-about-sticker">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tl-1-about-txt">
                        <h2 class="tl-1-section-title">Revolutionizing Education Through LMS Solutions.</h2>
                        <p class="tl-1-about-descr">Mauris sit amet lacinia est, vitae tristique metus. Nulla facilisi. Mauris tempor nibh vitae pulvinar ultricies. Sed malesuada placerat metus. Vivamus sagittis arcu elit semper, eget varius turpis posuere. Suspendisse ac nibh cursus,
                            dignissim urna a, porttitor nisi.</p>

                        <div class="tl-1-about-author">
                            <div class="tl-1-about-author-intro">
                                <div class="tl-1-about-author-img">
                                    <img src="Front_Page/assets/images/tl-3/author-img.png" alt="Author image">
                                </div>
                                <div class="tl-1-about-author-info">
                                    <h5 class="tl-1-about-author-name">Hugh Millie-Yate</h5>
                                    <span class="tl-1-about-author-role">Vice Principal</span>
                                </div>
                            </div>
                            <div class="tl-1-about-author-signature">
                                <img src="Front_Page/assets/images/tl-3/signature.png" alt="signature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tl-1-stats">
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">29+</span>
                    <h6 class="tl-1-stat-name">Year Experiences</h6>
                </div>
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">5k+</span>
                    <h6 class="tl-1-stat-name">Enrolled Learners</h6>
                </div>
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">36+</span>
                    <h6 class="tl-1-stat-name">Education Awards</h6>
                </div>
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">8k+</span>
                    <h6 class="tl-1-stat-name">Video Tutorials</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION ENDS HERE ↑ -->


    <!-- COURSE SECTION STARTS HERE ↓ -->
    <section class="tl-1-courses pb-120 pt-130" data-bg-color="var(--tl-1-bg-coffee)">
        <div class="container">
            <div class="tl-1-section-heading">
                <h2 class="tl-1-section-title">Most Popular Courses</h2>
                <div class="tl-2-blogs-slider-nav" id="tl-1-courses-slider-nav"></div>
            </div>

            <div class="tl-1-courses-slider owl-carousel">
                <div class="tl-1-course">
                    <div class="tl-1-course-img">
                        <img src="Front_Page/assets/images/tl-13/about-img.jpg" alt="Course Image">
                        <span class="tl-1-course-price">$53.00</span>
                    </div>

                    <div class="tl-1-course-txt">
                        <span class="tl-1-course-author">By <a href="#">Brian Cumin</a></span>
                        <h4 class="tl-1-course-title"><a href="#">Teaching Math and Science Inquiry-Based Approaches</a></h4>
                        <div class="tl-1-course-stats">
                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-book-blank"></i></span>
                                <span class="tl-1-course-stat-txt">6 Lessons</span>
                            </div>

                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-user-group"></i></span>
                                <span class="tl-1-course-stat-txt">32 Students</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tl-1-course">
                    <div class="tl-1-course-img">
                        <img src="Front_Page/assets/images/tl-12/event-2.jpg" alt="Course Image">
                        <span class="tl-1-course-price">$53.00</span>
                    </div>

                    <div class="tl-1-course-txt">
                        <span class="tl-1-course-author">By <a href="#">Brian Cumin</a></span>
                        <h4 class="tl-1-course-title"><a href="#">Teaching Math and Science Inquiry-Based Approaches</a></h4>
                        <div class="tl-1-course-stats">
                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-book-blank"></i></span>
                                <span class="tl-1-course-stat-txt">6 Lessons</span>
                            </div>

                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-user-group"></i></span>
                                <span class="tl-1-course-stat-txt">32 Students</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tl-1-course">
                    <div class="tl-1-course-img">
                        <img src="Front_Page/assets/images/tl-12/event-3.jpg" alt="Course Image">
                        <span class="tl-1-course-price">$53.00</span>
                    </div>

                    <div class="tl-1-course-txt">
                        <span class="tl-1-course-author">By <a href="#">Brian Cumin</a></span>
                        <h4 class="tl-1-course-title"><a href="#">Teaching Math and Science Inquiry-Based Approaches</a></h4>
                        <div class="tl-1-course-stats">
                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-book-blank"></i></span>
                                <span class="tl-1-course-stat-txt">6 Lessons</span>
                            </div>

                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-user-group"></i></span>
                                <span class="tl-1-course-stat-txt">32 Students</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tl-1-course">
                    <div class="tl-1-course-img">
                        <img src="Front_Page/assets/images/tl-12/event-1.jpg" alt="Course Image">
                        <span class="tl-1-course-price">$53.00</span>
                    </div>

                    <div class="tl-1-course-txt">
                        <span class="tl-1-course-author">By <a href="#">Brian Cumin</a></span>
                        <h4 class="tl-1-course-title"><a href="#">Teaching Math and Science Inquiry-Based Approaches</a></h4>
                        <div class="tl-1-course-stats">
                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-book-blank"></i></span>
                                <span class="tl-1-course-stat-txt">6 Lessons</span>
                            </div>

                            <div class="tl-1-course-stat">
                                <span class="tl-1-course-stat-icon"><i class="fa-regular fa-user-group"></i></span>
                                <span class="tl-1-course-stat-txt">32 Students</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COURSE SECTION ENDS HERE ↑ -->


    <!-- TESTIMONIAL SECTION STARTS HERE ↓ -->
    <section class="tl-1-testimonial pt-120 pb-120">
        <div class="container">
            <div class="tl-1-section-heading">
                <h2 class="tl-1-section-title">What Student Says?</h2>
            </div>

            <div class="tl-1-testimonial-slider-container" data-bg-color="#F0EFED">
                <div class="tl-1-testimonial-slider owl-carousel">
                    <!-- <div> -->
                    <div class="tl-1-testimony">
                        <img src="Front_Page/assets/images/tl-4/testimony-1.jpg" alt="User image" class="tl-1-testimony-img">

                        <div class="tl-1-testimony-txt">
                            <span class="tl-1-testimony-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                            <p class="tl-1-testimony-review">Morbi consectetur elementum purus mattis cursus purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum Mauris sit amet lacinia
                                est, vitae tristique metus tempor nibh ultricies.</p>
                            <div class="tl-1-reviewer">
                                <div class="tl-1-reviewer-txt">
                                    <h6 class="tl-1-reviewer-name">Russell Sprout</h6>
                                    <span class="tl-1-reviewer-label">Student, CSE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div> -->
                    <div class="tl-1-testimony">
                        <img src="Front_Page/assets/images/tl-4/testimony-2.jpg" alt="User image" class="tl-1-testimony-img">

                        <div class="tl-1-testimony-txt">
                            <span class="tl-1-testimony-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                            <p class="tl-1-testimony-review">Morbi consectetur elementum purus mattis cursus purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum Mauris sit amet lacinia
                                est, vitae tristique metus tempor nibh ultricies.</p>
                            <div class="tl-1-reviewer">
                                <div class="tl-1-reviewer-txt">
                                    <h6 class="tl-1-reviewer-name">Thomas R. Toe</h6>
                                    <span class="tl-1-reviewer-label">B.Tech (CSE) , 2018-2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div> -->
                    <div class="tl-1-testimony">
                        <img src="Front_Page/assets/images/tl-4/testimony-3.jpg" alt="User image" class="tl-1-testimony-img">

                        <div class="tl-1-testimony-txt">
                            <span class="tl-1-testimony-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                            <p class="tl-1-testimony-review">Morbi consectetur elementum purus mattis cursus purus vel metus iaculis sagittis. Vestibulum molestie bibendum turpis luctus sem lacinia quis. Quisque amet velit sit amet dui hendrerit ultricies a id ipsum Mauris sit amet lacinia
                                est, vitae tristique metus tempor nibh ultricies.</p>
                            <div class="tl-1-reviewer">
                                <div class="tl-1-reviewer-txt">
                                    <h6 class="tl-1-reviewer-name">Russell Sprout</h6>
                                    <span class="tl-1-reviewer-label">Student, CSE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION ENDS HERE ↑ -->


    <!-- SUB-BANNER SECTION STARTS HERE ↓ -->
    <section class="tl-1-sub-banner pt-50 text-center" data-bg-color="#A9D189">
        <img src="Front_Page/assets/images/tl-1/sub-banner.png" alt="Sub Banner Image">
        <div class="tl-1-sub-banner-txt-top">
            <div class="tl-1-sub-banner-ticker tl-1-sub-banner-ticker-2">
                <h3>Take The World Best Course Online For Free</h3>
            </div>
        </div>

        <div class="tl-1-sub-banner-txt">
            <div class="tl-1-sub-banner-ticker" id="tl-1-sub-banner-ticker">
                <h3>Take The World Best Course Online For Free</h3>
            </div>
        </div>
    </section>
    <!-- SUB-BANNER SECTION ENDS HERE ↑ -->


    <!-- TEACHERS START ↓ -->
    <section class="tl-1-teachers pt-120 pb-120">
        <div class="container">
            <div class="tl-1-section-heading">
                <h2 class="tl-1-section-title">Our Best Teachers</h2>
            </div>

            <div class="tl-1-teachers-slider owl-carousel">
                <div class="tl-1-teacher">
                    <img src="Front_Page/assets/images/tl-2/teacher-1.jpg" alt="Teacher Image" class="tl-1-teacher-img">
                    <ul class="tl-1-teacher-socials">
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                    <div class="tl-1-teacher-info">
                        <h5 class="tl-1-teacher-title"><a href="#">Nathaneal Down</a></h5>
                        <h6 class="tl-1-teacher-sub-title">Music Teacher</h6>
                    </div>
                </div>

                <div class="tl-1-teacher">
                    <img src="Front_Page/assets/images/tl-2/teacher-2.jpg" alt="Teacher Image" class="tl-1-teacher-img">
                    <ul class="tl-1-teacher-socials">
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                    <div class="tl-1-teacher-info">
                        <h5 class="tl-1-teacher-title"><a href="#">Parsley Montana</a></h5>
                        <h6 class="tl-1-teacher-sub-title">Math Teacher</h6>
                    </div>
                </div>

                <div class="tl-1-teacher">
                    <img src="Front_Page/assets/images/tl-2/teacher-3.jpg" alt="Teacher Image" class="tl-1-teacher-img">
                    <ul class="tl-1-teacher-socials">
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>

                    <div class="tl-1-teacher-info">
                        <h5 class="tl-1-teacher-title"><a href="#">Douglas Lyphe</a></h5>
                        <h6 class="tl-1-teacher-sub-title">Art Teacher</h6>
                    </div>
                </div>

                <div class="tl-1-teacher">
                    <img src="Front_Page/assets/images/tl-2/teacher-2.jpg" alt="Teacher Image" class="tl-1-teacher-img">
                    <ul class="tl-1-teacher-socials">
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>

                    <div class="tl-1-teacher-info">
                        <h5 class="tl-1-teacher-title"><a href="#">Douglas Lyphe</a></h5>
                        <h6 class="tl-1-teacher-sub-title">Art Teacher</h6>
                    </div>
                </div>
            </div>

            <div class="tl-1-slider-dots" id="tl-1-teachers-slider-dots"></div>
        </div>
    </section>
    <!-- TEACHERS END ↑ -->


    <!-- BLOG SECTION STARTS HERE ↓ -->
    <section class="tl-1-blogs pt-120 pb-120" data-bg-color="var(--tl-1-bg-coffee)">
        <div class="container">
            <div class="tl-1-section-heading">
                <h2 class="tl-1-section-title">Our Blog & Article</h2>
                <a href="#" class="tl-def-btn tl-1-header-btn">Free Consultation</a>
            </div>

            <div class="row gy-4 gy-sm-5 tl-1-blogs-row">
                <div class="col-lg-6">
                    <div class="tl-1-blog">
                        <img src="Front_Page/assets/images/tl-4/admission-bg.jpg" alt="" class="tl-1-blog-img">

                        <div class="tl-1-blog-txt">
                            <div class="tl-1-blog-info">
                                <h6 class="tl-3-single-event-time"><i class="fa-light fa-calendar-lines"></i> March 24, 2023</h6>
                            </div>
                            <h4 class="tl-1-blog-title">
                                <a href="#">LMS for Corporate Training Optimizing Employee Learning and Development.</a>
                            </h4>
                            <a href="#" class="tl-1-blog-btn">Continue Reading <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tl-1-blog">
                        <img src="Front_Page/assets/images/tl-1/blog.jpg" alt="" class="tl-1-blog-img">

                        <div class="tl-1-blog-txt">
                            <div class="tl-1-blog-info">
                                <h6 class="tl-3-single-event-time"><i class="fa-light fa-calendar-lines"></i> March 24, 2023</h6>
                            </div>
                            <h4 class="tl-1-blog-title">
                                <a href="#">LMS for Corporate Training Optimizing Employee Learning and Development.</a>
                            </h4>
                            <a href="#" class="tl-1-blog-btn">Continue Reading <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION ENDS HERE ↑ -->


    <!-- FOOTER SECTION STARTS HERE ↓ -->
    <footer class="tl-footer kb-10-footer tl-1-footer">
        <div class="container">
            <div class="tl-footer-top">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="tl-footer-widget kb-10-footer-widget">
                            <a href="index.html" class="logo tl-footer-widget-title">
                                <img src="Front_Page/assets/images/logos/logo-1.png" alt="logo">
                            </a>
                            <p class="tl-1-footer-descr">Nullam nulla eget dui efficitur tempor sit amet quis magna, Suspendisse.</p>
                            <div class="tl-1-footer-socials">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 order-1 order-sm-2 order-lg-1">
                        <div class="row gy-5">
                            <div class="col-6 col-xxs-12">
                                <div class="tl-footer-widget kb-10-footer-widget">
                                    <h5 class="tl-footer-widget-title">Our Campus</h5>
                                    <ul class="tl-footer-links">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Help Centre</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-xxs-12">
                                <div class="tl-footer-widget kb-10-footer-widget">
                                    <h5 class="tl-footer-widget-title">Academics</h5>
                                    <ul class="tl-footer-links">
                                        <li><a href="#">Programming</a></li>
                                        <li><a href="#">Art &amp; Design</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Engineering</a></li>
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 order-2 order-sm-1 order-lg-2">
                        <div class="tl-footer-widget tl-3-footer-widget">
                            <h5 class="tl-footer-widget-title">Subscribe</h5>
                            <form action="#" class="tl-1-nwsltr-form">
                                <input type="email" name="nwsltr-mail" id="tl-1-nwsltr-mail" class="tl-1-nwsltr-mail-input" placeholder="Get news & updates">
                                <button class="tl-1-nwsltr-btn" id="tl-1-nwsltr-btn">@</button>
                            </form>
                            <p class="tl-1-nwsltr-txt">Register now to get latest updates on promotions & coupons.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tl-footer-bottom kb-10-footer-bottom">
                <div class="row gy-4 align-items-center">
                    <div class="col-md-6">
                        <p class="tl-1-copyright-txt m-0">Copyright &copy; 2023 All Rights Reserved by Talim</p>
                    </div>

                    <div class="col-md-6">
                        <ul class="tl-1-footer-bottom-actions">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION ENDS HERE ↑ -->


    <!-- JS FILES ↓ -->
    <script src="Front_Page/assets/vendor/jquery/jquery-3.7.0.min.js"></script>
    <script src="Front_Page/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="Front_Page/assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="Front_Page/assets/vendor/fs-lightbox/fslightbox.js"></script>
    <script src="Front_Page/assets/vendor/mean-menu/jquery.meanmenu.min.js"></script>
    <script src="Front_Page/assets/vendor/swiper-js/swiper-bundle.min.js"></script>
    <script src="Front_Page/assets/vendor/slick-slider/slick.min.js"></script>
    <script src="Front_Page/assets/vendor/bx-slider/jquery.bxslider.min.js"></script>
    <script src="Front_Page/assets/vendor/eocjs-newsticker/eocjs-newsticker.js"></script>
    <script src="Front_Page/assets/vendor/syotimer/jquery.syotimer.min.js"></script>
    <script src="Front_Page/assets/js/main.js"></script>
</body>

</html>