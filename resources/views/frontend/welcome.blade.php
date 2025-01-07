@extends('layout.app')

@section('content')
        

<style>
.s-project-2 .content-section .heading-section {
    max-width: 648px !important;
}

.s-about-us .main-section .content-left .text-2 {
    margin-bottom: 25px !important;
}

.has-img-item {
    position: relative;
     margin-top: 0px !important; 
}

.s-blog-post {
    padding-top: 25px !important;
    padding-bottom: 50px !important;
}
.heading-section {
    margin-bottom: 0px !important;
}
.s-project-2 .s-slider .wrap{
    margin-bottom: 10px !important;
}

.s-quality-of-life {
    padding: 0px 0px 112px !important;
}


.s-project-2 .s-content-wrap {
    padding: 44px 0px 391px !important;
}
.box-portfolio.style-4::after {
    background-color: transparent !important;
}
.s-why-us .main-section .video-wrap .box-video::after {
    content: "";
    position: absolute;
    top: 9px;
    bottom: 9px;
    left: 9px;
    right: 9px;
    border-radius: 20px;
     border: 0px dashed var(--Border-7) !important; 
}
.s-why-us .main-section .video-wrap .box-video {
    position: absolute;
    left: 71px !important;
    top: 220px !important;
     background-color: transparent !important; 
    /* padding: 44px 34px; */
    padding: 44px 34px 25px 34px;
    border-radius: 20px;
}
.s-about-us .main-section .content-right .box-trust {
    padding: 10px !important;
   
}
.s-box-portfolio {
   
    margin-top: -400px !important;
}
.ribbon {
    position: absolute;
    top: -1px;
    left: 45px;
    background: #0a0a09;
    color: #fff;
    padding: 15px 29px 15px 27px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 24 14px 33px 0;
    border-radius: 2px 13px 10px 0px;
}

.section_my-gov-media {
    padding: 65px 0px 65px 0px !important;
}

.section_my-gov-media h2,
.section_my-gov-media p {
    color: #fff;
}

.section_my-gov-media {
    background-color: white;
}

.video-home-kannada {
    margin-top: -70px;
    z-index: 999;
    position: relative;
}


.s-why-us {
    padding-top: 35px;
}
.wg-tabs .menu-tab .item a {
   
    font-size: 16px !important;
    
}
@media screen and (min-width:320px) and (max-width:426px){
    .overflow-hidden img{
        height:auto !important;
    }
}




</style>

<!-- Page-title-home-1 -->
<div class="page-title-home-1">
            <div class="swiper-container slider-home-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-home-1">
                            <div class="image overflow-hidden">
                                <img src="./frontend/images/page-title/bannernewimage.jpg" data-src="./frontend/images/page-title/bannernewimage.jpg"
                                    alt="" class="lazyload tf-animate-zoom-in-ou"  style="object-fit:fill !important"/>
                            </div>
                            
                        </div>
                    </div>
                    <!--<div class="swiper-slide">-->
                    <!--    <div class="slide-home-1">-->
                    <!--        <div class="image overflow-hidden">-->
                    <!--            <img src="./frontend/images/page-title/banner2.jpg" data-src="./frontend/images/page-title/banner2.jpg"-->
                    <!--                alt="" class="lazyload tf-animate-zoom-in-out" />-->
                    <!--        </div>-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <div class="slide-home-1">-->
                    <!--        <div class="image overflow-hidden">-->
                    <!--            <img src="./frontend/images/page-title/banner3.jpg" data-src="./frontend/images/page-title/banner3.jpg"-->
                    <!--                alt="" class="lazyload tf-animate-zoom-in-out" />-->
                    <!--        </div>-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="swiper-slide">-->
                    <!--    <div class="slide-home-1">-->
                    <!--        <div class="image overflow-hidden">-->
                    <!--            <img src="./frontend/images/page-title/banner4.jpeg" data-src="./frontend/images/page-title/banner4.jpeg"-->
                    <!--                alt="" class="lazyload tf-animate-zoom-in-out" />-->
                    <!--        </div>-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="btn-slide-home-1 btn-next">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="80px" height="20px" viewBox="0 0 80 20"
                        preserveAspectRatio="xMidYMid meet">
                        <g fill="#ffffff">
                            <path
                                d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />
                        </g>
                    </svg>
                </div>
                <div class="btn-slide-home-1 btn-prev">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="80px" height="20px" viewBox="0 0 80 20"
                        preserveAspectRatio="xMidYMid meet">
                        <g fill="#ffffff">
                            <path
                                d="M7 15.4 c-3.6 -2.4 -6.6 -5 -6.8 -5.7 -0.2 -1.2 13.8 -9.7 16 -9.7 2.4 0 0.2 2.4 -4.9 5.2 l-5.8 3.3 19.5 0.8 c11 0.5 27.1 0.5 37 -0.1 9.6 -0.5 17.7 -0.7 17.9 -0.5 2.4 1.9 -22 3.5 -48.6 3.1 l-25.2 -0.3 4.7 4.2 c6.1 5.5 4.4 5.3 -3.8 -0.3z" />
                        </g>
                    </svg>
                </div>
            </div>
        </div><!-- /.Page-title-home-1 -->



<!-- Section why us -->
<!--<section class="s-why-us has-img-item">-->
<!--                <div class="tf-container w-1290">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-12">-->
<!--                            <div class="main-section">-->
<!--                                <div class="image">-->
<!--                                    <div class="video-wrap style-4">-->
<!--                                        <img class="lazyload tf-animate-2 " data-src="./frontend/images/section/aboutbiffesimage.jpg"-->
<!--                                            src="./frontend/images/section/aboutbiffesimage.jpg" alt="" />-->
<!--                                        <div class="box-video tf-animate__box animate__slow ">-->
<!--                                            <a href="https://www.youtube.com/watch?v=HloQI7pOcvc"-->
<!--                                                class="style-icon-play popup-youtube">-->
<!--                                                <i class="icon-play3"></i>-->
<!--                                                <div class="wave"></div>-->
<!--                                                <div class="wave-1"></div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="content-section">-->
<!--                                    <div class="heading-section style-2">-->
<!--                                        <div class="img-item">-->
<!--                                            <div class="item">-->
<!--                                                <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />-->
<!--                                            </div>-->
<!--                                            <p class="sub-title">-->
<!--                                            World In Bengaluru-->
                                                
<!--                                            </p>-->
<!--                                        </div>-->

<!--                                        <p class="title tf-animate-4">-->
<!--                                        #BIFFES 2025-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                    <p class="text">-->
<!--                                    FIAPF Accredited Bengaluru International film festival (BIFFes) is being organized by the Karnataka Chalanachitra Academy for the Government of Karnataka. The 16th edition of BIFFes, to be held from February 26th – 6th March, 2025. Bengaluru, the capital of Karnataka State in India, is an important centre of International film culture in keeping with Karnataka’s glorious heritage and the State’s achievements in the fields of literature, fine arts, and cinema.-->
<!--                                    </p>-->
<!--                                    <p class="text">-->
<!--                                    We would like to recall here that our previous editions held in Bengaluru, were resounding successes with each edition involving screening of over 200 films across 14 screens from more than 50 countries, and witnessed by more than 10000 delegates, who enjoyed and appreciated the quality of cinema presented over the years.-->
<!--                                    </p>-->
<!--                                    <a href="our-history.html" class="tf-btn btn-read-more scale-40">-->
<!--                                        <span class="text-style">-->
<!--                                            Read More-->
<!--                                        </span>-->
<!--                                        <div class="icon">-->
<!--                                            <i class="icon-arrow_right"></i>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
                          
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
            <!-- /.Section why us -->
            
            
            <div class="delegate-section">
    <!-- Section-break-page -->
            <!--<section class="s-break-page">-->
            <!--    <div class="img-item item-1">-->
            <!--        <img src="./frontend/images/item/grass-4.png" alt="" class="" />-->
            <!--    </div>-->
            <!--    <div class="img-item item-2 wow zoomIn">-->
            <!--        <div class="scroll-element-3">-->

            <!--            <img src="./frontend/images/item/barn.png" alt="" class="" />-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="img-item item-3">-->
            <!--        <img src="./frontend/images/item/page-title-top.png" alt="" class="" />-->
            <!--    </div>-->
            <!--</section>-->
            <!-- /.Section-break-page -->

            <!-- Section box portfolio -->
            <!--<section class="s-box-portfolio">-->
            <!--    <div class="tf-container w-1290">-->
            <!--        <span class="heading-section style-2">-->
            <!--    <p class="title  text-center mb-3">-->
            <!--        16th BENGALURU INTERNATIONAL FILM FESTIVAL (BIFFes)-->
            <!--    </p>-->
            <!--</span>-->
            <!--        <div class="row">-->
            <!--            <div class="col-lg-4">-->
            <!--                <div class="box-portfolio style-4 tf-img-hover mb-s-991">-->
            <!--                    <div class="image hover01">-->
            <!--                        <img src="./frontend/images/section/newbiffeslogo.jpg"-->
            <!--                            data-src="./frontend/images/section/newbiffeslogo.jpg" alt="" class="lazyload" />-->
            <!--                    </div>-->
            <!--                    <div class="content">-->
            <!--                        <div class="icon hover02">-->
            <!--                            <i class="fa-regular fa-address-card"></i>-->
            <!--                        </div>-->
            <!--                        <a href="#" class="title fs-22 font-worksans fw-6 hover-text-4">-->
            <!--                             Film Festival Submission</a>-->
            <!--                        <p class="text font-nunito d-flex flex-column">-->
            <!--                          <span>Asian Film Competition</span>-->
            <!--                          <span>Indian Film Competition</span>-->
            <!--                          <span>Kannada Film Competition</span>-->
            <!--                          <span>International Jury Special Mention Film</span>-->
            <!--                        </p>-->
            <!--                        <div class="bot">-->
            <!--                            <a href="#" class="btn-read font-worksans fw-5">-->
            <!--                                Register-->
            <!--                            </a>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-lg-4 col-md-6">-->
            <!--                <div class="box-portfolio style-4 tf-img-hover mb-s-991">-->
            <!--                    <div class="image hover01">-->
            <!--                        <img src="./frontend/images/section/newbiffeslogo.jpg"-->
            <!--                            data-src="./frontend/images/section/newbiffeslogo.jpg" alt="" class="lazyload" />-->
            <!--                    </div>-->
            <!--                    <div class="content">-->
            <!--                        <div class="icon">-->
            <!--                            <i class="fa-solid fa-user"></i>-->
            <!--                        </div>-->
            <!--                        <a href="#" class="title fs-22 font-worksans fw-6 hover-text-4">-->
            <!--                           Delegate Registration</a>-->
            <!--                        <p class="text font-nunito">-->
            <!--                           16th Bengaluru International Film Festival Delegate Registrations-->
            <!--                        </p>-->
            <!--                        <div class="bot">-->
            <!--                            <a href="#" class="btn-read font-worksans fw-5">-->
            <!--                                Register-->
            <!--                            </a>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-lg-4 col-md-6">-->
            <!--                <div class="box-portfolio style-4 tf-img-hover">-->
            <!--                    <div class="image hover01">-->
            <!--                        <img src="./frontend/images/section/newbiffeslogo.jpg"-->
            <!--                            data-src="./frontend/images/section/newbiffeslogo.jpg" alt="" class="lazyload" />-->
            <!--                    </div>-->
            <!--                    <div class="content">-->
            <!--                        <div class="icon">-->
            <!--                            <i class="fa-solid fa-user"></i>-->
            <!--                        </div>-->
            <!--                        <a href="#" class="title fs-23 font-worksans fw-6 hover-text-4">-->
            <!--                           Volunteer Registration</a>-->
            <!--                        <p class="text font-nunito">-->
            <!--                           16th Bengaluru International Film Festival Volunteer Registrations-->
            <!--                        </p>-->
            <!--                        <div class="bot">-->
            <!--                            <a href="#" class="btn-read font-worksans fw-5">-->
            <!--                                 Register-->
            <!--                            </a>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <!-- /.Section box portfolio -->
</div>
            
            <!-- Section about -->
            <section class="s-about-us">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-section">
                                <div class="content-left img-hover">
                                    <div class="heading-section">
                                        <p class="sub-title wow fadeInUp" data-wow-delay="0s">
                                           About Biffes
                                        </p>
                                        <p class="title text-container">
                                          #BIFFES
                                        </p>
                                    </div>
                                    <p class="text-1" style="line-height:30px !important">
                                      FIAPF Accredited Bengaluru International film festival (BIFFes) is being organized by the Karnataka Chalanachitra Academy for the Government of Karnataka. The 16th edition of BIFFes, to be held from  1st to 8th March, 2025.  Bengaluru, the capital of Karnataka State in India, is an important centre of International & Indian film culture in keeping with Karnataka’s glorious heritage and the State’s achievements in the fields of literature, fine arts, music and cinema.
                                    </p>
                                    <p class="text-2" style="line-height:30px !important">
                                      We would like to recall here that our previous editions held in Bengaluru, were resounding successes with each edition involving screening of over 200 films, 400 shows across 13 screens from more than 60 countries, and witnessed by more than 12,000 delegates with 1 lakh footfalls, who enjoyed and appreciated the quality of cinema presented over the years.
                                    </p>
                                    <p class="text-2" style="line-height:30px !important">
                                     Like its previous editions, competitive sections for the Asian, Indian and Kannada Cinema will be held with rewarding the winners with cash prizes, during the closing ceremony of the film festival.
                                    </p>
                                    <p class="text-2" style="line-height:30px !important">
                                     The film festival will also host various sessions for the academic interactions / discourse on different aspects of Filmmaking & Film Appreciation, through Seminars, Workshops, Master classes etc., for the benefit of filmmaking practitioners, discerning audiences and students. Through these academic events, BIFFes aims at enhancing the knowledge and understanding of the film art form, medium, market and exploring the historical milestones, features & trends in contemporary filmmaking.
                                    </p>
                                    <p class="text-2" style="line-height:30px !important">
                                     We invite the filmmakers, film fraternity, film critics, film buffs, students & film distribution agencies to participate in this upcoming 16th edition of BIFFes. We sincerely hope that the film lovers will utilize this opportunity to register as Delegates and enjoy contemporary world cinema, competition section films and the classics.
                                    </p>
                                    <!--<a href="#" class="tf-btn btn-read-more gap-34">-->
                                    <!--    <span class="text-style">-->
                                    <!--        Read More-->
                                    <!--    </span>-->
                                    <!--    <div class="icon">-->
                                    <!--        <i class="icon-arrow_right"></i>-->
                                    <!--    </div>-->
                                    <!--</a>-->
                                    <div class="image hover-ite">
                                        <img src="./frontend/images/widget/aboutnewbiffes.jpg" data-src="./frontend/images/widget/aboutnewbiffes.jpg"
                                            alt="" class="" />
                                    </div>
                                </div>
                                <div class="content-right">
                                    <!--<div class="wg-counter style-2">-->
                                    <!--    <div class="has-border">-->
                                    <!--        <div class="counter-item">-->
                                    <!--            <div class="icon style-circle">-->
                                    <!--               <i class="fa-solid fa-user"></i>-->
                                    <!--            </div>-->
                                    <!--            <p class="title font-worksans">-->
                                    <!--                Visitors-->
                                    <!--            </p>-->
                                    <!--            <div class="counter">-->
                                    <!--                <div id="odometer" class="odometer style-2">-->
                                    <!--                    100000+-->
                                    <!--                </div>-->
                                    <!--                <span class="sub-odo">+</span>-->
                                    <!--            </div>-->
                                    <!--            <p class="text font-nunito">-->
                                    <!--               15th BENGALURU INTERNATIONAL FILM FESTIVAL (BIFFes) - 2024-->
                                    <!--            </p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="box-trust">
                                        <div class="has-border">
                                            <ul class="benefit-list ">
                                                <li>
                                                    <!--<i class="fa-solid fa-circle-check"></i>-->
                                                    <p style="">
                                                       The upcoming 16th edition of BIFFes will have different sections as mentioned below.
                                                    </p>
                                                </li>
                                                <!--<li>-->
                                                <!--    <i class="fa-solid fa-circle-check"></i>-->
                                                <!--    <p>-->
                                                <!--        Awesome Harvest of-->
                                                <!--        Wheat-->
                                                <!--    </p>-->
                                                <!--</li>-->
                                                <!--<li>-->
                                                <!--    <i class="fa-solid fa-circle-check"></i>-->
                                                <!--    <p>-->
                                                <!--        Fresh Fruits &-->
                                                <!--        Vegetables-->
                                                <!--    </p>-->
                                                <!--</li>-->
                                            </ul>
                                            <ul class="box-icon-list">
                                                <li>
                                                    <div class="box-icon  style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <img src="./frontend/images/widget/asiacomp.png" data-src="./frontend/images/widget/asiacomp.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                          Asian Cinema Competition
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                             <img src="./frontend/images/widget/indiancinema.png" data-src="./frontend/images/widget/indiancinema.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                          Chitrabharati (Indian Cinema) Competition
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                             <img src="./frontend/images/widget/karanataka.png" data-src="./frontend/images/widget/karanataka.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                         Kannada Cinema Competition
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <img src="./frontend/images/widget/cantmpry.png" data-src="./frontend/images/widget/cantmpry.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                        Contemporary World Cinema
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                             <img src="./frontend/images/widget/kannadapopular.png" data-src="./frontend/images/widget/kannadapopular.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                       Kannada Cinema of Popular Entertainment
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <img src="./frontend/images/widget/criticsweek.png" data-src="./frontend/images/widget/criticsweek.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                       FIPRESCI Critics Week
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                           <img src="./frontend/images/widget/biopic.png" data-src="./frontend/images/widget/biopic.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                        Bio-Pics
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <img src="./frontend/images/widget/countryfocus.png" data-src="./frontend/images/widget/countryfocus.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                       Country Focus
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <img src="./frontend/images/widget/unsungindia.png" data-src="./frontend/images/widget/unsungindia.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                        Unsung Incredible India - Films from little known languages
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <img src="./frontend/images/widget/retro.png" data-src="./frontend/images/widget/retro.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                        Retrospectives - Directors / Artists / Technicians
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                               <img src="./frontend/images/widget/cantmpry.png" data-src="./frontend/images/widget/cantmpry.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                        Restored Classics
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                          <img src="./frontend/images/widget/century.png" data-src="./frontend/images/widget/century.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                       Centenary Tributes
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                           <img src="./frontend/images/widget/homeage.png" data-src="./frontend/images/widget/homeage.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                       Homages & Remembrances
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="box-icon style-3 ic-hover wow fadeInUp"
                                                        data-wow-delay="0s">
                                                        <div class="icon style-circle hover-icon">
                                                            <img src="./frontend/images/widget/theamatic.png" data-src="./frontend/images/widget/theamatic.png"
                                            alt="" class="lazyload" />
                                                        </div>
                                                        <a href=""
                                                            class="caption fw-6 font-worksans text-upper hover-text-secondary">
                                                      Curated Section on a Special Theme
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!--<a href="about-us.html" class="tf-btn-read text-white hover-text-secondary">-->
                                            <!--    Read More-->
                                            <!--</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.Section about --> 


            
             <!-- Section blog post -->
    <section class="s-blog-post">
        <div class="tf-container w-1290">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section has-text text-center mb-81">
                        <!--<p class="sub-title">Headlines</p>-->
                        <p class="title tf-animate-2">Latest News</p>
                        <p class="text">
                            <!-- Duis eleifend euismod arcu, nec faucibus
                                    mauris finibus id. Integer mattis,
                                    tellus non finibus rutrum. -->
                        </p>
                        <div class="img-item">
                            <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-slide">
            <div class="tf-container w-1290">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container slider-blog-post">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <article class="article-blog-item type-3 style-2 img-hover">
                                        <div class="image">
                                            <div class="video-wrap hover-item">
                                                <img class="lazyload" data-src="./frontend/images/blog/news1012.avif"
                                                    src="./frontend/images/blog/news1012.avif" alt="" />
                                                <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                    class="style-icon-play popup-youtube">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                            <div class="entry-date">
                                                <p class="day">
                                                    09
                                                </p>
                                                <p class="month-year">
                                                    MARCH 24
                                                </p>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="entry-meta">
                                                <li class="entry author">
                                                    <!-- <i class="fa-solid fa-circle-user"></i> -->
                                                    <p>
                                                        <!-- <a href="#">
                                                                    By
                                                                    Hardson
                                                                </a> -->
                                                    </p>
                                                </li>
                                                <li class="entry tags">
                                                    <!-- <i class="fa-solid fa-tag"></i> -->
                                                    <p>
                                                        <!-- <a href="#">Agriculture</a>,
                                                                <a href="#">Farm</a> -->
                                                    </p>
                                                </li>
                                                <li class="entry comment">
                                                    <!-- <i class="fa-solid fa-comment"></i> -->
                                                    <p>
                                                        <!-- <a href="#">0
                                                                    Comments</a> -->
                                                    </p>
                                                </li>
                                            </ul>
                                            <h3 class="title fw-6">
                                                <a href="https://www.hindustantimes.com/htcity/cinema/its-a-wrap-on-bengaluru-international-film-festival-2024-101709981895344.html">
                                                  The 15th edition of Bengaluru International Film Festival.
                                                </a>
                                            </h3>
                                            <p class="text text-line-clamp-3">
                                                This year’s Bengaluru International Film Festival (BIFFes), held between February 29 and March 7, was all about cinematic excellence.

                                            </p>
                                            <!-- <div class="bot">
                                                        <a href="#"
                                                            class="tf-btn-read hover-text-4">Continue
                                                            Reading</a>
                                                    </div> -->
                                        </div>
                                    </article>
                                </div>

                                <div class="swiper-slide">
                                    <article class="article-blog-item type-3 style-2 img-hover">
                                        <div class="image">
                                            <div class="video-wrap hover-item">
                                                <img class="lazyload" data-src="./frontend/images/blog/news1011.avif"
                                                    src="./frontend/images/blog/news1011.avif" alt="" />
                                                <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                    class="style-icon-play popup-youtube">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                            <div class="entry-date">
                                                <p class="day">
                                                    08
                                                </p>
                                                <p class="month-year">
                                                    MARCH 24
                                                </p>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="entry-meta">
                                                <li class="entry author">
                                                    <!-- <i class="fa-solid fa-circle-user"></i> -->
                                                    <p>
                                                        <a class="" href="#">
                                                            <!-- By
                                                                    Hardson -->
                                                        </a>
                                                    </p>
                                                </li>
                                                <li class="entry tags">
                                                    <!-- <i class="fa-solid fa-tag"></i> -->
                                                    <p>
                                                        <!-- <a href="#">Agriculture</a>,
                                                                <a href="#">Farm</a> -->
                                                    </p>
                                                </li>
                                                <li class="entry comment">
                                                    <!-- <i class="fa-solid fa-comment"></i> -->
                                                    <p>
                                                        <!-- <a href="#">0
                                                                    Comments</a> -->
                                                    </p>
                                                </li>
                                            </ul>
                                            <h3 class="title fw-6">
                                                <a href="https://www.newindianexpress.com/states/karnataka/2024/Mar/08/curtains-down-on-biffes-extravaganza">
                                                   Curtains down on BIFFes extravaganza
                                                </a>
                                            </h3>
                                            <p class="text text-line-clamp-3">
                                               The closing ceremony was held at the Banquet Hall of Vidhana Soudha where awards were distributed to the winners of the Kannada, Indian, and Asian cinema.

                                            </p>
                                            <!-- <div class="bot">
                                                        <a href="#"
                                                            class="tf-btn-read hover-text-4">Continue
                                                            Reading</a>
                                                    </div> -->
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="article-blog-item type-3 style-2 img-hover">
                                        <div class="image">
                                            <div class="video-wrap hover-item">
                                                <img class="lazyload" data-src="./frontend/images/blog/news4.jpg"
                                                    src="./frontend/images/blog/news4.jpg" alt="" />
                                                <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                    class="style-icon-play popup-youtube">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                            <div class="entry-date">
                                                <p class="day">
                                                    07
                                                </p>
                                                <p class="month-year">
                                                    MARCH 24
                                                </p>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="entry-meta">
                                                <li class="entry author">
                                                    <!-- <i class="fa-solid fa-circle-user"></i> -->
                                                    <p>
                                                        <a class="" href="#">
                                                            <!-- By
                                                                    Hardson -->
                                                        </a>
                                                    </p>
                                                </li>
                                                <li class="entry tags">
                                                    <!-- <i class="fa-solid fa-tag"></i> -->
                                                    <p>
                                                        <!-- <a href="#">Agriculture</a>,
                                                                <a href="#">Farm</a> -->
                                                    </p>
                                                </li>
                                                <li class="entry comment">
                                                    <!-- <i class="fa-solid fa-comment"></i> -->
                                                    <p>
                                                        <!-- <a href="#">0
                                                                    Comments</a> -->
                                                    </p>
                                                </li>
                                            </ul>
                                            <h3 class="title fw-6" style="font-size:18px !important">
                                                <a href="https://tv9kannada.com/entertainment/15th-biffes-15th-bengaluru-international-film-festival-awards-full-list-mdn-795148.html">
                                                 15ನೇ ಬೆಂಗಳೂರು ಅಂತಾರಾಷ್ಟ್ರೀಯ ಸಿನಿಮೋತ್ಸವದಲ್ಲಿ ಪ್ರಶಸ್ತಿ ಪಡೆದವರ ಪಟ್ಟಿ.
                                                </a>
                                            </h3>
                                            <p class="text text-line-clamp-3">
                                               ಬೆಂಗಳೂರಿನಲ್ಲಿ ಒಂದು ವಾರಗಳ ಕಾಲ 15ನೇ ಬೆಂಗಳೂರು ಅಂತಾರಾಷ್ಟ್ರೀಯ ಸಿನಿಮೋತ್ಸವ ನಡೆದಿದೆ. ವಿವಿಧ ವಿಭಾಗಗಳಲ್ಲಿ ಸ್ಪರ್ಧಿಸಿದ ಸಿನಿಮಾಗಳಿಗೆ ಪ್ರಶಸ್ತಿ ನೀಡಲಾಗಿದೆ. ಎಂ.ಎಸ್​. ಸತ್ಯು ಅವರಿಗೆ ಜೀವಮಾನ ಸಾಧನೆ ಪ್ರಶಸ್ತಿ ನೀಡಿ ಗೌರವಿಸಲಾಗಿದೆ. ಭಾರತೀಯ ಚಲನಚಿತ್ರ ಸ್ಪರ್ಧೆ, ಕನ್ನಡ ಚಲನಚಿತ್ರ ಸ್ಪರ್ಧೆ, ಏಷ್ಯನ್​ ಚಲನಚಿತ್ರ ಸ್ಪರ್ಧೆಗಳಲ್ಲಿ ಪ್ರಶಸ್ತಿ ಪಡೆದವರ ಪಟ್ಟಿ ಇಲ್ಲಿದೆ..


                                            </p>
                                            <!-- <div class="bot">
                                                        <a href="#"
                                                            class="tf-btn-read hover-text-4">Continue
                                                            Reading</a>
                                                    </div> -->
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="article-blog-item type-3 style-2 img-hover">
                                        <div class="image">
                                            <div class="video-wrap hover-item">
                                                <img class="lazyload" data-src="./frontend/images/blog/news3.jpg"
                                                    src="./frontend/images/blog/news3.jpg" alt="" />
                                                <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                    class="style-icon-play popup-youtube">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                            <div class="entry-date">
                                                <p class="day">
                                                    07
                                                </p>
                                                <p class="month-year">
                                                    MARCH 24
                                                </p>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="entry-meta">
                                                <li class="entry author">
                                                    <!-- <i class="fa-solid fa-circle-user"></i> -->
                                                    <p>
                                                        <!-- <a class="" href="#">
                                                                    By
                                                                    Hardson
                                                                </a> -->
                                                    </p>
                                                </li>
                                                <li class="entry tags">
                                                    <!-- <i class="fa-solid fa-tag"></i> -->
                                                    <p>
                                                        <!-- <a href="#">Agriculture</a>,
                                                                <a href="#">Farm</a> -->
                                                    </p>
                                                </li>
                                                <li class="entry comment">
                                                    <!-- <i class="fa-solid fa-comment"></i> -->
                                                    <p>
                                                        <!-- <a href="#">0
                                                                    Comments</a> -->
                                                    </p>
                                                </li>
                                            </ul>
                                            <h3 class="title fw-6" style="font-size:18px !important">
                                                <a href="https://kannada.hindustantimes.com/entertainment/biffes-2024-kshetrapathi-lineman-among-kannada-cinema-competition-section-at-bengaluru-international-film-festival-2024-181708321468900.html">
                                                   ಬೆಂಗಳೂರು ಅಂತಾರಾಷ್ಟ್ರೀಯ ಸಿನಿಮೋತ್ಸವ 29ರಿಂದ ಶುರು.
                                                </a>
                                            </h3>
                                            <p class="text text-line-clamp-3">
                                              ಇದೇ ತಿಂಗಳ 29ರಿಂದ ಮಾರ್ಚ್ 7ರವೆರೆಗ ಚಿತ್ರೋತ್ಸವ ನಡೆಯಲಿದೆ. 15ನೇ ಬೆಂಗಳೂರು ಸಿನಿಮೋತ್ಸವದಲ್ಲಿ ಕನ್ನಡ ಸೇರಿದಂತೆ ವಿಶ್ವದ ಹಲವು ಭಾಷೆಗಳ ಸಿನಿಮಾ ಪ್ರದರ್ಶನಗೊಳ್ಳಲಿವೆ. ಆ ಪೈಕಿ ಸ್ಪರ್ಧಾ ಕಣದಲ್ಲಿನ 12 ಕನ್ನಡ ಸಿನಿಮಾಗಳ ವಿವರ ಇಲ್ಲಿದೆ.

                                            </p>
                                            <!-- <div class="bot">
                                                        <a href="blog-single.html"
                                                            class="tf-btn-read hover-text-4">Continue
                                                            Reading</a>
                                                    </div> -->
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-s-blog-post btn-next">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="58px" height="20px" viewBox="0 0 80 20"
                    preserveAspectRatio="xMidYMid meet">
                    <g fill="#0d401c">
                        <path
                            d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />
                    </g>
                </svg>
            </div>
            <div class="btn-s-blog-post btn-prev">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="58px" height="20px" viewBox="0 0 80 20"
                    preserveAspectRatio="xMidYMid meet">
                    <g fill="#0d401c">
                        <path
                            d="M7 15.4 c-3.6 -2.4 -6.6 -5 -6.8 -5.7 -0.2 -1.2 13.8 -9.7 16 -9.7 2.4 0 0.2 2.4 -4.9 5.2 l-5.8 3.3 19.5 0.8 c11 0.5 27.1 0.5 37 -0.1 9.6 -0.5 17.7 -0.7 17.9 -0.5 2.4 1.9 -22 3.5 -48.6 3.1 l-25.2 -0.3 4.7 4.2 c6.1 5.5 4.4 5.3 -3.8 -0.3z" />
                    </g>
                </svg>
            </div>
        </div>
    </section><!-- /.Section blog post -->

  

    <!-- Section service -->
    <!--<section class="s-service has-img-item">-->
    <!--    <div class="tf-container w-1620">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="heading-section has-text text-center">-->
    <!--                    <p class="sub-title">-->
    <!--                        What Is Our Expertise?-->
    <!--                    </p>-->
    <!--                    <p class="title wow fadeInUp" data-wow-delay="0s">-->
    <!--                        We Providing The <br />-->
    <!--                        Best Agricultural Services-->
    <!--                    </p>-->
    <!--                    <p class="text wow fadeInUp" data-wow-delay="0s">-->
    <!--                        Duis eleifend euismod arcu, nec faucibus-->
    <!--                        mauris finibus id. Integer mattis,-->
    <!--                        tellus non finibus rutrum.-->
    <!--                    </p>-->
    <!--                    <div class="img-item ">-->
    <!--                        <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="box-icon style-6 ic-hover wow fadeInUp" data-wow-delay="0s">-->
    <!--                    <div class="icon hover-icon style-circle">-->
    <!--                        <i class="icon-salad"></i>-->
    <!--                    </div>-->
    <!--                    <a href="#" class="caption fw-6 font-worksans hover-text-secondary">-->
    <!--                        Clean Vegetables-->
    <!--                    </a>-->
    <!--                    <p class="text font-nunito">-->
    <!--                        Ultrices sagittis orci a scelerisque-->
    <!--                        purus<br /> semper eget duis at.-->
    <!--                        Sollictudin nibh <br /> sit amet commodo nulla.-->
    <!--                    </p>-->
    <!--                    <a href="#" class="btn-read">-->
    <!--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="80px" height="20px"-->
    <!--                            viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">-->
    <!--                            <g fill="#ffffff">-->
    <!--                                <path-->
    <!--                                    d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />-->
    <!--                            </g>-->
    <!--                        </svg>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="box-icon style-6 ic-hover wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                    <div class="icon hover-icon style-circle">-->
    <!--                        <i class="icon-cow"></i>-->
    <!--                    </div>-->
    <!--                    <a href="service-detail.html" class="caption fw-6 font-worksans hover-text-secondary">-->
    <!--                        Pure Cow's Milk-->
    <!--                    </a>-->
    <!--                    <p class="text font-nunito">-->
    <!--                        Ultrices sagittis orci a scelerisque-->

    <!--                        purus<br /> semper eget duis at.-->
    <!--                        Sollictudin nibh <br /> sit amet commodo nulla.-->
    <!--                    </p>-->
    <!--                    <a href="service-detail.html" class="btn-read">-->
    <!--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="80px" height="20px"-->
    <!--                            viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">-->
    <!--                            <g fill="#ffffff">-->
    <!--                                <path-->
    <!--                                    d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />-->
    <!--                            </g>-->
    <!--                        </svg>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="box-icon style-6 ic-hover wow fadeInUp" data-wow-delay="0.2s">-->
    <!--                    <div class="icon hover-icon style-circle">-->
    <!--                        <i class="icon-chicken-2 fs-67"></i>-->
    <!--                    </div>-->
    <!--                    <a href="service-detail.html" class="caption fw-6 font-worksans hover-text-secondary">-->
    <!--                        Clean Chicken And Eggs-->
    <!--                    </a>-->
    <!--                    <p class="text font-nunito">-->
    <!--                        Ultrices sagittis orci a scelerisque-->

    <!--                        purus<br /> semper eget duis at.-->
    <!--                        Sollictudin nibh <br /> sit amet commodo nulla.-->
    <!--                    </p>-->
    <!--                    <a href="service-detail.html" class="btn-read">-->
    <!--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="80px" height="20px"-->
    <!--                            viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">-->
    <!--                            <g fill="#ffffff">-->
    <!--                                <path-->
    <!--                                    d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />-->
    <!--                            </g>-->
    <!--                        </svg>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="box-icon style-6 ic-hover wow fadeInUp" data-wow-delay="0.3s">-->
    <!--                    <div class="icon hover-icon style-circle">-->
    <!--                        <i class="icon-seed-bag"></i>-->
    <!--                    </div>-->
    <!--                    <a href="service-detail.html" class="caption fw-6 font-worksans hover-text-secondary">-->
    <!--                        Fertilizer Product-->
    <!--                    </a>-->
    <!--                    <p class="text font-nunito">-->
    <!--                        Ultrices sagittis orci a scelerisque-->

    <!--                        purus<br /> semper eget duis at.-->
    <!--                        Sollictudin nibh <br /> sit amet commodo nulla.-->
    <!--                    </p>-->
    <!--                    <a href="service-detail.html" class="btn-read">-->
    <!--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="80px" height="20px"-->
    <!--                            viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">-->
    <!--                            <g fill="#ffffff">-->
    <!--                                <path-->
    <!--                                    d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />-->
    <!--                            </g>-->
    <!--                        </svg>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="s-img-item item-1">-->
    <!--        <img src="./frontend/images/item/page-title-top.png" alt="" />-->
    <!--    </div>-->
    <!--    <div class="s-img-item item-2 wow zoomIn">-->
    <!--        <div class="scroll-element-3">-->

    <!--            <img src="./frontend/images/item/house-mountain.png" alt="" />-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="s-img-item item-3">-->
    <!--        <img src="./frontend/images/item/page-title-top.png" alt="" />-->
    <!--    </div>-->
    <!--</section>-->
    <!-- /.Section service -->

    <!-- Section quality of life -->
    <section class="s-quality-of-life">
        <div class="tf-container w-1290">
            <!--<div class="row">-->
            <!--    <div class="col-lg-12">-->
            <!--        <div class="content-section text-center">-->
            <!--            <div class="img-item item-3 tf-animate__box ">-->
            <!--                <img class="lazyload up-down-move" src="./frontend/images/item/notice-2.png" alt="">-->
            <!--            </div> -->
            <!--            <div class="clip-color-text font-snowfall text-center">-->
            <!--                <p class="clip-text-bg-vertical">-->
            <!--                 16th BIFFES <br> -->
            <!--                World in Bengaluru-->
            <!--                </p>-->
            <!--            </div>-->

                       
            <!--            <div class="bot flex justify-center">-->

                           
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
      
    </section>
    <!-- /.Section quality of life -->

    <!-- Section counter -->
    <section class="s-counter has-img-item ">
        <div class="tf-container w-1290">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wg-counter p-0">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fa-solid fa-store"></i>
                            </div>
                            <div class="counter">
                                <div class="odometer fs-65 style-1 style-1-1">
                                    400
                                </div>
                                 <span class="sub-odo" style="color:#f8c32c !important">+</span>
                            </div>
                            <p class="sub">Screenings</p>
                        </div>
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fa-solid fa-film"></i>
                            </div>
                            <div class="counter">
                                <div class="odometer fs-65 style-1 style-1-2">
                                    200
                                </div>
                                 <span class="sub-odo" style="color:#f8c32c !important">+</span>
                            </div>
                            <p class="sub">Films</p>
                        </div>
                        <div class="counter-item">
                            <div class="icon">
                               <i class="fa-solid fa-globe"></i>
                            </div>
                            <div class="counter">
                                <div class="odometer fs-65 style-1-3">
                                    60
                                </div>
                                 <span class="sub-odo" style="color:#f8c32c !important">+</span>
                            </div>
                            <p class="sub">Countries</p>
                        </div>
                        <div class="counter-item">
                            <div class="icon">
                                <i class="fa-solid fa-desktop"></i>
                            </div>
                            <div class="counter">
                                <div class="odometer fs-65 style-1-4">
                                    13
                                </div>
                                 <span class="sub-odo" style="color:#f8c32c !important">+</span>
                            </div>
                            <p class="sub">Screens</p>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>

        <div class="s-img-item item-1">
            <img src="./frontend/images/item/brown-top.png" alt="" />
        </div>
        <div class="s-img-item item-2 zoomIn wow">
            <div class="scroll-element-4">

                <!--<img src="./frontend/images/item/tructor.png" alt="" />-->
            </div>
        </div>
        <div class="s-img-item item-bottom">
            <img src="./frontend/images/item/brown-bottom.png" alt="" />
        </div>
    </section><!-- /.Section counter -->


  <!-- Glimpse of BIFFES 2024 -->
      <!-- Section close project 2 -->
      <section class="s-project-2 has-img-item tf-pt-0">
            <div class="s-content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-section relative z-5">
                                <div class="heading-section">
                                    <p class="sub-title">15th BIFFES</p>
                                    <p class="title mb-20 tf-animate-4">Glimpses of 15th biffes 2024</p>
                                    <div class="img-item">
                                        <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />
                                    </div>
                                </div>
                                <!--<p class="text">-->
                                <!--    Duis eleifend euismod arcu, nec faucibus mauris finibus id-->
                                <!--    Integer mattis, tellus non finibus rutrum.-->
                                <!--</p>-->
                                <a href="https://biffes.org" class="tf-btn-read text-white hover-text-secondary">
                                    View 15th Biffes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1">
                    <img src="./frontend/images/item/page-title-top.png" alt="" class="">
                </div>
                <div class="s-img-item item-2">
                    <img src="./frontend/images/item/item-bottom.png" alt="" class="">
                </div>
                <div class="s-img-item item-3 wow zoomIn">
                    <div class="scroll-element-3">
                        <img src="./frontend/images/item/windmill.png" alt="" class="">
                    </div>
                </div>
            </div>



            <div class="s-slider">

                <div class="wg-tabs style-3">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="wrap">

                                    <ul class="overflow-x-auto menu-tab">
                                        <li class="item active"><a href="javascript:void(0)"
                                                class="btn-tab wow fadeInUp" data-wow-delay="0s">Opening Ceremony</a></li>
                                        <!--<li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"-->
                                        <!--        data-wow-delay="0.1s">Inauguration</a></li>-->
                                        <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                                data-wow-delay="0.2s">Logo Launch </a></li>
                                        <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                                data-wow-delay="0.4s">Award Winners</a></li>
                                        <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                                data-wow-delay="0.3s">Film Screening</a></li>
                                        
                                        <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                                data-wow-delay="0.5s">Closing Ceremony</a></li>
                                        <!--<li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"-->
                                        <!--        data-wow-delay="0.6s">March 07,2024</a></li>-->
                                    </ul>
                                    <div class="btn-slide-wrap">
                                        <div class="btn-prev btn-slide-project-2">
                                            <img src="./icons/slide-prev.svg" alt="">
                                        </div>
                                        <div class="btn-next btn-slide-project-2">
                                            <img src="./icons/slide-next.svg" alt="">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <div class="swiper-container slider-project-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/openceremony.jpg"
                                                    data-src="./frontend/images/widget/openceremony.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day1img3.jpg"
                                                    data-src="./frontend/images/widget/day1img3.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-2.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day1img4.jpg"
                                                    data-src="./frontend/images/widget/day1img4.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-3.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day1img5.jpg"
                                                    data-src="./frontend/images/widget/day1img5.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-3.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day1img6.jpg"
                                                    data-src="./frontend/images/widget/day1img6.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-3.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day1img7.jpg"
                                                    data-src="./frontend/images/widget/day1img7.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-3.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day1img8.jpg"
                                                    data-src="./frontend/images/widget/day1img8.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-3.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                             <div class="swiper-container slider-project-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/launch.jpg"
                                                    data-src="./frontend/images/widget/launch.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/lanch2.jpg"
                                                    data-src="./frontend/images/widget/lanch2.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                  
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/lanch3.jpg"
                                                    data-src="./frontend/images/widget/lanch3.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner">
 <div class="swiper-container slider-project-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/awardwinner1.jpeg"
                                                    data-src="./frontend/images/widget/awardwinner1.jpeg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/awardwinner2.jpeg"
                                                    data-src="./frontend/images/widget/awardwinner2.jpeg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/awardwinner3.jpeg"
                                                    data-src="./frontend/images/widget/awardwinner3.jpeg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/awardwinner4.jpeg"
                                                    data-src="./frontend/images/widget/awardwinner4.jpeg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                             <div class="swiper-container slider-project-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img1.JPG"
                                                    data-src="./frontend/images/widget/day2img1.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img2.JPG"
                                                    data-src="./frontend/images/widget/day2img2.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img3.JPG"
                                                    data-src="./frontend/images/widget/day2img3.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img4.JPG"
                                                    data-src="./frontend/images/widget/day2img4.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img5.JPG"
                                                    data-src="./frontend/images/widget/day2img5.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img6.JPG"
                                                    data-src="./frontend/images/widget/day2img6.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img7.JPG"
                                                    data-src="./frontend/images/widget/day2img7.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img8.JPG"
                                                    data-src="./frontend/images/widget/day2img8.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/widget/day2img9.JPG"
                                                    data-src="./frontend/images/widget/day2img9.JPG" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                             <div class="swiper-container slider-project-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/page-title/banner1.jpg"
                                                    data-src="./frontend/images/page-title/banner1.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/page-title/banner2.jpg"
                                                    data-src="./frontend/images/page-title/banner2.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-portfolio-2 img-hover">
                                            <div class="image hover-item">
                                                <img src="./frontend/images/page-title/banner3.jpg"
                                                    data-src="./frontend/images/page-title/banner3.jpg" alt=""
                                                    class="lazyload">
                                            </div>
                                            <!--<div class="content">-->
                                            <!--    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--    <a href="portfolio-details.html"-->
                                            <!--        class="title fs-23 font-worksans fw-6 hover-text-4">-->
                                            <!--        The Joy Of Sheep-->
                                            <!--        Farming</a>-->
                                            <!--    <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                            <!--        adipiscing elit.-->
                                            <!--        Sed-->
                                            <!--        a-->
                                            <!--        cursus massa.-->
                                            <!--        Cras ut dui nec nibhvehicula fermentum.-->
                                            <!--        natoque penatibus.</p>-->
                                            <!--    <div class="bot">-->

                                            <!--        <a href="portfolio-style-1.html"-->
                                            <!--            class="tf-btn-read hover-text-4">Read More</a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </section><!-- /.Section close project 2 -->


    <!-- Section our commitments -->
    <!--<section class="s-our-commitment tf-spacing-3 pb-75">-->
    <!--    <div class="tf-container w-1620">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="main-section">-->
    <!--                    <div class="content-section">-->
    <!--                        <div class="heading-section style-2">-->
    <!--                            <div class="img-item">-->
    <!--                                <div class="item">-->
    <!--                                    <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />-->
    <!--                                </div>-->
    <!--                                <p class="sub-title">-->
    <!--                                    Our Commitment-->
    <!--                                </p>-->
    <!--                            </div>-->

    <!--                            <p class="title wow fadeInUp" data-wow-delay="0s">-->
    <!--                                We Always Bring Customers Green-->
    <!--                                & Clean Products-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                        <p class="text mb-40">-->
    <!--                            At Capital Gardens we believe that-->
    <!--                            we have a duty to adhere to good-->
    <!--                            environmental practice, and operate-->
    <!--                            in a sustainable manner. As lovers-->
    <!--                            of plants and the environment it is-->
    <!--                            only natural for us to want to-->
    <!--                            reduce man’s impact.-->
    <!--                        </p>-->

    <!--                        <ul class="box-icon-list style-2">-->
    <!--                            <li class="li">-->
    <!--                                <div class="box-icon style-3 ic-hover wow fadeInUp" data-wow-delay="0s">-->
    <!--                                    <div class="icon style-circle hover-icon">-->
    <!--                                        <i class="icon-chemical"></i>-->
    <!--                                    </div>-->
    <!--                                    <a href="our-commitments.html"-->
    <!--                                        class="caption fw-6 font-worksans hover-text-4">-->
    <!--                                        Minimal Chemicals Used-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </li>-->
    <!--                            <li class="li">-->
    <!--                                <div class="box-icon style-3 ic-hover wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                                    <div class="icon style-circle hover-icon">-->
    <!--                                        <i class="icon-worm"></i>-->
    <!--                                    </div>-->
    <!--                                    <a href="our-commitments.html"-->
    <!--                                        class="caption fw-6 font-worksans hover-text-4">-->
    <!--                                        Minimal Chemicals Used-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </li>-->
    <!--                            <li class="li">-->
    <!--                                <div class="box-icon style-3 ic-hover wow fadeInUp" data-wow-delay="0.2s">-->
    <!--                                    <div class="icon style-circle hover-icon">-->
    <!--                                        <i class="icon-disposal"></i>-->
    <!--                                    </div>-->
    <!--                                    <a href="our-commitments.html"-->
    <!--                                        class="caption fw-6 font-worksans hover-text-4">-->
    <!--                                        All Organic Waste Reused-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </li>-->
    <!--                            <li class="li">-->
    <!--                                <div class="box-icon style-3 ic-hover wow fadeInUp" data-wow-delay="0.3s">-->
    <!--                                    <div class="icon style-circle hover-icon">-->
    <!--                                        <i class="icon-light-bulb"></i>-->
    <!--                                    </div>-->
    <!--                                    <a href="our-commitments.html"-->
    <!--                                        class="caption fw-6 font-worksans hover-text-4">-->
    <!--                                        Do Not Use Artificial-->
    <!--                                        Light-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </li>-->
    <!--                        </ul>-->

    <!--                        <a href="our-commitments.html" class="tf-btn btn-read-more scale-50">-->
    <!--                            <span class="text-style">-->
    <!--                                See More Our Commitment-->
    <!--                            </span>-->
    <!--                            <div class="icon">-->
    <!--                                <i class="icon-arrow_right"></i>-->
    <!--                            </div>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                    <div class="image-wrap img-hover">-->
    <!--                        <div class="image hover-item">-->
    <!--                            <img src="./frontend/images/section/s-commit.jpg"-->
    <!--                                data-src="./frontend/images/section/s-commit.jpg" alt="" class="lazyload" />-->
    <!--                        </div>-->
    <!--                        <div class="img-item item-1  tf-animate__box animate__slow">-->
    <!--                            <img class="lazyload up-down-move" src="./frontend/images/item/notice.png" alt="" />-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- /.Section our commitments -->

    <!-- Section project -->

    <!-- /.Section project -->

    <!-- Section testimonial -->
    <!--<section class="s-testimonial">-->
    <!--    <div class="tf-container full">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="content-wrap">-->
    <!--                    <div class="image wow fadeInLeft " data-wow-delay="0s">-->
    <!--                        <img class="absolute scroll-element-3" src="./frontend/images/item/s-testi.png" alt="" />-->
    <!--                    </div>-->

    <!--                    <div class="content-section">-->
    <!--                        <div class="heading-section">-->
    <!--                            <p class="sub-title">Testimonials With Us</p>-->
    <!--                            <p class="title tf-animate-2">What Clients Says?</p>-->
    <!--                            <div class="img-item">-->
    <!--                                <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />-->
    <!--                            </div>-->
    <!--                            <div class="img-item item-2">-->
    <!--                                <i class="icon-quote"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="swiper-container slider-s-testimonial">-->
    <!--                            <div class="swiper-wrapper">-->
    <!--                                <div class="swiper-slide">-->
    <!--                                    <div class="testimonial style-4">-->
    <!--                                        <div class="comment">-->
    <!--                                            <p class="caption fs-23 font-snowfall">-->
    <!--                                                Having been a host farmer for-->
    <!--                                                three seasons, we’ve seen-->
    <!--                                                firsthand the difference this-->
    <!--                                                internship makes in beginning-->
    <!--                                                farmers and host farms alike. As-->
    <!--                                                a farmer it is difficult to-->
    <!--                                                weigh the benefits of hosting-->
    <!--                                                young farmers. Fresh energy and-->
    <!--                                                enthusiasm.-->
    <!--                                            </p>-->
    <!--                                        </div>-->
    <!--                                        <div class="author-wrap">-->
    <!--                                            <div class="left">-->
    <!--                                                <div class="image-avt">-->
    <!--                                                    <img src="./frontend/images/widget/author-comment.jpg" alt="" />-->
    <!--                                                </div>-->
    <!--                                                <div class="infor">-->
    <!--                                                    <div class="name-wrap">-->
    <!--                                                        <a href="#" class="name text-upper hover-text-4">-->
    <!--                                                            CHRISTINE ROSE-->
    <!--                                                        </a>-->
    <!--                                                        <div class="wg-rating">-->
    <!--                                                            <i class="fa-solid fa-star"></i>-->
    <!--                                                            <i class="fa-solid fa-star"></i>-->
    <!--                                                            <i class="fa-solid fa-star"></i>-->
    <!--                                                            <i class="fa-solid fa-star"></i>-->
    <!--                                                            <i class="fa-solid fa-star"></i>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->
    <!--                                                    <p class="duty">-->
    <!--                                                        Director, Radical Orange-->
    <!--                                                        Pty Ltd.-->
    <!--                                                    </p>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="btn-s-testimonial btn-next relative">-->
    <!--                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="58px"-->
    <!--                                    height="20px" viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">-->
    <!--                                    <g fill="#0d401c">-->
    <!--                                        <path-->
    <!--                                            d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />-->
    <!--                                    </g>-->
    <!--                                </svg>-->
    <!--                            </div>-->
    <!--                            <div class="btn-s-testimonial btn-prev relative">-->
    <!--                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="58px"-->
    <!--                                    height="20px" viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">-->
    <!--                                    <g fill="#0d401c">-->
    <!--                                        <path-->
    <!--                                            d="M7 15.4 c-3.6 -2.4 -6.6 -5 -6.8 -5.7 -0.2 -1.2 13.8 -9.7 16 -9.7 2.4 0 0.2 2.4 -4.9 5.2 l-5.8 3.3 19.5 0.8 c11 0.5 27.1 0.5 37 -0.1 9.6 -0.5 17.7 -0.7 17.9 -0.5 2.4 1.9 -22 3.5 -48.6 3.1 l-25.2 -0.3 4.7 4.2 c6.1 5.5 4.4 5.3 -3.8 -0.3z" />-->
    <!--                                    </g>-->
    <!--                                </svg>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- /.Section testimonial -->



    <!-- Section break page -->
    <!--<section class="s-break-page style-2">-->
    <!--    <div class="content">-->
    <!--        <h1 class="font-farmhouse text-center text-anime-style-1">-->
    <!--            Agriculture Is The Most <br />-->
    <!--            Healthful, Most Useful And Most <br />-->
    <!--            Noble Employment Of Man-->
    <!--        </h1>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- /.Section break page -->

    <!-- Section faq -->


    <!-- /.Section faq -->

    <!-- Section banner -->
    <!-- <section class="s-banner">
                <div class="heading-side has-img-item">
                    <div class="image scroll-element-3 ">
                        <div class="wow zoomIn">

                            <img class="scale-1-1" src="./frontend/images/item/gree-field.jpg" alt="" />
                        </div>
                    </div>
                    <div class="s-img-item item-bottom">
                        <img src="./frontend/images/item/page-title-top.png" alt="" />
                    </div>
                </div>
                <div class="slider-side">
                    <div class="tf-container w-1620">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="swiper-container slider-box-event">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="box-event ">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/box-event-1.jpg"
                                                        data-src="./frontend/images/widget/box-event-1.jpg" alt=""
                                                        class="lazyload" />
                                                </div>
                                                <div class="content">
                                                    <div class="img-item">
                                                        <img src="./frontend/images/item/rice-plant-2.png" alt="" />
                                                    </div>
                                                    <a href="event-detail.html" class="title fw-7 font-worksans">
                                                        Discover Farm Tour
                                                    </a>
                                                    <p class="text">
                                                        Lorem ipsum dolor
                                                        sit amet,
                                                        consectetur
                                                        adipiscing
                                                        <br />
                                                        elit. Sed a cursus
                                                        massa.
                                                    </p>
                                                    <a href="our-events.html" class="tf-btn-read hover-text-4">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-event ">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/box-event-2.jpg"
                                                        data-src="./frontend/images/widget/box-event-2.jpg" alt=""
                                                        class="lazyload" />
                                                </div>
                                                <div class="content">
                                                    <div class="img-item">
                                                        <img src="./frontend/images/item/rice-plant-2.png" alt="" />
                                                    </div>
                                                    <a href="event-detail.html" class="title fw-7 font-worksans">
                                                        Farm In Summer
                                                    </a>
                                                    <p class="text">
                                                        Lorem ipsum dolor
                                                        sit amet,
                                                        consectetur
                                                        adipiscing
                                                        <br />
                                                        elit. Sed a cursus
                                                        massa.
                                                    </p>
                                                    <a href="our-events.html" class="tf-btn-read hover-text-4">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="box-event ">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/box-event-3.jpg"
                                                        data-src="./frontend/images/widget/box-event-3.jpg" alt=""
                                                        class="lazyload" />
                                                </div>
                                                <div class="content">
                                                    <div class="img-item">
                                                        <img src="./frontend/images/item/rice-plant-2.png" alt="" />
                                                    </div>
                                                    <a href="event-detail.html" class="title fw-7 font-worksans">
                                                        Children's Summer Camp
                                                    </a>
                                                    <p class="text">
                                                        Lorem ipsum dolor
                                                        sit amet,
                                                        consectetur
                                                        adipiscing
                                                        <br />
                                                        elit. Sed a cursus
                                                        massa.
                                                    </p>
                                                    <a href="our-events.html" class="tf-btn-read hover-text-4">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    <!-- /.Section banner -->
    
    <!-- Section why us -->
            <!--<section class="s-why-us has-img-item">-->
            <!--    <div class="tf-container w-1290">-->
            <!--        <div class="row">-->
            <!--            <div class="col-lg-12">-->
            <!--                <div class="main-section">-->
            <!--                    <div class="image">-->
            <!--                        <div class="video-wrap style-4">-->
            <!--                            <img class="lazyload tf-animate-2 " data-src="./frontend/images/section/aboutbiffesimage.jpg"-->
            <!--                                src="./frontend/images/section/aboutbiffesimage.jpg" alt="" />-->
            <!--                            <div class="box-video tf-animate__box animate__slow ">-->
            <!--                                <a href="https://www.youtube.com/watch?v=HloQI7pOcvc"-->
            <!--                                    class="style-icon-play popup-youtube">-->
            <!--                                    <i class="icon-play3"></i>-->
            <!--                                    <div class="wave"></div>-->
            <!--                                    <div class="wave-1"></div>-->
            <!--                                </a>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="content-section">-->
            <!--                        <div class="heading-section style-2">-->
            <!--                            <div class="img-item">-->
            <!--                                <div class="item">-->
            <!--                                    <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />-->
            <!--                                </div>-->
            <!--                                <p class="sub-title">-->
            <!--                                    weeks highlights-->
            <!--                                </p>-->
            <!--                            </div>-->

            <!--                            <p class="title tf-animate-4">-->
            <!--                                Next Upcoming Logo Launch and Curtain Raiser-->
            <!--                            </p>-->
            <!--                        </div>-->
            <!--                        <p class="text">-->
            <!--                            16th BENGALURU INTERNATIONAL FILM FESTIVAL (BIFFes) – 2025 will be held on February 27th – March 06th, 2025 at Bengaluru.-->
            <!--                        </p>-->
                                   
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="bot relative">-->
            <!--                    <ul class="benefit-list">-->
            <!--                        <li>-->
            <!--                            <div class="icon">-->
            <!--                                <i class="fa-solid fa-location-dot"></i>-->
            <!--                            </div>-->
            <!--                            <a href="#"-->
            <!--                                class="h5 hover-text-secondary title fw-6 font-worksans">-->
            <!--                                Venue-->
            <!--                            </a>-->
            <!--                            <p class="sub">-->
            <!--                                Bengaluru-->
            <!--                            </p>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <div class="icon">-->
            <!--                              <i class="fa-solid fa-calendar-days"></i>-->
            <!--                            </div>-->
            <!--                            <a href="#"-->
            <!--                                class="h5 hover-text-secondary title fw-6 font-worksans">-->
            <!--                               Date-->
            <!--                            </a>-->
            <!--                            <p class="sub">-->
            <!--                              Coming Soon-->
            <!--                            </p>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <div class="icon">-->
            <!--                                <i class="fa-solid fa-clock"></i>-->
            <!--                            </div>-->
            <!--                            <a href="#"-->
            <!--                                class="h5 hover-text-secondary title fw-6 font-worksans">-->
            <!--                                Time-->
            <!--                            </a>-->
            <!--                            <p class="sub">-->
            <!--                                Coming Soon-->
            <!--                            </p>-->
            <!--                        </li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <!-- /.Section why us -->

   
   
   
   
   
   
    
       <!-- Section faq -->
            <!--<section class="s-faq has-img-item tf-pt-0" style="padding-top:0px !important">-->
            <!--    <div class="tf-container w-1290">-->
            <!--        <div class="row">-->
            <!--            <div class="col-lg-7">-->
            <!--                <div class="content-section">-->
            <!--                    <div class="heading-section style-2 has-text mb-43">-->
            <!--                        <div class="img-item">-->
            <!--                            <div class="item mr-16">-->
            <!--                                <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />-->
            <!--                            </div>-->
            <!--                            <p class="sub-title">-->
            <!--                               16th BENGALURU INTERNATIONAL FILM FESTIVAL (BIFFes)-->
            <!--                            </p>-->
            <!--                        </div>-->

            <!--                        <p class="title wow fadeInUp" data-wow-delay="0s">-->
            <!--                            Most Frequently Asked Questions.-->
            <!--                        </p>-->
                                    
            <!--                    </div>-->
            <!--                    <div class="tf-accordion accordion" id="accordionExample">-->
            <!--                        <div class="accordion-item">-->
            <!--                            <h2 class="accordion-header">-->
            <!--                                <button class="accordion-button" type="button" data-bs-toggle="collapse"-->
            <!--                                    data-bs-target="#collapseOne" aria-expanded="true"-->
            <!--                                    aria-controls="collapseOne">-->
            <!--                                    How can I register for BIFFES?-->
            <!--                                </button>-->
            <!--                            </h2>-->
            <!--                            <div id="collapseOne" class="accordion-collapse collapse show"-->
            <!--                                data-bs-parent="#accordionExample">-->
            <!--                                <div class="accordion-body">-->
            <!--                                    You can register online through our official website or in person at designated venues. Please refer to the [registration page link] for more details.-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="accordion-item">-->
            <!--                            <h2 class="accordion-header">-->
            <!--                                <button class="accordion-button collapsed" type="button"-->
            <!--                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"-->
            <!--                                    aria-expanded="false" aria-controls="collapseTwo">-->
            <!--                                    What is the registration fee for attending the festival?-->
            <!--                                </button>-->
            <!--                            </h2>-->
            <!--                            <div id="collapseTwo" class="accordion-collapse collapse"-->
            <!--                                data-bs-parent="#accordionExample">-->
            <!--                                <div class="accordion-body">-->
            <!--                                    The registration fee varies for general delegates, students, and film professionals. Refer to the [registration details] section for updated pricing.-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="accordion-item">-->
            <!--                            <h2 class="accordion-header">-->
            <!--                                <button class="accordion-button collapsed" type="button"-->
            <!--                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"-->
            <!--                                    aria-expanded="false" aria-controls="collapseThree">-->
            <!--                                    Is there a special discount for students?-->
            <!--                                </button>-->
            <!--                            </h2>-->
            <!--                            <div id="collapseThree" class="accordion-collapse collapse"-->
            <!--                                data-bs-parent="#accordionExample">-->
            <!--                                <div class="accordion-body">-->
            <!--                                    Yes, students can register at a discounted rate. A valid student ID is required during registration.-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="accordion-item">-->
            <!--                            <h2 class="accordion-header">-->
            <!--                                <button class="accordion-button collapsed" type="button"-->
            <!--                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"-->
            <!--                                    aria-expanded="false" aria-controls="collapseFour">-->
            <!--                                    What type of films will be screened at BIFFES?-->
            <!--                                </button>-->
            <!--                            </h2>-->
            <!--                            <div id="collapseFour" class="accordion-collapse collapse"-->
            <!--                                data-bs-parent="#accordionExample">-->
            <!--                                <div class="accordion-body">-->
            <!--                                    <span>Asian Cinema Competition,</span>-->
            <!--                                    <span>Chitrabharati (Indian Cinema) Competition,</span>-->
            <!--                                    <span>Kannada Cinema Competition,</span>-->
            <!--                                    <span>Contemporary World Cinema,</span>-->
            <!--                                    <span>Kannada Cinema of Popular Entertainment,</span>-->
            <!--                                    <span>FIPRESCI Critics Week,</span>-->
            <!--                                    <span>Bio-Pics,</span>-->
            <!--                                    <span>Country Focus,</span>-->
            <!--                                    <span>Unsung Incredible India - Films from little known languages,</span>-->
            <!--                                    <span>Retrospectives - Directors / Artists / Technicians,</span>-->
            <!--                                    <span>Centenary Tributes,</span>-->
            <!--                                    <span>Homages & Remembrances,</span>-->
            <!--                                    <span>Curated Section on a Special Theme</span>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-lg-5">-->
            <!--                <div class="s-right img-hover">-->
            <!--                    <div class="image-wrap hover-item">-->
            <!--                        <div class="image">-->
            <!--                            <img src="./frontend/images/section/aboutbiffesimage.jpg" data-src="./frontend/images/section/aboutbiffesimage.jpg"-->
            <!--                                alt="" class="lazyload tf-animate-2" />-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="img-item  tf-animate__box-2 ">-->
            <!--                        <img class="up-down-move" src="./frontend/images/item/question.png" alt="" />-->
            <!--                    </div>-->
            <!--                    <div class="content">-->
            <!--                        <p class="text fs-30 font-snowfall">-->
            <!--                            You didn't find your question? See-->
            <!--                            more questions and ask us today!-->
            <!--                        </p>-->
            <!--                        <a href="#" class="tf-btn bg-white">-->
            <!--                            <span class="text-style cl-primary">-->
            <!--                                Read More-->
            <!--                            </span>-->
            <!--                            <div class="icon">-->
            <!--                                <i class="icon-arrow_right"></i>-->
            <!--                            </div>-->
            <!--                        </a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="s-img-item item-1 t--40 z-3">-->
            <!--        <img src="./frontend/images/item/page-title-top.png" alt="" />-->
            <!--    </div>-->
            <!--</section>-->
            <!-- /.Section faq -->

    <!-- Section contact us -->
    <!-- <section class="s-contact-us has-img-item">
                <div class="section-wrap">
                    <div class="tf-container w-1290">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="content-left">
                                    <div class="image mb-30 mh-unset">
                                        <img src="./frontend/images/section/s-contact.jpg" alt="./frontend/images/section/s-contact.jpg"
                                            class="lazyload" />
                                        <img src="./frontend/images/item/leaf.png" alt=""
                                            class="img-item tf-animate__rotate-left" />
                                    </div>
                                    <ul class="contact-list">
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="infor">
                                                <p class="title">
                                                     Address
                                                </p>
                                                <p class="text">
                                                   No. 1, Sheshadri Road, Bangalore, Karnataka-560001
                                                </p>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-address-book"></i>
                                            </div>
                                            <div class="infor">
                                                <p class="title">
                                                    Contact Us
                                                </p>
                                                <p class="text">
                                                   organicsandmillets@gmail.com <br>
                                                    Call Us 24/7: 080-22074111
                                                </p>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1.4s">
                                            <div class="icon style-circle">
                                                <i class="fa-solid fa-clock"></i>
                                            </div>
                                            <div class="infor">

                                                <p class="title">
                                                    Working Hours
                                                </p>
                                                <p class="text">
                                                    Mon - Fri: 8.00am - 18.00pm <br>
                                                    Sat: 9.00am - 17.00pm Holidays: Closes
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="content-section">
                                    <div class="heading-section mb-50 style-3 has-text">
                                        <p class="sub-title">Let's Cooperate Together</p>
                                        <p class="title tf-animate-1 transition-1s">
                                            Contact Us Today!
                                        </p>
                                        <p class="text">
                                            We will reply you within 24 hours via email, thank you for contacting
                                        </p>
                                        <div class="img-item">
                                            <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />
                                        </div>
                                    </div>
                                    <form id="contactform" method="post" action="./contact/contact-process.php"
                                        novalidate="novalidate" class="form-send-message">
                                        <div class="cols style-2 mb-15">
                                            <fieldset>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Name*" aria-required="true" required class="name" />
                                            </fieldset>
                                            <fieldset>
                                                <input type="email" class="form-control email" id="mail" name="mail"
                                                    placeholder="Email*" required />
                                            </fieldset>
                                        </div>
                                        <div class="cols style-2 mb-15">
                                            <fieldset>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="Phone*" aria-required="true" required />
                                            </fieldset>
                                            <fieldset class="dropdown">
                                                <select name="text" id="Support">
                                                    <option value="You need support?" selected="">You need suport?
                                                    </option>
                                                    <option value="You need support? 1">You need suport? 1
                                                    </option>
                                                    <option value="You need support? 2">You need suport? 2
                                                    </option>
                                                    <option value="You need support? 3">You need suport? 3
                                                    </option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="cols mb-30">
                                            <fieldset>
                                                <textarea name="message" id="message"
                                                    placeholder="Message..."></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="checkbox-item send-wrap">
                                            <label class="mb-0">
                                                <span class="text font-nunito">Agree to our terms and
                                                    conditions</span>
                                                <input type="checkbox" class="checkbox-item" checked>
                                                <span class="btn-checkbox"></span>
                                            </label>
                                            <button type="submit" class="tf-btn bg-white">
                                                <span class="text-style cl-primary">
                                                    Send Message
                                                </span>
                                                <span class="icon">
                                                    <i class="icon-arrow_right"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="img-item item-1 up-down-move">
                                        <img src="./frontend/images/item/corn-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-img-item item-1">
                    <img src="./frontend/images/item/page-title-top.png" alt="" />
                </div>
            </section> -->
    <!-- /.Section contact us -->

    <!-- Section partner -->

    <!-- /.Section partner -->

</div><!-- /.Main-content -->




<!-- <section class="py-4 mt-5    exhibitor-btn">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div>
                            <a class="find-btn" href="#">Find a Exhibitor</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <a class="become-btn" href="#">Become a Exhibitor</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         -->



<!-- /.Section service -->

<!-- <section class="section_schedule-itf-meeting">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 align-self-center  itf-content p-4 ">
                <h4>
                    Karnataka to Host the 6th International Trade Fair on Organics & Millets in January 2025
                </h4>
                <p> Karnataka State has been a front runner in promoting organics and millets nationally and globally. The Government
                    successfully organized National and International Trade Fairs on Organics and Millets in 2017, 2018, 2019, 2023 and
                    2024. The sixth edition of this mega event, "International Trade Fair, Organics & Millets-2025" will be organized by
                    Department of Agriculture in January from 23-25, 2025 at Tripuravasini, Palace Ground, Bengaluru</p>
            </div>
            <div class="col-lg-7   tab-section-schedule">
                <div class="tab-container">
                    <div class="tabs">
                        <div class="tab active   eve-meet-date" data-tab="tab1">Day 1 <br> 23 Jan 2024</div>
                        <div class="tab   eve-meet-date" data-tab="tab2">Day 2 <br> 24 Jan 2024</div>
                        <div class="tab   eve-meet-date" data-tab="tab3">Day 3 <br> 25 Jan 2024</div>
                    </div>
                    <div class="tab-content">
                        <section id="tab1" class="active">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center"> 10:00 - 11:30 am  </h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Inaugural Program Main Hall </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">11:30 am - 07:00 pm </h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Exhibition
                                    </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">12:00 pm - 05:00 pm  </h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>International Conference</h3>
                                </div>
                            </div>
                         
                        
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center"> 02:00 pm - 05:00 pm  </h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Farmers Workshop in Main Hall</h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">12:30 pm - 01:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>
                                        B2B and F2B 
                                        
                                    </h3>
                                </div>
                            </div>
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">02:00 pm - 06:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>
                                     
                                        B2B Lounge
                                    </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center"> 06:00 pm - 08:00 pm  </h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Cultural Events</h3>
                                </div>
                            </div>
                        </section>
                        <section id="tab2">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:00 am - 07:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Exhibition </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:00 am - 05:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>International Conference </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:00 am - 05:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Farmers Workshop in Main Hall </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:30 am - 06:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>B2B and F2B
                                        B2B Lounge
                                    </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center"> 06:00 pm - 08:00 pm  </h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Cultural Events</h3>
                                </div>
                            </div>
                        </section>
                        <section id="tab3">

                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:00 am - 07:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Exhibition
                                    </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:00 am - 01:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>International Conference </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:00 am - 01:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>
                                        Farmers Workshop in Main Hall </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center">10:00 am - 03:00 pm</h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>
                                        B2B and F2B
                                        B2B Lounge </h3>
                                </div>
                            </div>
                            <hr class="bt-meeting">
                            <div class="row  bt-dr mx-0">
                                <div class="col-lg-4">
                                    <h3 class="text-center"> 04:00 pm - 05:30 pm  </h3>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Valedictory Main Hall </h3>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- <section class="s-project">
    <div class="heading-side has-img-item">
        <div class="tf-container w-1290">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section style-3 has-text text-center">
                       
                        <p class="title tf-animate-3">
                            Organics & Millets

                        </p>
                        
                        <div class="img-item">
                            <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-img-item item-1">
            <img src="./frontend/images/item/page-title-top.png" alt="" />
        </div>
        <div class="s-img-item item-2 wow zoomIn">
            <img src="./frontend/images/item/windmill.png" alt="" />
        </div>
        <div class="s-img-item item-3">
            <img src="./frontend/images/item/green.png" alt="" />
        </div>
    </div>

    <div class="slider-side">
        <div class="tf-container w-1290">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container slider-s-project">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-1.jpg" data-src="./frontend/images/section/tem-1.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-2.jpg" data-src="./frontend/images/section/tem-2.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-3.jpg" data-src="./frontend/images/section/tem-3.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-4.jpg" data-src="./frontend/images/section/tem-4.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-5.jpg" data-src="./frontend/images/section/tem-5.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-6.jpg" data-src="./frontend/images/section/tem-6.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-7.jpg" data-src="./frontend/images/section/tem-7.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-8.jpg" data-src="./frontend/images/section/tem-8.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-9.jpg" data-src="./frontend/images/section/tem-9.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-10.jpg" data-src="./frontend/images/section/tem-10.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-11.jpg" data-src="./frontend/images/section/tem-11.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio style-5">
                                    <div class="image">
                                        <img src="./frontend/images/section/tem-12.jpg" data-src="./frontend/images/section/tem-12.jpg"
                                            alt="" class="lazyload" />
                                    </div>
                                    
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="bot">
                            <div class="swiper-pagination style-1 pagination-s-project"></div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="s-img-item item-4">
            <img src="./frontend/images/item/page-title-top.png" alt="" />
        </div>
</section> -->

<!-- <section class="s-faq has-img-item tf-pt-0">
    <div class="tf-container w-1290">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-section1" style="max-width:auto">
                    <div class="heading-section style-2 has-text mb-43">
                        <div class="img-item">
                            <div class="item mr-16">
                                <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />
                            </div>
                            <p class="sub-title">
                                International Trade Fair
                            </p>
                        </div>

                        <p class="title wow fadeInUp" data-wow-delay="0s">
                            Frequently Asked Questions

                        </p>
                        <p class="text">
                            
                        </p>
                    </div>
                    <div class="tf-accordion accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Event and venue Details
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MOITF will be from 23th-25th January 2025 .�
                                    Venue: Triupuravasini, palace grounds , Bengaluru
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is there any entry fee for visitors?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MOITF is organised by Karnataka State Agriculture Department and entry for
                                    visitors is FREE.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do Exhibitors/Conference Partipants register for the event?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Exhibitors who wish to book a stall can visit the official website and navigate
                                    to
                                    Registrations Menu and seperate links are available for registrationa for
                                    various events of
                                    MOITF 2025.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is there any offline mode of payment allowed for registrations?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The registrations for exhibition stall booking, International Conference, Paid
                                    Food Stalls
                                    need to be completed by making ONLINE payment only . You will receive the
                                    confirmation email
                                    once you register and make the payment for an event whichever is applicable.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How do exhibitors contact fabricators to setup their stalls in the venue?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    Exhibitors can contact fabricators through the event organizers, who provide a
                                    list of approved vendors and setup guidelines.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="s-img-item item-1 t--40 z-3">
        <img src="./frontend/images/item/page-title-top.png" alt="" />
    </div>
</section> -->




<!-- Section service 2-->
<!-- <section class="s-service-2 relative overflow-hidden">
            <div class="content-section">
                <div class="heading-section style-2">
                    <div class="img-item">
                        <div class="item">
                            <img src="./frontend/images/item/rice-plant-2.png" class="tf-animate-1" alt="" />
                        </div>
                        <p class="sub-title">
                            2025
                        </p>
                    </div>

                    <p class="title tf-animate-1">
                       ITF Upcoming Events
                    </p>
                </div>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ex
                    igula, pulvinar ultrices justo sed, bibendum lobortis nibh. Pellentesque
                    mattis eros sit amet lorem tristique faucibus.
                </p>
                <a href="#" class="tf-btn ">
                    <span class="text-style ">
                        Explore More
                    </span>
                    <div class="icon">
                        <i class="icon-arrow_right"></i>
                    </div>
                </a>
                <div class="button-slide-wrap">
                    <div class="btn-s-service-2 btn-prev">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="58px" height="15px"
                            viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">
                            <g fill="#0d401c">
                                <path
                                    d="M7 15.4 c-3.6 -2.4 -6.6 -5 -6.8 -5.7 -0.2 -1.2 13.8 -9.7 16 -9.7 2.4 0 0.2 2.4 -4.9 5.2 l-5.8 3.3 19.5 0.8 c11 0.5 27.1 0.5 37 -0.1 9.6 -0.5 17.7 -0.7 17.9 -0.5 2.4 1.9 -22 3.5 -48.6 3.1 l-25.2 -0.3 4.7 4.2 c6.1 5.5 4.4 5.3 -3.8 -0.3z" />
                            </g>
                        </svg>
                    </div>
                    <div class="btn-s-service-2 btn-next">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="58px" height="15px"
                            viewBox="0 0 80 20" preserveAspectRatio="xMidYMid meet">
                            <g fill="#0d401c">
                                <path
                                    d="M63 19 c0 -0.5 2.6 -2.4 5.8 -4.2 l5.7 -3.3 -19.5 -0.8 c-11 -0.5 -27.1 -0.5 -37 0.1 -9.6 0.5 -17.7 0.7 -17.9 0.5 -2.4 -1.9 22 -3.5 48.7 -3.1 l25.2 0.3 -4.6 -3.9 c-2.5 -2.1 -4.3 -4 -4 -4.3 0.7 -0.7 14.6 8.9 14.6 10.2 0 1.1 -14.3 9.5 -16.2 9.5 -0.4 0 -0.8 -0.4 -0.8 -1z" />
                            </g>
                        </svg>
                    </div>

                </div>
            </div>
            <div class="slider-wrap">
                <div class="swiper-container slider-s-service-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-infor style-2 ic-hover img-hover">
                                <div class="image hover-icon hover-item">
                                    <img src="./frontend/images/widget/curtain.jpg"
                                        data-src="./frontend/images/widget/curtain.jpg" alt="" class=" lazyload">
                                    <div class="icon style-circle">
                                        <i class="icon-salad"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="service-detail.html"
                                        class="title fs-23 fw-6 font-worksans hover-text-secondary">
                                       Curptain Raiser
                                    </a>
                                    <p class="text font-nunito">
                                        Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                        nibh sit amet
                                        commodo nulla.
                                    </p>
                                     <div class="row">
                                        <div class="col-6"> <a href="#" class="tf-btn-read text-white hover-text-secondary">10/12/2024</a></div>
                                        <div class="col-6 register-box"> <a href="#" class="  hover-text-secondary  register-btn">Register</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-infor style-2 ic-hover img-hover">
                                <div class="image hover-icon hover-item">
                                    <img src="./frontend/images/widget/millties-1.jpeg"
                                        data-src="./frontend/images/widget/millties-1.jpeg" alt="" class=" lazyload">
                                    <div class="icon style-circle">
                                        <i class="icon-cow"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="service-detail.html"
                                        class="title fs-23 fw-6 font-worksans hover-text-secondary">
                                        Walkathon
                                    </a>
                                    <p class="text font-nunito">
                                        Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                        nibh sit amet
                                        commodo nulla.
                                    </p>
                                    <div class="row">
                                        <div class="col-6"> <a href="#" class="tf-btn-read text-white hover-text-secondary">10/12/2024</a></div>
                                        <div class="col-6 register-box"> <a href="#" class="  hover-text-secondary  register-btn">Register</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-infor style-2 ic-hover img-hover">
                                <div class="image hover-icon hover-item">
                                    <img src="./frontend/images/widget/provide-item-3-3.jpg"
                                        data-src="./frontend/images/widget/provide-item-3-3.jpg" alt="" class=" lazyload">
                                    <div class="icon style-circle">
                                        <i class="icon-chicken-2"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="service-detail.html"
                                        class="title fs-23 fw-6 font-worksans hover-text-secondary">
                                        International Conference
                                    </a>
                                    <p class="text font-nunito">
                                        Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                        nibh sit amet
                                        commodo nulla.
                                    </p>
                                     <div class="row">
                                        <div class="col-6"> <a href="#" class="tf-btn-read text-white hover-text-secondary">10/12/2024</a></div>
                                        <div class="col-6 register-box"> <a href="#" class="  hover-text-secondary  register-btn">Register</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="swiper-slide">
                            <div class="box-infor style-2 ic-hover img-hover">
                                <div class="image hover-icon hover-item">
                                    <img src="./frontend/images/widget/provide-item-3-3.jpg"
                                        data-src="./frontend/images/widget/provide-item-3-3.jpg" alt="" class=" lazyload">
                                    <div class="icon style-circle">
                                        <i class="icon-chicken-2"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="service-detail.html"
                                        class="title fs-23 fw-6 font-worksans hover-text-secondary">
                                       Farmer Workshop
                                    </a>
                                    <p class="text font-nunito">
                                        Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                        nibh sit amet
                                        commodo nulla.
                                    </p>
                                     <div class="row">
                                        <div class="col-6"> <a href="#" class="tf-btn-read text-white hover-text-secondary">10/12/2024</a></div>
                                        <div class="col-6 register-box"> <a href="#" class="  hover-text-secondary  register-btn">Register</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="swiper-slide">
                            <div class="box-infor style-2 ic-hover img-hover">
                                <div class="image hover-icon hover-item">
                                    <img src="./frontend/images/widget/provide-item-3-3.jpg"
                                        data-src="./frontend/images/widget/provide-item-3-3.jpg" alt="" class=" lazyload">
                                    <div class="icon style-circle">
                                        <i class="icon-chicken-2"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="service-detail.html"
                                        class="title fs-23 fw-6 font-worksans hover-text-secondary">
                                       B2B Meet
                                    </a>
                                    <p class="text font-nunito">
                                        Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                        nibh sit amet
                                        commodo nulla.
                                    </p>
                                    <div class="row">
                                        <div class="col-6"> <a href="#" class="tf-btn-read text-white hover-text-secondary">10/12/2024</a></div>
                                        <div class="col-6 register-box"> <a href="#" class="  hover-text-secondary  register-btn">Register</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="swiper-slide">
                            <div class="box-infor style-2 ic-hover img-hover">
                                <div class="image hover-icon hover-item">
                                    <img src="./frontend/images/widget/provide-item-3-3.jpg"
                                        data-src="./frontend/images/widget/provide-item-3-3.jpg" alt="" class=" lazyload">
                                    <div class="icon style-circle">
                                        <i class="icon-chicken-2"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="service-detail.html"
                                        class="title fs-23 fw-6 font-worksans hover-text-secondary">
                                       B2S Meet
                                    </a>
                                    <p class="text font-nunito">
                                        Ultrices sagittis orci a scelerisque purus semper eget duis at. Sollicitudin
                                        nibh sit amet
                                        commodo nulla.
                                    </p>
                                    <div class="row">
                                        <div class="col-6"> <a href="#" class="tf-btn-read text-white hover-text-secondary">10/12/2024</a></div>
                                        <div class="col-6 register-box"> <a href="#" class="  hover-text-secondary  register-btn">Register</a></div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

<!-- /.Section service -->

<!-- Section close project 2 -->
<!-- <section class="s-project-2 has-img-item tf-pt-0  pb-5">
    <div class="s-content-wrap">
        <div class="tf-container w-1290">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-section relative z-5">
                        <div class=" heading-section">
                            <p class="sub-title">2024</p>
                            <p class="title mb-20 tf-animate-4">Glimpse of ITF </p>
                            <div class="img-item">
                                <img class="tf-animate-1" src="./frontend/images/item/rice-plant-2.png" alt="" />
                            </div>
                        </div>
                        <p class="text">
                            Driving the future of tennis with groundbreaking events and global impact.
                        </p>
                        <a href="portfolio-style-1.html" class="tf-btn-read text-white hover-text-secondary">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-img-item item-1">
            <img src="./frontend/images/item/page-title-top.png" alt="" class="">
        </div>
        <div class="s-img-item item-2">
            <img src="./frontend/images/item/item-bottom.png" alt="" class="">
        </div>
        <div class="s-img-item item-3 wow zoomIn">
            <div class="scroll-element-3">
                <img src="./frontend/images/item/windmill.png" alt="" class="">
            </div>
        </div>
    </div>



    <div class="s-slider">

        <div class="wg-tabs style-3">
            <div class="tf-container w-1290">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrap">

                            <ul class="overflow-x-auto menu-tab">
                                <li class="item active"><a href="javascript:void(0)"
                                        class="btn-tab wow fadeInUp" data-wow-delay="0s">
                                        2024 </a></li>
                                <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                        data-wow-delay="0.1s">Curptain Raiser</a></li>
                                <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                        data-wow-delay="0.2s">Walkathon</a></li>
                                <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                        data-wow-delay="0.3s">International Conference</a></li>
                                <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                        data-wow-delay="0.4s">B2B Meet</a></li>
                                <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                        data-wow-delay="0.5s">B2S Meet</a></li>
                                <li class="item"><a href="javascript:void(0)" class="btn-tab wow fadeInUp"
                                        data-wow-delay="0.6s">Farmer Workshop</a></li> 
                            </ul>
                            <div class="btn-slide-wrap">
                                <div class="btn-prev btn-slide-project-2">
                                    <img src="./icons/slide-prev.svg" alt="">
                                </div>
                                <div class="btn-next btn-slide-project-2">
                                    <img src="./icons/slide-next.svg" alt="">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="widget-content-tab">
                <div class="widget-content-inner active">
                    <div class="swiper-container slider-project-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/m-1.jpeg"
                                            data-src="./frontend/images/widget/m-1.jpeg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper"> Walkathon</p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            Millet Walkathon</a>
                                        <p class="text font-nunito">This new year, let’s go back to our roots and rediscover health
                                            through smart foods-millets which are good for you, good for farmers and good for planet.
                                        </p>
                                        <div class="bot">

                                            <a href="portfolio-style-2.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="widget-content-inner">
                    <div class="swiper-container slider-project-2">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/m-5.jpeg"
                                            data-src="./frontend/images/widget/m-4.jpeg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper">Curtain Raiser</p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            Global Investor Meet -Invest Karnataka 2025</a>
                                        <p class="text font-nunito">Chief Minister Siddaramaiah announced on Wednesday that the
                                            Karnataka government aims to achieve an industrial growth rate of 15-16% annually
                                            to reach a $1 trillion GDP by 2032</p>
                                        <div class="bot">

                                            <a href="portfolio-style-1.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/m-5.jpeg"
                                            data-src="./frontend/images/widget/m-5.jpeg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper">Curtain Raiser</p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            Global Investor Meet -Invest Karnataka 2025</a>
                                        <p class="text font-nunito">Chief Minister Siddaramaiah announced on Wednesday that the
                                            Karnataka government aims to achieve an industrial growth rate of 15-16% annually
                                            to reach a $1 trillion GDP by 2032</p>
                                        <div class="bot">

                                            <a href="portfolio-style-1.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                          
                        </div>
                       
                    </div>
                </div>
                <div class="widget-content-inner">
                    <div class="swiper-container slider-project-2">
                        <div class="swiper-wrapper">
                        
                            <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/portfolio-2-style-2.jpg"
                                            data-src="./frontend/images/widget/portfolio-2-style-2.jpg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper"> Walkathon</p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            Millet Walkathon</a>
                                        <p class="text font-nunito">This new year, let’s go back to our roots and rediscover health
                                            through smart foods-millets which are good for you, good for farmers and good for planet.
                                        </p>
                                        <div class="bot">

                                            <a href="portfolio-style-2.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="widget-content-inner">
                    <div class="swiper-container slider-project-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/m-3.jpeg"
                                            data-src="./frontend/images/widget/m-3.jpeg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper"> International Conference
                                        </p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            International Conference </a>
                                        <p class="text font-nunito">Chief Minister Siddaramaiah announced on Wednesday that the
                                            Karnataka government aims to achieve an industrial growth rate of 15-16% annually
                                            to reach a $1 trillion GDP by 2032</p>
                                        <div class="bot">

                                            <a href="portfolio-style-1.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                           
                        </div>
                    </div>
                </div>
                <div class="widget-content-inner">
                    <div class="swiper-container slider-project-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/portfolio-1-style-2.jpg"
                                            data-src="./frontend/images/widget/portfolio-1-style-2.jpg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper">Curptain Raiser
                                        </p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            Global Investor Meet -Invest Karnataka 2025</a>
                                        <p class="text font-nunito">Chief Minister Siddaramaiah announced on Wednesday that the
                                            Karnataka government aims to achieve an industrial growth rate of 15-16% annually
                                            to reach a $1 trillion GDP by 2032</p>
                                        <div class="bot">

                                            <a href="portfolio-style-1.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/portfolio-2-style-2.jpg"
                                            data-src="./frontend/images/widget/portfolio-2-style-2.jpg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper">Agriculture - farm</p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            The Joy Of Sheep
                                            Farming</a>
                                        <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.
                                            Sed
                                            a
                                            cursus massa.
                                            Cras ut dui nec nibhvehicula fermentum.
                                            natoque penatibus.</p>
                                        <div class="bot">

                                            <a href="portfolio-style-1.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="widget-content-inner">
                    <div class="swiper-container slider-project-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-portfolio-2 img-hover">
                                    <div class="image hover-item">
                                        <img src="./frontend/images/widget/m-7.jpeg"
                                            data-src="./frontend/images/widget/m-7.jpeg" alt=""
                                            class="lazyload">
                                    </div>
                                    <div class="content">
                                        <p class="sub font-farmhouse text-upper">B2S Meet
                                        </p>
                                        <a href="portfolio-details.html"
                                            class="title fs-23 font-worksans fw-6 hover-text-4">
                                            Global Investor Meet -Invest Karnataka 2025</a>
                                        <p class="text font-nunito">Chief Minister Siddaramaiah announced on Wednesday that the
                                            Karnataka government aims to achieve an industrial growth rate of 15-16% annually
                                            to reach a $1 trillion GDP by 2032</p>
                                        <div class="bot">

                                            <a href="portfolio-style-1.html"
                                                class="tf-btn-read hover-text-4">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


    </div>


</section>/.Section close project 2 -->

<!-- <section class="py-5  section_itf-choose">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 p-4">
                        <img class="w-100 why-itf-img" src="images/receipe-4.webp" alt="">
                    </div>
                    <div class="col-lg-7 p-4">
                        <span>Why Choose ITF ?</span>
                        <h2 class="pt-4 pb-2">Karnataka - The Organic Farming Hub</h2>
                        <p>Organic farming in Karnataka has grown significantly in recent years due to the increasing awareness of the benefits of chemical-free farming. The state is home to a wide variety of organic crops, ranging from grains and vegetables to fruits and spices.</p>
                             
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="why-box-1">
                                        <h5>Organic Farming in Karnataka</h5>
                                        <p>Karnataka is one of the top states in India for organic farming.</p>
                                        <a href="#" class="why-btn-itf">View More</a>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="why-box-1">
                                        <h5>Challenges in Organic Farming</h5>
                                        <p>Organic farming often requires more labor-intensive practices...</p>
                                        <a href="#" class="why-btn-itf">View More</a>
                                    </div>
                                    
                                </div>
                               
                            </div>
                    </div>
                </div>
            </div>
        </section> -->




@endsection