<?php $this->load->view("menu"); ?>
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
            	<a href="<?php echo base_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>gioi-thieu.html">Giới thiệu</a>
            </div>
        	<div id="content_mid_bottom" style="line-height:18px;">
            	<?php echo $intro['intro_full']; ?>
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