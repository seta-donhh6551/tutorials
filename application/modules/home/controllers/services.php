<?php
   class Services extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("mindex");
	   }
	   public function index(){	
		   $data['support'] 	= $this->support();
		   $data['access'] 		= $this->access();
		   $data['online'] 		= $this->online();
		   $data['config'] 		= $this->config();
		   $data['customer'] 	= $this->customer();
		   $data['service'] 	= $this->mindex->services();
		   $data['listcate'] 	= $this->mindex->listcate();
		   $data['eq'] 			= "2";
		    $data['topeq'] 			= "10";
		   $data['title'] 		= "Dịch vụ";
		   $this->load->view("services/layout",$data);
	   }
   }