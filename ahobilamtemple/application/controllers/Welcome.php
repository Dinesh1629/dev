<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct(){
		parent::__construct();
		
		// Load user model
	}
	 
	public function index(){
		$data['error'] = "none";
		$this->load->view('index',$data);
	}
	public function temple(){
		$data['error'] = "none";
		$this->load->view('temple',$data);
	}
	public function visit(){
		$data['error'] = "none";
		$this->load->view('visit',$data);
	}
	public function build(){
		$data['error'] = "none";
		$this->load->view('build',$data);
	}
	public function projects(){
		$data['error'] = "none";
		$this->load->view('projects',$data);
	}
	public function online(){
		$data['error'] = "none";
		$this->load->view('online',$data);
	}
	public function contact(){
		$data['error'] = "none";
		$this->load->view('contact',$data);
	}



	public function history(){
		$data['error'] = "none";
		$this->load->view('hisory',$data);
	}
	public function navanarashima(){
		$data['error'] = "none";
		$this->load->view('navanarahima',$data);
	}
	public function management(){
		$data['error'] = "none";
		$this->load->view('managemnt',$data);
	}
	public function dailyprograms(){
		$data['error'] = "none";
		$this->load->view('dailyprograms',$data);
	}
	public function festival(){
		$data['error'] = "none";
		$this->load->view('swatifestival',$data);
	}
	public function donations(){
		$data['error'] = "none";
		$this->load->view('donations',$data);
	}
	public function donation(){
		$data['error'] = "none";
		$this->load->view('donation',$data);
	}
	public function demo(){
		$data['error'] = "none";
		$this->load->view('demo',$data);
	}



	public function road(){
		$data['error'] = "none";
		$this->load->view('visit/road',$data);
	}
	public function air(){
		$data['error'] = "none";
		$this->load->view('visit/air',$data);
	}
	public function train(){
		$data['error'] = "none";
		$this->load->view('visit/train',$data);
	}
	public function bus(){
		$data['error'] = "none";
		$this->load->view('visit/bus',$data);
	}

	public function gallery(){
		$data['error'] = "none";

		$path1 ="assets/img/gallery/day1";
      	$a1 = preg_grep('/^([^.])/', scandir($path1));
		$data["day1"] = $a1;
		  
		$path2 ="assets/img/gallery/day2";
      	$a2 = preg_grep('/^([^.])/', scandir($path2));
		$data["day2"] = $a2;
		  
		$path3 ="assets/img/gallery/day3";
      	$a3 = preg_grep('/^([^.])/', scandir($path3));
      	$data["day3"] = $a3;

		$this->load->view('gallery',$data);
	}











	public function help(){
		$data['error'] = "none";
		$this->load->view('others/help',$data);
	}
	public function faq(){
		$data['error'] = "none";
		$this->load->view('others/faq',$data);
	}
	public function guidance(){
		$data['error'] = "none";
		$this->load->view('others/guidance',$data);
	}
	public function pricing(){
		$data['error'] = "none";
		$this->load->view('others/pricing',$data);
	}
	public function payment(){
		$data['error'] = "none";
		$this->load->view('others/payment',$data);
	}
	public function shipping(){
		$data['error'] = "none";
		$this->load->view('others/shipping',$data);
	}
	public function about(){
		$data['error'] = "none";
		$this->load->view('others/about',$data);
	}

	
	public function logout(){
		// Delete login status & user info from session
		$this->session->unset_userdata('loggedIn');
		$this->session->unset_userdata('userData');
      $this->session->sess_destroy();
		
		redirect('index');
	}
	
}