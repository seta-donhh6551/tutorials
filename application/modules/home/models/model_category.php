<?php
	class Model_category extends CI_Model{
		protected $_table = "tbl_posts";
		protected $_cate = "tbl_category";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getdata($id){
			$this->db->where("cate_id",$id);
			return $this->db->get($this->_cate)->row_array();
		}
		public function getdatabyrewrite($id){
			$this->db->where("cate_rewrite",$id);
			return $this->db->get($this->_cate)->row_array();
		}
		public function listall($id,$off,$start){
			$this->db->where("cate_id",$id);
			$this->db->where("post_status", 1);
			$this->db->order_by("post_order","ASC");
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function count_all($id){
			$this->db->where("cate_id",$id);
			return $this->db->count_all_results($this->_table);
		}
	}