<?php
	class Model_technology extends CI_Model{
		protected $_news = "tbl_news";
		protected $_cago = "tbl_categorie";
		public function __construct(){
			parent::__construct();
		}
		public function count_all(){
			return $this->db->count_all($this->_news);
		}
		public function listall($off,$start){
			$this->db->order_by("news_id","DESC");
			$this->db->limit($off,$start);
			return $this->db->get($this->_news)->result_array();
		}
		public function count_all_cate($id){
			$this->db->where("cago_id",$id);
			return $this->db->count_all_results($this->_news);
		}
		public function listall_cate($id,$off,$start){
			$this->db->where("cago_id",$id);
			$this->db->order_by("news_id","DESC");
			$this->db->limit($off,$start);
			return $this->db->get($this->_news)->result_array();
		}
		public function getcago($id){
			$this->db->where("cago_id",$id);
			return $this->db->get($this->_cago)->row_array();
		}
		public function listcago(){
			$this->db->where("cago_status","1");
			return $this->db->get($this->_cago)->result_array();
		}
		public function getdata($id){
			$this->db->where("news_id",$id);
			return $this->db->get($this->_news)->row_array();
		}
		public function relate($id,$cago_id="",$limit){
			$this->db->where("news_id !=",$id);
			if($cago_id != NULL){
				$this->db->where("cago_id",$cago_id);
			}
			$this->db->limit($limit);
			return $this->db->get($this->_news)->result_array();
		}
	}