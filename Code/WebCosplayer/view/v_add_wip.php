<?php
/**
 * view add wip
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 30.05.2018
 * Time: 09:16
 */

$titre = 'Web Cosplayers - Add WIP';
ob_start();
?>

<div id="content-block" class="work-box">
    <div class="editor-menu">
        <div class="container">
            <ul class="editor-nav">
                <li class="en-nav active">1. Image</li>
                <li class="en-nav">2. Content</li>
            </ul>
            <div class="buttons-navbar">
                <a href="index.php?action=v_awip2"><button type="button" class="btn btn-success">Next</button></a>
            </div>
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
