<?php
	class Model_tags extends CI_Model{
		protected $_news = "tbl_news";
		protected $_post = "tbl_posts";
		public function __construct(){
			parent::__construct();
		}
		public function get_news($key){
			$query = $this->db->query("select * from $this->_news where news_tags like '%$key%'");
			return $query->result_array();
		}
		public function get_post($key){
			$query = $this->db->query("select * from $this->_post where post_tags like '%$key%'");
			return $query->result_array();
		}
	}