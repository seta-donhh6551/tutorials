<?php
	require("libraries/student.php");
	class Document extends Student{
		public function __construct(){
			parent::__construct();
			$this->load->model("mindex");
		}
		public function index(){
			$config['base_url'] = base_url().'admin/document/index/';
			$config['total_rows'] = $this->mindex->count_all_doc();
			$config['per_page'] = 5;
			$config['uri_segment'] = 4;
			$this->load->library("pagination");
			$this->pagination->initialize($config); 
			$start = $this->uri->segment(4);
			$data['title']="Quản lý tài liệu nội bộ";
			$data['data']['info']= $this->mindex->list_doc($config['per_page'],$start);
			$data['template'] = "document/list_doc";
			$this->load->view("layout",$data);
		}
		public function add(){
			$this->load->helper("form");
			$this->load->library("form_validation");
			$data['data'] = "";
			$data['title'] = "Thêm mới tài liệu";
			$data['template'] = "document/add_doc";
			if($this->input->post("ok") != ""){
				$this->form_validation->set_rules("doc_title","Tên tài liệu","required|min_length[5]");
				$this->form_validation->set_rules("doc_value","Nội dung","required");
				if($this->form_validation->run() == FALSE){
					$this->load->view("layout",$data);
				}else{
					  $db = array(
							"doc_title" => $this->input->post("doc_title"),
							"doc_title_en" => $this->input->post("doc_title_en"),
							"doc_value" => $this->input->post("doc_value"),
							"doc_value_en" => $this->input->post("doc_value_en"),							
							"type_id" => $this->input->post("doc_type")
						);
					$this->mindex->add_doc($db);
				    redirect(base_url()."admin/document/index");
				}
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function update(){
			$id = $this->uri->segment(4);
			$this->load->helper("form");
			$this->load->library("form_validation");
			$data['data'] = "";
			$data['title'] = "Sửa tài liệu";
			$data['template'] = "document/edit_doc";
			$data['data']['info'] = $this->mindex->getdata($id);
			if($this->input->post("ok") != ""){
				$this->form_validation->set_rules("doc_title","Tên tài liệu","required|min_length[5]");
				$this->form_validation->set_rules("doc_value","Nội dung","required");
				if($this->form_validation->run() == FALSE){
					$this->load->view("layout",$data);
				}else{
					  $db = array(
							"doc_title" => $this->input->post("doc_title"),
							"doc_title_en" => $this->input->post("doc_title_en"),
							"doc_value" => $this->input->post("doc_value"),
							"doc_value_en" => $this->input->post("doc_value_en"),							
							"type_id" => $this->input->post("doc_type")
						);
					$this->mindex->update_doc($id,$db);
				    redirect(base_url()."admin/document/index");
				}
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function del(){
			$id =  $this->uri->segment(4);
			$this->mindex->del_doc($id);
			redirect(base_url()."admin/document/index");
		}
	}