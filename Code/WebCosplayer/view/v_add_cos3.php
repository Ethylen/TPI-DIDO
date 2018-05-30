<?php
/**
 * view add cosplay p3
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 29.05.2018
 * Time: 15:24
 */

$titre = 'Web Cosplayers - Add cosplay 3';
ob_start();
?>

<div id="content-block" class="work-box">
    <div class="editor-menu">
        <div class="container">
            <ul class="editor-nav">
                <li id="content-w" class="en-nav">1. Image</li>
                <li id="cover-w" class="en-nav active">2. Content</li>
            </ul>
            <div class="buttons-navbar">
                <a href="index.php?action=v_add_cos2"><button type="button" class="btn btn-default">Previous</button></a>
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
                                            <h3>Name of the character</h3>
                                            <div class="form-group fl_icon">
                                                <div class="icon"><img src="content/img/user-g-ico.png" alt=""></div>
                                                <input class="form-input" type="text" required="" placeholder="Naruto, Luffy, Miku...">
                                            </div>
                                        </div>
                                        <div class="input-col col-xs-12 col-sm-12 fl_icon">
                                            <h3>What kind of category ?</h3>
                                            <div class="form-group fl_icon">
                                                <div class="be-drop-down icon-none">
                                                    <span class="be-dropdown-content"> Video Game </span>
                                                    <ul class="drop-down-list">
                                                        <li><a>Anime</a></li>
                                                        <li><a>Serie</a></li>
                                                        <li><a>Movie</a></li>
                                                        <li><a>Other</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 fl_icon">
                                            <h3>Where can we find it ?</h3>
                                            <div class="form-group fl_icon">
                                                <div class="icon"><img src="content/img/mail-g-ico.png" alt=""></div>
                                                <input class="form-input" type="text" required="" placeholder="Naruto, One Piece, Vocaloid">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 fl_icon">
                                            <h4>Does this photo include any content unsuitable for minors?</h4>
                                            <div class="form-block">
                                                <div class="form-checkbox style-2">
                                                    <input id="ch4" type="radio" value="" name="radio-c" /> <span class="check"><i class="fa fa-check"></i></span>
                                                    <label for="ch4">Yes</label>
                                                </div>
                                                <div class="form-checkbox style-2">
                                                    <input id="ch5" type="radio" value="" name="radio-c" /> <span class="check"><i class="fa fa-check"></i></span>
                                                    <label for="ch5">No</label>
                                                </div>
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
