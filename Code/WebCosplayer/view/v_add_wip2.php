<?php
/**
 * view add WIP 2
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 30.05.2018
 * Time: 09:19
 */

$titre = 'Web Cosplayers - Add WIP';
ob_start();
?>

<div id="content-block" class="work-box">
    <div class="editor-menu">
        <div class="container">
            <ul class="editor-nav">
                <li id="content-w" class="en-nav">1. Image/Video</li>
                <li id="cover-w" class="en-nav active">2. Content</li>
            </ul>
            <div class="buttons-navbar">
                <a href="index.php?action=v_awip"><button type="button" class="btn btn-default">Previous</button></a>
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
                                <div class="be-large-post-align "><h3 class="info-block-label">Add Content</h3></div>
                            </div>
                            <div class="be-large-post-align">
                                <form class="form-block">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <h3>Tittle</h3>
                                            <div class="form-group fl_icon">
                                                <div class="icon"><img src="content/img/user-g-ico.png" alt=""></div>
                                                <input class="form-input" type="text" required="" placeholder="Naruto, Luffy, Miku...">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <h3>Something to say ?</h3>
                                            <div class="form-group">
                                                <textarea class="form-input" required="" placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn color-1 size-2 hover-1 pull-right">submit</button>
                                    </div>
                                </form>
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
