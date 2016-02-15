<?php $this->load->view("menu"); ?>
<style type="text/css">
#content_mid .form_items_right{width: 550px}
</style>
<script type="text/javascript">window.history.forward();function no_back(){window.history.forward();}</script>
<script src="<?php echo base_url(); ?>public/ckeditor/ckeditor.js"></script>
<div onload="no_back();" onpageshow="if (event.persisted) no_back();" onunload=""></div>
<div id="content">
	<div id="content_left">
		<?php $this->load->view("layouts/menu-ask"); ?>
		<!-- student here -->
		<?php $this->load->view("homes/students"); ?>
		<!-- student here -->
		<div id="content_left_end">
			<?php $this->load->view("homes/review"); ?>
		</div>
	</div>
	<div id="content_mid" style="width:770px">
		<div id="content_mid_top"><a href="<?php echo base_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>hoi-dap.html">Hỏi đáp</a> &raquo; <a href="<?php echo base_url(); ?>gui-cau-hoi.html">Gửi câu hỏi</a></div>
		<div id="content_mid_bottom">
			<div class="customer_title" style="line-height:18px;">
				Nếu bạn có thắc mắc cần giải đáp hay gửi câu hỏi của bạn, mọi người sẽ support bạn. Đây là hệ thống hỏi đáp đơn giản
				chưa thực sự đầy đủ chức năng. Bạn phải đăng nhập mới có thể gửi câu hỏi
			</div>
			<div class="customer_content" style="margin-top:20px">
				<?php if($status == true){ ?>
				<fieldset style="padding:20px 40px;border:1px solid #DDD;border-radius: 5px">
					<legend style="color:#F60;font-weight:bold">CÂU HỎI CỦA BẠN</legend>
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
							<div class="form_items_left"><label>Tiêu đề<span class="red">*</span></label></div>
							<div class="form_items_right"><input type="text" name="question_title" value="<?php echo set_value('question_title', isset($info['question_title']) ? $info['question_title'] : ''); ?>" size="40" /></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Thuộc mục</label></div>
							<div class="form_items_right">
								<select name="cate_id" style="height:27px">
									<option value="">- Tất cả -</option>
									<?php
									$checked =  null;
									if (isset($listcate)) {
										foreach ($listcate as $cate) {
											echo "<option value='".$cate['cate_id']."'";
											if(isset($_POST['cate_id']) && $_POST['cate_id'] == $cate['cate_id'] || isset($info['cate_id']) && $info['cate_id'] == $cate['cate_id']){
												echo "selected = 'selected'";
											}
											echo ">".$cate['cate_name']."</option>";
										}
									}
									?>
								</select>
							</div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>File đính kèm<!--span class="red">*</span--></label></div>
							<div class="form_items_right"><input type="file" name="question_file" size="25" /><span style="color:red"> (Cho phép jpg|png|gif|rar|zip không quá 1mb)</span></div>
						</div>
						<div class="cls"></div>
						<div class="form_items">
							<div class="form_items_left"><label>Câu hỏi của bạn<span class="red">*</span></label></div>
							<div class="form_items_right">
								<textarea cols="43" rows="7" name="question_info"><?php echo set_value('question_info', isset($info['question_info']) ? $info['question_info'] : ''); ?></textarea>
							</div>
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
							<div class="form_items_right"><input type="submit" name="submit" value="Gửi câu hỏi" class="subbs" style="margin:0px;" /><input type="reset" value="Xóa" class="subbs"/></div>
						</div>
					</form>
				</fieldset>
				<?php }else{ ?>
				<p>Bạn cần phải <a href="<?php echo base_url(); ?>dang-nhap.html?return=<?php echo base_url(uri_string()); ?>.html">đăng nhập</a>(kích hoạt tài khoản) mới có thể gửi câu hỏi</p>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--div id="content_right">
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
	</div-->
</div>
<script type="text/javascript">
 CKEDITOR.replace( 'question_info' ,{
              extraPlugins : 'syntaxhighlight',
              toolbar: [
                     ['Source'] ,
					 ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','/' ],
					 ['Image'],
                     ['Bold', 'Italic','Strike', '-', 'NumberedList', 'BulletedList','-','About'] ,
                     ['Syntaxhighlight']
                   ]
            });
</script>