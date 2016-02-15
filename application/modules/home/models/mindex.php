<?php
  	class Mindex extends CI_Model{
		protected $_table = "tbl_intro_one";
		protected $_education = "tbl_education";
		protected $_cate = "tbl_category";
		protected $_cago = "tbl_categorie";
		protected $_sup ="tbl_support";
		protected $_intro ="tbl_intro";		
		protected $_contact ="tbl_contact_info";
		protected $_con ="tbl_contact";						
		protected $_post ="tbl_posts";						
		protected $_config ="tbl_config";
		protected $_times ="tbl_times";						
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function config(){
			$this->db->where("config_id","1");
			return $this->db->get($this->_config)->row_array();
		}
		public function listtimes(){
			$this->db->order_by("education_order","ASC");
			return $this->db->get($this->_times)->result_array();
		}
		public function listcate(){
			$this->db->where("cate_status","1");
			$this->db->order_by("cate_order","ASC");
			return $this->db->get($this->_cate)->result_array();
		}
		public function get_post($cate_id){
			$this->db->where("cate_id",$cate_id);
			$this->db->order_by("post_id","ASE");
			$this->db->limit(5);
			return $this->db->get($this->_post)->result_array();
		}
		public function listall(){
			$list = $this->listcate();
			if($list != NULL){
				foreach($list as $k => $v){
					$data[] = $this->get_post($v['cate_id']);
				}
			}
			$ok = array(
				"cate" => $list,
				"post" => $data
			);
			return $ok;
		}
		public function educations(){
			$this->db->where("edu_id",1);
			return $this->db->get($this->_education)->row_array();
		}
		public function support($limit=3){
			$this->db->limit($limit);
			return $this->db->get($this->_sup)->result_array();
		}
		public function contact(){
			$this->db->where("contact_id","1");
			return $this->db->get($this->_contact)->row_array();
		}
		public function intro(){
			$this->db->where("intro_id","1");
			return $this->db->get($this->_table)->row_array();
		}
		public function services(){
			$this->db->where("service_id","1");
			return $this->db->get($this->_service)->row_array();
		}
		public function insert_con($data){
			$this->db->insert($this->_con,$data);
		}
		public function listcustomer(){
			$query = $this->db->query("select * from tbl_customer order by RAND() limit 30");
			return $query->result_array();
		}
		public function customer_asc(){
			$query = $this->db->query("select * from tbl_customer order by RAND() limit 30");
			return $query->result_array();
		}
	}