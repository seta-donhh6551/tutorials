<div class="td-pb-span4 td-main-sidebar" role="complementary">
    <div class="td-ss-main-sidebar" style="width: auto; position: static; top: auto; bottom: auto; z-index: 1;">
        <div class="td-a-rec td-a-rec-id-sidebar "><span class="td-adspot-title">- Advertisement -</span>
            <div class="td-all-devices">
                <a href="#"><img src="<?php echo base_url(); ?>public/images/adsense-300x250.gif"></a>
            </div>
        </div>
        <div class="td_block_wrap td_block_9 td_block_widget td-pb-border-top">
			<div id="quick-view">
				<h3>IN THIS POST</h3>
				<ul>

				</ul>
			</div>
            <h4 class="block-title"><span>RELATED ARTICLES</span></h4>
            <div class="td_block_inner">
                <?php if(isset($relate)){ ?>
                <?php foreach($relate as $post){ ?>
                <div class="td-block-span12">
                    <div class="td_module_8 td_module_wrap">
                        <div class="item-details">
                            <h3 class="entry-title td-module-title"><a href="<?php echo base_url().$rewrite."/".$post['post_title_rewrite']."-".$post['post_id'].".html"; ?>" rel="bookmark" title=""><?php echo $post['post_title']; ?></a></h3>
                            <div class="meta-info">
                                <div class="td-post-author-name"><a href="#">admin</a> <span>-</span> </div>
                                <div class="td-post-date">
                                    <time class="entry-date updated td-module-date">February 29, 2016</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </div>
            <div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_17_56d3c2a25d5d6"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page"><i class="td-icon-font td-icon-menu-right"></i></a>
            </div>
        </div>
        <!-- ./block -->
        <div class="clearfix"></div>
        <div class="clearfix"></div>
    </div>
</div>