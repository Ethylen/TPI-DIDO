<?php
/**
 * view home.php
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 25.05.2018
 * Time: 11:08
 */

$titre = 'Web Cosplayer - Home';
ob_start()
?>

<div id="content-block">
    <div class="head-bg style-3 ab-us">
        <div class="swiper-container" data-autoplay="2000" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide head-bg-img" data-val="0">
                    <img class="center-image" src="content/img/slideindex1.jpg" alt="">
                </div>
                <div class="swiper-slide head-bg-img" data-val="1">
                    <img class="center-image" src="content/img/slideindex2.jpg" alt="">
                </div>
                <div class="swiper-slide head-bg-img" data-val="2">
                    <img class="center-image" src="content/img/slideindex3.jpg" alt="">
                </div>
            </div>
            <div class="pagination hidden"></div>
        </div>
        <div class="head-bg-content">
            <div class="swiper-arrow-left type-2 be-out"></div>
            <div class="swiper-arrow-right type-2 be-out"></div>
            <h1>Web Cosplayer</h1>
            <p>The best website and social network to share your cosplay's pictures and your WIPS</p>
            <a class="btn color-1 size-1 hover-1" href="#"><i class="fa fa-facebook"></i>sign up via facebook</a>
            <a class="btn color-3 size-1 hover-6" href="index.php?action=v_explore"><i class="fa fa-search"></i>explore</a>
        </div>
    </div>
    <div class="block"></div>
    <div class="container">
        <div class="block">
            <h3 class="block-title">Web Cosplayer ?</h3>
            <div class="block-subtitle">This website have a lot of good features </div>

            <div class="swiper-container" data-autoplay="5000" data-loop="0" data-speed="300" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-val="0">
                        <div class="service-entry">
                            <img class="service-icon" src="content/img/service_1.png" alt="">
                            <h4 class="service-title">Ideas for everyone</h4>
                        </div>
                    </div>
                    <div class="swiper-slide" data-val="1">
                        <div class="service-entry">
                            <img class="service-icon" src="content/img/service_2.png" alt="">
                            <h4 class="service-title">Good pages</h4>
                        </div>
                    </div>
                    <div class="swiper-slide" data-val="2">
                        <div class="service-entry">
                            <img class="service-icon" src="content/img/service_3.png" alt="">
                            <h4 class="service-title">Easy in touch</h4>
                        </div>
                    </div>
                    <div class="swiper-slide" data-val="3">
                        <div class="service-entry">
                            <img class="service-icon" src="content/img/service_1.png" alt="">
                            <h4 class="service-title">Many Wips</h4>
                        </div>
                    </div>
                    <div class="swiper-slide" data-val="4">
                        <div class="service-entry">
                            <img class="service-icon" src="content/img/service_2.png" alt="">
                            <h4 class="service-title">Beautiful Cosplay's pic</h4>
                        </div>
                    </div>
                    <div class="swiper-slide" data-val="5">
                        <div class="service-entry">
                            <img class="service-icon" src="content/img/service_3.png" alt="">
                            <h4 class="service-title">Easy to use</h4>
                        </div>
                    </div>
                </div>
                <div class="pagination">

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="info-blocks">
            <div class="info-entry left table-block">
                <div class="row table-row">
                    <div class="table-cell col-xs-12 col-sm-6">
                        <img class="img-responsive img-full" src="content/img/slideindex2.jpg" alt="">
                    </div>
                    <div class="table-cell col-xs-12 col-sm-6">
                        <div class="info-text">
                            <h3 class="block-title">The best team for you !</h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <h4>Our Team</h4>
                                    <p>Aliquam id rhoncus enim, non malesuada dui. Phasellus at orci sed justo pharetra aliquet sed non urna. Aliquam erat volutpat. Cras feugiat ullamcorper nunc id tempor. Etiam et sapien consectetur, vehicula purus quis, ultrices lectus. Praesent congue lectus sit amet eros sagittis consequat. Phasellus nec diam non enim condimentum dapibus id non ligula. Sed euismod vitae odio vitae condimentum.</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <h4>And you ?</h4>
                                    <p>Proin ullamcorper nibh eget posuere congue. Nullam mollis tempus dictum. Suspendisse nisl dui, sollicitudin vel massa ac, luctus suscipit enim. Morbi vehicula massa a metus dapibus, et mattis ex aliquet.</p>

                                    <p>Suspendisse potenti. Etiam congue, lectus in euismod facilisis, diam odio vulputate mauris, nec accumsan nulla libero vitae velit. In hac habitasse platea dictumst.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>