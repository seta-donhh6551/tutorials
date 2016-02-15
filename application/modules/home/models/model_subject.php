<?php
	class Model_subject extends CI_Model{
		protected $_table = "tbl_subjects";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getdata($id){
			$this->db->where("subject_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function related($id){
			$this->db->where("subject_id !=",$id);
			$this->db->order_by("subject_order","ASC");
			return $this->db->get($this->_table)->result_array();
		}
	}