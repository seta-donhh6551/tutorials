<?php

class User extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->model("muser");
		$this->load->helper('mail_helper');
	}

	public function register() {

		$data['title'] = "Đăng ký thành viên";
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
		$data['errors'] = null;
		$data['template'] = 'users/register';

		if ($this->input->post("submit")){

			$this->form_validation->set_rules("user_name", "Tên tài khoản", "trim|required|min_length[5]|max_length[50]");
			$this->form_validation->set_rules("user_pass", "Mật khẩu", "trim|required|min_length[6]|max_length[20]");
			$this->form_validation->set_rules("re_pass", "Nhập lại mật khẩu", "trim|required|matches[user_pass]");
			$this->form_validation->set_rules("user_add", "Địa chỉ", "trim");
			$this->form_validation->set_rules("user_phone", "Số điện thoại", "trim");
			$this->form_validation->set_rules("user_fullname", "Họ tên", "trim|required|min_length[10]");
			$this->form_validation->set_rules("user_email", "Địa chỉ email", "trim|required|valid_email");
			$this->form_validation->set_rules("captcha", "Mã captcha", "trim|required");

			if ($this->form_validation->run() == FALSE) {
				//do some thing
			} else {
				$captcha_sess = $this->session->userdata['security_code'];
				$captcha = $this->input->post("captcha");
				$u = $this->muser->check_user($this->input->post("user_name"));
				$e = $this->muser->check_email($this->input->post("user_email"));
				if ($captcha != $captcha_sess) {
					$data['errors'] = "Mã xác nhận không chính xác";
				} else {
					if ($u == FALSE || $e == FALSE) {
						$data['errors'] = "Người dùng này đã tồn tại";
					} else {
						$db = array(
							"username" => $this->input->post("user_name"),
							"password" => md5($this->input->post("user_pass")),
							"name" => $this->input->post("user_fullname"),
							"gender" => $this->input->post("user_gender"),
							"phone" => $this->input->post("user_phone"),
							"adress" => $this->input->post("user_add"),
							"email" => $this->input->post("user_email"),
							"level" => 2
						);

						$db['active'] = 'php'.time();
						$last_id = $this->muser->add_user($db);

						//send mail
						$this->sendmail($db);

						$sesion = array(
							"user_id" => $last_id,
							"user_name" => $db['username'],
							"user_level" => 2,
							"user_status" => 0
						);

						$this->session->set_userdata($sesion);

						redirect(base_url().'dang-ky-thanh-cong.html');
					}
				}
			}
		}

		$this->load->view("users/layout", $data);
	}

	public function forgot() {

		$data['title'] = "Quên mật khẩu";
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['category'] = $this->listcago();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['newest'] = $this->new_posts();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();

		$data['flag'] = false;
		$data['errors'] = null;
		if ($this->input->post("submit")) {
			$this->form_validation->set_rules("user_name", "Tên tài khoản", "required");
			$this->form_validation->set_rules("user_email", "Địa chỉ email", "required|valid_email");
			if ($this->form_validation->run() == FALSE) {
				//do something
			}else{
				$username = $this->input->post("user_name");
				$email = $this->input->post("user_email");
				$userInfo = $this->muser->get_forgot($username, $email);
				if($userInfo == false){
					$data['errors'] = "Không tìm thấy email của bạn trong cơ sở dữ liệu";
				}else{
					$rand = mt_rand();
					$pass = md5($rand);

					$mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html>
							<head>
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
							</head>
							<body>
							<h2 style="font-size: 16px;">Tìm Lại Mật Khẩu trên Phpandmysql.net</h2>
							<br/>
							<p>Thông Tin Tài Khoản</p>

					';
					$mesnger .= "Chúng tôi nhận được yêu cầu lấy lại mật khẩu của bạn từ PHPANDMYSQL.NET <br />";
					$mesnger .= "Tài khoản của bạn : " . $userInfo['username'] . "<br />";
					$mesnger .= "Địa chỉ email : " . $userInfo['email'] . "<br />";
					$mesnger .= "Mật khẩu mới của bạn : " . $rand. "<br />";
					$mesnger .= "Để thay đổi lại mật khẩu của bạn, <a href='".base_url()."doi-mat-khau.html'>vào đây</a>";

					$newPass = array("password" => $pass);
					if($this->muser->update($newPass, $userInfo['user_id'])){
						$data['flag'] = true;
						$data['errors'] = "Một tin nhắn đã gửi đến email của bạn, vui lòng check email để lấy lại mật khẩu !";
						send_mail_helper($userInfo['email'], 'Quên mật khẩu trên PHPANDMYSQL.NET', htmlspecialchars_decode($mesnger));
					}
				}
			}
		}

		$data['data'] = null;
		$data['template'] = 'users/forgot';

		$this->load->view("users/layout", $data);
	}

	public function changepass() {

		$data['title'] = "Thay đổi mật khẩu";
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['category'] = $this->listcago();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['newest'] = $this->new_posts();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();

		if(!$this->session->userdata('user_id')){
			redirect(base_url());
		}

		$data['errors'] = null;
		if ($this->input->post("submit")) {
			$this->form_validation->set_rules("old_pass", "Mật khẩu cũ", "required");
			$this->form_validation->set_rules("new_pass", "Mật khẩu mới", "trim|required|min_length[6]|max_length[20]");
			$this->form_validation->set_rules("re_pass", "Nhập lại mật khẩu", "trim|required|matches[new_pass]");
			if ($this->form_validation->run() == FALSE) {
				//do something
			}else{
				$old_pass = $this->input->post("old_pass");
				$user_id = $this->session->userdata['user_id'];
				$userInfo = $this->muser->check_pass($user_id, $old_pass);
				if($userInfo == false){
					$data['errors'] = "Mật khẩu không đúng!";
				}else{
					$newPass = array("password" => md5($this->input->post("new_pass")));
					if($this->muser->update($newPass, $userInfo['user_id'])){
						$data['errors'] = "<span style='color:#060'>Mật khẩu của bạn đã thay đổi!</span>";
					}
				}
			}
		}

		$data['data'] = null;
		$data['template'] = 'users/changepass';

		$this->load->view("users/layout", $data);
	}

	public function complete(){

		$data['title'] = "Đăng ký thành công";
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['category'] = $this->listcago();
		$data['access'] = $this->access();
		$data['online'] = $this->online();
		$data['listcate'] = $this->listcate();
		$data['students'] = $this->random_student();
		$data['subjects']    = $this->model_home->subjects();
		$data['times'] = $this->listtimes();

		//has been register
		if($this->session->userdata('user_status') !== 0){
			redirect(base_url());
		}

		$data['data'] = null;
		$data['template'] = 'users/complete';

		$this->load->view("users/layout", $data);
	}

	public function sendmail($data){
		$mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				 <html>
				 <head>
				 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				 </head>
				 <body>
				 <h2 style="font-size: 16px;">Kích Hoạt Thành Viên tại Phpandmysql.net</h2>
				 <br/><br/>
				 <p>Thông Tin Tài Khoản</p>

		 ';
		 $mesnger .= "Tên tài khoản : ".$data['username']." <br />Địa chỉ Email : ".$data['email']." <br />";
		 $mesnger .= "Đăng ký tài khoản lúc ".date('H:i:s d/m/Y').'<br />';
		 $mesnger .= "Để kích hoạt tài khoản bạn vui lòng click <a href='".base_url()."kick-hoat-tai-khoan.html?code=".$data['active']."'>vào đây</a>";
		 $mesnger .= '</body></html> ';
		 send_mail_helper($data['email'], 'Kích hoạt tài khoản trên PHPANDMYSQL.NET ', htmlspecialchars_decode($mesnger));
	}
}
