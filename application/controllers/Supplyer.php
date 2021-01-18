<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplyer extends CI_Controller
{
    public function supplyer_list()
    {
        $data['supplyer_list'] = $this->Supplyer_model->supplyer_list();

        $data['page'] = "supplyer/supplyer_list";
        $this->load->view('theme', $data);
    }

    public function supplyer_detail($supplyer_code)
    {
        $data['supplyer_list'] = $this->Supplyer_model->supplyer_detail($supplyer_code);

        $data['page'] = "supplyer/supplyer_detail";
        $this->load->view('theme', $data);
    }

    public function supplyer_insert()
    {
        $data['page'] = "supplyer/supplyer_insert";
        $this->load->view('theme', $data);
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
}
