<?php
class Index extends MY_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_posts");
	}
	public function index(){
		$data['listcate']   = $this->listcate();
		$data['config'] 	= $this->config();
		$data['latestart']  = $this->new_posts();
		$data['category'] 	= $this->listcago();
		$data['ranposts']	= $this->random_posts();
		$data['phpbasic'] 	= $this->model_posts->phplist(7, 8); // php basic
		$data['advance'] 	= $this->model_posts->phplist(9, 15); // codeigniter
		$data['yii2frame']	= $this->model_posts->phplist(5, 4); // yii2 fw
		$data['hosting']	= $this->model_posts->phplist(6, 4); // yii2 fw
		$data['title'] 		= "Php web development tutorials, hatutorials.com";
		$this->load->view("layout",$data);
	}
	public function view(){
		$this->debug($this->online_view());
	}
}