<div class="td_block_wrap td_block_8 td-pb-border-top">
	<h4 class="block-title"><span>HOSTING REVIEWS</span></h4>
	<div class="td_block_inner">
		<?php if(isset($hosting)){ ?>
		<?php foreach($hosting as $review){ ?>
		<div class="td-block-span12">
			<div class="td_module_7 td_module_wrap td-animation-stack">
				<div class="td-module-thumb">
					<a href="<?php echo base_url().$review['cate_rewrite']."/".$review['post_title_rewrite']."-".$review['post_id'].".html"; ?>"><img width="100" height="75" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url()."uploads/news/".$review['post_image']; ?>" alt="<?php echo $review['post_title']; ?>" title="<?php echo $review['post_title']; ?>">
					</a>
				</div>
				<div class="item-details">
					<h3 class="entry-title td-module-title"><a href="<?php echo base_url().$review['cate_rewrite']."/".$review['post_title_rewrite']."-".$review['post_id'].".html"; ?>" rel="bookmark" title="<?php echo $review['post_title']; ?>"><?php echo $review['post_title']; ?></a></h3>
					<div class="meta-info">
						<div class="td-post-date">
							<time class="entry-date updated td-module-date" datetime="<?php echo date('Y-m-d', strtotime($review['created_at'])).'T'.date('H:i', strtotime($review['created_at'])); ?>"><?php echo date('d F, Y', strtotime($review['created_at'])); ?></time>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } } ?>
	</div>
</div>
