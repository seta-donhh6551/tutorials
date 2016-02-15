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
            	<a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>khoa-hoc.html" title="Khoá học">Khoá học</a>
                &raquo; <a href="<?php echo base_url()."khoa-hoc/".$segment."/".$idsub; ?>.html" title="<?php echo $title; ?>"><?php echo $title; ?></a>
            </div>
        	<div id="content_mid_bottom" style="line-height:18px;">
            <?php
			if(isset($result) && $result != NULL){
			?>
	            <img src="<?php echo base_url(); ?>uploads/news/thumb/<?php echo $result['subject_image'];  ?>" class="img_detail" alt="<?php echo $result['subject_title']; ?>" title="<?php echo $result['subject_title']; ?>" />
	            <h1 class='h2_post'><?php echo $result['subject_title']; ?></h1>
	            <div class="info_post"><?php echo $result['subject_info']; ?></div>
	            <div class="cls"></div>
	            <div class="full_post"><?php echo $result['subject_full']; ?></div>
            <?php
			}
			?>
            </div>
            <div style="margin:10px 0px 30px 0px;border-bottom:1px solid #DDD;"></div>
            <div id="commentfa">
            	<div class="fb-comments" data-href="<?php echo $link; ?>" data-width="540" data-num-posts="100"></div>
            </div>
        </div>
    	<div id="content_right">
          	<div id="news">
            	<div class="news_top">
                	<h2>CÁC KHOÁ HỌC KHÁC</h2>
                </div>
            	<div class="news_bot">
                <?php
				if(isset($related)){
					foreach($related as $items){
						echo "<div class='posts_items'>";
						echo "<a href='".base_url()."khoa-hoc/".$items['subject_rewrite']."/".$items['subject_id'].".html'><img src='".base_url()."uploads/news/thumb/".$items['subject_image']."' alt='".$items['subject_title']."' title='".$items['subject_title']."' /></a>";
						echo "<h3><a href='".base_url()."khoa-hoc/".$items['subject_rewrite']."/".$items['subject_id'].".html' title='".$items['subject_title']."'>".$items['subject_title']."</a></h3>";
						echo "<div class='cls'></div>";
						echo "</div>";
					}
				}
				?>
                </div>
            </div>
          	<div id="posts">
              <div id="post_top">
			    <h2><?php echo $result['subject_title']; ?> Tại Hà Nội</h2>
			  </div>
			  <div id="post_bot">
			    <?php
			  if(isset($subjects)){
			      foreach($subjects as $items){
			          echo "<div class='posts_items'>";
			          echo "<a href='".base_url()."khoa-hoc/".$items['subject_rewrite']."/".$items['subject_id'].".html'><img src='".base_url()."uploads/news/thumb/".$items['subject_image']."' alt='".$items['subject_title']."' title='".$items['subject_title']."' /></a>";
			          echo "<h3><a href='".base_url()."khoa-hoc/".$items['subject_rewrite']."/".$items['subject_id'].".html' title='".$items['subject_title']."'>".$items['subject_title']."</a></h3>";
			          echo "<div class='cls'></div>";
			          echo "</div>";
			      }
			  }
			  ?>
			  </div>
			</div>
        </div>
    </div>