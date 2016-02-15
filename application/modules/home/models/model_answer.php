<?php
	class model_answer extends CI_Model{
		protected $_table = "tbl_answers";
		public function __construct(){
			parent::__construct();
		}
		public function getdata($id){
			$this->db->where("answer_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function getListByQuestionId($questionId, $userId){
			$sql = '*,(SELECT SUM(vote_up) FROM tbl_vote WHERE tbl_vote.answer_id = tbl_answers.answer_id) as vote_up, '
					. '(SELECT SUM(vote_down) FROM tbl_vote WHERE tbl_vote.answer_id = tbl_answers.answer_id) as vote_down';
			if($userId){
			$sql = '*,(SELECT SUM(vote_up) FROM tbl_vote WHERE tbl_vote.answer_id = tbl_answers.answer_id) as vote_up, '
					. '(SELECT SUM(vote_down) FROM tbl_vote WHERE tbl_vote.answer_id = tbl_answers.answer_id) as vote_down,'
					. '(SELECT user_id FROM tbl_vote WHERE tbl_vote.answer_id = tbl_answers.answer_id AND user_id = '.$userId.') as vote_user_id,'
					. '(SELECT vote_up FROM tbl_vote WHERE tbl_vote.answer_id = tbl_answers.answer_id AND user_id = '.$userId.') as vote_user_up,'
					. '(SELECT vote_down FROM tbl_vote WHERE tbl_vote.answer_id = tbl_answers.answer_id AND user_id = '.$userId.') as vote_user_down';
			}
			$this->db->select($sql);
			$this->db->where("question_id", $questionId);
			$this->db->order_by("answer_id","desc");
			$this->db->join('tbl_user', 'tbl_answers.user_id = tbl_user.user_id', 'left');
			//$this->db->limit($off, $start);
			return $this->db->get($this->_table)->result_array();
		}
		public function count_all(){
			return $this->db->count_all($this->_table);
		}
		public function check_delay_insert($question_id, $user_id){
			$this->db->where("question_id", $question_id);
			$this->db->where("user_id", $user_id);
			$this->db->order_by("answer_id", "desc");
			$this->db->limit(1);
			$data = $this->db->get($this->_table)->row_array();
			if($data){
				$addDate = date('Y-m-d H:i:s', strtotime('+1 minute', strtotime($data['answer_date'])));
				if(date('Y-m-d H:i:s') < $addDate){
					return false;
				}
			}
			return true;
		}
		public function adddata($data){
			return $this->db->insert($this->_table, $data);
		}
		public function updateData($data, $id){
			$this->db->where("answer_id",$id);
			return $this->db->update($this->_table,$data);
		}
		public function delete($id){
			$this->db->where("answer_id", $id);
			$this->db->delete($this->_table);
		}
	}