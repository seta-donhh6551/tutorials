<script type="text/javascript">
	$(document).ready(function(){
		var $items = $("ul#menu li a");
		$items.eq(<?php if(isset($act)){echo $act;}else{ echo 0;} ?>).addClass("selected_lk");
	});
</script>
<div id="header_main_menu">
		<span id="header_main_menu_bg"></span>
		<!--[if !IE]>start header<![endif]-->
		<div id="header">
			<div class="inner">
				<h1 id="logo"><a href="<?php echo base_url()."admin/index"; ?>"><img src="<?php echo base_url(); ?>public/images/logo.png" /></a></h1>
				
				<!--[if !IE]>start user details<![endif]-->
				<div id="user_details">
					<ul id="user_details_menu">
						<li class="welcome">Welcome <strong>Administrator (<a class="new_messages" href="#">1 new message</a>)</strong></li>
						
						<li>
							<ul id="user_access">
								<li class="first"><a href="<?php echo base_url()?>" target="_blank">View home</a></li>
								<li class="last"><a href="<?php echo base_url()."admin/verify/logout";?>">Log out</a></li>
							</ul>
						</li>
						
						
					</ul>
					
					<div id="server_details">
						<dl>
							<dt>Server time :</dt>
							<dd>9:22 AM | 03/04/2009</dd>
						</dl>
						<dl>
							<dt>Last login ip :</dt>
							<dd>192.168.0.25</dd>
						</dl>
					</div>
					
				</div>
				
				<!--[if !IE]>end user details<![endif]-->
			</div>
		</div>
		<!--[if !IE]>end header<![endif]-->
		
		<!--[if !IE]>start main menu<![endif]-->
		<div id="main_menu">
			<div class="inner">
			<ul id="menu">
				<li>
					<a href="<?php echo base_url()."admin/index"; ?>"><span class="l"><span></span></span><span class="m"><em>Trang chủ</em><span></span></span><span class="r"><span></span></span></a></li>
                <li>
                    <a href="<?php echo base_url()."admin/articles"; ?>"><span class="l"><span></span></span><span class="m"><em>Menu home</em><span></span></span><span class="r"><span></span></span></a>
                    <ul>
						<li><a href="<?php echo base_url()."admin/students"; ?>"><span class="l"><span></span></span><span class="m"><em>Ý kiến học viên</em><span></span></span><span class="r"><span></span></span></a></li>
						<li><a href="<?php echo base_url()."admin/support"; ?>"><span class="l"><span></span></span><span class="m"><em>Support</em><span></span></span><span class="r"><span></span></span></a></li>
                        <li><a href="<?php echo base_url()."admin/subjects"; ?>"><span class="l"><span></span></span><span class="m"><em>Khóa học</em><span></span></span><span class="r"><span></span></span></a></li>
                        <li><a href="<?php echo base_url()."admin/education"; ?>"><span class="l"><span></span></span><span class="m"><em>Đào tạo</em><span></span></span><span class="r"><span></span></span></a></li>
                        <li><a href="<?php echo base_url()."admin/content"; ?>"><span class="l"><span></span></span><span class="m"><em>Học PHP</em><span></span></span><span class="r"><span></span></span></a></li>
                        <li><a href="<?php echo base_url()."admin/contact"; ?>"><span class="l"><span></span></span><span class="m"><em>Liên hệ</em><span></span></span><span class="r"><span></span></span></a></li>
					</ul>
                </li>
				<li>
					<a href="<?php echo base_url()."admin/user"; ?>"><span class="l"><span></span></span><span class="m"><em>Thành viên</em><span></span></span><span class="r"><span></span></span></a>
                   	<!--ul>
						<li><a href="<?php echo base_url()."admin/user"; ?>" class="selected_lk"><span class="l"><span></span></span><span class="m"><em>Danh sách thành viên</em><span></span></span><span class="r"><span></span></span></a></li>
						<li><a href="<?php echo base_url()."admin/user/add"; ?>"><span class="l"><span></span></span><span class="m"><em>Thêm mới</em><span></span></span><span class="r"><span></span></span></a></li>
					</ul-->
				</li>
				<li><a href="<?php echo base_url()."admin/cate"; ?>"><span class="l"><span></span></span><span class="m"><em>Chuyên mục</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url()."admin/news"; ?>"><span class="l"><span></span></span><span class="m"><em>Tin tức</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url()."admin/products"; ?>"><span class="l"><span></span></span><span class="m"><em>Sản phẩm</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url()."admin/posts"; ?>"><span class="l"><span></span></span><span class="m"><em>Bài viết</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url()."admin/intro/index"; ?>"><span class="l"><span></span></span><span class="m"><em>Giới thiệu</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url()."admin/contact/index"; ?>"><span class="l"><span></span></span><span class="m"><em>Liên hệ</em><span></span></span><span class="r"><span></span></span></a></li>
                <li><a href="<?php echo base_url()."admin/config"; ?>"><span class="l"><span></span></span><span class="m"><em>Cấu hình</em><span></span></span><span class="r"><span></span></span></a></li>
			</ul>
			</div>
			<span class="sub_bg"></span>
		</div>
		<!--[if !IE]>end main menu<![endif]-->
		
		</div>