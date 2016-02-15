<?php
  	class Mproject extends CI_Model{
  		protected $_table = "project";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function count_all($id){
			$this->db->where("cate_id",$id);
			return $this->db->count_all_results($this->_table);
		}
		public function listall($id,$off,$start){
			$this->db->where("cate_id",$id);
			$this->db->limit($off,$start);
			$this->db->order_by("pro_id","DESC");
			return $this->db->get($this->_table)->result_array();
		} 
		public function getcate($id){
			$this->db->where("cate_id",$id);
			return $this->db->get("cate_news")->row_array();
		}
		public function getpro($id){
			$this->db->where("pro_id",$id);
			return $this->db->get("products")->row_array();
		}
		public function detail($id){
			$this->db->where("pro_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
	}