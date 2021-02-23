<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{


	public function employee_info()
	{
		$data['employee_list'] = $this->Employee_model->employee_list();

		$data['page'] = "employee/employee_info";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function employee_addinfo()
	{
		$data['page'] = "employee/employee_addinfo";
		$data['employee_hub'] = $this->Employee_model->employee_hub();

		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function employee_manage($employee_list)
	{
		$data['employee_manage'] = $this->Employee_model->employee_manage($employee_list);
		$data['employee_hub'] = $this->Employee_model->employee_hub();

		$data['page'] = "employee/employee_manage";
		$this->checksession($data);
		//$this->load->view('theme', $data);
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
			'hub_id' => $this->input->post('hub_id'),
		);
		$this->Employee_model->employee_insert_db($input);
		redirect('employee/employee_info');
	}

	/* UPDATE */
	public function employee_update_db(){
		
        $this->Employee_model->employee_update_db();
        redirect('employee/employee_info');
	}

	/* DELETE */
	public function employee_delete($employee_id)
	{
		$this->Employee_model->employee_delete($employee_id);
		redirect('employee/employee_info');
	}
	
	public function checksession($data){
		if($this->session->userdata('status') == 'admin'){
			
			$this->load->view('theme', $data);
		}else if($this->session->userdata('status') == 'factory'){
			
			$this->load->view('factory', $data);
		}else{
			$this->load->view('supplier', $data);
		}
	}
}
