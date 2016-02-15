<?php

class Vote extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_vote");
	}

	public function index()
	{
		if(!isset($_POST['type'])){ return false; }

		//get user info
		if(!$this->session->userdata('user_id')){
			return false;
		}

		$user_id   = $this->input->post('user_id');
		$type      = $this->input->post('type');
		$answer_id = $this->input->post('answer_id');

		$db = array('user_id' => $user_id, 'answer_id' => $answer_id, 'vote_date' => date('Y-m-d H:i:s'));
		if($type == 1){
			$db['vote_up'] = 1;
		}
		if($type == 2){
			$db['vote_down'] = 1;
		}

		//check vote yes or no
		$has_voted = $this->model_vote->getListByAnserId($answer_id, $user_id, $type);
		if(count($has_voted) > 0){
			$this->model_vote->delete($answer_id, $user_id);
		}else{
			$this->model_vote->insertData($db);
		}

		echo json_encode($this->model_vote->countAllVoteByType($answer_id, $type));
	}
}