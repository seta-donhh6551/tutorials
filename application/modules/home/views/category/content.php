<!-- Container -->
<div class="td-container">
	<div class="td-container-border">
		<div class="vc_row wpb_row td-pb-row">
			<div class="wpb_column vc_column_container td-pb-span12">
				<div class="wpb_wrapper">
					<div class="td_block_wrap td_block_trending_now td-pb-border-top">
						<div class="td_block_inner">

							<div class="td-block-row">
								<div class="td-trending-now-wrapper" id="td_uid_15_56c18169c302b" data-start="manual">
									<div class="td-trending-now-title block-title"><?php echo $result['cate_name']; ?></div>
									<div class="td-trending-now-display-area">
										<div class="td_module_trending_now td_module_wrap td-trending-now-post-0 td-trending-now-post">
											<h3 class="entry-title td-module-title"><a href="javascript:void(0)" rel="bookmark"><?php echo $result['cate_name']; ?></a></h3>
										</div>
									</div>
								</div>
							</div>
							<!--./row-fluid-->
						</div>
					</div>
					<!-- ./block -->
					<!-- ./block -->
				</div>
			</div>
		</div>
		<div class="vc_row wpb_row td-pb-row td-ss-row">
			<div class="wpb_column vc_column_container td-pb-span8">
				<div class="wpb_wrapper"><div class="clearfix"></div>
					<div class="td_block_wrap td_with_ajax_pagination">
						<div class="td_block_inner">
							<div class="td-block-row">
								<div class="td-block-span6">
									<div class="td_module_4 td_module_wrap td-animation-stack">
										<div class="td-module-image">
											<div class="td-module-thumb">
												<a href="<?php echo base_url().$result['cate_rewrite']; ?>.html" rel="bookmark" title="<?php echo $result['cate_name']; ?>">
													<img width="300" height="194" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url().'uploads/cate/'.$result['cate_images'];; ?>" alt="<?php echo $result['cate_name']; ?>" title="<?php echo $result['cate_name']; ?>">
												</a>
											</div>
										</div>
										<h3 class="entry-title td-module-title"><a href="<?php echo base_url().$result['cate_rewrite']; ?>.html" rel="bookmark" title="<?php echo $result['cate_name']; ?>"><?php echo $result['cate_name']; ?></a></h3>
										<div class="meta-info">
											<div class="td-post-author-name"><a href="javascript:void(0)">Tuan Kiet</a> <span>-</span></div>
											<div class="td-post-date">
												<time class="entry-date updated td-module-date"><?php echo date('d F, Y'); ?></time>
											</div>
											<!--div class="td-module-comments"><a href="#">0</a>
											</div-->
										</div>
										<div class="td-excerpt">
											<?php echo $result['cate_ext']; ?>
										</div>
									</div>
								</div>
								<!-- ./td-block-span6 -->
								<div class="td-block-span6">
									<?php if (isset($listall)) { ?>
										<?php $i = 1; foreach ($listall as $items) { ?>
										<div class="td_module_6 td_module_wrap td-animation-stack">
											<div class="td-module-thumb">
												<a href="<?php echo base_url().$result['cate_rewrite']."/".$items['post_title_rewrite']."-".$items['post_id'].".html"; ?>" title="<?php echo $items['post_title']; ?>">
													<img style="height:75px;width:100px;overflow:hidden" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url()."uploads/news/".$items['post_image']; ?>" alt="<?php echo $items['post_title']; ?>" title="<?php echo $items['post_title']; ?>">
												</a>
											</div>
											<div class="item-details">
												<h3 class="entry-title td-module-title"><a href="<?php echo base_url()."yii2-framework/".$items['post_title_rewrite']."-".$items['post_id'].".html"; ?>" rel="bookmark" title="<?php echo $items['post_title']; ?>"><?php echo $items['post_title']; ?></a></h3>
												<div class="meta-info">
													<div class="td-post-date">
														<time class="entry-date updated td-module-date"><?php echo date('d F, Y', strtotime($items['created_at'])); ?></time>
													</div>
												</div>
											</div>
										</div>
										<?php if($i == 4){ break; } ?>
									<?php ++$i; } } ?>
								</div>
								<!-- ./td-block-span6 -->
							</div>
							<!--./row-fluid-->
						</div>
					</div>
					<!-- ./block -->

					<!-- ./block -->
					<div class="td-pb-span8 td-main-content" role="main">
						<div class="td-ss-main-content">
							<div class="clearfix"></div>
							<h4 class="block-title"><span>POPULAR ARTICLES</span></h4>
							<?php if (isset($listall)) { ?>
							<?php $this->load->library("string"); ?>
							<?php $j = 1; foreach ($listall as $items) { ?>
							<?php if($j > 4) { ?>
							<div class="td_module_11 td_module_wrap td-animation-stack">
								<div class="td-module-thumb">
									<a href="<?php echo base_url().$result['cate_rewrite']."/".$items['post_title_rewrite']."-".$items['post_id'].".html"; ?>" title="<?php echo $items['post_title']; ?>">
										<img style="height:150px !important;max-width:240px" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url()."uploads/news/".$items['post_image']; ?>" alt="<?php echo $items['post_title']; ?>" title="<?php echo $items['post_title']; ?>">
									</a>
								</div>
								<div class="item-details">
									<h3 class="entry-title td-module-title"><a href="<?php echo base_url().$result['cate_rewrite']."/".$items['post_title_rewrite']."-".$items['post_id'].".html"; ?>" rel="bookmark" title="<?php echo $items['post_title']; ?>"><?php echo $items['post_title']; ?></a></h3>
									<div class="meta-info">
										<div class="td-post-author-name"><a href="#">Tuan Kiet</a> <span>-</span> </div>
										<div class="td-post-date">
											<time class="entry-date updated td-module-date"><?php echo date('d F, Y', strtotime($items['created_at'])); ?></time>
										</div>
										<div class="td-module-comments"><a href="<?php echo base_url().$result['cate_rewrite']."/".$items['post_title_rewrite']."-".$items['post_id'].".html"; ?>/#respond">0</a>
										</div>
									</div>
									<div class="td-excerpt"><?php echo $this->string->cut_str(strip_tags($items['post_info']),0,180); ?></div>
									<div class="td-read-more">
										<a href="<?php echo base_url().$result['cate_rewrite']."/".$items['post_title_rewrite']."-".$items['post_id'].".html"; ?>">Read more</a>
									</div>
								</div>
							</div>
							<?php } ?>
							<?php ++$j; } } ?>
							<div class="page-nav td-pb-padding-side">
								<?php echo $this->pagination->create_links(); ?>
								<span class="pages">Page 1 of 8</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div></div>
			</div>
			<div class="wpb_column vc_column_container td-pb-span4">
				<div class="wpb_wrapper" style="width: auto; position: static; top: auto; bottom: auto; z-index: 1;"><div class="clearfix"></div>
					<div class="td-a-rec td-a-rec-id-sidebar ">
						<div class="td-all-devices">
							<a href="#"><img src="<?php echo base_url(); ?>public/images/adsense-300x250.gif">
							</a>
						</div>
					</div>
                    <?php $random = rand(0,10); ?>
                    <?php if(isset($newest[$random])){ ?>
                    <?php $ranPost = $newest[$random]?>
					<div class="td_block_wrap td_block_6 td-pb-border-top">
						<h4 class="block-title"><span>RANDOM POST</span></h4>
						<div id="td_uid_23_56c18169e010a" class="td_block_inner">
							<div class="td-block-span12">
								<div class="td_module_5 td_module_wrap td-animation-stack">
									<h3 class="entry-title td-module-title"><a href="<?php echo base_url().$ranPost['cate_rewrite']."/".$ranPost['post_title_rewrite']."-".$ranPost['post_id'].".html"; ?>" rel="bookmark" title="<?php echo $ranPost['post_title']; ?>"><?php echo $ranPost['post_title']; ?></a></h3>
									<div class="meta-info">
										<div class="td-post-author-name"><a href="javascript:void(0)">Tuan Kiet</a> <span>-</span> </div>
										<div class="td-post-date">
                                            <time class="entry-date updated td-module-date"><?php echo date('d F, Y', strtotime($ranPost['created_at'])); ?></time>
										</div>
										<div class="td-module-comments"><a href="<?php echo base_url().$ranPost['cate_rewrite']."/".$ranPost['post_title_rewrite']."-".$ranPost['post_id'].".html"; ?>#respond">0</a>
										</div>
									</div>
									<div class="td-module-image">
										<div class="td-module-thumb">
											<a href="<?php echo base_url().$ranPost['cate_rewrite']."/".$ranPost['post_title_rewrite']."-".$ranPost['post_id'].".html"; ?>" rel="bookmark" title="<?php echo $ranPost['post_title']; ?>">
                                                <img width="300" height="194" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url()."uploads/news/".$ranPost['post_image']; ?>" alt="<?php echo $ranPost['post_title']; ?>" />
											</a>
										</div> <a href="<?php echo base_url().$ranPost['cate_rewrite']; ?>.html" class="td-post-category"><?php echo $ranPost['cate_name']; ?></a></div>
									<div class="td-excerpt">
                                        <?php echo $this->string->cut_str(strip_tags($ranPost['post_info']),0,180); ?>
                                    </div>
								</div>
							</div>
							<!-- ./td-block-span12 -->
						</div>
					</div>
                    <?php } ?>
					<!-- ./block -->
					<div class="td_block_wrap td_block_8 td_block_id_870611808 td_uid_24_56c18169e187a_rand td-pb-border-top">
						<h4 class="block-title"><span>HOLIDAY RECIPES</span></h4>
						<div id="td_uid_24_56c18169e187a" class="td_block_inner">

							<div class="td-block-span12">

								<div class="td_module_7 td_module_wrap td-animation-stack">
									<div class="td-module-thumb">
										<a href="<?php echo base_url(); ?>2016/01/22/simple-form-creation-and-storage-built-for-developers/" rel="bookmark" title="Simple form creation and storage, built for developers."><img width="100" height="75" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url(); ?>wp-content/uploads/2016/01/13-100x75.jpg" alt="" title="Simple form creation and storage, built for developers.">
										</a>
									</div>
									<div class="item-details">
										<h3 class="entry-title td-module-title"><a href="<?php echo base_url(); ?>2016/01/22/simple-form-creation-and-storage-built-for-developers/" rel="bookmark" title="Simple form creation and storage, built for developers.">Simple form creation and storage, built for developers.</a></h3>
										<div class="meta-info">
											<div class="td-post-date">
												<time class="entry-date updated td-module-date" datetime="2016-01-22T06:09:13+00:00">22nd January 2016</time>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ./td-block-span12 -->

							<div class="td-block-span12">

								<div class="td_module_7 td_module_wrap td-animation-stack">
									<div class="td-module-thumb">
										<a href="<?php echo base_url(); ?>2016/01/22/express-recipes-how-to-make-creamy-papaya-raita/" rel="bookmark" title="Express Recipes: How to make Creamy Papaya Raita"><img width="100" height="75" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url(); ?>wp-content/uploads/2016/01/15-100x75.jpg" alt="" title="Express Recipes: How to make Creamy Papaya Raita">
										</a>
									</div>
									<div class="item-details">
										<h3 class="entry-title td-module-title"><a href="<?php echo base_url(); ?>2016/01/22/express-recipes-how-to-make-creamy-papaya-raita/" rel="bookmark" title="Express Recipes: How to make Creamy Papaya Raita">Express Recipes: How to make Creamy Papaya Raita</a></h3>
										<div class="meta-info">
											<div class="td-post-date">
												<time class="entry-date updated td-module-date" datetime="2016-01-22T06:09:15+00:00">22nd January 2016</time>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ./td-block-span12 -->
						</div>
					</div>
					<!-- ./block -->
					<div class="clearfix"></div></div>
			</div>
		</div>
		<div class="vc_row wpb_row td-pb-row">
			<div class="wpb_column vc_column_container td-pb-span12">
				<div class="wpb_wrapper">
					<div class="td_block_wrap td_block_14 td_block_id_734758908 td_uid_25_56c18169e37bb_rand td-pb-full-cell td_with_ajax_pagination td-pb-border-top">
						<h4 class="block-title"><span>EVEN MORE NEWS</span></h4>
						<div id="td_uid_25_56c18169e37bb" class="td_block_inner"></div>
					</div>
					<!-- ./block -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End container -->