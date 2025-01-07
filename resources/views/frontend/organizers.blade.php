@extends('layout.app')


@section('content')

<style>
    .main-content.page-portfolio-1 {
    padding: 5px 0px 5px !important;
}
.page-parallax .parallax-window {
    min-height: 320px !important;
    position: relative !important;
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
                                    ORGANIZING COMMITTEE
                                </h1>
                                <div class="icon-img">
                                    <img src="./frontend/images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.php">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">Organizers</a>
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

        <!-- Main-content -->
        <div class="main-content page-portfolio-1 ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 mb-40">
                            <div class="wg-tabs">
                                <!-- <ul class="overflow-x-auto menu-tab mb-65">
                                    <li class="item active"><a href="javascript:void(0)" class="btn-tab">All
                                            Projects</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">Organic</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">Farms</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">Harvest</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">Vegetable</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">Fruit</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">Cattle</a></li>
                                </ul> -->
                                <div class="widget-content-tab">
                                    <div class="widget-content-inner container-loadmore active">
                                        <div class="grid-layout-3 grid-portfolio">
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/8.jpg"
                                                        data-src="./frontend/images/widget/8.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Shri Siddaramaiah</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:60px;">Honorable Chief Minister, Goverment of Karnataka

                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/4.jpg"
                                                        data-src="./frontend/images/widget/4.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Shri  D. K. Shivakumar</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:60px;">Deputy Chief Minister,

                                                        Government Of Karnataka </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/12.jpg"
                                                        data-src="./frontend/images/widget/12.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Sadhu Kokila</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:80px;">Chairman, Karnataka Chalanachitra Academy
                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="box-portfolio wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/10.jpg"
                                                        data-src="./frontend/images/widget/10.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Umashree</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:60px;">
                                                        MLC and Renowned Artist
                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/KaveriMadamIAS.jpeg"
                                                        data-src="./frontend/images/widget/KaveriMadamIAS.jpeg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">B.B Cauveri, IAS</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:50px;">Principal Secretary, Department of Information And Public Relations,
                                                                                  Government of Karnataka</p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/HEMANT MNIMBALKAR.png"
                                                        data-src="./frontend/images/widget/HEMANT MNIMBALKAR.png" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Hemant M Nimbalkar, IPS</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:50px;">
                                                        Commissioner,
                                                                                   Department of Information And Public Relations, 
                                                                                  Government of Karnataka
                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/13.jpg"
                                                        data-src="./frontend/images/widget/13.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Narasimhalu</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Chairman, KFCC

                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/Vidyashankar-Artistic Director.jpeg"
                                                        data-src="./frontend/images/widget/Vidyashankar-Artistic Director.jpeg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">N. Vidyashankar</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Artistic Director

                                                         </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/anup.jpg"
                                                        data-src="./frontend/images/widget/anup.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Anup Chandrasekharan</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Media Personality
                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="box-portfolio wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/photo edit work.jpg"
                                                        data-src="./frontend/images/widget/photo edit work.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Vidya Sagar</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Media Personality

                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/6.jpg"
                                                        data-src="./frontend/images/widget/6.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Nagathihalli Chandrashekhar</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Renowned Filmmaker </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/5.jpg"
                                                        data-src="./frontend/images/widget/5.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Dhananjaya</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Renowned Artist
                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="box-portfolio wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/ninasam.jpg"
                                                        data-src="./frontend/images/widget/ninasam.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Sathish Ninasam</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;"> Renowned Artist

                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/venkateshnew.jpg"
                                                        data-src="./frontend/images/widget/venkateshnew.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Venkat Narayan</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Film Producer</p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/ravi.jpg"
                                                        data-src="./frontend/images/widget/ravi.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">S.Ravi, IPS</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Cineaste and Film Society Activist
                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="box-portfolio wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/2.jpg"
                                                        data-src="./frontend/images/widget/2.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Bhavana</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;"> Renowned Artist

                                                    </p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/15.jpg"
                                                        data-src="./frontend/images/widget/15.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">Nanjunde Gowda</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:70px;">Filmmaker</p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/naveen.jpg"
                                                        data-src="./frontend/images/widget/naveen.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">C R Naveen</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:50px;">Joint Director(Films), Department of Information And Public Relations,
                                                                                  Government of Karnataka</p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="box-portfolio wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="image">
                                                    <img src="./frontend/images/widget/hemathraju.jpg"
                                                        data-src="./frontend/images/widget/hemathraju.jpg" alt=""
                                                        class=" lazyload">
                                                </div>
                                                <div class="content">
                                                    <p class="sub font-farmhouse text-upper">G Himanthraju</p>
                                                    <a href="#"
                                                        class="title fs-23 font-worksans fw-6 hover-text-secondary">
                                                       </a>
                                                    <p class="text font-nunito" style="padding-bottom:50px;">Registrar, Karnataka Chalanachitra Academy</p>
                                                    <div class="bot">

                                                        <a href="#" class="btn-read icon style-circle">
                                                            <i class="icon-arrow_right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                              
                                            <!--<div class="box-portfolio wow fadeInUp" data-wow-delay="0.2s">-->
                                            <!--    <div class="image">-->
                                            <!--        <img src="./frontend/images/widget/.jpg"-->
                                            <!--            data-src="./frontend/images/widget/.jpg" alt=""-->
                                            <!--            class=" lazyload">-->
                                            <!--    </div>-->
                                            <!--    <div class="content">-->
                                            <!--        <p class="sub font-farmhouse text-upper"></p>-->
                                            <!--        <a href="#"-->
                                            <!--            class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                            <!--           </a>-->
                                            <!--        <p class="text font-nunito" style="padding-bottom:100px;">-->
                                            <!--        </p>-->
                                            <!--        <div class="bot">-->

                                            <!--            <a href="#" class="btn-read icon style-circle">-->
                                            <!--                <i class="icon-arrow_right"></i>-->
                                            <!--            </a>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                           
                                        </div>
                                        <!--<div class="flex justify-center">-->
                                        <!--    <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                        <!--        <span class="text-style text-anime-style-1">See More</span>-->
                                        <!--        <div class="icon">-->
                                        <!--            <i class="icon-arrow_right"></i>-->
                                        <!--        </div>-->
                                        <!--    </a>-->
                                        <!--</div>-->
                                    </div>
                                    <!--<div class="widget-content-inner container-loadmore">-->
                                    <!--    <div class="grid-layout-3 grid-portfolio">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Wheat</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                    Wheat At The End-->
                                    <!--                    Of The Season</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                    Vegetables In The Dry-->
                                    <!--                    Season-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                    Farm Cattle</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="grid-layout-3 grid-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="flex justify-center">-->
                                    <!--        <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                    <!--            <span class="text-style">Load More Projects</span>-->
                                    <!--            <div class="icon">-->
                                    <!--                <i class="icon-arrow_right"></i>-->
                                    <!--            </div>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="widget-content-inner container-loadmore">-->
                                    <!--    <div class="grid-layout-3 grid-portfolio">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Wheat</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                    Wheat At The End-->
                                    <!--                    Of The Season</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                    Vegetables In The Dry-->
                                    <!--                    Season-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                    Farm Cattle</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="grid-layout-3 grid-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="flex justify-center">-->
                                    <!--        <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                    <!--            <span class="text-style">Load More Projects</span>-->
                                    <!--            <div class="icon">-->
                                    <!--                <i class="icon-arrow_right"></i>-->
                                    <!--            </div>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="widget-content-inner container-loadmore">-->
                                    <!--    <div class="grid-layout-3 grid-portfolio">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Wheat</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                    Wheat At The End-->
                                    <!--                    Of The Season</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                    Vegetables In The Dry-->
                                    <!--                    Season-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                    Farm Cattle</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="grid-layout-3 grid-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="flex justify-center">-->
                                    <!--        <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                    <!--            <span class="text-style">Load More Projects</span>-->
                                    <!--            <div class="icon">-->
                                    <!--                <i class="icon-arrow_right"></i>-->
                                    <!--            </div>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="widget-content-inner container-loadmore">-->
                                    <!--    <div class="grid-layout-3 grid-portfolio">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Wheat</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                    Wheat At The End-->
                                    <!--                    Of The Season</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                    Vegetables In The Dry-->
                                    <!--                    Season-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                    Farm Cattle</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="grid-layout-3 grid-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="flex justify-center">-->
                                    <!--        <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                    <!--            <span class="text-style">Load More Projects</span>-->
                                    <!--            <div class="icon">-->
                                    <!--                <i class="icon-arrow_right"></i>-->
                                    <!--            </div>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="widget-content-inner container-loadmore">-->
                                    <!--    <div class="grid-layout-3 grid-portfolio">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Wheat</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                    Wheat At The End-->
                                    <!--                    Of The Season</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                    Vegetables In The Dry-->
                                    <!--                    Season-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                    Farm Cattle</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="grid-layout-3 grid-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="flex justify-center">-->
                                    <!--        <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                    <!--            <span class="text-style">Load More Projects</span>-->
                                    <!--            <div class="icon">-->
                                    <!--                <i class="icon-arrow_right"></i>-->
                                    <!--            </div>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="widget-content-inner container-loadmore">-->
                                    <!--    <div class="grid-layout-3 grid-portfolio">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Wheat</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                    Wheat At The End-->
                                    <!--                    Of The Season</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                    Vegetables In The Dry-->
                                    <!--                    Season-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                    Farm Cattle</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="grid-layout-3 grid-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                    Joy Of Sheep-->
                                    <!--                    Farming</a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">Agriculture - Fruit</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    The Succulence Of Oranges-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio">-->
                                    <!--            <div class="image">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--            </div>-->
                                    <!--            <div class="content">-->
                                    <!--                <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                <a href="#"-->
                                    <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">-->
                                    <!--                    Provides The Best Grass-->
                                    <!--                    For Cows-->
                                    <!--                </a>-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="bot">-->

                                    <!--                    <a href="#" class="btn-read icon style-circle">-->
                                    <!--                        <i class="icon-arrow_right"></i>-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="flex justify-center">-->
                                    <!--        <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                    <!--            <span class="text-style">Load More Projects</span>-->
                                    <!--            <div class="icon">-->
                                    <!--                <i class="icon-arrow_right"></i>-->
                                    <!--            </div>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Main-content -->


@endsection