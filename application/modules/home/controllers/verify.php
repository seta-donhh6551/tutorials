<?php
class Verify extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("muser");
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->helper('mail_helper');
	}

	public function index(){

		$data['title'] = 'Đăng nhập tài khoản';
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['category'] = $this->listcago();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['newest'] = $this->new_posts();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();

		//has been logedd
		if($this->session->userdata('user_id')){
			redirect(base_url());
		}

		$data['data'] = null;
		$data['template'] = 'users/content';

		$data['errors'] = null;
		if($this->input->post("submit") != ""){
			$user_name = trim($this->input->post("user_name"));
			$user_pass = trim($this->input->post("user_pass"));
			if($user_name == null || $user_pass == null){
				$data['errors'] = 'Vui lòng điền đủ thông tin';
			}else{
				$user_info = $this->muser->check_login($user_name, $user_pass);
				if($user_info == false)
				{
					$data['errors'] = 'Tài khoản không đúng, hoặc chưa kích hoạt';
				}else{
					//set session
					$session = array(
						'user_id'   => $user_info['user_id'],
						'user_name' => $user_info['username'],
						'user_level' => $user_info['level'],
						'user_status' => 1
					);
					$this->session->set_userdata($session);

					if($this->input->get('return')){
						redirect($this->input->get('return'));
					}

					redirect(base_url());

				}
			}
		}

		$this->load->view("users/layout", $data);
	}

	public function active()
	{
		$data['title'] = 'Kích hoạt tài khoản';
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['category'] = $this->listcago();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['newest'] = $this->new_posts();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();

		$active_code = $this->input->get('code');
		if(!$active_code){
			redirect(base_url());
		}

		$data['flag'] = false;
		$data['errors'] = null;
		$userinfo = $this->muser->find_code_active($active_code);
		if($userinfo == false){
			$data['errors'] = 'Mã kích hoạt không đúng';
		}else{
			if($userinfo['status'] == 1){
				redirect(base_url());
			}
			if($this->muser->update(array('status' => 1), $userinfo['user_id']) == true){
				$this->session->set_userdata(array('user_status' => 1));
				$data['errors'] = 'Tài khoản kích hoạt thành công!';
				$data['flag'] = true;
				$this->sendmail($userinfo);
			}
		}

		$data['data'] = null;
		$data['template'] = 'users/active';

		$this->load->view("users/layout", $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function sendmail($data){
		$mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				 <html>
				 <head>
				 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				 </head>
				 <body>
				 <h2 style="font-size: 16px;">Kích Hoạt Thành Viên tại Phpandmysql.net</h2>
				 <br/>
				 <p>Thông Tin Tài Khoản</p>

		 ';
		 $mesnger .= "Tên tài khoản : ".$data['username']." <br />";
		 $mesnger .= "Địa chỉ email : ".$data['email']." <br />";
		 $mesnger .= "Kích hoạt tải khoản lúc ".date('H:i:s d/m/Y').'<br />';
		 $mesnger .= '</body></html>';
		 send_mail_helper('haanhdon@gmail.com', 'Thành viên mới kích hoạt trên PHPANDMYSQL.NET', htmlspecialchars_decode($mesnger));
	}
}