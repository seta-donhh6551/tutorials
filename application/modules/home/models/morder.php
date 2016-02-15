<?php
	class Morder extends CI_Model{
		private $_table = "donhang";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function insert($data){
			$this->db->set('don_date', 'now()', FALSE);
			$this->db->insert($this->_table,$data);
		}
		public function update($id,$data){
			$this->db->set('don_date', 'now()', FALSE);
			$this->db->where("order_ran",$id);
			$this->db->update($this->_table,$data);
		}
		public function update_back($id,$data){
			$this->db->set('don_date', 'now()', FALSE);
			$this->db->where("order_ran",$id);
			$this->db->update($this->_table,$data);
		}
	}