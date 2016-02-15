<?php $this->load->view("menu");?>
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
	<div id="content_mid">
		<div id="content_mid_top"><a href="<?php echo base_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo base_url(); ?>hoi-dap.html">Hỏi đáp</a></div>
		<div id="content_mid_bottom">
			<div class="detail-question">
				<div class="detail-ask">
					<h2 class="question_title"><?php echo $result['question_title']; ?></h2>
					<p>Gửi bởi <span style="color:#F90"><?php echo $result['username'] ? $result['username'] : 'Nặc danh'; ?></span> lúc 06/08/2015 11:00</p>
					<?php
					//permistion
					$allowed = false;
					if($this->session->userdata('user_level') == 1){
						$allowed = true;
					}
					if($result['user_id'] == $this->session->userdata('user_id')){
						$allowed = true;
					}
					if($this->session->userdata('user_id') == null || ! $this->session->userdata('user_id')){
						$allowed = false;
					}
					?>
					<div class="question_info"><?php echo $result['question_info']; ?></div>
					<?php if($allowed){ ?>
					<div style="height:10px"></div>
					<p><a href="<?php echo base_url().'gui-cau-hoi.html?question_id='.$result['question_id']; ?>" class="reply edit-icon" style="color:red !important;margin-left:20px">Sửa bài viết</a></p>
					<?php } ?>
					<?php if($result['question_file']){ ?>
					<div style="height:10px"></div>
					<p><a href="javascript:void(0)" class="file-attack">File đính kèm</a></p>
					<br />
					<p><a href="<?php echo base_url().'uploads/data/'.$result['question_file']; ?>" target="_blank" style="float:right">(<?php echo $result['question_file']; ?>)</a></p>
					<?php } ?>
				</div>
				<div class="customer_items"></div>
				<div class="top-awn">
					<?php $this->load->view('layouts/list-answer'); ?>
				</div>
				<div class="form-asn">
					<div class="reply-show error-icon" style="color:red"></div>
				<?php $editor = false; ?>
				<?php if($this->session->userdata('user_id')){ ?>
					<div class="anwser" style="border:none">
						<div class="anwser-avatar">
							<img src="<?php echo base_url()."uploads/students/thumb/noavatar.png"; ?>" alt="<?php echo $this->session->userdata('user_name'); ?>" width="50" />
						</div>
						<script src="<?php echo base_url(); ?>public/ckeditor/ckeditor.js"></script>
						<?php if($this->input->get('editor', true)){ ?>
						<?php $editor = true; ?>
						<?php } ?>
						<div class="anwser-info" style="width:458px">
							<form action="javascript:void(0)" class="reply-form">
								<textarea cols="50" rows="3" id="reply" name="reply"><?php if($ansinfo){ echo $ansinfo['answer_info']; } ?></textarea>
								<?php if($editor || $ansinfo){ ?>
								<div style="height:7px"></div>
								<?php } ?>
								<input type="submit" name="send-mess" id="sendmess" class="send-mess"<?php if($editor || $ansinfo){ echo ' style="margin-left:200px;height:30px !important"';} ?> value="<?php echo $ansinfo ? 'Sửa bài' : 'Trả lời'; ?>" />
								<?php if($editor || $ansinfo){ ?>
									<script type="text/javascript">
										CKEDITOR.replace( 'reply' ,{
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
									<?php $editor = true; ?>
								<?php } ?>
							</form>
						</div>
						<?php if(empty($ansinfo)){ ?>
						<p style="padding-left:30px">
							<img src="<?php echo base_url(); ?>public/images/keyboard-icon.png" alt="Change keyboard" style="float:left;margin-right:3px" />
							<a href="<?php echo base_url(uri_string()); ?>.html<?php echo $editor ? '' : '?editor=true' ?>" id="change-keyboard"><?php echo $editor ? 'Chuyển về text-input cơ bản' : 'Chuyển sang bộ soạn thảo' ?></a>
						</p>
						<?php } ?>
						<div class="cls"></div>
					</div>
				<?php }else{ ?>
					<div style="height: 30px"></div>
				<p>Bạn cần phải <a href="<?php echo base_url(); ?>dang-nhap.html?return=<?php echo base_url(uri_string()); ?>.html">đăng nhập</a> mới có thể gửi câu trả lời</p>
				<?php } ?>
				</div>
			</div>
			<div class="send-ques">
				Gửi câu hỏi của bạn <a href="<?php echo base_url(); ?>gui-cau-hoi.html">tại đây</a>
			</div>
		</div>
	</div>
	<div id="content_right">
		<!--div id="news">
			<div class="news_top">
				<h2>CÂU HỎI LIÊN QUAN</h2>
			</div>
			<div class="news_bot" style="padding-top:10px">
				<ul class="relative">
				<?php if(isset($related)){ ?>
				<?php foreach($related as $items){ ?>
					<li><a href="<?php echo base_url().'hoi-dap/'.$items['question_rewrite'].'-'.$items['question_id']; ?>.html"><?php echo $items['question_title']; ?></a></li>
				<?php } } ?>
				</ul>
			</div>
		</div-->
		<div id="posts" style="margin-top:30px">
			<div class="post_title">
				<h2>CÂU HỎI MỚI</h2>
			</div>
			<div class="news_bot" style="padding-top:20px">
				<ul class="relative">
				<?php if(isset($related)){ ?>
				<?php foreach($related as $items){ ?>
					<li><a href="<?php echo base_url().'hoi-dap/'.$items['question_rewrite'].'-'.$items['question_id']; ?>.html"><?php echo $items['question_title']; ?></a></li>
				<?php } } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('input#sendmess').click(function(){
		var info = $('#reply').val();
		var allowed = 2;
		var encode = 1;
		var answer_id = 0;
		<?php if($ansinfo){ ?>
		var	allowed = 1;
		var answer_id = '<?php echo $ansinfo['answer_id']; ?>';
		<?php } ?>
		<?php if($editor){ ?>
		var encode = 2;
		var info = CKEDITOR.instances['reply'].getData()
		<?php } ?>
		var show = $('.reply-show');
		var question_id = '<?php echo $question_id; ?>';
		show.addClass('error-icon');
		if(info.length < 15){
			show.html('Nội dung quá ngắn');
			return false;
		}
		show.removeClass('error-icon');
		show.html("<img src='<?php echo base_url(); ?>public/images/loading.gif' />");

		setTimeout(function(){
			$.post('<?php echo base_url(); ?>home/ask/ajax', {question_id:question_id,info:info, encode:encode, allowed:allowed, answer_id:answer_id}, function(result){
				$('.reply-show').html('');
				if(result == 'delay'){
					show.addClass('error-icon');
					$('.reply-show').html('Quá nhanh, hãy đợi một phút sau');
					return false;
				}
				if(result  == 'true'){
					$('#reply').val('');
					$('.top-awn').load('<?php echo base_url(); ?>home/ask/loaddata', {id:question_id});
					<?php if($editor){ ?>
					CKEDITOR.instances['reply'].setData('');
					<?php } ?>
				}
			});
		}, 3000);
	});

	$(document).on('click','a.admin-del',function(){
		if(!confirm('Bạn có thật sự muốn xóa?')){
			return false;
		}
		var id = $(this).attr('title');
		var question_id = '<?php echo $question_id; ?>';
		$.post('<?php echo base_url().'home/ask/delete'; ?>', {id:id}, function(result){
			$('.top-awn').load('<?php echo base_url(); ?>home/ask/loaddata', {id:question_id});
		});

		return false;
	});

	$(document).on('click','.reply-vote span',function(){
		var type = $(this).attr('data-type');
		var answer_id = $(this).parent().attr('data-id');
		var user_id = '<?php echo $this->session->userdata('user_id'); ?>';

		if(user_id == '' || user_id == null){
			alert('Bạn cần phải đăng nhập trước!');
			window.location.href = '<?php echo base_url(); ?>dang-nhap.html?return=<?php echo base_url(uri_string()); ?>.html';
		}

		//submit value
		$.post('<?php echo base_url(); ?>home/vote', {user_id:user_id, type:type, answer_id:answer_id}, function(result){
			//var data = jQuery.parseJSON(result);
			var question_id = '<?php echo $question_id; ?>';
			$('.top-awn').load('<?php echo base_url(); ?>home/ask/loaddata', {id:question_id});
			//$(".reply-vote span[data-type="+type+"]").html(data);
		});
	});

	$(document).on('click','a#change-keyboard',function(){
		var info = $('#reply').val();
		<?php if($editor){ ?>
		var info = CKEDITOR.instances['reply'].getData();
		<?php } ?>
		var url = $(this).attr('href');
		if(info.length > 0)
		{
			if(!confirm('Bạn chưa hoàn thành xong bài viết, bạn có muốn chuyển không?')){
				return false;
			}
		}
		window.location.href = url;
	});
});
</script>