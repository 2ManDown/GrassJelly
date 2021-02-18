<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('user/user_login');
	}
	public function admin(){
	 	$data['page'] = "index";
		$this->load->view('theme',$data); 
	}
	public function factory(){
	 	$data['page'] = "index";
		$this->load->view('factory',$data); 
	}
	public function supplier(){
	 	$data['page'] = "index";
		$this->load->view('supplier',$data); 
	}
}
