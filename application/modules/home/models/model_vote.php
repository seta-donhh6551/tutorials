<?php
	class model_vote extends CI_Model{
		protected $_table = "tbl_vote";
		public function __construct(){
			parent::__construct();
		}
		public function getListByAnserId($answer_id, $user_id = false){
			$this->db->where("answer_id", $answer_id);

			if($user_id){
				$this->db->where("user_id", $user_id);
			}

			return $this->db->get($this->_table)->result_array();
		}
		public function insertData($data){
			return $this->db->insert($this->_table, $data);
		}
		public function delete($answer_id, $user_id = null){
			$this->db->where("answer_id", $answer_id);

			if($user_id != null){
				$this->db->where("user_id", $user_id);
			}

			$this->db->delete($this->_table);
		}
	}