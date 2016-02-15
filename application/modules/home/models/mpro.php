<?php 
	class Mpro extends CI_Model{
		protected $_table = "tbl_products";
		protected $_cate = "tbl_category";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function count_all_search($name){
			$this->db->like("pro_name",$name);
			return $this->db->count_all_results($this->_table);
		}
		public function search($name,$off,$start){
			$this->db->like("pro_name",$name);
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function count_all($id){
			$this->db->where("cate_id",$id);
			return $this->db->count_all_results($this->_table);
		}
		public function listall($id,$off,$start){
			$this->db->where("cate_id",$id);
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function count_al(){
			$this->db->where("pro_price >","500000");
			$this->db->order_by("pro_id","DESC");
			return $this->db->count_all_results($this->_table);
		}
		public function listal($off,$start){
			$this->db->where("pro_price >","500000");
			$this->db->order_by("pro_id","DESC");
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function getcate($id){
			$this->db->where("cate_id",$id);
			$data = $this->db->get($this->_cate)->row_array();
			return $data;
		}
		public function detail($id){
			$this->db->where("pro_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function splq($id_cate,$id){
			$this->db->where("cate_id",$id_cate);
			$this->db->where("pro_id !=",$id);
			$this->db->order_by("pro_id","DESC");
			$this->db->limit(8);
			return $this->db->get($this->_table)->result_array();
		}
	}