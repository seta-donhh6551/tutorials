<?php
   class Project extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("mproject");
		   $this->load->model("mindex");
	   }
	   public function index(){
	   	   $segment_1 = (int)$this->uri->segment(3);
		   $id = array_pop(explode('-', $segment_1));
		   $segment_2 = (int)$this->uri->segment(4);
		   $start = array_pop(explode('-', $segment_2));
		   $action = array("trang");
		   $getVar = $this->uri->uri_to_assoc(2, $action);
		   $config['base_url'] = base_url()."vn/du-an/".$getVar['du-an']."";
		   $config['total_rows'] = $this->mproject->count_all($id);
		   $config['per_page'] =6;
		   $config['uri_segment'] = 4;
		   $config['next_link'] = "Next";
		   $config['prev_link'] = "Prev";
		   $this->load->library("pagination",$config);
		   //$start = (int)$this->uri->segment(5);
		   $data['listnews'] = $this->listnews();
		   $data['menu'] = $this->menu();
		   $data['project'] = $this->projectabc();
		   $data['doc'] = $this->documents();
		   $data['results'] = $this->mproject->listall($id,$config['per_page'],$start);
		   $ok = $this->mproject->getcate($id);
		   if($ok == NULL){
		   		redirect(base_url());
		   		exit();
		   }
		   $data['title'] = $ok['cate_name'];
		   $this->load->view("project/layout",$data);
	   }
	   public function view(){
	   		$id = (int)$this->uri->segment(4);
	   		$data['listnews'] = $this->listnews();
	   		$data['menu'] = $this->menu();
	   		$data['project'] = $this->projectabc();
	   		$data['doc'] = $this->documents();
	   		$data['detail'] = $this->mproject->detail($id);
	   		if($data['detail'] == NULL){
	   			redirect(base_url());
	   			exit();
	   		}
	   		$data['title'] = $data['detail']['pro_title'];
	   		$this->load->view("project/detail/layout",$data);
	   }
   }