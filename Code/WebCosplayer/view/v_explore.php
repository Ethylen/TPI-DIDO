<?php
/**
 * view explore.php
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 25.05.2018
 * Time: 11:49
 */

$titre = 'Web Cosplayers - Explore';
ob_start();
?>

<div id="content-block">
    <div class="head-bg">
        <div class="head-bg-img"></div>
        <div class="head-bg-content">
            <h1>Web Cosplayer</h1>
            <p>The best website and social network to share your cosplay's pictures and your WIPS</p>
            <a class="btn color-1 size-1 hover-1" ><i class="fa fa-facebook"></i>sign up via facebook</a>
        </div>
    </div>
    <div class="container-fluid cd-main-content custom-container">
        <div class="row">
            <div class="col-md-10 ">
                <div class="for-be-dropdowns">
                    <div class="be-drop-down">
                        <i class="icon-projects"></i>
                        <span class="be-dropdown-content"> Projects	</span>
                        <ul class="drop-down-list">
                            <li class="filter" data-filter=".category-1"><a data-type="category-1">Projects</a></li>
                            <li class="filter" data-filter=".category-2"><a data-type="category-2">Work in Progress</a></li>
                        </ul>
                    </div>
                    <div class="be-drop-down">
                        <i class="icon-worldwide"></i>
                        <span class="be-dropdown-content">Worldwide
							</span>
                        <ul class="drop-down-list">
                            <li class="filter" data-filter=".category-2"><a>WorldWide</a></li>
                            <li class="filter" data-filter=".category-3"><a>United States</a></li>
                            <li class="filter" data-filter=".category-4"><a>Germany</a></li>
                            <li class="filter" data-filter=".category-5"><a>United Kingdom</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid custom-container">
        <div class="row">

            <div class="col-md-2 left-feild">
                <div class="be-vidget">
                    <h3 class="letf-menu-article">
                        Popular Creative Filds
                    </h3>
                    <div class="creative_filds_block">
                        <div class="ul">
                            <a  data-filter=".category-1" class="filter">Video games</a>
                            <a data-filter=".category-2" class="filter">Animes</a>
                            <a data-filter=".category-3" class="filter">Series</a>
                            <a data-filter=".category-4" class="filter">Movies</a>
                            <a data-filter=".category-5" class="filter">Others</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10">
                <div id="container-mix"  class="row _post-container_">
                    <div class="category-1 mix custom-column-5">
                        <div class="be-post">
                            <a href="index.php?action=v_gallery" class="be-img-block">
                                <img src="content/img/minivg.jpg" alt="omg">
                            </a>
                            <a href="activity.html" class="be-post-title">D.VA</a>
                            <div class="author-post">
                                <img src="content/img/a11.png" alt="" class="ava-author">
                                <span>by <a href="author.html">Torra</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="category-2 mix custom-column-5">
                        <div class="be-post">
                            <a href="index.php?action=v_gallery" class="be-img-block">
                                <img src="content/img/pp1.jpg" alt="omg">
                            </a>
                            <a href="index.php?action=v_gallery" class="be-post-title">D.I.N.A</a>
                            <div class="author-post">
                                <img src="content/img/a11.png" alt="" class="ava-author">
                                <span>by <a href="author.html">Torra</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="category-3 mix custom-column-5">
                        <div class="be-post">
                            <a href="index.php?action=v_gallery" class="be-img-block">
                                <img src="content/img/ppeva1.jpg" alt="omg">
                            </a>
                            <a href="index.php?action=v_gallery" class="be-post-title">STRENGH</a>
                            <div class="author-post">
                                <img src="content/img/avaeva.png" alt="" class="ava-author">
                                <span>by <a href="author.html">Soma</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="category-4 mix custom-column-5">
                        <div class="be-post">
                            <a href="index.php?action=v_gallery" class="be-img-block">
                                <img src="content/img/ppeva2.jpg" alt="omg">
                            </a>
                            <a href="index.php?action=v_gallery" class="be-post-title">Honoka Kousaka</a>
                            <div class="author-post">
                                <img src="content/img/avaeva.png" alt="" class="ava-author">
                                <span>by <a href="author.html">Soma</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="category-5 mix custom-column-5">
                        <div class="be-post">
                            <a href="index.php?action=v_gallery" class="be-img-block">
                                <img src="content/img/ppeva3.jpg" alt="omg">
                            </a>
                            <a href="index.php?action=v_gallery" class="be-post-title">Lin</a>
                            <div class="author-post">
                                <img src="content/img/avaeva.png" alt="" class="ava-author">
                                <span>by <a href="author.html">Soma</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="category-6 mix custom-column-5">
                        <div class="be-post">
                            <a href="index.php?action=v_gallery" class="be-img-block">
                                <img src="content/img/ppeva4.jpg" alt="omg">
                            </a>
                            <a href="index.php?action=v_gallery" class="be-post-title">Fran Ewald for The Diaries Project</a>
                            <div class="author-post">
                                <img src="content/img/avaeva.png" alt="" class="ava-author">
                                <span>by <a href="author.html">Soma</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="category-5 mix custom-column-5">
                        <div class="be-post">
                            <a href="index.php?action=v_gallery" class="be-img-block">
                                <img src="content/img/ppeva5.jpg" alt="omg">
                            </a>
                            <a href="index.php?action=v_gallery" class="be-post-title">raindrops monochrome</a>
                            <div class="author-post">
                                <img src="content/img/avaeva.png" alt="" class="ava-author">
                                <span>by <a href="author.html">Soma</a></span>
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