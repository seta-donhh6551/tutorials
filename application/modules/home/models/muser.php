<?php
	class Muser extends CI_Model{
		protected $_table = "tbl_user";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function check_login($user,$pass){
			$this->db->where("username",$user);
			$this->db->where("password",md5($pass));
			$this->db->where("status",1);
			$result = $this->db->get($this->_table);
			if($result->num_rows() == 0){
				return false;
			}else{
				return $result->row_array();
			}
		}
		public function check_user($user){
			$this->db->where("username",$user);
			$query=$this->db->get($this->_table);
			if($query->num_rows() == 0){
				return TRUE;
			}else{
				return false;
			}
		}
		public function check_pass($id, $password){
			$this->db->where("user_id", $id);
			$this->db->where("password", md5($password));
			$query = $this->db->get($this->_table);
			if($query->num_rows() == 0){
				return false;
			}else{
				return $query->row_array();
			}
		}
		public function check_email($email){
			$this->db->where("email",$email);
			$query=$this->db->get($this->_table);
			if($query->num_rows() == 0){
				return TRUE;
			}else{
				return false;
			}
		}
		public function get_forgot($userName, $email){
			$this->db->where("username", $userName);
			$this->db->where("email", $email);
			$query = $this->db->get($this->_table);
			if($query->num_rows() == 0){
				return false;
			}else{
				return $query->row_array();
			}
		}
		public function forgot($email,$data){
			$this->db->where("email",$email);
			$this->db->update($this->_table,$data);
		}
		public function support(){
			return $this->db->get("tbl_support")->result_array();
		}
		public function find_code_active($code){
			$this->db->where("active", $code);
			$result = $this->db->get($this->_table);
			if($result->num_rows() == 0){
				return false;
			}else{
				return $result->row_array();
			}
		}
		public function update($data,$id){
			$this->db->where("user_id", $id);
			return $this->db->update($this->_table, $data);
		}
		public function add_user($data){
			$this->db->insert($this->_table,$data);
			$insert_id = $this->db->insert_id();

			return  $insert_id;
		}
		public function online($data){
			$this->db->insert('online',$data);;
		}
		public function online_del($tgnew){
			$this->db->where("time < ",$tgnew);
			$this->db->delete('online');
		}
		public function online_total($self){
			$this->db->query("SELECT DISTINCT user_ip FROM online WHERE local='".$self."'");
			return $this->db->count_all_results();
		}
	}