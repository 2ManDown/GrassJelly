<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplyer extends CI_Controller
{
    public function supplyer_list()
    {
        $data['supplyer_list'] = $this->Supplyer_model->supplyer_list();

        $data['page'] = "supplyer/supplyer_list";
        //$this->load->view('theme', $data);
        $this->checksession($data);
    }

    public function supplyer_detail($supplyer_code)
    {
        $data['supplyer_list'] = $this->Supplyer_model->supplyer_detail($supplyer_code);

        $data['page'] = "supplyer/supplyer_detail";
        //$this->load->view('theme', $data);
        $this->checksession($data);
    }

    public function supplyer_insert()
    {
        $data['page'] = "supplyer/supplyer_insert";
        //$this->load->view('theme', $data);
        $this->checksession($data);
    }



    /* INSERT */
    public function supplyer_insert_db(){
        $input = array(
            'supplyer_code' => $this->input->post('supplyer_code'),
            'supplyer_name' => $this->input->post('supplyer_name'),
            'supplyer_address' => $this->input->post('supplyer_address'),
            'supplyer_tel' => $this->input->post('supplyer_tel'),
            'supplyer_detail' => $this->input->post('supplyer_detail'),
            'supplyer_img' => $this->input->post('supplyer_img'),
        );
        $this->Supplyer_model->supplyer_insert_db($input);
        redirect('supplyer/supplyer_list');
    }

    /* UPDATE */

    public function supplyer_update_db(){
        $this->Supplyer_model->supplyer_update_db();
		redirect('supplyer/supplyer_list');
    }

    /* DELETE */
    public function supplyer_delete($supplyer_code)
    {
        $this->Supplyer_model->supplyer_delete($supplyer_code);
        redirect('supplyer/supplyer_list');
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
}
