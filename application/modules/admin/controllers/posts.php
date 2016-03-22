<?php
	require("libraries/student.php");
  	class Posts extends Student{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->helper("form");
			$this->load->library("form_validation");
			$this->load->model("mposts");
			$this->load->library("string");
		}
		public function index(){
			$config['base_url'] = base_url().'admin/posts/index/';
			$config['total_rows'] = $this->mposts->count_all();
			$config['per_page'] = 10;
			$config['uri_segment'] = 4;
			$config['next_link'] = "Next";
			$config['prev_link'] = "Prev";
			$config['cur_tag_open'] = '<span class="curpage">';
			$config['cur_tag_close'] = '</span>';
			$this->load->library("pagination");
			$this->pagination->initialize($config);
			$start = $this->uri->segment(4);
			$data['title']="Quản lý bài viết";
			$data['act'] = 7;
			$data['data']['info']= $this->mposts->listall($config['per_page'],$start);
			$data['template'] = "posts/list_post";
			$this->load->view("layout",$data);
		}
		public function add(){
			$data['title'] = "Thêm bài viết";
			$data['template']  = "posts/add_posts";
			$data['data'] = "";
			$data['act'] = 7;
			$data['listcate'] = $this->mposts->listcate();
			if($this->input->post("ok") != ""){
				$this->form_validation->set_rules("post_title","Tiêu đề","min_length[5]");
				if($this->form_validation->run() == FALSE){
					$this->load->view("layout",$data);
				}else{
					  $url = str_replace(' ', '-',strtolower($this->string->replace($this->input->post('post_title'))));
					  $db = array(
							"post_title"   	=> $this->input->post("post_title"),
							"post_title_rewrite"  => $url,
							"post_author" 	=> $this->input->post("post_author"),
							"post_info" 	=> $this->input->post("post_info"),
							"post_value"	=> $this->input->post("post_value"),
							"post_keys"     => $this->input->post("post_keys"),
							"post_des"		=> $this->input->post("post_des"),
							"post_order"    => $this->input->post("post_order"),
							"post_status"   => $this->input->post("post_status"),
							"created_at"    => date('Y-m-d H:i:s'),
							"cate_id"		=> $this->input->post("cate_id")
						);
						if($_FILES['img']['name'] != NULL){
							$config['upload_path'] = './uploads/news';
							$config['allowed_types'] = 'gif|jpg|jpeg|png';
							$config['max_size']	= '1000';
							$config['max_width']  = '1024';
							$config['max_height']  = '1000';
							$this->load->library('upload',$config);
							if(!$this->upload->do_upload("img")){
								$data = array('error' => $this->upload->display_errors());
								$data['title'] = "Thêm bài viết";
								$data['template']  = "posts/add_posts";
								$data['data'] = "";
								$data['act'] = 7;
								$data['listcate'] = $this->mposts->listcate();
								$this->load->view("layout",$data);
								return FALSE;
							}else{
								$data = $this->upload->data();
								$db['post_image'] = $data['file_name'];
								$this->createThumbnail($db['post_image']);
							}
						 }
						 $this->mposts->add($db);
						 redirect(base_url()."admin/posts/index");
				}
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function update(){
			$id = $this->uri->segment(4);
			$data['title'] = "Sửa bài viết";
			$data['template']  = "posts/edit_posts";
			$data['data'] = "";
			$data['act'] = 7;
			$data['get'] = $this->mposts->getdata($id);
			$data['stt'] = $data['get']['cate_id'];
			$data['listcate'] = $this->mposts->listcate();
			if($this->input->post("ok") != ""){
				$this->form_validation->set_rules("post_title","Tiêu đề","min_length[5]");
				if($this->form_validation->run() == FALSE){
					$this->load->view("layout",$data);
				}else{
					  $url = str_replace(' ', '-',strtolower($this->string->replace($this->input->post('post_title'))));
					  $db = array(
							"post_title"   	=> $this->input->post("post_title"),
							"post_title_rewrite"   	=> $url,
							"post_author" 	=> $this->input->post("post_author"),
							"post_info" 	=> $this->input->post("post_info"),
							"post_value"	=> $this->input->post("post_value"),
							"post_keys"     => $this->input->post("post_keys"),
							"post_des"		=> $this->input->post("post_des"),
							"post_order"    => $this->input->post("post_order"),
							"post_status"   => $this->input->post("post_status"),
							"cate_id"		=> $this->input->post("cate_id")
					  );
						if($_FILES['img']['name'] != NULL){
							$config['upload_path'] = './uploads/news';
							$config['allowed_types'] = 'gif|jpg|jpeg|png';
							$config['max_size']	= '1000';
							$config['max_width']  = '1024';
							$config['max_height']  = '1000';
							$this->load->library('upload',$config);
							if(!$this->upload->do_upload("img")){
								$data = array('error' => $this->upload->display_errors());
								$data['title'] = "Sửa bài viết";
								$data['template']  = "posts/edit_posts";
								$data['data'] = "";
								$data['act'] = 7;
								$data['get'] = $this->mposts->getdata($id);
								$data['stt'] = $data['get']['post_id'];
								$data['listcate'] = $this->mposts->listcate();
								$this->load->view("layout",$data);
								return FALSE;
							}else{
								$data = $this->upload->data();
								$db['post_image'] = $data['file_name'];
								$this->createThumbnail($db['post_image']);
							}
						 }
						 $this->mposts->update($db,$id);
						 redirect(base_url()."admin/posts/index");
				}
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function del(){
			$id = $this->uri->segment(4);
			$data = $this->mposts->getdata($id);
			@unlink("./uploads/news/".$data['post_image']);
			$this->mposts->del($id);
			redirect(base_url()."admin/posts");
		}
		public function check_news($news){
			$id = $this->uri->segment(4);
			if($this->mposts->check_news($news,$id) == FALSE){
				$this->form_validation->set_message("check_news","Tin tức này đã tồn tại!");
				return FALSE;
			}else{
				return TRUE;
			}
		}
		public function createThumbnail($fileName){
			$this->load->library('image_lib');
			//$this->load->helper('thumbnail_helper');
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'uploads/news/'.$fileName;
			$config['new_image'] = 'uploads/news/thumb/'.$fileName;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['thumb_marker'] = FALSE;
			$config['width'] = 160;
			$config['height'] = 120;
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
		}
	}