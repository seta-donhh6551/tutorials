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
		<div id="content_mid_top"><a href="<?php echo base_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>kich-hoat-tai-khoan.html">Kích hoạt tài khoản</a></div>
		<div id="content_mid_bottom">
			<div class="customer_title" style="line-height:18px;">
				<h3 style="color:#060;margin-bottom:30px">Kích hoạt tài khoản</h3>
				<p style="color:#F00;text-align: center"><?php echo $errors; ?></p>
				<p style="margin-top: 20px; text-align: right; padding-right: 20px"><a href="<?php echo base_url(); ?>">Quay về trang chủ</a></p>
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