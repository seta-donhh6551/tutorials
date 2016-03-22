				<div class="section">
                <script type="text/javascript">
					function checkuser(){
						var form = document.sac;
						if(form.post_title.value == ""){
							alert("Vui lòng nhập tiêu đề tin");
							form.post_title.focus();
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
								<h2 class="menu_title">Thêm mới bài viết</h2>
							</div>
						</div>
						<span class="title_wrapper_bottom"></span>
					</div>
					<!--[if !IE]>end title wrapper<![endif]-->

					<!--[if !IE]>start section content<![endif]-->
					<div class="section_content">
						<span class="section_content_top"></span>

						<div class="section_content_inner">
                        	<div class="table_tabs_menu">
							<!--[if !IE]>start  tabs<![endif]-->
							<!--[if !IE]>end  tabs<![endif]-->

							</div>
				<!--[if !IE]>start table_wrapper<![endif]-->
							<div class="table_wrapper" style="background:none;">
								<div class="table_wrapper_inner">
                                	<div class="error_red"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?>
										<?php echo validation_errors();?>
									</div>
									<form action="<?php echo base_url();?>admin/posts/add" method="post" name="sac" onsubmit="return checkuser()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tiêu đề</div>
                                        <div class="form_items_right"><input name="post_title" type="text" id="post_title" size="35" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Thuộc mục</div>
                                        <div class="form_items_right">
                                        	<select name="cate_id">
											<?php
                                                foreach($listcate as $cate){
                                                    echo "<option value='".$cate['cate_id']."'>".$cate['cate_name']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Tác giả</div>
                                        <div class="form_items_right"><input name="post_author" type="text" id="post_author"  size="35" /></div>
                                    </div>
									<div class="form_items">
                                    	<div class="form_items_left">Trang thái</div>
                                        <div class="form_items_right">
											<input type="radio" name="post_status" value="1" checked="checked"/>Active
											<input type="radio" name="post_status" value="0" />Not Active
										</div>
                                    </div>
									<div class="form_items">
                                    	<div class="form_items_left">Keywords</div>
                                        <div class="form_items_right">
                                        <textarea name="post_keys" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Description</div>
                                        <div class="form_items_right">
                                        <textarea name="post_des" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Thứ tự</div>
                                        <div class="form_items_right">
                                        <input name="post_order" type="text" id="post_order" size="35" />
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Mô tả</div>
                                        <div class="form_items_right">
                                            <?php
											$fck = new FCKeditor('post_info');
											$fck->BasePath = sBASEPATH;
											//$fck->Value  = $get['post_info'];
											$fck->Width  = '100%';
											$fck->Height = 400;
											$fck->Create();
											?>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Nội dung chi tiết</div>
                                        <div class="form_items_right">
                                        	<?php
											$fck = new FCKeditor('post_value');
											$fck->BasePath = sBASEPATH;
											//$fck->Value  = $get['post_info'];
											$fck->Width  = '100%';
											$fck->Height = 400;
											$fck->Create();
											?>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Hình ảnh</div>
                                        <div class="form_items_right">
											<input type="file" name="img" size="25" />
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        	<input type="submit" name="ok" value="Add Post" class="magin"/>
                                            <input type="reset" name="Reset" id="button" value="Nhập Lại" class="magin"/>
                                        </div>
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