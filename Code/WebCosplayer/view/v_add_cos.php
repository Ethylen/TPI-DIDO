<?php
/**
 * view add cosplay choice
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 29.05.2018
 * Time: 15:23
 *
 * Source flip > https://davidwalsh.name/css-flip
 */

$titre = 'Web Cosplayers - Choose an option';
ob_start();
?>

<div id="content-block" class="work-box">
    <div class="work-area">
        <div class="container be-detail-container">
            <div class="row">
                <div class="col-xs-12 col-md-12 _editor-content_">
                    <div class="sec"  data-sec="basic-information">
                        <div class="be-large-post large-area">
                            <div class="info-block style-2">
                            </div>
                            <div class="be-large-post-align">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="flip-container">
                                            <div class="flipper">
                                                <a href="index.php?action=v_add_cos">
                                                    <div class="front">
                                                        <!-- front content -->
                                                        <i class="fa fa-plus"></i> Add a cosplay gallery
                                                    </div>
                                                    <div class="back">
                                                        <!-- back content -->
                                                        Add a new gallery for your cosplay in your profile
                                                    </div></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="flip-container">
                                            <div class="flipper">
                                                <a href="index.php?action=v_add_cos4"><div class="front">
                                                        <!-- front content -->
                                                        <i class="fa fa-plus"></i> Add an image in a gallery
                                                    </div>
                                                    <div class="back">
                                                        <!-- back content -->
                                                        Add a new image in a gallery who already exist
                                                    </div></a>
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
</div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
