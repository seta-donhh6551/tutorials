				<div class="section">
                <script type="text/javascript">
					function check(){
						if(document.sac.education_title.value == ""){
							alert("Vui lòng nhập tên chuyên mục!");
							document.sac.education_title.focus();
							return false;
						}
						if(isNaN(document.sac.education_order.value)){
							alert("Thứ tự chỉ được phép chữ số!");
							document.sac.education_order.focus();
							return false;
						}else{
							return true;
						}
					}
				</script>
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Quản lý lịch học</h2>
							</div>
						</div>
						<span class="title_wrapper_bottom"></span>
					</div>
					<!--[if !IE]>end title wrapper<![endif]-->
					
					<!--[if !IE]>start section content<![endif]-->
					<div class="section_content">
						<span class="section_content_top"></span>
						
						<div class="section_content_inner minheight">
                        	<div class="table_tabs_menu">
							<!--[if !IE]>start  tabs<![endif]-->
							<!--[if !IE]>end  tabs<![endif]-->

							</div>
				<!--[if !IE]>start table_wrapper<![endif]-->
							<div class="table_wrapper" style="background:none;">
								<div class="table_wrapper_inner">
                                	<div class="error_red"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
                                    <form action="<?php echo base_url()?>admin/education/update/<?php echo $list['education_id']?>" method="post" name="sac" onsubmit="return check()" enctype="multipart/form-data">
                                    	 <div class="form_items">
                                    		<div class="form_items_left">Tiêu đề môn học</div>
                                        	<div class="form_items_right"><input name="education_title" type="text" value="<?php echo $list['education_title']; ?>" size="35"></div>
                                   		 </div>
                                         <div class="form_items">
                                    		<div class="form_items_left">Thứ tự</div>
                                        	<div class="form_items_right"><input name="education_order" type="text" value="<?php echo $list['education_order']; ?>" size="35"></div>
                                   		 </div>
                                         <div class="form_items">
                                    		<div class="form_items_left">Hình ảnh</div>
                                        	<div class="form_items_right">
                                            <?php
											if($list['education_image'] != NULL){
												echo "<img src='".base_url()."uploads/cate/".$list['education_image']."' width='130' />";
											}
											?>
                                            <input name="image" type="file" id="img" size="35" />
                                            </div>
                                   		 </div>
                                         <div class="form_items">
                                    		<div class="form_items_left">Mô tả</div>
                                        	<div class="form_items_right">
                                            <?php 
											$fck = new FCKeditor('education_info');
											$fck->BasePath = sBASEPATH;
											$fck->Value  = $list['education_info'];
											$fck->Width  = '100%';
											$fck->Height = 400;
											$fck->Create();
										   ?>
                                            </div>
                                   		 </div>
                                         <div class="form_items">
                                    		<div class="form_items_left">Chi tiết</div>
                                        	<div class="form_items_right">
                                            <?php 
											$fck = new FCKeditor('education_full');
											$fck->BasePath = sBASEPATH;
											$fck->Value  = $list['education_full'];
											$fck->Width  = '100%';
											$fck->Height = 400;
											$fck->Create();
										   ?>
                                            </div>
                                   		 </div>
                                         <div class="form_items">
                                    		<div class="form_items_left">&nbsp;</div>
                                        	<div class="form_items_right"><input type="submit" name="ok" id="ok" value="Edit now" class="magin"></div>
                                   		 </div>
                                    </form>
								</div>
							</div>
							<!--[if !IE]>end table_wrapper<![endif]-->
						</div>
						<span class="section_content_bottom"></span>
					</div>
					<!--[if !IE]>end section content<![endif]-->
				</div>