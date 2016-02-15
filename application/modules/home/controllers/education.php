<?php
   class Education extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->model("model_technology");
	   }
	   public function index(){
	   	   $data['newest'] 		= $this->new_posts();
		   $data['support'] 	= $this->support();
		   $data['access'] 		= $this->access();
		   $data['online'] 		= $this->online();
		   $data['config'] 		= $this->config();
		   $data['listcate'] 	= $this->listcate();
		   $data['times'] = $this->listtimes();
		   $data['result'] 		= $this->model_home->education();
		   $data['category']    = $this->model_technology->listcago();
		   $data['students']    = $this->random_student();
		   $data['subjects']    = $this->model_home->subjects();
		   $data['eq'] 			= "3";
		   $data['topeq'] 		= "3";
		   $data['title'] 		= "Khoá học thiết kế web - lập trình PHP &amp; MYSQL ở Hà Nội";
		   $this->load->view("education/layout",$data);
	   }
   }