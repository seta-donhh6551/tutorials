<?php $this->load->view("menu");?>
<div id="content">
    	<div id="content_left">
        	<?php $this->load->view("homes/study"); ?>
            <?php $this->load->view("layouts/left-menu"); ?>
            <!-- student here -->
            <?php $this->load->view("homes/students"); ?>
            <!-- student here -->
            <div id="content_left_end">
            <?php $this->load->view("homes/review"); ?>
            </div>
        </div>
        <div id="content_mid">
        	<div id="content_mid_top">
            	<a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> &raquo; <a href="<?php echo base_url().$catename['cate_rewrite']."-".$catename['cate_id']; ?>.html" title="<?php echo $catename['cate_name']; ?>"><?php echo $catename['cate_name']; ?></a>
            </div>
        	<div id="content_mid_bottom" style="line-height:18px;">
            <?php
			if(isset($read) && $read != NULL){
			?>
	            <img src="<?php echo base_url(); ?>uploads/news/thumb/<?php echo $read['post_image'];  ?>" alt="" title="" class="img_detail" />
	            <h1 class='h2_post'><?php echo $read['post_title']; ?></h1>
	            <div class="info_post"><?php echo $read['post_info']; ?></div>
	            <div class="cls"></div>
	            <div class="full_post"><?php echo $read['post_value']; ?></div>
            <?php
			}
			?>
            </div>
            <div style="margin:10px 0px 30px 0px;border-bottom:1px solid #DDD;"></div>
			<div style="height:40px;border:1px solid #F00;border-radius:5px;padding:7px;color:#F00">
				Bạn vẫn chưa hiểu vấn đề, bạn cần người trợ giúp?. Hãy click <a href="<?php echo base_url(); ?>hoi-dap.html" style="color:#060">vào đây</a> để gửi câu hỏi, mọi người sẽ support cho bạn
			</div>
			<div style="margin:10px 0px 30px 0px;border-bottom:1px solid #DDD;"></div>
            <div id="commentfa">
            	<div class="fb-comments" data-href="<?php echo $link; ?>" data-width="540" data-num-posts="100"></div>
            </div>
        </div>
    	<div id="content_right">
          	<div id="news">
            	<?php $this->load->view("homes/subjects"); ?>
            </div>
          	<div id="posts">
            	<div class="related_title">
                	<h2><?php echo $catename['cate_name']; ?></h2>
                </div>
            	<div class="related_content">
                <?php
				foreach($relate as $items){
					echo "<div class='posts_items'>";
					echo "<a href='".base_url()."".$rewrite."/".$items['post_title_rewrite']."-".$items['post_id'].".html'><img src='".base_url()."uploads/news/thumb/".$items['post_image']."' alt='".$items['post_title']."' title='".$items['post_title']."' /></a>";
					echo "<h3><a href='".base_url()."".$rewrite."/".$items['post_title_rewrite']."-".$items['post_id'].".html'>".$items['post_title']."</a></h3>";
					echo "<div class='cls'></div>";
					echo "</div>";
				}
				?>
                </div>
            </div>
        </div>
    </div>