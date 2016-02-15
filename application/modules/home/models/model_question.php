<?php
	class Model_question extends CI_Model{
		protected $_table = "tbl_question";
		protected $_cate = "tbl_category";
		public function __construct(){
			parent::__construct();
		}
		public function getdata($id){
                        $this->db->join('tbl_user', 'tbl_question.user_id = tbl_user.user_id', 'left');
			$this->db->where("tbl_question.question_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function listall($off, $start, $cate_id = null){
			$this->db->select('*,(SELECT COUNT(*) FROM tbl_answers WHERE tbl_answers.question_id = tbl_question.question_id) as total_comment');
			if($cate_id){
				$this->db->where("cate_id", $cate_id);
			}
			$this->db->order_by("question_id","desc");
			$this->db->join('tbl_user', 'tbl_question.user_id = tbl_user.user_id', 'left');
			$this->db->limit($off, $start);
			return $this->db->get($this->_table)->result_array();
		}
		public function count_all($cate_id = null){
			if($cate_id){
				$this->db->where("cate_id",$cate_id);
			}
			return $this->db->count_all($this->_table);
		}
		public function update_view($id){
			$this->db->query("UPDATE $this->_table SET question_views = question_views + 1 WHERE question_id = {$id}");
		}
		public function updateData($data, $id){
			$this->db->where("question_id",$id);
			return $this->db->update($this->_table,$data);
		}
		public function adddata($data){
			$this->db->insert($this->_table,$data);
		}
		public function related($id = null){
			if($id)
			{
				$this->db->where('question_id !=', $id);
			}
			$this->db->order_by("question_id","desc");
			$this->db->limit(10);
			return $this->db->get($this->_table)->result_array();
		}
	}