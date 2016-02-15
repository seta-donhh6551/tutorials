<?php
  	class Ran_image extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library("session");
		}
		public function index(){
			$this->create_image();
			exit();
		}
		public function create_image(){
			 $md5_hash = md5(rand(0,999));
			 $security_code = substr($md5_hash, 15, 5);
			 $ses = array("security_code"=>$security_code);
			 $this->session->set_userdata($ses);
			 $width = 80;
			 $height = 25;
			 $image = ImageCreate($width, $height);
			 $white = ImageColorAllocate($image, 255, 255, 255);
			 $black = ImageColorAllocate($image, 0, 0, 0);
			 ImageFill($image, 0, 0, $black);
			 ImageString($image, 5, 20, 5, $security_code, $white);
			 header("Content-Type: image/jpeg");
			 ImageJpeg($image);
			 ImageDestroy($image);
		}
	}
?>
