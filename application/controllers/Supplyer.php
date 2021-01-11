<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplyer extends CI_Controller
{
    public function supplyer_list()
    {
        $data['page'] = "supplyer/supplyer_list";
        $this->load->view('theme', $data);
    }

    public function supplyer_detail()
    {
        $data['page'] = "supplyer/supplyer_detail";
        $this->load->view('theme', $data);
    }

    public function supplyer_insert()
    {
        $data['page'] = "supplyer/supplyer_insert";
        $this->load->view('theme', $data);
    }
}
