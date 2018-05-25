<?php
/**
 * view gallery.php
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 25.05.2018
 * Time: 13:54
 */

$titre = 'Web Cosplayers - Gallery';
ob_start();
?>
<div id="content-block">
    <div class="container-fluid custom-container be-detail-container">
        <div class="popup-gallery">
            <div class="isotope-grid row">
                <div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a class="be-img-block popup-a" href="content/img/p166.jpg">
                        <img src="content/img/p1666.jpg" alt="omg">
                    </a>
                </div>
                <div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a class="be-img-block popup-a" href="content/img/minivg.jpg">
                        <img src="content/img/minivg.jpg" alt="omg">
                    </a>
                </div>
                <div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a class="be-img-block popup-a" href="content/img/vgg.jpg">
                        <img src="content/img/vgg.jpg" alt="omg">
                    </a>
                </div>
                <div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a class="be-img-block popup-a" href="content/img/vgg.jpg">
                        <img src="content/img/vgg.jpg" alt="omg">
                    </a>
                </div>
                <div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a class="be-img-block popup-a" href="content/img/p166.jpg">
                        <img src="content/img/p1666.jpg" alt="omg">
                    </a>
                </div>
                <div class="isotope-item col-ml-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <a class="be-img-block popup-a" href="content/img/p166.jpg">
                        <img src="content/img/p1666.jpg" alt="omg">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
