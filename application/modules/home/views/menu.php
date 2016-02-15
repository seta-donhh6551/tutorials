<div id="menu">
    <ul>
        <li><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a></li>
		<li style="position:relative">
			<a href="<?php echo base_url(); ?>hoi-dap.html" title="Hỏi Đáp">Hỏi Đáp</a><img style="position:absolute;top:0px;right:5px" src="<?php echo base_url(); ?>public/images/new_icon.gif" />
			<div class="dropdown">
				<ul>
					<li><a href="<?php echo base_url(); ?>gui-cau-hoi.html" title="Gửi câu hỏi">Gửi câu hỏi</a></li>
				</ul>
			</div>
		</li>
        <li><a href="javascript:void(0)" title="PHP & Mysql">PHP & Mysql</a>
            <div class="dropdown">
            <ul>
            <?php
            if (isset($listcate)) {
                foreach ($listcate as $categories) {
                    echo "<li><a href='".base_url().$categories['cate_rewrite'].".html' title='$categories[cate_name]'>".$categories['cate_name'] . "</a></li>";
                }
            }
            ?>
            </ul>
            </div>
        </li>
        <li><a href="<?php echo base_url(); ?>khoa-hoc.html" title="Khóa học thiết kế web - lập trình PHP tại Hà Nội">Khóa học</a>
            <div class="dropdown">
                <ul>
					<?php
					if (isset($subjects)) {
						foreach ($subjects as $subje) {
							echo "<li><a href='" . base_url() . "khoa-hoc/" . $subje['subject_rewrite'] . "/" . $subje['subject_id'] . ".html' title='" . $subje['subject_title'] . "'>" . $subje['subject_title'] . "</a></li>";
						}
					}
					?>
                </ul>
            </div>
        </li>
        <li><a href="<?php echo base_url(); ?>lich-hoc.html" title="Lịch học thiết kế web - lập trình PHP tại North Star">Lịch học</a>
            <div class="dropdown">
                <ul>
					<?php if (isset($times)) {
						foreach ($times as $edu) {
							?>
							<li><a href="<?php echo base_url() . "lich-hoc/" . $edu['education_rewrite']; ?>.html" title="<?php echo $edu['education_title']; ?>"><?php echo $edu['education_title']; ?></a></li>
						<?php }
					}
					?>
                </ul>
            </div>
        </li>
        <li><a href="<?php echo base_url(); ?>danh-gia-cua-hoc-vien.html" title="Ý kiến của học viên">Ý kiến học viên</a></li>
        <li><a href="javascript:void(0)" title="Tin công nghệ">Công nghệ</a>
            <div class="dropdown">
                <ul>
					<?php
					if (isset($category)) {
						foreach ($category as $catego) {
							echo "<li><a href='" . base_url() . "cong-nghe/" . $catego['cago_rewrite'] . "-" . $catego['cago_id'] . ".html' title='" . $catego['cago_name'] . "'>" . $catego['cago_name'] . "</a></li>";
						}
					}
					?>
                </ul>
            </div>
        </li>
        <li><a href="javascript:void(0)" title="Liên hệ">Liên hệ</a>
            <div class="dropdown">
                <ul>
                    <li><a href="<?php echo base_url(); ?>gioi-thieu.html" title="Giới thiệu">Giới thiệu</a></li>
                    <li><a href="<?php echo base_url(); ?>lien-he.html" title="Liên hệ học thiết kế web">Liên hệ</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div id="user_info">
	<ul>
		<li style="border:none;padding:0px"><img src="<?php echo base_url(); ?>public/images/user-small-icon.png" /></li>
		<?php if($this->session->userdata('user_id')){ ?>
		<li>Xin chào <span style="color:red"><?php echo $this->session->userdata('user_name'); ?></span></li>
		<li><a href="<?php echo base_url(); ?>doi-mat-khau.html">Đổi mật khẩu</a></li>
		<li><a href="<?php echo base_url(); ?>logout.html">Thoát</a></li>
		<?php }else{ ?>
		<li style="padding-left:5px"><a href="<?php echo base_url(); ?>dang-ky.html">Đăng ký</a></li>
		<li><a href="<?php echo base_url(); ?>dang-nhap.html">Đăng nhập</a></li>
		<?php } ?>
	</ul>
</div>