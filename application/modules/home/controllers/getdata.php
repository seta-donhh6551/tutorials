<?php
	class Getdata extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->model("mpro");
		}
		public function index(){
			$id = $this->uri->segment(4);
			$data = $this->mpro->detail($id);
			echo $data['pro_info'];
		}
		public function kt(){
			$id = $this->uri->segment(4);
			$data = $this->mpro->detail($id);
			echo $data['pro_full'];
		}
		public function tn(){
			$id = $this->uri->segment(4);
			$data = $this->mpro->detail($id);
			echo $data['pro_ext'];
		}
		public function dl(){
			$id = $this->uri->segment(4);
			$data = $this->mpro->detail($id);
			echo $data['pro_dl'];
		}
	}