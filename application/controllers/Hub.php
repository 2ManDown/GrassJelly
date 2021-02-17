<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub extends CI_Controller{

    public function hub_list(){
        $data['hub_list'] = $this->Hub_model->hub_list();

        $data['page'] = "product/product_exportbill";
		$data['page'] = "hub/hub_list";
		$this->checksession($data);
    }

	public function hub_addinfo()
	{
		$data['page'] = "hub/hub_addinfo";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function hub_insert_db()
	{
		$input = array(
			'hub_name' => $this->input->post('hub_name'),
			
			/* '_address' => $this->input->post('_address'),
			'_tel' => $this->input->post('_tel'),
			'_email' => $this->input->post('_email'), */
		);
		$this->Hub_model->hub_insert_db($input);
		redirect('hub/hub_list');
	}

	public function hub_manage($hub_list)
	{
		$data['hub_manage'] = $this->Hub_model->hub_manage($hub_list);
		$data['page'] = "hub/hub_manage";
		$this->checksession($data);
	}

	public function hub_update_db(){
		
        $this->Hub_model->hub_update_db();
        redirect('hub/hub_list');
	}

    public function checksession($data){
		if($this->session->userdata('status') == 'admin'){

			$this->load->view('theme', $data);
		}else if($this->session->userdata('status') == 'factory'){

			$this->load->view('factory', $data);
		}else{
			$this->load->view('supplyer', $data);
		}
	}

	public function hub_delete($hub_id)
	{
		$this->Hub_model->hub_delete($hub_id);
		redirect('hub/hub_list');
	}

}
