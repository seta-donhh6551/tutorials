<?php
	class Mcate extends CI_Model{
		protected $_cate = "tbl_category";
		protected $_cago = "tbl_categorie";
		protected $_intro = "tbl_intro";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function intro(){
			return $this->db->get($this->_intro)->result_array();
		}
	}