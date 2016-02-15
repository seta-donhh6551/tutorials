<?php
	class Search extends MY_Controller{
	    public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("mpro");
	    }
		public function index(){
			$name = $this->input->post("keywords");
			$config['base_url'] = base_url().'vn/search/index/';
		    $config['total_rows'] = $this->mpro->count_all_search($name);
		    $config['per_page'] = 1;
		    $config['uri_segment'] = 4;
		    $config['next_link'] = "Next";
		    $config['prev_link'] = "Prev";
		    $this->load->library("pagination",$config);
		    $start = (int)$this->uri->segment(4);			
			$data['menu'] = $this->menu();
		    $data['menuintro'] = $this->menu_intro();
		    $data['menustreng'] = $this->menu_streng();
		    $data['menukt'] = $this->menu_kt();
		   $data['support'] = $this->support();				
			$data['results'] = $this->mpro->search($name,$config['per_page'],$start);
			$data['title'] = "Kết quả tìm kiếm";
			$this->load->view("search/layout",$data);
		}		
		public function ajax(){
			$id = $this->input->get("id");
			$this->load->model("mcate");
			$data = $this->mcate->get_menu_cago($id);
			echo "<select name='loai2'>";
			foreach($data as $item){
				echo "<option value='".$item['cago_id']."'>".$item['cago_name']."</option>";
			}
			echo "</select>";
		}
	}