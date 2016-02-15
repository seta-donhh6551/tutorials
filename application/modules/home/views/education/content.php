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
            	<a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>khoa-hoc.html" title="Khóa học">Khóa học</a>
            </div>
        	<div id="content_mid_bottom" style="line-height:18px;">
              	<div class="h1_title"><h1>Khóa học thiết kế website - lập trình PHP tại Hà Nội - Cam kết sau khóa học lương $300++</h1></div>
            	<div><?php echo $result['edu_info']; ?></div>
                <div>
                <?php
				if(isset($subjects) && $subjects != NULL){
					foreach($subjects as $list){
						echo "<div class='news_items' style='padding:20px 0px'>";
						if($list['subject_image'] != NULL){
							echo "<a href='".base_url()."khoa-hoc/$list[subject_rewrite]/$list[subject_id].html'><img src='".base_url()."uploads/news/thumb/$list[subject_image]' class='news_img' alt='".$list['subject_title']."' title='".$list['subject_title']."' /></a>";
						}
						echo "<h3 class='news_h3'><a href='".base_url()."khoa-hoc/$list[subject_rewrite]/$list[subject_id].html' title='".$list['subject_title']."'>".$list['subject_title']."</a></h3>";
						echo "</p>";
						echo "<p class='news_info'>".cut_str($list['subject_info'],0,200)."</p>";
						echo "</div>";
						echo "<div style='clear:left;padding:5px;border-bottom:1px solid #CCC;'></div>";
					}
				}
				?>
				<?php //echo $result['edu_full']; ?>
                </div>
            </div>
        </div>
    	<div id="content_right">
          	<div id="news">
           	<?php $this->load->view("homes/subjects"); ?>
            </div>
          	<div id="posts">
            	<div class="related_title">
                	<h2>HỌC PHP TẠI HÀ NỘI</h2>
                </div>
                <div class="related_content">
                	<?php $this->load->view("new_post"); ?>
                </div>
            </div>
        </div>
    </div>