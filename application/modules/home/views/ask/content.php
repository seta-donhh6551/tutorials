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
            	<div class="customer_title">
                	<div><h3 style="color:#F60">TRANG HỎI ĐÁP PHP MYSQL</h3></div>
                    <div style="margin:7px 0px;">
						<p>Đơn giản là một trang hỏi đáp nho nhỏ hỗ trợ các bạn mới tìm hiểu về lập trình Web lập trình PHP, chỉ khi là thành viên bạn mới có thể gửi câu hỏi</p>
					</div>
					<div style="margin:10px 0px;padding-right:20px;float:right"><a href="<?php echo base_url(); ?>gui-cau-hoi.html"><img src="<?php echo base_url()."public/images/question-icon.png"; ?>" width="30" style="float:left" alt="Gửi câu hỏi" />Gửi câu hỏi</a></div>
					<div style="clear:both"></div>
					<div class="customer_items"></div>
                </div>
				<div style="margin:10px 0px;padding-top:10px"></div>
                <div class="customer_content">
	            <?php if(isset($listall) && $listall != NULL){ ?>
				<?php foreach($listall as $items){ ?>
					<div class="question">
						<div class="ques_avatar" style="text-align:center">
							<img src="<?php echo base_url()."uploads/students/thumb/noavatar.png"; ?>" alt="<?php echo $items['username']; ?>" class="user_avatar" />
							<h3><?php echo $items['username']; ?></h3>
						</div>
						<div class="ques_info">
							<h3><a href="<?php echo base_url().'hoi-dap/'.$items['question_rewrite'].'-'.$items['question_id']; ?>.html"><?php echo $items['question_title'] ?></a></h3>
							<p style="margin-bottom:5px"><i>Gửi bởi <?php echo $items['username'] ? $items['username'] : 'Nặc danh'; ?> lúc <?php echo date('d/m/Y H:i', strtotime($items['created_date'])); ?></i></p>
							<p>Lượt xem : <?php echo $items['question_views']; ?> - Bình luận <?php echo $items['total_comment']; ?></p>
							<!--p><?php echo $items['question_info']; ?></i></p-->
							<?php
							//permistion
							$allowed = false;
							if($this->session->userdata('user_level') == 1){
								$allowed = true;
							}
							if($items['user_id'] == $this->session->userdata('user_id')){
								$allowed = true;
							}
							if($this->session->userdata('user_id') == null || ! $this->session->userdata('user_id')){
								$allowed = false;
							}
							?>
							<?php if($allowed){ ?>
							<a href="<?php echo base_url().'gui-cau-hoi.html?question_id='.$items['question_id']; ?>" class="reply edit-icon" style="color:red !important;margin-left:20px">Sửa bài viết</a>
							<?php } ?>
							<a href="<?php echo base_url().'hoi-dap/'.$items['question_rewrite'].'-'.$items['question_id']; ?>.html" class="reply">Trả lời</a>
						</div>
						<div class="cls"></div>
					</div>
	            <?php } } ?>
	            </div>
				<div id="pagination"><?php echo $this->pagination->create_links(); ?></div>
				<div class="send-ques">
					Gửi câu hỏi của bạn <a href="<?php echo base_url(); ?>gui-cau-hoi.html">tại đây</a>
				</div>
            </div>
        </div>
    	<div id="content_right">
          	<div id="news">
            	<div class="news_top">
                	<h2>TIN TỨC</h2>
                </div>
            	<div class="news_bot">
                	<?php $this->load->view("homes/news");?>
                </div>
            </div>
          	<div id="posts">
            <?php $this->load->view("homes/new_post");?>
            </div>
        </div>
    </div>