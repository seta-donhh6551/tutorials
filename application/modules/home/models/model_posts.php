<?php
	class Model_posts extends CI_Model{
		protected $_table = "tbl_posts";
		protected $_category = "tbl_category";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function count_all($id){
			$this->db->where("cago_id",$id);
			return $this->db->count_all_results($this->_con);
		}
		public function getcon($id,$off,$start){
			$this->db->where("cago_id",$id);
			$this->db->limit($off,$start);
			return $this->db->get($this->_con)->result_array();
		}
		public function getname($id){
			$this->db->where("cate_id",$id);
			return $data = $this->db->get($this->_category)->row_array();
		}
		public function detail($id){
			$this->db->where("post_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function newest(){
			$this->db->order_by("post_id","DESC");
			$this->db->limit(10);
			return $this->db->get($this->_table)->result_array();
		}
		public function phplist($id,$limit=10){
			$this->db->where("cate_id",$id);
			$this->db->order_by("post_order","ASC");
			$this->db->limit($limit);
			return $this->db->get($this->_table)->result_array();
		}
		public function relate($id1,$id2,$limit){
			$query = $this->db->query("select * from tbl_posts where post_id != $id1 and cate_id = '$id2' order by post_id ASC limit $limit");
			return $query->result_array();
		}
		public function getcate($id){
			$this->db->where("cago_id",$id);
			$data = $this->db->get($this->_cago)->row_array();
			return $data;
		}
	}