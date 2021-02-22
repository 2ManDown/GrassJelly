<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub extends CI_Controller{

    public function hub_list(){
        $data['hub_list'] = $this->Hub_model->hub_list();
		$data['product_list'] = $this->Product_model->product_list();

        $data['page'] = "product/product_exportbill";
		$this->checksession($data);
    }

	public function hub_stock($hub_id){
		$data['hub_stock'] = $this->Hub_model->hub_stock($hub_id);

		$data['page'] = "hub/hub_stock";
		$this->checksession($data);
	}

    public function hub_info(){
        $data['hub_list'] = $this->Hub_model->hub_list();

        $data['page'] = "hub/hub_info";
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
			'hub_address' => $this->input->post('hub_address'),
			'hub_tel' => $this->input->post('hub_tel'),
			'hub_email' => $this->input->post('hub_email'),
			'hub_latitude' => $this->input->post('hub_latitude'),
			'hub_longitude' => $this->input->post('hub_longitude'),
		);
		$this->Hub_model->hub_insert_db($input);
		redirect('hub/hub_info');
	}

	public function hub_manage($hub_list)
	{
		$data['hub_manage'] = $this->Hub_model->hub_manage($hub_list);
		$data['page'] = "hub/hub_manage";
		$this->checksession($data);
	}

	public function hub_update_db(){
		
        $this->Hub_model->hub_update_db();
        redirect('hub/hub_info');
	}

	public function hub_delete($hub_id)
	{
		$this->Hub_model->hub_delete($hub_id);
		redirect('hub/hub_info');
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
