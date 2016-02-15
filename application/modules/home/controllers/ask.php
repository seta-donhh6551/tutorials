<?php

class Ask extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_question");
		$this->load->model("model_answer");
		$this->load->model("model_category");
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->library("string");
		$this->load->helper('cookie');
		$this->load->helper('mail_helper');
	}

	public function index()
	{
		$data['title'] = "Hỏi đáp về PHP và Mysql";
		$data['config'] = $this->config();
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['category'] = $this->listcago();
		$data['educations']  = $this->eudcations();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();
		$data['newest'] = $this->new_posts();

		$config['base_url'] = base_url()."hoi-dap";
		$config['total_rows'] = $this->model_question->count_all();
		$config['per_page'] = 10;
		$config['uri_segment'] = 2;
		$config['next_link'] = "Next";
		$config['prev_link'] = "Prev";
		$config['cur_tag_open'] = '<span class="curpage">';
		$config['cur_tag_close'] = '</span>';
		$this->load->library("pagination", $config);

		$data['data'] = null;
		$data['template'] = 'ask/content';

		//set cookie
		$cookie = array(
			'name'   => 'return_url',
			'value'  => base_url(uri_string()),
			'expire' => '86500'
		);
		$this->input->set_cookie($cookie);

		$data['eq'] = 1;

		$data['listall'] = $this->model_question->listall($config['per_page'], (int)$this->uri->segment(2));

		$this->load->view("ask/layout", $data);
	}

	public function send()
	{
		$question_id = $this->input->get('question_id');

		$data['title'] = "Gửi câu hỏi của bạn - hỏi đáp PHP và Mysql";
		$data['config'] = $this->config();
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['category'] 	= $this->listcago();
		$data['newest'] = $this->new_posts();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();

		$data['status'] = false;
		if($this->session->userdata('user_id') && $this->session->userdata('user_status') === 1){
			$data['status'] = true;
		}

		$data['eq'] = 1;

		$userLevel = $this->session->userdata('user_level');

		if($question_id){
			$data['info'] = $this->model_question->getdata($question_id);
			if(empty($data['info'])){
				redirect(base_url().'404_override');
			}
			//permistion
			$allow = false;
			if($userLevel == 1){
				$allow = true;
			}
			if($data['info']['user_id'] == $this->session->userdata('user_id')){
				$allow = true;
			}
			if(!$allow){
				redirect(base_url().'404_override');
			}
		}

		$data['data']['errors'] = array();
		if($this->input->post("submit") != ""){
			$this->form_validation->set_rules('question_title', 'Tiêu đề câu hỏi', 'trim|required|min_length[15]|max_length[150]');
			$this->form_validation->set_rules('question_info', 'Nội dung câu hỏi', 'trim|required|min_length[20]');
			$this->form_validation->set_rules('captcha', 'Mã captcha', 'required');
			if ($this->form_validation->run() == FALSE){
				//dome some thing
			}else{
				$security_code = $this->session->userdata("security_code");
				if($security_code != $this->input->post('captcha')){
					$data['errors'] = "Mã captcha không đúng";
				}else{
					$url = str_replace(' ', '-',strtolower($this->string->replace($this->input->post('question_title'))));
					$db = array(
						"question_title" => $this->input->post('question_title'),
						"question_rewrite" => $url,
						"question_info" => $this->input->post('question_info'),
						"created_date"  => date('Y-m-d H:i:s'),
						"cate_id"       => $this->input->post('cate_id'),
						"user_id"       => $this->session->userdata("user_id")
					);
					if($_FILES['question_file']['name'] != NULL){
						$config['upload_path'] = './uploads/data';
						$config['allowed_types'] = 'gif|jpg|jpeg|png|zip|rar';
						$config['max_size']	= '1000';
						$config['max_width']  = '1024';
						$config['max_height']  = '1000';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						if(!$this->upload->do_upload("question_file")){
							$data['errors'] = $this->upload->display_errors();
							$data['config'] = $this->config();
							$data['access'] = $this->access();
							$data['online'] = $this->online();
							$data['listcate'] = $this->listcate();
							$data['students'] = $this->random_student();
							$data['category'] 	= $this->listcago();
							$data['newest'] = $this->new_posts();
							$data['template'] = 'ask/add';
							$data['data'] = null;
							$data['title'] = "Gửi câu hỏi của bạn - hỏi đáp PHP và Mysql";
							$this->load->view("ask/layout", $data);
							return FALSE;
						}else{
							$datafile = $this->upload->data();
							$db['question_file'] = $datafile['file_name'];
						}
					 }

					if($question_id){
						$this->model_question->updateData($db, $question_id);
						$return_url = get_cookie('return_url');
						if($return_url){
							redirect($return_url.'.html');
						}
					}else{
						$this->model_question->adddata($db);
						$this->sendmail($db);
					}
					 //send mail
					 redirect(base_url().'hoi-dap/thanh-cong.html');
				}
			}
		}

		$data['data'] = null;
		$data['template'] = 'ask/add';

		$this->load->view("ask/layout", $data);
	}

	public function askcate()
	{
		$data['config'] = $this->config();
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['category'] 	= $this->listcago();
		$data['newest'] = $this->new_posts();
		$data['subjects'] = $this->model_home->subjects();
		$data['times'] = $this->listtimes();
		$data['eq'] = 1;
		$item = $this->fillter($this->uri->segment(2));
		$data['result'] = $this->model_category->getdatabyrewrite($item);
		if($data['result'] == NULL){
			redirect(base_url());
		}

		$data['title'] = $data['result']['cate_name']." hỏi đáp - hỏi đáp PHP và Mysql";
		$cate_id = $data['result']['cate_id'];

		$data['data'] = null;
		$data['template'] = 'ask/list';

		$config['base_url'] = base_url()."hoi-dap/".$data['result']['cate_rewrite'];
		$config['total_rows'] = $this->model_question->count_all($cate_id);
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['next_link'] = "Next";
		$config['prev_link'] = "Prev";
		$config['cur_tag_open'] = '<span class="curpage">';
		$config['cur_tag_close'] = '</span>';
		$this->load->library("pagination", $config);

		$data['listall'] = $this->model_question->listall($config['per_page'], (int)$this->uri->segment(3), $cate_id);

		$this->load->view("ask/layout", $data);
	}

	public function view()
	{
		$segment = $this->fillter($this->uri->segment(2));
		$questionId = array_pop(explode('-', $segment));

		$data['config'] = $this->config();
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['category'] = $this->listcago();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();

		$info = $this->model_question->getdata($questionId);
		if(!$info){
			redirect(base_url().'404_override');
		}

		//update view
		$this->model_question->update_view($questionId);
		$userId = $this->session->userdata('user_id');
		$userLevel = $this->session->userdata('user_level');

		//edit answer
		$post_id = $this->input->get('post_id');
		$data['ansinfo'] = array();
		if($post_id)
		{
			$data['ansinfo'] = $this->model_answer->getdata($post_id);
			if(!$data['ansinfo']){
				redirect(base_url().'404_override');
			}
			//permistion
			$allow = false;
			if($userLevel == 1){
				$allow = true;
			}
			if($data['ansinfo']['user_id'] == $userId){
				$allow = true;
			}
			if(!$allow){
				redirect(base_url().'404_override');
			}
		}

		//set cookie
		$cookie = array(
			'name'   => 'return_url',
			'value'  => base_url(uri_string()),
			'expire' => '86500'
		);
		$this->input->set_cookie($cookie);

		$data['listanswer'] = $this->model_answer->getListByQuestionId($questionId, $userId);
		$data['related'] = $this->model_question->related($questionId);
		$data['title'] = $info['question_title'];
		$data['data']['question_id'] = $questionId;
		$data['eq'] = 1;

		$data['template'] = 'ask/detail';
		$data['data']['result'] = $info;

		$this->load->view("ask/layout", $data);
	}

	public function ajax(){

		if(!isset($_POST['info'])){ return false; }
                
		//get user info
		if(!$this->session->userdata('user_id')){
			return false;
		}

		$allowed = $this->input->post('allowed');

		//get data post
		$encode = $this->input->post('encode');
		if($encode == 2){
			$data['answer_info'] = $this->input->post('info');
		}else{
			$data['answer_info'] = htmlspecialchars($this->input->post('info'));
		}
		$data['answer_up'] = 0;
		$data['answer_down'] = 0;
		$data['question_id'] = $this->input->post('question_id');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['answer_date'] = date('Y-m-d H:i:s');

		$info['status'] = false;

		//check time insert
		if($allowed == 2 && $this->model_answer->check_delay_insert($data['question_id'], $data['user_id']) == false){
			echo 'delay'; die;
		}
             
		//update or insert?
		if($allowed == 1){
			//update
			$answer_id = $this->input->post('answer_id');
			$dataUpdate = array('answer_info' => $this->input->post('info'), 'answer_update' => date('Y-m-d H:i:s'));
			if($this->model_answer->updateData($dataUpdate, $answer_id)){
				$info['status'] = true;
			}
		}else{
			if($this->model_answer->adddata($data)){
				$info['status'] = true;
			}
		}
                
                echo $info['status'] == true ? 'true' : 'false';
	}

	public function loaddata(){
		if(!isset($_POST['id'])){ return false; }

		$questionId = $this->input->post('id');
		$userId = $this->session->userdata('user_id');
		$data['questionId'] = $questionId;
		$data['listanswer'] = $this->model_answer->getListByQuestionId($questionId, $userId);

		$this->load->view("layouts/list-answer", $data);
	}

	public function delete(){
		if($this->session->userdata('user_level') != 1){
			return false;
		}

		$id = $this->input->post('id');
		$this->model_answer->delete($id);

		return 'true';
	}

	public function complete()
	{
		$data['title'] = "Gửi câu hỏi của bạn - hỏi đáp PHP và Mysql";
		$data['template'] = 'ask/complete';
		$data['data'] = null;

		$question_id = $this->input->get('question_id');
		$data['update'] = false;
		if($question_id){
			$data['update'] = true;
		}
		$data['config'] = $this->config();
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['category'] 	= $this->listcago();
		$data['newest'] = $this->new_posts();

		$this->load->view("ask/layout", $data);
	}

	public function sendmail($data){
		$mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				 <html>
				 <head>
				 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				 </head>
				 <body>
				 <h2 style="font-size: 16px;">Câu hỏi mới trên Phpandmysql.net</h2>
				 <br/>
				 <p>Nội dung câu hỏi</p>

		 ';
		 $mesnger .= "Tên tài khoản : ".$this->session->userdata("user_name")." <br />";
		 $mesnger .= "Tiêu đề câu hỏi : ".$data['question_title']." <br />";
		 $mesnger .= "Nội dung câu hỏi : ".$data['question_info']." <br />";
		 $mesnger .= "Đã đăng lúc ".date('H:i:s d/m/Y').'<br />';
		 $mesnger .= '</body></html> ';
		 send_mail_helper('haanhdon@gmail.com', 'Câu hỏi mới trên PHPANDMYSQL.NET', htmlspecialchars_decode($mesnger));
	}
}