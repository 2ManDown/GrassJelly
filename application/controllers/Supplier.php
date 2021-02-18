<?php
defined('BASEPATH') or exit('No direct script access allowed');

class supplier extends CI_Controller
{
    public function supplier_list()
    {
        $data['supplier_list'] = $this->Supplier_model->supplier_list();

        $data['page'] = "supplier/supplier_list";
        //$this->load->view('theme', $data);
        $this->checksession($data);
    }

    public function supplier_detail($supplier_code)
    {
        $data['supplier_list'] = $this->Supplier_model->supplier_detail($supplier_code);

        $data['page'] = "supplier/supplier_detail";
        //$this->load->view('theme', $data);
        $this->checksession($data);
    }

    public function supplier_insert()
    {
        $data['page'] = "supplier/supplier_insert";
        //$this->load->view('theme', $data);
        $this->checksession($data);
    }



    /* INSERT */
    public function supplier_insert_db(){
        $input = array(
            'supplier_code' => $this->input->post('supplier_code'),
            'supplier_name' => $this->input->post('supplier_name'),
            'supplier_address' => $this->input->post('supplier_address'),
            'supplier_tel' => $this->input->post('supplier_tel'),
            'supplier_detail' => $this->input->post('supplier_detail'),
            'supplier_img' => $this->input->post('supplier_img'),
        );
        $this->Supplier_model->supplier_insert_db($input);
        redirect('supplier/supplier_list');
    }

    /* UPDATE */

    public function supplier_update_db(){
        $this->Supplier_model->supplier_update_db();
		redirect('supplier/supplier_list');
    }

    /* DELETE */
    public function supplier_delete($supplier_code)
    {
        $this->Supplier_model->supplier_delete($supplier_code);
        redirect('supplier/supplier_list');
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
