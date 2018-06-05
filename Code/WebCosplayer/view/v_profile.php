<?php
/**
 * view profile
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 29.05.2018
 * Time: 14:11
 */

$titre = 'Web Cosplayers - profile';
ob_start();
?>

<div id="content-block">
    <div class="container be-detail-container">
        <div class="row">
            <div class="col-xs-12 col-md-4 left-feild">
                <div class="be-user-block style-3">
                    <div class="be-user-detail">
                        <a class="be-ava-user style-2" href="author.html">
                            <img src="content/img/avatar.jpg" alt="">
                        </a>
                        <?php
                        foreach ($result as $results) {
                            ?>
                            <a class="be-ava-left btn color-1 size-2 hover-1" href="index.php?action=v_profile_edit&idprofile="<?= $_SESSION['login'] ?>><i
                                        class="fa fa-pencil"></i>Edit</a>
                            <p class="be-use-name"><?= $results['pseudo'] ?></p>
                            <span>#<?= $results['profile_id'] ?></span>
                            <div class="be-user-info">
                                USA
                            </div>
                            <div class="be-text-tags style-2">
                                <?= $results['statut'] ?>
                            </div>
                            <div class="be-user-social">
                                <a class="social-btn color-1" href="<?= $results['sn1'] ?>"><i class="fa fa-facebook"></i></a>
                                <a class="social-btn color-2" href="<?= $results['sn2'] ?>"><i class="fa fa-twitter"></i></a>
                                <a class="social-btn color-5" href="<?= $results['sn3'] ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="be-desc-author">
                                <div class="be-desc-label">About Me</div>
                                <div class="clearfix"></div>
                                <div class="be-desc-text">
                                    <?= $results['c_description'] ?>
                                </div>
                            </div>
                            <br>
                            <?php
                        }
                            ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="tab-wrapper style-1">
                    <div class="tab-nav-wrapper">
                        <div  class="nav-tab  clearfix">
                            <div class="nav-tab-item active">
                                <span>Cosplay</span>
                            </div>
                            <div class="nav-tab-item ">
                                <span>Work In Progress</span>
                            </div>
                            <div class="nav-tab-item ">
                                <span>Events</span>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-content clearfix">
                        <div class="tab-info active">
                            <div class="row">
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="activity.html" class="be-img-block">
                                            <img src="content/img/p1666.jpg" alt="omg">
                                        </a>
                                        <a href="activity.html" class="be-post-title">D.VA</a>
                                    </div>
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="activity.html" class="be-img-block">
                                            <img src="content/img/pp1.jpg" alt="omg">
                                        </a>
                                        <a href="activity.html" class="be-post-title">D.I.A.N.A</a>
                                    </div>
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="activity.html" class="be-img-block">
                                            <img src="content/img/pp2.jpg" alt="omg">
                                        </a>
                                        <a href="activity.html" class="be-post-title">Aya Shameimaru</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-info">
                            <div class="row">
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="index.php?action=v_wip" class="be-img-block">
                                            <img src="content/img/p16.jpg" alt="omg">
                                        </a>
                                        <a href="index.php?action=v_wip" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>
                                    </div>
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="index.php?action=v_wip" class="be-img-block">
                                            <img src="content/img/p16.jpg" alt="omg">
                                        </a>
                                        <a href="index.php?action=v_wip" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>
                                    </div>
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a href="index.php?action=v_wip" class="be-img-block">
                                            <img src="content/img/p16.jpg" alt="omg">
                                        </a>
                                        <a href="index.php?action=v_wip" class="be-post-title">Wisdom For My Children, Life Lessons Through</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-info">
                            <div class="row">
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a class="be-img-block">
                                            <img src="content/img/p16.jpg" alt="omg">
                                        </a>
                                        <a class="be-post-title">Wisdom For My Children, Life Lessons Through</a>
                                    </div>
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a class="be-img-block">
                                            <img src="content/img/p17.jpg" alt="omg">
                                        </a>
                                        <a class="be-post-title">Créations Namale</a>
                                    </div>
                                </div>
                                <div class="col-ml-12 col-xs-6 col-sm-4">
                                    <div class="be-post style-4">
                                        <a class="be-img-block">
                                            <img src="content/img/p18.jpg" alt="omg">
                                        </a>
                                        <a class="be-post-title">Crossfit : 15.4 Open Workout</a>
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