@extends('layout.app')


@section('content')

<style>


.archive-sec {
    padding: 50px 0px 0px 0px !important;
}
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
                                   Archive
                                </h1>
                                <div class="icon-img">
                                    <img src="./frontend/images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.php">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">Archive</a>
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
        <div class="main-content page-portfolio-1 style-2 ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 mb-40">
                            <div class="wg-tabs">
                                <ul class="overflow-x-auto menu-tab mb-65  archive-sec">
                                    <!--<li class="item"><a href="javascript:void(0)" class="btn-tab">All-->
                                    <!--        Projects</a></li>-->
                                    <li class="item  active"><a href="javascript:void(0)" class="btn-tab">2024</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2023</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2022</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2020</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2019</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2018</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2017</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2016</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2014</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2014</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2010</a></li>
                                    <li class="item"><a href="javascript:void(0)" class="btn-tab">2011</a></li>
                                    
                                </ul>
                                <div class="widget-content-tab">
                                    <!--<div class="widget-content-inner container-loadmore">-->

                                    <!--    <div class="grid-layout-3">-->
                                    <!--        <div class="box-portfolio style-3 img-hover wow fadeInUp"-->
                                    <!--            data-wow-delay="0s">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                        Joy Of Sheep-->
                                    <!--                        Farming</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover wow fadeInUp"-->
                                    <!--            data-wow-delay="0.1s">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">Agriculture - fruit</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                        Succulence Of Oranges</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover wow fadeInUp"-->
                                    <!--            data-wow-delay="0.2s">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">Provides-->
                                    <!--                        The Best Grass-->
                                    <!--                        For Cows</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover wow fadeInUp"-->
                                    <!--            data-wow-delay="0s">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">Agriculture - wheat</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                        Wheat At The End-->
                                    <!--                        Of The Season</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover wow fadeInUp"-->
                                    <!--            data-wow-delay="0.1s">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                        Vegetables In The Dry-->
                                    <!--                        Season</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover wow fadeInUp"-->
                                    <!--            data-wow-delay="0.2s">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                        Farm Cattle</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->


                                    <!--    <div class="grid-layout-3 more-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio style-3 img-hover">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                        Joy Of Sheepf-->
                                    <!--                        Farming</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">Agriculture - fruit</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                    <!--                        Succulence Of Oranges</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-3.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-3.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">cow - farm</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">Provides-->
                                    <!--                        The Best Grass-->
                                    <!--                        For Cows</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="grid-layout-3 more-portfolio item hidden">-->
                                    <!--        <div class="box-portfolio style-3 img-hover">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-4.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-4.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">Agriculture - wheat</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">Harvest-->
                                    <!--                        Wheat At The End-->
                                    <!--                        Of The Season</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-5.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-5.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">vegetables - fruit</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">Grow-->
                                    <!--                        Vegetables In The Dry-->
                                    <!--                        Season</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="box-portfolio style-3 img-hover">-->
                                    <!--            <div class="image hover-item">-->
                                    <!--                <img src="./frontend/images/widget/portfolio-6.jpg"-->
                                    <!--                    data-src="./frontend/images/widget/portfolio-6.jpg" alt=""-->
                                    <!--                    class=" lazyload">-->
                                    <!--                <div class="content">-->
                                    <!--                    <p class="sub font-farmhouse text-upper">farm - animals</p>-->
                                    <!--                    <a href="#"-->
                                    <!--                        class="title fs-23 font-worksans fw-6 hover-text-secondary">We-->
                                    <!--                        Farm Cattle</a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="content-2">-->
                                    <!--                <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                    <!--                    adipiscing elit. Sed a-->
                                    <!--                    cursus massa.-->
                                    <!--                    Cras ut dui nec nibhvehicula fermentum.-->
                                    <!--                    natoque penatibus.</p>-->
                                    <!--                <div class="flex justify-center">-->

                                    <!--                    <a href="#" class="tf-btn-read hover-text-secondary">-->
                                    <!--                        Read More-->
                                    <!--                    </a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->

                                    <!--    <div class="flex justify-center">-->
                                    <!--        <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                    <!--            <span class="text-style text-anime-style-1">Load More Projects</span>-->
                                    <!--            <div class="icon">-->
                                    <!--                <i class="icon-arrow_right"></i>-->
                                    <!--            </div>-->
                                    <!--        </a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="widget-content-inner container-loadmore  active">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/24-1.jpg"
                                                        data-src="./frontend/images/widget/24-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">15th BIFFES  2024
                                                           
                                                            </a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/24-2.jpeg"
                                                        data-src="./frontend/images/widget/24-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"> </p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">The
                                                            15th BIFFES  2024 </a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>


                                        <!--<div class="grid-layout-3 more-portfolio item hidden">-->
                                        <!--    <div class="box-portfolio style-3 img-hover">-->
                                        <!--        <div class="image hover-item">-->
                                        <!--            <img src="./frontend/images/widget/portfolio-1.jpg"-->
                                        <!--                data-src="./frontend/images/widget/portfolio-1.jpg" alt=""-->
                                        <!--                class=" lazyload">-->
                                        <!--            <div class="content">-->
                                        <!--                <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                        <!--                <a href="#"-->
                                        <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                        <!--                    Joy Of Sheep-->
                                        <!--                    Farming</a>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--        <div class="content-2">-->
                                        <!--            <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                        <!--                adipiscing elit. Sed a-->
                                        <!--                cursus massa.-->
                                        <!--                Cras ut dui nec nibhvehicula fermentum.-->
                                        <!--                natoque penatibus.</p>-->
                                        <!--            <div class="flex justify-center">-->

                                        <!--                <a href="#" class="tf-btn-read hover-text-secondary">-->
                                        <!--                    Read More-->
                                        <!--                </a>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="box-portfolio style-3 img-hover">-->
                                        <!--        <div class="image hover-item">-->
                                        <!--            <img src="./frontend/images/widget/portfolio-2.jpg"-->
                                        <!--                data-src="./frontend/images/widget/portfolio-2.jpg" alt=""-->
                                        <!--                class=" lazyload">-->
                                        <!--            <div class="content">-->
                                        <!--                <p class="sub font-farmhouse text-upper">Agriculture - fruit</p>-->
                                        <!--                <a href="#"-->
                                        <!--                    class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                        <!--                    Succulence Of Oranges</a>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--        <div class="content-2">-->
                                        <!--            <p class="text font-nunito">Lorem ipsum dolor sit amet, consectetur-->
                                        <!--                adipiscing elit. Sed a-->
                                        <!--                cursus massa.-->
                                        <!--                Cras ut dui nec nibhvehicula fermentum.-->
                                        <!--                natoque penatibus.</p>-->
                                        <!--            <div class="flex justify-center">-->

                                        <!--                <a href="#" class="tf-btn-read hover-text-secondary">-->
                                        <!--                    Read More-->
                                        <!--                </a>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                           
                                        <!--</div>-->
                                        <!--<div class="flex justify-center">-->
                                        <!--    <a href="javascript:void(0)" class="tf-btn btn-loadMore mt-50 scale-40">-->
                                        <!--        <span class="text-style">Load More Projects</span>-->
                                        <!--        <div class="icon">-->
                                        <!--            <i class="icon-arrow_right"></i>-->
                                        <!--        </div>-->
                                        <!--    </a>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/23-1.jpeg"
                                                        data-src="./frontend/images/widget/23-1.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">The
                                                            14th BIFFES  2023</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/23-2.jpeg"
                                                        data-src="./frontend/images/widget/23-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">14th BIFFES  2023</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                      
                                       
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <!--<div class="box-portfolio style-3 img-hover">-->
                                            <!--    <div class="image hover-item">-->
                                            <!--        <img src="./frontend/images/widget/22-1.jpg"-->
                                            <!--            data-src="./frontend/images/widget/22-1.jpg" alt=""-->
                                            <!--            class=" lazyload">-->
                                            <!--        <div class="content">-->
                                            <!--            <p class="sub font-farmhouse text-upper">Agriculture - farm</p>-->
                                            <!--            <a href="#"-->
                                            <!--                class="title fs-23 font-worksans fw-6 hover-text-secondary">The-->
                                            <!--                Joy Of Sheep-->
                                            <!--                Farming</a>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--    <div class="content-2">-->
                                                    
                                            <!--        <div class="flex justify-center">-->

                                            <!--            <a href="#" class="tf-btn-read hover-text-secondary">-->
                                            <!--                Read More-->
                                            <!--            </a>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/22-2.jpeg"
                                                        data-src="./frontend/images/widget/22-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">13th BIFFES 2022</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                       
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-1.jpg"
                                                        data-src="./frontend/images/widget/20-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">12th BIFFES 2020</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">12th BIFFES 2020</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>


                                        
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/19-1.jpg"
                                                        data-src="./frontend/images/widget/19-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">11th BIFFES 2019</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                  
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">11th BIFFES 2019</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                  
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                       
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/18-1.jpg"
                                                        data-src="./frontend/images/widget/18-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">10th BIFFES 2018</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">10th BIFFES 2018</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                        
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/17-1.jpg"
                                                        data-src="./frontend/images/widget/17-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">9th BIFFES 2017</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">9th BIFFES 2017</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                        
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/16-1.jpg"
                                                        data-src="./frontend/images/widget/16-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">8th BIFFES 2016</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">8th BIFFES 2016</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                        
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/14-1.jpg"
                                                        data-src="./frontend/images/widget/14-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">7th BIFFES 2014</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">7th BIFFES 2014</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                        
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/14-1-1.jpg"
                                                        data-src="./frontend/images/widget/14-1-1.jpg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">6th BIFFES 2014</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">6th BIFFES 2014</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                        
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                           
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">5th BIFFES 2010</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                        
                                    </div>
                                    <div class="widget-content-inner container-loadmore">

                                        <div class="grid-layout-3">
                                           
                                            <div class="box-portfolio style-3 img-hover">
                                                <div class="image hover-item">
                                                    <img src="./frontend/images/widget/20-2.jpeg"
                                                        data-src="./frontend/images/widget/20-2.jpeg" alt=""
                                                        class=" lazyload">
                                                    <div class="content">
                                                        <p class="sub font-farmhouse text-upper"></p>
                                                        <a href="#"
                                                            class="title fs-23 font-worksans fw-6 hover-text-secondary">4th BIFFES 2011</a>
                                                    </div>
                                                </div>
                                                <div class="content-2">
                                                   
                                                    <div class="flex justify-center">

                                                        <a href="#" class="tf-btn-read hover-text-secondary">
                                                            Read More
                                                        </a>
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
            </div>


        </div><!-- /.Main-content -->
           


@endsection