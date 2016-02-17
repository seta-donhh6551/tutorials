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
        	<div id="content_mid_top"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> &raquo; <a href="<?php echo base_url().$link; ?>.html" title="<?php echo $title; ?>"><?php echo $title; ?></a></div>
        	<div id="content_mid_bottom">
            <div class="cate_title"><h1><?php echo $title; ?></h1></div>
           	<?php
			if(isset($listall) && $listall != NULL){
				foreach($listall as $list){
					echo "<div class='post_items'>";
						echo "<a href='".base_url()."".$rewrite."/".$list['post_title_rewrite']."-".$list['post_id'].".html'><img class='post_img' src='".base_url()."uploads/news/thumb/$list[post_image]' alt='".$list['post_title']."' title='".$list['post_title']."' /></a>";
						echo "<h3 class='post_h3'><a href='".base_url()."".$rewrite."/".$list['post_title_rewrite']."-".$list['post_id'].".html' title='".$list['post_title']."'>".$list['post_title']."</a></h3>";
						echo "<div>".cut_str(strip_tags($list['post_info']),0,150)."</div>";
					echo "</div>";
					echo "<div class='post_line'></div>";
				}
			}else{
				echo "Nội dung đang cập nhật";
			}
			?>
            </div>
            <div id="pagination"><?php echo $this->pagination->create_links(); ?></div>
        </div>
    	<div id="content_right">
          	<div id="news">
            	<div class="news_top">
                	<h2>TIN TỨC</h2>
                </div>
            	<div class="news_bot">
                	<?php $this->load->view("homes/news");?>
                </div>
            </div>
          	<div id="posts">
            <?php $this->load->view("homes/new_post");?>
            </div>
        </div>
    </div>