<?php
  	class Mcart extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getpro($id){
			$this->db->where("pro_id",$id);
			return $this->db->get("products")->row_array();
		}
	}