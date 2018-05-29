<?php
/**
 * view profil edition
 * Created by PhpStorm.
 * User: tiffany.di-domenico
 * Date: 29.05.2018
 * Time: 14:23
 */

$titre = 'Web Cosplayers - Profile edition';
ob_start();
?>

<div id="content-block">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-3 left-feild">
					<div class="be-vidget back-block">
						<a class="btn full color-1 size-1 hover-1" href="author.html"><i class="fa fa-chevron-left"></i>back to profile</a>
					</div>
					<div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
						<h3 class="letf-menu-article">
Choose Category
</h3>
						<div class="creative_filds_block">
							<ul class="ul nav">
								<li class="edit-ln"><a href="#basic-information">Basic Information</a></li>
								<li class="edit-ln"><a href="#on-the-web">On The Web</a></li>
								<li class="edit-ln"><a href="#about-me">About Me</a></li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-xs-12 col-md-9 _editor-content_">
					<div class="sec"  data-sec="basic-information">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align "><h3 class="info-block-label">Basic Information</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="be-change-ava">
									<a class="be-ava-user style-2" href="author.html">
										<img src="content/img/avatar.jpg" alt="">
									</a>
									<a class="btn color-4 size-2 hover-7">replace image</a>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12">
										<div class="form-group fg_icon focus-2">
											<div class="form-label">Pseudo</div>
											<input class="form-input" type="text" value="Pseudo">
										</div>
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Satut</div>
											<input class="form-input" type="text" value="Something to say?">
										</div>
									</div>
									<div class="input-col col-xs-12">
										<div class="form-label">Country</div>
										<div class="be-drop-down icon-none">
											<span class="be-dropdown-content"> United Kingdom </span>
											<ul class="drop-down-list">
												<li><a>USA</a></li>
												<li><a>India</a></li>
												<li><a>Mexica</a></li>
												<li><a>Russia</a></li>
												<li><a>Italy</a></li>
											</ul>
										</div>
									</div>
								</div>
								<br>
								<div class="col-xs-12">
									<a class="btn color-1 size-2 hover-1 btn-right">OK</a>
								</div>
							</div>
						</div>
					</div>
					<div class="sec" data-sec="on-the-web">
						<div class="be-large-post m-social">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">On The Web</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<a class="social-btn color-1" href="#"><i class="fa fa-facebook"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// facebook.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<a class="social-btn color-2" href="#"><i class="fa fa-twitter"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// twitter.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<a class="social-btn color-5" href="#"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// instagram.com/taylor">
									</div>
								</div>
								<br>
								<div class="col-xs-12">
									<a class="btn color-1 size-2 hover-1 btn-right">OK</a>
								</div>
							</div>
						</div>
					</div>

					<div class="sec"  data-sec="about-me" >
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">About Me</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Description</div>
											<textarea class="form-input" required="" placeholder="Something about you"></textarea>
										</div>
									</div>
								</div>
								<br>
								<div class="col-xs-12">
									<a class="btn color-1 size-2 hover-1 btn-right">OK</a>
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