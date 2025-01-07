@extends('layout.app')

@section('content')

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
               <h5>Welcome About page</h5>
               <nav>
                    <ul>
                        <li><a href="#">{{ __('messages.home') }}</a></li>
                        <li><a href="#">{{ __('messages.about') }}</a></li>
                        <li><a href="#">{{ __('messages.eventSchedule') }}</a></li>
                        <li><a href="#">{{ __('messages.team') }}</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>


<style>
    .main-content.page-portfolio-1 {
    padding: 5px 0px 5px !important;
}
.page-parallax .parallax-window {
    min-height: 320px !important;
    position: relative !important;
}

.s-about-us .main-section .content-right .box-trust {
    padding: 10px !important;
   
}
</style>

<!-- Page-title -->
        <div class="page-title page-portfolio-details page-parallax">
            <div class="parallax-window" data-position="top " data-parallax="scroll"
                data-image-src="./frontend/images/page-title/portfolio.jpg" data-speed="0.9" data-bleed="2"></div>
            <div class="content-wrap">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                   16th BIFFES
                                </p>
                                <h1 class="title">
                                    About Us
                                </h1>
                                <div class="icon-img">
                                    <img src="./frontend/images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.php">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="./frontend/images/item/grass.png" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Section about -->
            <section class="s-about-us">
                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-section">
                                <div class="content-left img-hover">
                                    <div class="heading-section">
                                        <p class="sub-title wow fadeInUp" data-wow-delay="0s">
                                          {{ __('messages.about-biffes') }}
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
                                        <img src="./frontend/images/widget/aboutnewimage.jpg" data-src="./frontend/images/widget/aboutnewimage.jpg"
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


@endsection