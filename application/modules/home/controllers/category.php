<?php

class Category extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("model_category");
		$this->load->helper("url");
	}

	public function index() {
		$item = $this->fillter($this->uri->segment(1));
		$data['result'] = $this->model_category->getdatabyrewrite($item);
		//$this->debug($result);
		if ($data['result'] == NULL) {
			redirect(base_url());
		}
		$id = $data['result']['cate_id'];
		$config['base_url'] = base_url() . $item;
		$config['total_rows'] = $this->model_category->count_all($id);
		$config['per_page'] = 15;
		$config['uri_segment'] = 2;
		$config['next_link'] = "<i class='td-icon-menu-right'></i>";
		$config['prev_link'] = "<i class='td-icon-menu-left'></i>";
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->load->library("pagination", $config);
		$start = (int) $this->uri->segment(2);
		$data['newest'] = $this->new_posts();
		$data['listcate'] = $this->listcate();
		$data['config'] = $this->config();
		$data['ranposts'] = $this->random_posts();
		$data['link'] = $item;
		$data['listall'] = $this->model_category->listall($id, $config['per_page'], $start);
		$data['category'] = $this->listcago();
		$data['hosting'] = $this->model_posts->phplist(6, 4); // yii2 fw
		$data['title'] = $data['result']['cate_title_seo'] != null ? $data['result']['cate_title_seo'] : $data['result']['cate_name'];
		$data['rewrite'] = $data['result']['cate_rewrite'];
		$this->load->view("category/layout", $data);
	}
}
