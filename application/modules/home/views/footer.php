<!-- Footer -->
<div class="td-footer-container td-container">
	<div class="td-pb-row">
		<div class="td-pb-span4">
			<div class="td-footer-info td-pb-padding-side">
				<div class="footer-logo-wrap">
					<a href="<?php echo base_url(); ?>"><img class="td-retina-data" src="<?php echo base_url(); ?>public/images/ha-footer.png" data-retina="<?php echo base_url(); ?>wp-content/uploads/2016/01/newsmag-footer.png" alt="" />
					</a>
				</div>
				<div class="footer-text-wrap">Hatutorials is your news, entertainment, music fashion website. We provide you with the latest breaking news and videos straight from the entertainment industry.
					<div class="footer-email-wrap">Contact us: <a href="mailto:contact@hatutorials.com">contact@hatutorials.com</a>
					</div>
				</div>
				<div class="footer-social-wrap td-social-style2"><span class="td-social-icon-wrap"><a target="_blank" href="#" title="Facebook"><i class="td-icon-font td-icon-facebook"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="Twitter"><i class="td-icon-font td-icon-twitter"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="Vimeo"><i class="td-icon-font td-icon-vimeo"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="VKontakte"><i class="td-icon-font td-icon-vk"></i></a></span><span class="td-social-icon-wrap"><a target="_blank" href="#" title="Youtube"><i class="td-icon-font td-icon-youtube"></i></a></span>
				</div>
			</div>
		</div>

		<div class="td-pb-span4">
			<div class="td_block_wrap td_block_7">
				<h4 class="block-title"><span>RANDOM ARTICLES</span></h4>
				<div class="td_block_inner">
					<?php if(isset($ranposts)){ ?>
					<?php foreach($ranposts as $randp){ ?>
					<div class="td-block-span12">
						<div class="td_module_6 td_module_wrap td-animation-stack">
							<div class="td-module-thumb">
								<a href="<?php echo base_url().$randp['cate_rewrite']."/".$randp['post_title_rewrite']."-".$randp['post_id'].".html"; ?>" rel="bookmark">
									<img width="100" height="75" class="entry-thumb" src="<?php echo base_url()."uploads/news/thumb/".$randp['post_image']; ?>" alt="<?php echo $randp['post_title']; ?>" />
								</a>
							</div>
							<div class="item-details">
								<h3 class="entry-title td-module-title"><a href="<?php echo base_url().$randp['cate_rewrite']."/".$randp['post_title_rewrite']."-".$randp['post_id'].".html"; ?>" rel="bookmark" title="<?php echo $randp['post_title']; ?>"><?php echo $randp['post_title']; ?></a></h3>
								<div class="meta-info">
									<div class="td-post-date">
										<time class="entry-date updated td-module-date"><?php echo date('d F, Y', strtotime($randp['created_at'])); ?></time>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } } ?>
				</div>
			</div>
			<!-- ./block -->
		</div>

		<div class="td-pb-span4">
			<div class="td_block_wrap td_block_popular_categories widget widget_categories">
				<h4 class="block-title"><span>POPULAR CATEGORY</span></h4>
				<ul class="td-pb-padding-side">
                    <?php if(isset($listcate)){ ?>
                    <?php foreach($listcate as $category){ ?>
					<li><a href="<?php echo base_url().$category['cate_rewrite']; ?>.html"><?php echo $category['cate_name']; ?></a></li>
                    <?php } } ?>
				</ul>
			</div>
			<!-- ./block -->
		</div>
	</div>
</div>

<!-- Sub Footer -->
<div class="td-sub-footer-container td-container td-container-border ">
	<div class="td-pb-row">
		<div class="td-pb-span4 td-sub-footer-copy">
			<div class="td-pb-padding-side">
				&copy; Copyright 2016 - hatutorials.com, All right reservied</div>
		</div>

		<div class="td-pb-span8 td-sub-footer-menu">
			<div class="td-pb-padding-side">
				<div class="menu-td-demo-footer-menu-container">
					<ul id="menu-td-demo-footer-menu" class="">
						<li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first td-menu-item td-normal-menu menu-item-36"><a href="#">Disclaimer</a>
						</li>
						<li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-37"><a href="#">Privacy</a>
						</li>
						<li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-38"><a href="#">Advertisement</a>
						</li>
						<li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-39"><a href="#">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/theme.min.js"></script>