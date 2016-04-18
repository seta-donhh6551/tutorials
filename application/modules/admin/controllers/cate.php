<?php
require("libraries/student.php");
class Cate extends Student{
	public function __construct(){
		parent::__construct();
		$this->load->model("mcate");
		$this->load->model("mproducts");
		$this->load->library("string");
	}
	public function index(){
		$config['base_url'] = base_url().'admin/cate/index/';
		$config['total_rows'] = $this->mcate->count_all();
		$data['title']="Quản lý parent menu";
		$data['template'] = "cate/list_cate";
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['next_link'] = "Next";
		$config['prev_link'] = "Prev";
		$this->load->library("pagination");
		$this->pagination->initialize($config); 
		$start = $this->uri->segment(4);
		$data['data'] = "";
		$data['act'] = 3;
		$data['listcate']= $this->mcate->listcate($config['per_page'],$start);
		$this->load->view("layout",$data);
	}
	public function active(){
		$id   	= $this->uri->segment(4);
		$status	= $this->uri->segment(5);
		$db = array(
			"cate_status" => $status 
		);
		$this->mcate->update_status($db,$id);
		redirect(base_url()."admin/cate/");
	}
	public function add(){
		$this->load->helper("form");
		$this->load->library("form_validation");
		$data['title']="Thêm mới chuyên mục";
		$data['template'] = "cate/add_cate";
		$data['data'] = "";
		$data['act'] = 3;
		if($this->input->post("ok") != ""){
			$url = str_replace(' ', '-',strtolower($this->string->replace($this->input->post('cate_name'))));
			$value = array(
				"cate_name" => $this->input->post("cate_name"),
				"cate_title_seo" => $this->input->post("cate_title_seo"),
				"cate_rewrite" => $url,
				"cate_link" => $this->input->post("cate_link"),
				"cate_keys" => $this->input->post("cate_keys"),
				"cate_ext" => $this->input->post("cate_ext"),
				"cate_order" => $this->input->post("cate_order")
			);
			$check_cate = $this->mcate->checkcate($value['cate_name']);
			if($check_cate == TRUE){
				$data['error'] = "Chuyên mục này đã tồn tại";
				$this->load->view("layout",$data);
			}else{
				if($_FILES['images']['name'] != NULL){
					$config['upload_path'] = './uploads/cate';
					$config['allowed_types'] = 'jpg|png|jpeg|gif';
					$config['max_size']	= '1000';
					$config['max_width']  = '750';
					$config['max_height']  = '750';
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload("images")){
						$data = array('error' => $this->upload->display_errors());
						$data['title']="Thêm mới chuyên mục";
						$data['template'] = "cate/add_cate";
						$data['data'] = "";
						$data['act'] = 3;
						$this->load->view("layout",$data);
						return FALSE;
					}else{
						$data = $this->upload->data();
						$value['cate_images'] = $data['file_name'];
						$this->createThumbnail($value['cate_images']);
					}
				}
				$this->mcate->add($value);
				redirect(base_url()."admin/cate");
			}
		}else{
			$this->load->view("layout",$data);
		}
	}
	public function updatemn(){
		$id = $this->uri->segment(4);
		$data['title']="Sửa chuyên mục";
		$data['template'] = "cate/edit_cate";
		$data['data'] = "";
		$data['act'] = 3;
		$data['list'] = $this->mcate->getcate($id);
		if($this->input->post("ok") != ""){
			$url = str_replace(' ', '-',strtolower($this->string->replace($this->input->post('cate_name'))));
			$value = array(
				"cate_name" => $this->input->post("cate_name"),
				"cate_title_seo" => $this->input->post("cate_title_seo"),
				"cate_rewrite" => $url,
				"cate_link" => $this->input->post("cate_link"),
				"cate_keys" => $this->input->post("cate_keys"),
				"cate_ext" => $this->input->post("cate_ext"),
				"cate_order" => $this->input->post("cate_order")
			);
			$check_cate = $this->mcate->check_cate($value['cate_name'],$id);
			if($check_cate == TRUE){
				$data['error'] = "Chuyên mục này đã tồn tại";
				$this->load->view("layout",$data);
			}else{
				if($_FILES['images']['name'] != NULL){
					$config['upload_path'] = './uploads/cate';
					$config['allowed_types'] = 'jpg|png|jpeg|gif';
					$config['max_size']	= '1000';
					$config['max_width']  = '750';
					$config['max_height']  = '750';
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload("images")){
						$data = array('error' => $this->upload->display_errors());
						$data['title']="Sửa chuyên mục";
						$data['template'] = "cate/edit_cate";
						$data['data'] = "";
						$data['act'] = 3;
						$data['list'] = $this->mcate->getcate($id);
						$this->load->view("layout",$data);
						return FALSE;
					}else{
						$data = $this->upload->data();
						$value['cate_images'] = $data['file_name'];
						$this->createThumbnail($value['cate_images']);
					}
				}
				$this->mcate->updatemn($value,$id);
				redirect(base_url()."admin/cate/index");}
		}else{
			$this->load->view("layout",$data);
		}
	}
	public function delmn(){
		$id = $this->uri->segment(4);
		$data = $this->mcate->getcate($id);
		@unlink("uploads/cate/".$data['cate_images']);
		@unlink("uploads/cate/thumb/".$data['cate_images']);
		$this->mcate->delmn($id);
		redirect(base_url()."admin/cate/index");
	}
	public function createThumbnail($fileName){
		$this->load->library('image_lib');
		//$this->load->helper('thumbnail_helper');
		$config['image_library'] = 'gd2';
		$config['source_image'] = 'uploads/cate/'.$fileName;
		$config['new_image'] = 'uploads/cate/thumb/'.$fileName;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['thumb_marker'] = FALSE;
		$config['width'] = 130;
		$config['height'] = 130;
		$this->image_lib->initialize($config); 
		$this->image_lib->resize();
		$this->image_lib->clear();
	}
}