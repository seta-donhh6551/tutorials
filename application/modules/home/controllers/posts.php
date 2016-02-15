<?php
   class Posts extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("model_posts");	   
	   }
	   public function view(){
		   $id1 = $this->fillter($this->uri->segment(2));
		   $id = array_pop(explode('-', $id1));
		   $data['support'] 	= $this->support();
		   $data['access'] 		= $this->access();
		   $data['online'] 		= $this->online();
		   $data['config'] 		= $this->config();
		   $data['newest'] 		= $this->new_posts();
		   $data['listcate'] = $this->listcate();
		   $data['link']       = base_url().uri_string().".html";
		   $data['read'] = $this->model_posts->detail($id);
		   $data['students']    = $this->random_student();
		   if($data['read'] == NULL){
		   		redirect(base_url());
				exit();
		   }
           $data['eq'] 			= "2";
		   $data['subjects']    = $this->model_home->subjects();
		   $data['catename'] = $this->model_posts->getname($data['read']['cate_id']);
		   $data['relate'] = $this->model_posts->relate($id,$data['read']['cate_id'],"10");
		   $data['title']  = $data['read']['post_title'];
		   $data['rewrite'] = $data['catename']['cate_rewrite'];
		   $this->load->view("posts/layout",$data);
	   }
   }