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
		<div id="content_mid_top"><a href="<?php echo base_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>dang-nhap.html">Đăng nhập</a></div>
		<div id="content_mid_bottom">
			<div class="customer_title" style="line-height:18px;">
				ĐĂNG NHẬP TÀI KHOẢN
			</div>
			<div class="customer_content" style="height:400px">
				<fieldset style="padding:10px 40px 30px 40px;border:1px solid #DDD;border-radius:5px">
					<legend style="color:#F60;font-weight:bold">Đăng nhập</legend>
					<?php
					if (isset($errors)) {
						echo "<div id='errors' style='color:#F06;margin-bottom::20px;border:1px dashed #F60;padding:5px 0px 5px 10px'>" . $errors . "</div>";
					}
					?>
					<form action="" method="post" style="padding-top:20px">
						<div class="form_items">
							<div class="form_items_left"><label>Tên tài khoản<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" size="25" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Mật khẩu<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="password" name="user_pass" value="<?php echo set_value('user_pass'); ?>" size="25" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>&nbsp;</label> </div>
							<div class="form_items_right"><input type="submit" name="submit" value="Đăng nhập" class="subbs" style="margin:0px;" /><input type="reset" value="Xóa" class="subbs"/></div>
						</div>
					</form>
				</fieldset>
				<div style="margin-top:30px;border-top:1px solid #CCC;padding-top:15px;text-align:center">
					<a href="<?php echo base_url(); ?>dang-ky.html">Đăng ký thành viên</a> | Hoặc quên mật khẩu xin nhấn <a href="<?php echo base_url(); ?>quen-mat-khau.html">vào đây</a>
				</div>
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