<h3 style="color:#060">Có <?php echo count($listanswer); ?> câu trả lời</h3>
<div style="height: 20px"></div>
<?php foreach($listanswer as $items){ ?>
<div class="anwser">
	<?php if($this->session->userdata('user_level') == 1){ ?>
	<a href="javascript:void(0)" title="<?php echo $items['answer_id']; ?>" class="admin-del">Xóa</a>
	<?php } ?>
	<div class="anwser-avatar">
		<img src="<?php echo base_url()."uploads/students/thumb/noavatar.png"; ?>" alt="<?php echo $items['username']; ?>" width="50" />
		<p class="anwser-user"><?php echo $items['username']; ?></p>
	</div>
	<div class="anwser-info">
		<?php echo nl2br($items['answer_info']); ?>
		<?php $user_id = $this->session->userdata('user_id'); ?>
		<p class="reply-vote" data-id="<?php echo $items['answer_id']; ?>">
			<span data-type="1" class="<?php echo (isset($items['vote_user_id']) && $items['vote_user_id'] == $user_id) && (isset($items['vote_user_up']) && $items['vote_user_up'] == 1) ? 'vote-up-active' : 'vote-up'; ?>"><?php echo $items['vote_up'] != null ? $items['vote_up'] : 0 ; ?></span>
			<span data-type="2" class="<?php echo (isset($items['vote_user_id']) && $items['vote_user_id'] == $user_id) && (isset($items['vote_user_down']) && $items['vote_user_down'] == 1) ? 'vote-down-active' : 'vote-down'; ?>"><?php echo $items['vote_down'] != null ? $items['vote_down'] : 0; ?></span>
		</p>
		<?php
		if(isset($questionId)){
			$editUrl = base_url().'hoi-dap/sua-bai-viet-'.$questionId;
		}else{
			$editUrl = base_url(uri_string());
		}
		?>
		<p class="reply-date">
			<?php if($items['user_id'] == $this->session->userdata('user_id') || $this->session->userdata('user_level') == 1){ ?>
			<a href="<?php echo $editUrl; ?>.html?post_id=<?php echo $items['answer_id']; ?>" class="edit-icon" style="color:red;font-size:11px">Sửa bài viết</a> -
			<?php } ?>
			Trả lời lúc : <?php echo date('d/m/Y H:i', strtotime($items['answer_date'])); ?>
		</p>
	</div>
	<div class="cls"></div>
</div>
<?php } ?>