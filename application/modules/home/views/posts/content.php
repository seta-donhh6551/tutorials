<div class="td-container td-post-template-default">
    <div class="td-container-border">
        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content" role="main">
                <div class="td-ss-main-content">
                    <div class="clearfix"></div>
                    <article id="post-143" class="post-143 post type-post status-publish format-standard has-post-thumbnail hentry category-internet">
                        <div class="td-post-header td-pb-padding-side">
                            <div class="entry-crumbs"><span><a title="" class="entry-crumb" itemprop="url" href="<?php echo base_url(); ?>"><span itemprop="title">Home</span>
                                </a>
                                </span> <i class="td-icon-right td-bread-sep"></i> <span><a title="<?php echo $catename['cate_name']; ?>" class="entry-crumb" itemprop="url" href="<?php echo base_url().$catename['cate_rewrite']; ?>.html"><span itemprop="title"><?php echo $catename['cate_name']; ?></span>
                                </a>
                                </span> <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span class="td-bred-no-url-last"><meta itemprop="title" content="<?php echo $result['post_title']; ?>"><meta itemprop="url" content="<?php echo base_url(uri_string()); ?>.html"><?php echo $result['post_title']; ?></span>
                            </div>
                            <ul class="td-category">
                                <li class="entry-category">
                                    <a style="background-color:#a444bd;color:#fff;border-color:#5aaf4a;" href="<?php echo base_url().$catename['cate_rewrite']; ?>.html"><?php echo $catename['cate_name']; ?></a>
                                </li>
                            </ul>
                            <header>
                                <h1 class="entry-title"><?php echo $result['post_title']; ?></h1>
                                <div class="meta-info">
                                    <div class="td-post-author-name">By <a href="#">Tuan Kiet</a> - </div>
                                    <div class="td-post-date">
                                        <time class="entry-date updated td-module-date"><?php echo date('F j, Y', strtotime($result['post_date'])); ?></time>
                                    </div>
                                    <div class="td-post-views"><i class="td-icon-views"></i><span class="td-nr-views-143">1</span>
                                    </div>
                                    <div class="td-post-comments"><a href="#respond"><i class="td-icon-comments"></i>0</a>
                                    </div>
                                </div>
                            </header>
                        </div>
                        <div class="td-post-sharing td-post-sharing-top td-pb-padding-side"><span class="td-post-share-title">SHARE</span>
                            <div class="td-default-sharing ">
                                <a class="td-social-sharing-buttons td-social-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo base_url(uri_string()); ?>.html" onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0');
                                        return false;">
                                    <div class="td-sp td-sp-facebook"></div>
                                    <div class="td-social-but-text">Facebook</div>
                                </a>
                                <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $result['post_title']; ?>&amp;url=<?php echo base_url(uri_string()); ?>.html&amp;via=Php+web+development+tutorials%2C+hatutorials.com">
                                    <div class="td-sp td-sp-twitter"></div>
                                    <div class="td-social-but-text">Twitter</div>
                                </a>
                                <a class="td-social-sharing-buttons td-social-google" href="http://plus.google.com/share?url=<?php echo base_url(uri_string()); ?>.html" onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0');
                                        return false;">
                                    <div class="td-sp td-sp-googleplus"></div>
                                </a>
                                <a class="td-social-sharing-buttons td-social-pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo base_url(uri_string()); ?>.html&amp;media=<?php echo base_url(); ?>uploads/news/<?php echo $result['post_image']; ?>" onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0');
                                        return false;">
                                    <div class="td-sp td-sp-pinterest"></div>
                                </a>
                            </div>
                        </div>
                        <div class="td-post-content td-pb-padding-side">
                            <div class="td-post-featured-image">
                                <a href="<?php echo base_url(); ?>uploads/news/<?php echo $result['post_image']; ?>" class="td-modal-image"><img style="max-width:640px;margin:0px auto 20px auto" class="entry-thumb td-animation-stack-type0-2" src="<?php echo base_url(); ?>uploads/news/<?php echo $result['post_image']; ?>" alt=""></a>
                            </div>
                            <div class="info-post">
                                <?php echo $result['post_info']; ?>
                            </div>
                            <div class="full-post" style="margin-top:30px">
                                <?php echo $result['post_value']; ?>
                            </div>
                        </div>
                        <footer>
                            <div class="td-post-source-tags td-pb-padding-side" style="height:50px"></div>
                            <div class="td-post-sharing td-post-sharing-bottom td-pb-padding-side"><span class="td-post-share-title">SHARE</span>
                                <div class="td-default-sharing td-with-like">
                                    <a class="td-social-sharing-buttons td-social-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo base_url(uri_string()); ?>.html" onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0');
                                        return false;">
                                        <div class="td-sp td-sp-facebook"></div>
                                        <div class="td-social-but-text">Facebook</div>
                                    </a>
                                    <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $result['post_title']; ?>&amp;url=<?php echo base_url(uri_string()); ?>.html&amp;via=Php+web+development+tutorials%2C+hatutorials.com">
                                        <div class="td-sp td-sp-twitter"></div>
                                        <div class="td-social-but-text">Twitter</div>
                                    </a>
                                    <a class="td-social-sharing-buttons td-social-google" href="http://plus.google.com/share?url=<?php echo base_url(uri_string()); ?>.html" onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0');
                                            return false;">
                                        <div class="td-sp td-sp-googleplus"></div>
                                    </a>
                                    <a class="td-social-sharing-buttons td-social-pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo base_url(uri_string()); ?>.html&amp;media=<?php echo base_url(); ?>uploads/news/<?php echo $result['post_image']; ?>" onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0');
                                            return false;">
                                        <div class="td-sp td-sp-pinterest"></div>
                                    </a>
                                </div>
                                <div class="td-classic-sharing">
                                    <ul>
                                        <li class="td-classic-facebook">
                                            <iframe frameborder="0" src="http://www.facebook.com/plugins/like.php?href=<?php echo base_url(uri_string()); ?>.html&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="td-block-row td-post-next-prev">
                                <div class="td-block-span6 td-post-prev-post">
                                    <?php if(isset($prepost) && $prepost){ ?>
                                    <div class="td-post-next-prev-content">
                                        <span>Previous article</span>
                                        <a href="<?php echo base_url().$prepost['cate_rewrite']."/".$prepost['post_title_rewrite']."-".$prepost['post_id'].".html"; ?>"><?php echo $prepost['post_title']; ?></a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="td-next-prev-separator"></div>
                                <div class="td-block-span6 td-post-next-post">
                                <?php if(isset($nextpost) && $nextpost){ ?>
                                <div class="td-post-next-prev-content">
                                    <span>Next article</span>
                                    <a href="<?php echo base_url().$nextpost['cate_rewrite']."/".$nextpost['post_title_rewrite']."-".$nextpost['post_id'].".html"; ?>"><?php echo $nextpost['post_title']; ?></a>
                                </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="author-box-wrap">
                                <a href="#"><img alt="" src="http://2.gravatar.com/avatar/eba6e84683ba37e0e34571de10cf5a16?s=96&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/eba6e84683ba37e0e34571de10cf5a16?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo td-animation-stack-type0-2" height="96" width="96">
                                </a>
                                <div class="desc">
                                    <div class="td-author-name vcard author"><span class="fn"><a href="#">Tuan Kiet</a></span>
                                    </div>
                                    <div class="td-author-description"></div>
                                    <div class="td-author-social"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
						</footer>
                    </article>
                    <!-- /.post -->
                    <div class="td_block_wrap td_block_related_posts td_with_ajax_pagination td-pb-border-top">
                        <h4 class="td-related-title"><a class="td-related-left td-cur-simple-item" href="#">RELATED ARTICLES</a><a class="td-related-right" href="#">MORE FROM AUTHOR</a></h4>
                        <div class="td_block_inner">
                            <div class="td-related-row">
                                <div class="td-related-span4">
                                    <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb"><a class="td-admin-edit" href="http://localhost/wordpress/wp-admin/post.php?post=136&amp;action=edit">edit</a>
                                                <a href="http://localhost/wordpress/2016/02/29/melbourne-calling-three-reasons-why-you-should-visit-it/" rel="bookmark" title="Melbourne calling: Three reasons why you should visit it"><img width="238" height="178" class="entry-thumb td-animation-stack-type0-2" src="http://localhost/wordpress/wp-content/uploads/2016/02/3-238x178.jpg" alt="" title="Melbourne calling: Three reasons why you should visit it">
                                                </a>
                                            </div> <a href="http://localhost/wordpress/category/tech/internet/" class="td-post-category">Internet</a> </div>
                                        <div class="item-details">
                                            <h3 class="entry-title td-module-title"><a href="http://localhost/wordpress/2016/02/29/melbourne-calling-three-reasons-why-you-should-visit-it/" rel="bookmark" title="Melbourne calling: Three reasons why you should visit it">Melbourne calling: Three reasons why you should visit it</a></h3> </div>
                                    </div>
                                </div>
                                <!-- ./td-related-span4 -->
                                <div class="td-related-span4">
                                    <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb"><a class="td-admin-edit" href="http://localhost/wordpress/wp-admin/post.php?post=129&amp;action=edit">edit</a>
                                                <a href="http://localhost/wordpress/2016/02/29/the-dangers-of-eating-too-much-restaurant-food/" rel="bookmark" title="The dangers of eating too much restaurant food"><img width="238" height="178" class="entry-thumb td-animation-stack-type0-2" src="http://localhost/wordpress/wp-content/uploads/2016/02/15-238x178.jpg" alt="" title="The dangers of eating too much restaurant food">
                                                </a>
                                            </div> <a href="http://localhost/wordpress/category/tech/internet/" class="td-post-category">Internet</a> </div>
                                        <div class="item-details">
                                            <h3 class="entry-title td-module-title"><a href="http://localhost/wordpress/2016/02/29/the-dangers-of-eating-too-much-restaurant-food/" rel="bookmark" title="The dangers of eating too much restaurant food">The dangers of eating too much restaurant food</a></h3> </div>
                                    </div>
                                </div>
                                <!-- ./td-related-span4 -->
                                <div class="td-related-span4">
                                    <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb"><a class="td-admin-edit" href="http://localhost/wordpress/wp-admin/post.php?post=122&amp;action=edit">edit</a>
                                                <a href="http://localhost/wordpress/2016/02/29/workout-routine-for-big-forearms-and-a-crushing-grip/" rel="bookmark" title="Workout Routine for Big Forearms and a Crushing Grip"><img width="238" height="178" class="entry-thumb td-animation-stack-type0-2" src="http://localhost/wordpress/wp-content/uploads/2016/02/5-238x178.jpg" alt="" title="Workout Routine for Big Forearms and a Crushing Grip">
                                                </a>
                                            </div> <a href="http://localhost/wordpress/category/tech/internet/" class="td-post-category">Internet</a> </div>
                                        <div class="item-details">
                                            <h3 class="entry-title td-module-title"><a href="http://localhost/wordpress/2016/02/29/workout-routine-for-big-forearms-and-a-crushing-grip/" rel="bookmark" title="Workout Routine for Big Forearms and a Crushing Grip">Workout Routine for Big Forearms and a Crushing Grip</a></h3> </div>
                                    </div>
                                </div>
                                <!-- ./td-related-span4 -->
                            </div>
                            <!--./row-fluid-->
                        </div>
                        <div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_14_56d3c2a2535ac" data-td_block_id="td_uid_14_56d3c2a2535ac"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_14_56d3c2a2535ac" data-td_block_id="td_uid_14_56d3c2a2535ac"><i class="td-icon-font td-icon-menu-right"></i></a>
                        </div>
                    </div>
                    <!-- ./block -->
                    <div class="comments" id="comments">
                        <div class="td-comments-title-wrap td-pb-padding-side">
                            <h4 class=""><span>NO COMMENTS</span></h4>
                        </div>
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">LEAVE A REPLY <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
                            <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                <div class="clearfix"></div>
                                <p class="comment-form-input-wrap">
                                    <textarea placeholder="Comment:" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                </p>
                                <p class="comment-form-input-wrap"> <span class="comment-req-wrap">
                                                <input class="" id="author" name="author" placeholder="Name:" type="text" value="" size="30"></span>
                                </p>
                                <p class="comment-form-input-wrap"> <span class="comment-req-wrap"><input class="" id="email" name="email" placeholder="Email:" type="text" value="" size="30"></span>
                                </p>
                                <p class="comment-form-input-wrap">
                                    <input class="" id="url" name="url" placeholder="Website:" type="text" value="" size="30">
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                    <input type="hidden" name="comment_post_ID" value="135" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0"> </p>
                            </form>
                        </div>
                        <!-- #respond -->
                    </div>
                    <!-- /.content -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php $this->load->view("layouts/right-bar");?>
        </div>
        <!-- /.td-pb-row -->
    </div>
</div>