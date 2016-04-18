<!-- Header -->
<div class="td-header-container td-header-wrap td-header-style-1">
	<div class="td-header-row td-header-top-menu">
		<div class="td-header-sp-top-menu">
			<div class="td_data_time"><?php echo date('l, F j, Y'); ?></div>
			<ul class="top-header-menu td_ul_login sf-js-enabled">
				<li class="menu-item"><a class="td-login-modal-js menu-item" href="#login-form" data-effect="mpf-td-login-effect">Sign in / Join</a><span class="td-sp-ico-login td_sp_login_ico_style"></span>
				</li>
			</ul>
			<div id="login-form" class="white-popup-block mfp-hide mfp-with-anim">
				<ul class="td-login-tabs">
					<li><a id="login-link" class="td_login_tab_focus">LOG IN</a>
					</li>
				</ul>

				<div class="td-login-wrap">
					<div class="td_display_err"></div>

					<div id="td-login-div" class="">
						<div class="td-login-panel-title">Welcome! Log into your account</div>
						<input class="td-login-input" type="text" name="login_email" id="login_email" placeholder="your username" value="" required="">
						<input class="td-login-input" type="password" name="login_pass" id="login_pass" value="" placeholder="your password" required="">
						<input type="button" name="login_button" id="login_button" class="wpb_button btn td-login-button" value="Log In">
						<div class="td-login-info-text"><a href="#" id="forgot-pass-link">Forgot your password?</a>
						</div>
					</div>
					<div id="td-forgot-pass-div" class="td-dispaly-none">
						<div class="td-login-panel-title">Recover your password</div>
						<input class="td-login-input" type="text" name="forgot_email" id="forgot_email" placeholder="your email" value="" required="">
						<input type="button" name="forgot_button" id="forgot_button" class="wpb_button btn td-login-button" value="Send My Pass">
					</div>
				</div>
			</div>
			<div class="menu-top-container">
				<ul id="menu-td-demo-top-menu" class="top-header-menu sf-js-enabled">
					<li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first td-menu-item td-normal-menu menu-item-32"><a href="#">Blog</a>
					</li>
					<li id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-33"><a href="#">Forums</a>
					</li>
					<li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-34"><a href="<?php echo base_url(); ?>contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="td-header-sp-top-widget">
			<span class="td-social-icon-wrap"><a target="_blank" href="#" title="Facebook"><i class="td-icon-font td-icon-facebook"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="Twitter"><i class="td-icon-font td-icon-twitter"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="Vimeo"><i class="td-icon-font td-icon-vimeo"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="VKontakte"><i class="td-icon-font td-icon-vk"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="Youtube"><i class="td-icon-font td-icon-youtube"></i></a></span> </div>
	</div>
	<div class="td-header-row td-header-header">
		<div class="td-header-sp-logo">
			<a href="<?php echo base_url(); ?>">
				<img class="td-retina-data" data-retina="<?php echo base_url(); ?>public/images/ha-logo.png" src="<?php echo base_url(); ?>public/images/ha-logo.png" alt="Php web development tutorials">
			</a>
		</div>
		<div class="td-header-sp-ads">
			<div class="td-header-ad-wrap  td-ad-m td-ad-tp td-ad-p">
				<div class="td-a-rec td-a-rec-id-header ">
					<div class="td-all-devices">
						<a href="#"><img src="<?php echo base_url(); ?>public/images/rec728.jpg" alt="Ads banner" />
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="td-header-menu-wrap" style="height:48px;">
		<div class="td-header-row td-header-border td-header-main-menu">
			<div id="td-header-menu" role="navigation">
				<div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a>
				</div>
				<div class="td-main-menu-logo">
					<a class="td-mobile-logo td-sticky-mobile" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/images/ha-footer.png" alt="">
					</a>
					<a class="td-header-logo td-sticky-mobile" href="<?php echo base_url(); ?>">
						<img class="td-retina-data" data-retina="<?php echo base_url(); ?>public/images/ha-logo.png" src="<?php echo base_url(); ?>public/images/ha-logo.png" alt="">
					</a>
				</div>
				<div class="menu-td-demo-header-menu-container">
					<ul id="menu-td-demo-header-menu-1" class="sf-menu sf-js-enabled">
						<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-first td-menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="menu-item td-menu-item"><a href="<?php echo base_url(); ?>laravel-5.html" class="sf-with-ul">Laravel 5</a></li>
						<li class="menu-item td-menu-item"><a href="<?php echo base_url(); ?>yii2-framework.html" class="sf-with-ul">Yii2 framework</a></li>
						<li class="menu-item td-menu-item"><a href="<?php echo base_url(); ?>codeigniter-3.html" class="sf-with-ul">Codeigniter 3</a></li>
                                                <li class="menu-item td-menu-item"><a href="<?php echo base_url(); ?>wordpress.html" class="sf-with-ul">Wordpress</a></li>
						<!--li class="menu-item menu-item-has-children td-menu-item td-normal-menu"><a href="#" class="sf-with-ul">PHP Tutorials<i class="td-icon-menu-down"></i></a>
							<ul class="sub-menu">
								<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu"><a href="<?php echo base_url(); ?>php-basic.html">PHP Basic</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu"><a href="<?php echo base_url(); ?>php-advanced.html">PHP Advanced</a></li>
							</ul>
						</li-->
						<li class="menu-item td-menu-item"><a href="<?php echo base_url(); ?>hosting-domain.html" class="sf-with-ul">Hosting domain</a></li>
						<!--li class="menu-item menu-item-has-children td-menu-item td-normal-menu"><a href="#" class="sf-with-ul">PHP Framework<i class="td-icon-menu-down"></i></a>
							<ul class="sub-menu">
								<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu"><a href="<?php echo base_url(); ?>yii2-framework.html">Yii2 Framework</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu"><a href="<?php echo base_url(); ?>codeigniter-3.html">Codeigniter 3</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu"><a href="<?php echo base_url(); ?>laravel-5.html">Laravel 5</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu"><a href="<?php echo base_url(); ?>zend2-framework.html">Zend2 Framework</a></li>
							</ul>
						</li-->
					</ul>
				</div>
			</div>

			<div class="td-search-wrapper">
				<div id="td-top-search">
					<!-- Search -->
					<div class="header-search-wrap">
						<div class="dropdown header-search">
							<a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="header-search-wrap">
				<div class="dropdown header-search">
					<div class="td-drop-down-search" aria-labelledby="td-header-search-button">
						<form role="search" method="get" class="td-search-form" action="<?php echo base_url(); ?>search.html">
							<div class="td-head-form-search-wrap">
								<input class="needsclick" id="td-header-search" type="text" value="" name="s" autocomplete="off">
								<input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="Search">
							</div>
						</form>
						<div id="td-aj-search"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End header -->