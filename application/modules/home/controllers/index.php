<?php
   class Index extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->model("model_posts");
	   }
	   public function index(){
		   $data['listcate']    = $this->listcate();
		   $data['config'] 		= $this->config();
		   $data['latestart']   = $this->new_posts();
		   $data['category'] 	= $this->listcago();
		   $data['phpbasic'] 	= $this->model_posts->phplist(3, 8); // php basic
		   $data['advance'] 	= $this->model_posts->phplist(4, 15); // php advanced
		   $data['yii2frame']	= $this->model_posts->phplist(5, 4); // php can ban
		   //$this->debug($data['yii2frame']);
		   $data['title'] 		= "Php web development tutorials, hatutorials.com";
		   $this->load->view("layout",$data);
	   }
	   public function view(){
		   $this->debug($this->online_view());
	   }
   }