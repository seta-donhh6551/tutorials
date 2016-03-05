<?php
	class Model_posts extends CI_Model{
		protected $_table = "tbl_posts";
		protected $_category = "tbl_category";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function count_all($id){
			$this->db->where("cago_id",$id);
			return $this->db->count_all_results($this->_con);
		}
		public function getcon($id,$off,$start){
			$this->db->where("cago_id",$id);
			$this->db->limit($off,$start);
			return $this->db->get($this->_con)->result_array();
		}
		public function getname($id){
			$this->db->where("cate_id",$id);
			return $data = $this->db->get($this->_category)->row_array();
		}
		public function detail($id){
			$this->db->where("post_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function newest(){
			$this->db->order_by("post_id","DESC");
			$this->db->limit(10);
			return $this->db->get($this->_table)->result_array();
		}
		public function phplist($id, $limit=10){
            $this->db->join("tbl_category","tbl_category.cate_id = tbl_posts.cate_id");
			$this->db->where("tbl_posts.cate_id",$id);
			$this->db->order_by("tbl_posts.post_order","ASC");
			$this->db->limit($limit);
			return $this->db->get($this->_table)->result_array();
		}
		public function relate($id1,$id2,$limit){
			$query = $this->db->query("select * from tbl_posts where post_id != $id1 and cate_id = '$id2' order by post_id ASC limit $limit");
			return $query->result_array();
		}
        public function getPreNextPost($postId, $cateId, $condition = '>'){
            $this->db->join("tbl_category","tbl_category.cate_id = tbl_posts.cate_id");
            $this->db->where("tbl_posts.cate_id",$cateId);
            $this->db->order_by("tbl_posts.post_order","asc");
            $listPost = $this->db->get($this->_table)->result_array();
            $listPostOrder = array();
            $listPostId = array();
            if($listPost){
                $listPostId = array_column($listPost, 'post_title', 'post_id');
                foreach($listPost as $postKey => $postVal)
                {
                    $listPostOrder[$postVal['post_id']] = $postVal;
                }
            }
            if($listPostId){
                if($condition == '<'){
                    $keyPost = $this->getPrevNextKey($postId, '-', $listPostId);
                }else{
                    $keyPost = $this->getPrevNextKey($postId, '+', $listPostId);
                }

                return isset($listPostOrder[$keyPost]) ? $listPostOrder[$keyPost] : null;
            }
        }
        public function getcate($id){
			$this->db->where("cago_id",$id);
			$data = $this->db->get($this->_cago)->row_array();
			return $data;
		}
        function getPrevNextKey($key, $condition, $hash = array())
        {
            $keys = array_keys($hash);
            $found_index = array_search($key, $keys);
            //print_r($keys); die;
            if ($found_index === false)
                return false;
            $keyAdd = isset($keys[$found_index+1]) ? $keys[$found_index+1] : null;
            $keyRrm = isset($keys[$found_index-1]) ? $keys[$found_index-1] : null;
            return $condition == '+' ? $keyAdd : $keyRrm;
        }
	}