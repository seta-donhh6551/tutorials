<fieldset style="padding:20px 40px;border:1px solid #DDD">
	<legend style="color:#F60;font-weight:bold">Câu Hỏi Của Bạn</legend>
	<?php
	if (isset($errors)) {
		echo "<div id='errors' style='color:#F06;margin-bottom::20px;border:1px dashed #F60;padding:5px 0px 5px 10px'>" . $errors . "</div>";
	}
	if (validation_errors() != NULL) {
		echo "<div id='errors' style='color:#F06;margin-bottom::20px;border:1px dashed #F60;padding:5px 0px 5px 10px'>" . validation_errors() . "</div>";
	}
	?>
	<form action="" method="post" enctype="multipart/form-data" style="padding-top:20px">
		<div class="form_items">
			<div class="form_items_left"><label>Họ tên <span class="red">*</span></label></div>
			<div class="form_items_right"><input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" size="25" /></div>
		</div>
		<div class="cls"></div>
		<div class="form_items">
			<div class="form_items_left"><label>Điện thoại<span class="red">*</span></label></div>
			<div class="form_items_right"><input type="text" id="phone" name="phone" value="<?php echo set_value('phone'); ?>" size="25" /></div>
		</div>
		<div class="cls"></div>
		<div class="form_items">
			<div class="form_items_left"><label>Địa chỉ email<span class="red">*</span></label></div>
			<div class="form_items_right"><input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" size="25" /></div>
		</div>
		<div class="cls"></div>
		<div class="form_items">
			<div class="form_items_left"><label>Avatar của bạn<!--span class="red">*</span--></label></div>
			<div class="form_items_right"><input type="file" id="avatar" name="avatar" size="25" /></div>
		</div>
		<div class="cls"></div>
		<div class="form_items">
			<div class="form_items_left"><label>Đánh giá của bạn<span class="red">*</span></label></div>
			<div class="form_items_right"><textarea cols="23"  id="info" rows="5" name="info"><?php echo set_value('info'); ?></textarea></div>
		</div>
		<div class="cls"></div>
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
			<div class="form_items_right"><input type="submit" name="ok" id="ok" value="Đánh giá" class="subbs" style="margin:0px;" /><input type="reset" value="Xóa" class="subbs"/></div>
		</div>
	</form>
</fieldset>