<?php
   class Index extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->model("model_posts");
	   }
	   public function index(){	
		   $data['listcate']    = $this->listcate();
		   $data['support'] 	= $this->support();
		   $data['access'] 		= $this->access();
		   $data['online'] 		= $this->online();
		   $data['students']    = $this->random_student();
		   $this->write($data['access']);
		   $data['config'] 		= $this->config();
		   $data['newest'] 		= $this->new_posts();
		   $data['category'] 	= $this->listcago();
		   $data['educations']  = $this->eudcations();
		   $data['phpbasic'] 	= $this->model_posts->phplist(3); // php can ban
		   $data['advance'] 	= $this->model_posts->phplist(4,15); // php can ban
		   $data['phpfw'] 		= $this->model_posts->phplist(5); // php can ban
		   $data['training'] 	= $this->model_posts->phplist(6);
		   $data['htmlcss'] 	= $this->model_posts->phplist(1); // training 
		   $data['hphphtml']    = $this->model_posts->getname(1);
		   $data['hphpbasic']   = $this->model_posts->getname(3);
		   $data['hphpadvan']   = $this->model_posts->getname(4); 
		   $data['hphpframe']   = $this->model_posts->getname(5);
		   $data['hphptrain']   = $this->model_posts->getname(6);
		   $data['subjects']    = $this->model_home->subjects();
		   $data['times'] = $this->listtimes();
		   //$this->debug($data['times']);
		   $data['eq'] 			= "0";
		   $data['topeq'] 			= "10";
		   $data['title'] 		= "Lập trình PHP &amp; MYSQL";
		   $this->load->view("layout",$data);
	   }
	   public function view(){
		   $this->debug($this->online_view());
	   }
   }