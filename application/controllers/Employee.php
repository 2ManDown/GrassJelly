<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


	public function employee_info()
	{
		$data['page'] = "employee/employee_info";
		$this->load->view('theme',$data);
	}

	public function employee_addinfo()
	{
		$data['page'] = "employee/employee_addinfo";
		$this->load->view('theme',$data);
	}
	
	public function employee_manage()
	{
		$data['page'] = "employee/employee_manage";
		$this->load->view('theme',$data);
	}


	
	
}
