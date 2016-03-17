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
		   $data['config'] = $this->config();
		   $data['latestart'] = $this->new_posts();
		   $data['listcate'] = $this->listcate();
		   $data['ranposts'] = $this->random_posts();
		   $data['link'] = base_url().uri_string().".html";
		   $data['result'] = $this->model_posts->detail($id);
		   if($data['result'] == NULL){
		   		redirect(base_url());
		   }
		   $data['catename'] = $this->model_posts->getname($data['result']['cate_id']);
		   $data['relate'] = $this->model_posts->relate($id,$data['result']['cate_id'],"10");
           $data['prepost'] = $this->model_posts->getPreNextPost($id, $data['result']['cate_id'], '<');
           $data['nextpost'] = $this->model_posts->getPreNextPost($id, $data['result']['cate_id']);
		   $data['title']  = $data['result']['post_title'];
		   $data['rewrite'] = $data['catename']['cate_rewrite'];

		   $this->load->view("posts/layout",$data);
	   }
   }