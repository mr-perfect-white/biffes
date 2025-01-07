 <!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Biffes') }}</title>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description"
        content="Bengaluru International film festival (BIFFes)">
    <meta name="keywords"
        content="">
    <!--<meta name="author" content="themesflat.com">-->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

   <!-- Bootstrap  -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />

<!-- Theme Style -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/odometer.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/styles.css')}}   " />

<!-- Animation Style -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/textanimation.css')}}"/>

<!-- Font -->
<link rel="stylesheet" href="{{asset('/frontend/font/fonts.css')}}"/>

<!-- Icon -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/icons/icomoon/style.css')}}  " />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/icons/fontawesome/css/all.min.css')}}" />

<!-- Favicon and Touch Icons  -->
<link rel="shortcut icon" href="{{asset('frontend/images/logo/logo-itf.jpeg')}}" />
<link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/logo/logo-itf.jpeg')}}"/>

    <script>
        window.addEventListener('popstate', function (event) {
  history.pushState(null, document.title, location.href);
});
    </script>
    
    <!--active page menu script-->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        const menuItems = document.querySelectorAll('.nav-list .item');

        // Clear all .current-menu classes
        menuItems.forEach(item => item.classList.remove('current-menu'));

        menuItems.forEach(item => {
            const links = item.querySelectorAll('a');

            links.forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    // Add 'current-menu' to the parent <li>
                    item.classList.add('current-menu');

                    // Add 'active' to the parent 'item has-child'
                    let parent = item.closest('.has-child');
                    if (parent) {
                        parent.classList.add('active');
                    }
                }
            });
        });
    });
</script>

<!--mobile active menu script-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        const menuItems = document.querySelectorAll('#menu-mobile-menu .menu-item');
        const links = document.querySelectorAll('#menu-mobile-menu .menu-item a');

        // Clear all .current-nav classes and .current classes
        menuItems.forEach(item => item.classList.remove('current-nav'));
        links.forEach(link => link.classList.remove('current'));

        menuItems.forEach(item => {
            const link = item.querySelector('a');

            if (link && link.getAttribute('href') === currentPage) {
                // Add 'current-nav' to the current menu item
                item.classList.add('current-nav');

                // Add 'current' to the <a> tag of the active menu item
                link.classList.add('current');
            }
        });
    });
</script>

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>

<body class="counter-scroll">

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div class="loader-container">
                    <div class="wrap-loader">
                        <div class="loader">
                        </div>
                        <div class="icon">
                            <img src="./images/logo/biffesnewlogo1.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Preloader -->
        <!-- Welcome -->
        <div class="box-welcome">
            <div class="tf-overlay"></div>
            <div class="welcome-wrap">
                <div class="content">
                    <div class="btn-close-welcome icon style-circle">
                        <i class="icon-close"></i>
                    </div>
                    <!--<h3 class="title font-snowfall">-->
                    <!--    DonalFarm Agriculture <br />-->
                    <!--    Farm of laughter and-->
                    <!--    happiness!-->
                    <!--</h3>-->
                    <!--<p class="text font-nunito">-->
                    <!--    Lorem ipsum dolor sit amet,-->
                    <!--    consectetur adipiscing elit.-->
                    <!--    Maecenas ex ligula, pulvinar-->
                    <!--    ultrices justo sed.-->
                    <!--</p>-->
                    <ul class="infor-list">
                        <li class="item">
                            <i class="fa-solid fa-location-dot fs-18"></i>
                            <p>
                                Nandini FHS Layout,
Next to Presidency School,
Bengaluru-560096
                            </p>
                        </li>
                        <!--<li class="item">-->
                        <!--    <i class="fa-solid fa-phone"></i>-->
                        <!--    <p>-->
                        <!--        Call us:  8904645529-->
                        <!--    </p>-->
                        <!--</li>-->
                        <li class="item">
                            <img src="./icons/mailbox-2.png" alt="" />
                            <p>
                                Mail Support:
                                biffesblr@gmail.com
                            </p>
                        </li>
                        <li class="item">
                            <i class="fa-solid fa-clock"></i>
                            <p>
                                Mon - Sat: 10.00am -
                                5.30pm
                            </p>
                        </li>
                    </ul>
                    <div class="wg-social">
                        <ul class="list">
                            <li class="item">
                                <a href="#"><i class="icon-facebook1"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-instagram2"></i></a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Welcome -->

        

<!-- Top-bar -->
        <div class="tf-topbar" style="background-color:#973980e8 !important">
            <div class="tf-container w-1780">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topbar-inner">
                            <div class="topbar-left">
                                <span class="fs-14 font-nunito">Welcome to BIFFES 2025</span>
                                <!--<span class="fs-14 font-nunito"></span>-->
                            </div>
                            <div class="topbar-right">
                                <ul class="contact-list">
                                    <!--<li class="item">-->
                                    <!--    <a href="#" class="icon">-->
                                    <!--        <i class="fa-solid fa-phone"></i>-->
                                    <!--    </a>-->
                                    <!--    <a href="#">  8904645529</a>-->
                                    <!--</li>-->
                                    <li class="item">
                                        <a href="#" class="icon">
                                            <img src="./icons/mailbox.png" alt="" />
                                        </a>
                                        <a href="#">
                                           biffesblr@gmail.com
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </a>
                                        <a href="#">
                                            Nandini FHS Layout,
Next to Presidency School,
Bengaluru-560096
                                        </a>
                                    </li>
                                </ul>
                                <ul class="social-list">
                                    <li class="item">
                                        <a href="https://x.com/biffesblr?mx=2">
                                            <i class="icon-twitter" style="color:white !important"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="https://www.facebook.com/BIFFESblr/">
                                            <i class="icon-facebook" style="color:white !important"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="https://www.youtube.com/@BengaluruIFF">
                                            <!-- <i class="icon-youtube"></i> -->
                                            <i class="fa-brands fa-youtube" style="color:white !important"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="https://www.instagram.com/biffesblr/?hl=en">
                                            <i class="icon-instagram2" style="color:white !important"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Top-bar -->
<!-- Header  -->
<header class="header has-item-bot" id="header-main">
    <div class="tf-container w-1780">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-inner">
                    <div class="header-left">
                        <div class="logo-site">
                            <a href="{{url('/')}}">
                                <img src="./images/logo/biffesnewlogo1.png" width="70%" alt="" />
                            </a>
                        </div>
                        <div class="main-nav">
                            <ul class="nav-list">
                                <li class="item has-child current-menu">
                                    <a href="{{url('/')}}">Home</a>

                                </li>
                                <li class="item has-child">
                                    <a href="#">About Us

                                    </a>
                                    <ul class="sub-nav about-us-menu-box">
                                        <li><a href="{{url('/about')}}"><span>About Us</span></a></li>
                                        <li><a href="{{url('/organizers')}}"><span>Organizers</span></a></li>
                                        <!--<li><a href="#"><span>Executive Team</span></a></li>-->
                                       
                                    </ul>


                                </li>

                                <!--<li class="item has-child">-->
                                <!--    <a href="#">Festival</a>-->

                                <!--    <ul class="sub-nav">-->
                                <!--        <li><a href="#"><span>Films</span></a></li>-->
                                <!--        <li><a href="#"><span>Jury</span></a></li>-->
                                <!--        <li><a href="#"><span>Catalogue</span></a></li>-->
                                <!--        <li><a href="#"><span>Schedule</span></a></li>-->
                                <!--        <li><a href="#"><span>Daily Bulletin</span></a></li>-->
                                <!--        <li><a href="#"><span>Venue</span></a></li>-->
                                <!--        <li><a href="#"><span>Master Class</span></a></li>-->
                                <!--    </ul>-->

                                <!--</li>-->
                                <!--<li class="item has-child">-->
                                <!--    <a href="#">Media</a>-->
                                    
                                <!--       <ul class="sub-nav">-->
                                <!--            <li><a href="#"><span>Gallery</span></a></li>-->
                                <!--            <li><a href="#"><span>Latest News</span></a></li>-->

                                <!--        </ul>-->

                                <!--</li>-->
                                
                                <!--<li class="item has-child">-->
                                <!--    <a href="#">Award Winner</a>-->
                                <!--</li>-->
                                <li class="item has-child">
                                    <a href="{{url('/archive')}}">Archive</a>
                                </li>
                                <li class="item has-child">
                                    <a href="{{url('/contact')}}">Contact</a>
                                </li>
                                @if (App::getLocale() == 'en')
                                          <a href="{{ route('switchLanguage', 'kn') }}">ಕನ್ನಡ</a>
                                         @else
                                          <a href="{{ route('switchLanguage', 'en') }}">English</a>
                                        @endif
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex d-lg-none d-md-none d-sm-flex">
                        <a href="{{url('/login')}}" class="tf-btn gap-30">
                                <span class="text-style">
                                    ಕನ್ನಡ
                                </span>
                                <div class="icon">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                            </a>
                             
                    </div>
                    <div class="header-right">
                        <a href="{{url('/login')}}" class="tf-btn gap-30">
                            <span class="text-style">
                               login
                            </span>
                            <div class="icon">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                        </a>
                        
                        <div class="mobile-button">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="mobile-nav-wrap">
                    <div class="overlay-mobile-nav"></div>
                    
                    <div class="inner-mobile-nav overflow-y-auto">
                        <div class="top">
                            <div class="logo">
                                <a href="/" rel="home" class="main-logo">
                                    <img id="mobile-logo_header" width="70%" alt="" src="./images/logo/footerbiffesimage.png" />
                                </a>
                                <div class="mobile-nav-close">
                                    <i class="icon-close"></i>
                                </div>
                            </div>
                            
                            <nav id="mobile-main-nav" class="mobile-main-nav">
                                <ul id="menu-mobile-menu" class="menu">
                                    <li class="menu-item menu-item-has-children-mobile current-nav">
                                        <a class="item-menu-mobile current" href="index.php">
                                            Home

                                        </a>

                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="">
                                            About Us
                                            <i class="icon-arrow_down"></i>
                                        </a>
                                        
                                        <ul class="sub-menu-mobile">
                                            <li class="menu-item menu-item-has-children-mobile"><a href="about-us.php"><span>About Us</span></a></li>
                                             <li class="menu-item menu-item-has-children-mobile"><a href="organizers.php"><span>Organizers</span></a></li>
                                            <!--<li class="menu-item menu-item-has-children-mobile"><a href="#"><span>Executive Team</span></a></li>-->
                                        </ul>
                                    </li>
                                    <!--<li class="menu-item menu-item-has-children-mobile">-->
                                    <!--    <a class="item-menu-mobile" href="#">-->
                                    <!--        Festival-->
                                    <!--     <i class="icon-arrow_down"></i>-->
                                    <!--    </a>-->
                                    <!--    <ul class="sub-menu-mobile">-->
                                    <!--        <li class="menu-item"><a href="#"><span>Film</span></a></li>-->
                                    <!--        <li class="menu-item"><a href="#"><span>Jury</span></a></li>-->
                                    <!--        <li class="menu-item"><a href="#"><span>Schedule</span></a></li>-->
                                    <!--        <li class="menu-item"><a href="#"><span>Daily Bulletin</span></a></li>-->
                                    <!--        <li class="menu-item"><a href="#"><span>Venue</span></a></li>-->
                                    <!--        <li class="menu-item"><a href="#"><span>Master Class</span></a></li>-->
                                    <!--    </ul>-->

                                    <!--</li>-->
                                    <!--<li class="menu-item menu-item-has-children-mobile">-->
                                    <!--    <a class="item-menu-mobile" href="#">-->
                                    <!--        Media-->
                                    <!--  <i class="icon-arrow_down"></i>-->
                                    <!--    </a>-->
                                    <!--    <ul class="sub-menu-mobile">-->
                                    <!--        <li class="menu-item menu-item-has-children-mobile"><a href="#"><span>Gallery</span></a></li>-->
                                    <!--        <li class="menu-item menu-item-has-children-mobile"><a href="#"><span>Latest News</span></a></li>-->
                                    <!--    </ul>-->

                                    <!--</li>-->
                                    

                                    <!--<li class="menu-item menu-item-has-children-mobile">-->
                                    <!--    <a class="item-menu-mobile" href="#">Award Winner</a>-->
                                    <!--</li>-->
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="archive.php">Archive</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-header style-absolute">
        <div class="tf-container w-1780">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-inner">
                        <div class="header-left">
                            <div class="logo-site">
                                <a href="index.php">
                                    <img src="./images/logo/biffesnewlogo1.png" width="70%" alt="" />
                                </a>
                            </div>
                            <div class="main-nav">
                                <ul class="nav-list">
                                    <li class="item has-child current-menu">
                                        <a href="index.php">Home</a>

                                    </li>
                                    <li class="item has-child">
                                        <a href="">About Us

                                        </a>
                                        <ul class="sub-nav   about-us-menu-box">
                                            <li><a href="about-us.php"><span>About Us</span></a></li>
                                            <li><a href="organizers.php"><span>Organizers</span></a></li>
                                            <!--<li><a href="#"><span>Executive Team</span></a></li>-->
                                        </ul>


                                    </li>

                                    <!--<li class="item has-child">-->
                                    <!--    <a href="Registrations.php">Registrations</a>-->

                                    <!--</li>-->
                                <!--      <li class="item has-child">-->
                                <!--    <a href="#">Festival</a>-->

                                <!--    <ul class="sub-nav">-->
                                       
                                <!--        <li><a href="#"><span>Film</span></a></li>-->
                                <!--        <li><a href="#"><span>Jury</span></a></li>-->
                                <!--        <li><a href="#"><span>Schedule</span></a></li>-->
                                <!--        <li><a href="#"><span>Daily Bulletin</span></a></li>-->
                                <!--        <li><a href="#"><span>Venue</span></a></li>-->
                                <!--        <li><a href="#"><span>Master Class</span></a></li>-->
                                <!--    </ul>-->

                                <!--</li>-->
                                    <!--<li class="item has-child">-->
                                    <!--    <a href="#">Media</a>-->
                                        
                                    <!--      <ul class="sub-nav">-->
                                    <!--        <li><a href="#"><span>Gallery</span></a></li>-->
                                    <!--        <li><a href="#"><span>Latest News</span></a></li>-->
                                           
                                             
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <!--<li class="item has-child">-->
                                    <!--    <a href="#">Award Winner</a>-->
                                    <!--</li>-->
                                    <li class="item has-child">
                                        <a href="archive.php">Archive</a>
                                    </li>
                                    <li class="item has-child">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div>
                            
                        </div>
                        <div class="header-right">
                            <a href="index-kan.php" class="tf-btn gap-30">
                                <span class="text-style">
                                    ಕನ್ನಡ
                                </span>
                                <div class="icon">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                            </a>
                            <div class="mobile-button">
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-item children">
            <img src="./images/item/page-title-top.png" alt="">
        </div>
    </div>

    <div class="header-item">
        <img src="./images/item/page-title-top.png" alt="">
    </div>
</header><!-- /.Header -->
<style>
    .re-su-menu-1 ,.re-su-menu-2{
        display:none;
    }
    .re-su-head-1:hover  .re-su-menu-1{
        display:block !important;
    }
    ul.sub-nav.re-su-menu-1 {
           margin-left: 178px;
    margin-top: -23px;
    }
    .re-su-head-2:hover .re-su-menu-2{
        display:block !important;
    }
    .header .header-inner .nav-list .item .sub-nav{
        min-width: 220px;
    }
    
    
    .ic-2{
        display:none;
    }
    .ic-1:hover .ic-2 {
         display:block !important;
          margin-left: 200px;
    margin-top: -26px;
    width: 278px;
    }
    ul.sub-nav.about-us-menu-box {
      width: 240px;
    }
    .mobile-nav-wrap .inner-mobile-nav .mobile-main-nav #menu-mobile-menu .menu-item-has-children-mobile.active .item-menu-mobile {
        color: #fff;
    }
    .ic-su-menu-1{
        display:none;
    }
    .ic-su-head-1:hover  .ic-su-menu-1{
          display:block !important;
    }
    
    
    
    
</style>