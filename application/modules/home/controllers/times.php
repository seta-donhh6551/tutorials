<?php
   class Times extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
	   }
	   public function index(){
	   	   $data['support'] 	= $this->support();
		   $data['access'] 		= $this->access();
		   $data['online'] 		= $this->online();
		   $data['config'] 		= $this->config();
		   $data['newest'] 		= $this->new_posts();
		   $data['listcate'] = $this->listcate();
		   $data['category'] 	= $this->listcago();
		   $data['students']    = $this->random_student();
		   $data['subjects'] = $this->model_home->subjects();
		   $data['times'] = $this->listtimes();
		   //$this->debug($data['times']);
		   $data['eq'] 			= "4";
		   $data['topeq'] 		= "2";
		   $data['title'] 		= "Lịch học của các lớp";
		   $this->load->view("times/layout",$data);
	   }
	   public function view(){
	   	   $id = $this->uri->segment(2);
		   $data['support'] 	= $this->support();
		   $data['access'] 		= $this->access();
		   $data['online'] 		= $this->online();
		   $data['config'] 		= $this->config();
		   $data['newest'] 		= $this->new_posts();
		   $data['listcate'] = $this->listcate();
		   $data['category'] 	= $this->listcago();
		   $data['students']    = $this->random_student();
		   $data['subjects'] = $this->model_home->subjects();
		   $data['times'] = $this->listtimes();
		   $data['eq'] 		= "3";
		   $data['topeq'] 	= "2";
		   $data['result'] = $this->model_home->getedution($id);
		   //$this->debug($data['result']);
		   if($data['result'] == NULL){ redirect(base_url());}
		   $data['title'] = $data['result']['education_title']." - Học thiết kế web - Lập trình PHP tại Hà Nội";
		   $data['linktit'] = $data['result']['education_title'];
		   $data['links'] = base_url().uri_string().".html";
		   $data['related'] = $this->model_home->edurelated($id);
		   //$this->debug($data['related']);
		   $this->load->view("times/detail/layout",$data);
	   }
   }