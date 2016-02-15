<?php
	class Model_content extends CI_Model{
		protected $_table = "tbl_content";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function count_all(){
			return $this->db->count_all($this->_table);
		}
		public function listall($off,$start){
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function getdata($id){
			$this->db->where("con_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function relate($id){
			$this->db->where("con_id !=",$id);
			$this->db->limit(10);
			return $this->db->get($this->_table)->result_array();
		}
	}