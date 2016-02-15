<div id="content_left_menu">
	<div id="left_menu_top">
		<h2>MENU HỎI ĐÁP</h2>
	</div>
	<div id="left_menu_mid">
		<ul>
			<li><a href="<?php echo base_url(); ?>hoi-dap.html" title="Hỏi đáp PHP"></a></li>
			<?php
			if (isset($listcate)) {
				foreach ($listcate as $cate) {
					echo "<li><a href='".base_url().'hoi-dap/'.$cate['cate_rewrite'].".html' title='$cate[cate_name]'>" . $cate['cate_name'] . "</a></li>";
				}
			}else{
				echo "<li>Không có dữ liệu</li>";
			}
			?>
		</ul>
		<div class="cls"></div>
	</div>
	<div id="left_menu_bot"></div>
</div>