<?php
/**
 * view add a cosplay in a gallery
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 29.05.2018
 * Time: 15:34
 */

$tire = 'Web Cosplayers - add a pic in a cosplay gallery';
ob_start();
?>

<div id="content-block" class="work-box">
    <div class="editor-menu">
        <div class="container">
            <ul class="editor-nav">
                <li class="en-nav active">1. Image</li>
            </ul>
        </div>
    </div>
    <div class="work-area">
        <div class="container be-detail-container">
            <div class="row">
                <div class="col-xs-12 col-md-12 _editor-content_">
                    <div class="sec"  data-sec="basic-information">
                        <div class="be-large-post large-area">
                            <div class="info-block style-2">
                                <div class="be-large-post-align "><h3 class="info-block-label">Add an image</h3></div>
                            </div>
                            <div class="be-large-post-align">
                                <div class="upload-zone">
                                    <i class="fa center-i fa-cloud-upload"></i>
                                    <input class="file" type="file"/>
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
