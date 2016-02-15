<?php $this->load->view("menu"); ?>
<div id="content">
	<div id="content_left">
		<?php $this->load->view("layouts/left-menu"); ?>
		<!-- student here -->
		<?php $this->load->view("homes/students"); ?>
		<!-- student here -->
		<div id="content_left_end">
			<?php $this->load->view("homes/review"); ?>
		</div>
	</div>
	<div id="content_mid">
		<div id="content_mid_top"><a href="<?php echo base_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>hoi-dap.html">Hỏi đáp</a> &raquo; <a href="<?php echo base_url(); ?>hoan-thanh.html">Hoàn thành</a></div>
		<div id="content_mid_bottom">
			<div class="customer_title" style="line-height:18px;">
				<p style="color:#060;">
					<?php if($update){ ?>
					Sửa bài viết thành công.
					<?php }else{ ?>
					Câu hỏi của bạn đã được lưu, Chúng tôi sẽ kiểm duyệt câu hỏi của bạn trước khi hiển thị.
					<?php } ?>
				</p>
				<p style="margin-top: 20px; text-align: right; padding-right: 20px"><a href="<?php echo base_url(); ?>hoi-dap.html">Quay lại trang hỏi đáp</a></p>
			</div>
		</div>
	</div>
	<div id="content_right">
		<div id="news">
			<div class="news_top">
				<h2>TIN TỨC</h2>
			</div>
			<div class="news_bot">
				<?php $this->load->view("homes/news"); ?>
			</div>
		</div>
		<div id="posts">
			<?php $this->load->view("homes/new_post"); ?>
		</div>
	</div>
</div>