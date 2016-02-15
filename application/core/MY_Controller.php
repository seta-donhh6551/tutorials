<?php 
  	class MY_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("mcate");
			$this->load->model("muser");
			$this->load->model("mnews");
			$this->load->model("mindex");
			$this->load->helper("file");
			$this->load->model("muser");
			$this->load->model("monline");
			$this->load->library("session");
			$this->load->model("model_posts");
			$this->load->model("model_home");
			$this->load->model("model_technology");
		}
		public function fillter($str){
			$str = str_replace("<", "&lt;", $str);
			$str = str_replace(">", "&gt;", $str);
			$str = str_replace("&", "&amp;", $str);			
			$str = str_replace("|", "&brvbar;", $str);
			$str = str_replace("~", "&tilde;", $str);
			$str = str_replace("`", "&lsquo;", $str);
			$str = str_replace("#", "&curren;", $str);
			$str = str_replace("%", "&permil;", $str);
			$str = str_replace("'", "&rsquo;", $str);
			$str = str_replace("\"", "&quot;", $str);
			$str = str_replace("\\", "&frasl;", $str);
			$str = str_replace("--", "&ndash;&ndash;", $str);
			$str = str_replace("ar(", "ar&Ccedil;", $str);
			$str = str_replace("Ar(", "Ar&Ccedil;", $str);
			$str = str_replace("aR(", "aR&Ccedil;", $str);
			$str = str_replace("AR(", "AR&Ccedil;", $str);
			return htmlspecialchars($str);
		}
		public function debug($val){
			echo "<pre>";
			print_r($val);
			echo "</pre>";
			die();
		}
		public function eudcations(){
			return $this->mindex->educations();
		}
		public function listall(){
			return $this->mindex->listall();
		}
		public function listcago(){
			return $this->model_technology->listcago();
		}
		public function listcate(){
			return $this->mindex->listcate();
		}
		public function listtimes(){
			return $this->mindex->listtimes();
		}
		public function support(){
			return $this->mindex->support(5);
		}
		public function random_student(){
			return $this->model_home->random_student();
		}
		public function access(){
			return read_file('libraries/source.txt');
		}
		public function write($data){
			$ok = $data + 1;
			write_file('libraries/source.txt',$ok);
		}
		public function online(){
			$tg = time();
		  	$tgout = 900;
		  	$tgnew = $tg - $tgout;
		  	$REMOTE_ADDR = $_SERVER["REMOTE_ADDR"];
		  	$PHP_SELF = $_SERVER["PHP_SELF"];
			$data = array(
					"time" => $tg,
					"user_ip" => $REMOTE_ADDR,
					"local" => $PHP_SELF,
					//"date" => date('d')
				);
		  	$this->monline->online($data);
		  	$this->monline->online_del($tgnew);
		  	return $this->monline->online_total($PHP_SELF);
		}
		public function online_view(){
			return $this->monline->online_view();
		}
		public function config(){
			return $this->mindex->config();
		}
		public function new_posts(){
			return $this->model_posts->newest();
		}
	}