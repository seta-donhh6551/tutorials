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
		<div id="content_mid_top"><a href="<?php echo base_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>dang-ky.html">Đăng ký</a></div>
		<div id="content_mid_bottom">
			<div class="customer_title" style="line-height:18px;">
				ĐĂNG KÝ TÀI KHOẢN
			</div>
			<div class="customer_content" style="height:400px">
				<fieldset style="width:470px; padding:10px 30px;border:1px solid #DDD; border-radius: 5px">
					<legend style="color:#F60;font-weight:bold">Đăng ký thành viên</legend>
					<?php
					if (isset($errors)) {
						echo "<div id='errors' style='color:#F06;margin-bottom::20px;border:1px dashed #F60;padding:5px 0px 5px 10px'>" . $errors . "</div>";
					}
					if (validation_errors() != NULL) {
						echo "<div id='errors' style='color:#F06;margin-bottom::20px;border:1px dashed #F60;padding:5px 0px 5px 10px'>" . validation_errors() . "</div>";
					}
					?>
					<form action="" method="post" style="padding-top:20px">
						<div class="form_items">
							<div class="form_items_left"><label>Tên tài khoản<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" size="30" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Mật khẩu<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="password" name="user_pass" value="<?php echo set_value('user_pass'); ?>" size="30" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Nhập lại mật khẩu<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="password" name="re_pass" value="<?php echo set_value('re_pass'); ?>" size="30" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Giới tính</label></div>
							<div class="form_items_right">
								<input type="radio" name="user_gender" value="1" checked="checked" /> Nam
								<input type="radio" name="user_gender" value="0" /> Nữ
							</div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Họ tên<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="text" name="user_fullname" value="<?php echo set_value('user_fullname'); ?>" size="30" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Địa chỉ</label> </div>
							<div class="form_items_right"><input type="text" name="user_add" value="<?php echo set_value('user_add'); ?>" size="30" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Số điện thoại</label> </div>
							<div class="form_items_right"><input type="text" name="user_phone" value="<?php echo set_value('user_phone'); ?>" size="30" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Địa chỉ email<span class="red">*</span></label> </div>
							<div class="form_items_right"><input type="text" name="user_email" value="<?php echo set_value('user_email'); ?>" size="30" /></div>
						</div>
						<div class="form_items">
							<div class="form_items_left"><label>Mã captcha</label></div>
							<div class="form_items_right"><img src="<?php echo base_url(); ?>home/ran_image" alt="Captcha" title="Captcha" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Nhập captcha<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="text" id="captcha" name="captcha" size="25" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>&nbsp;</label> </div>
							<div class="form_items_right"><input type="submit" name="submit" value="Đăng ký" class="subbs" style="margin:0px;" /><input type="reset" value="Xóa" class="subbs"/></div>
						</div>
					</form>
				</fieldset>
				<div style="margin-top:30px;border-top:1px solid #CCC;padding-top:15px;text-align:center">
					<a href="<?php echo base_url(); ?>dang-nhap.html">Đăng nhập</a> | Nếu bạn quên mật khẩu xin nhấn <a href="<?php echo base_url(); ?>quen-mat-khau.html">vào đây</a>
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