<?php
/**
 * view a WIP
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 29.05.2018
 * Time: 14:40
 */

$titre = 'Web Cosplayers - WIP';
ob_start();
?>

<div id="content-block">
    <div class="container be-detail-container">
        <h2 class="content-title">Title</h2>
        <div class="blog-wrapper blog-list blog-fullwith">

            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="blog-post be-large-post type-2">
                        <div class="info-block clearfix">
                        </div>
                        <div class="be-large-post-align blog-content">
                            <div class="be-text-tags clearfix custom-a-b">
                                <div class="author-post">
                                    <img src="content/img/a1.png" alt="" class="ava-author">
                                    <span>by <a href="author.html">Hoang Nguyen</a></span>
                                </div>
                            </div>
                            <h3 class="be-post-title">
                                Un titre
                            </h3>
                            <div class="post-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec felis efficitur, lobortis erat et, placerat elit. Proin at ligula lorem. In viverra neque auctor metus consectetur varius. Cras sollicitudin arcu eu tincidunt tristique. Donec accumsan hendrerit nunc sit amet interdum. Donec rhoncus a lacus quis imperdiet.Nam tempus vitae sem pellentesque aliquam.
                                </p>
                            </div>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://player.vimeo.com/video/63528500"></iframe>
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