<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


	public function employee_info()
	{
		$data['employee_list'] = $this->Employee_model->employee_list();


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

	public function employee_insert_db()
	{
		$input = array(
			'employee_id' => $this->input->post('employee_id'),
			'employee_name' => $this->input->post('employee_name'),
			'employee_sex' => $this->input->post('employee_sex'),
			'employee_birthdate' => $this->input->post('employee_birthdate'),
			'employee_address' => $this->input->post('employee_address'),
			'employee_tel' => $this->input->post('employee_tel'),
			'employee_email' => $this->input->post('employee_email'),
		);
		$this->Employee_model->employee_insert_db($input);
		redirect('employee/employee_info');
	}


	
	
}
