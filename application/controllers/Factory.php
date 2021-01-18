<?php
defined('BASEPATH') or exit('No direct script access allowed');

class factory extends CI_Controller
{
    public function factory_info()
    {
        //get ข้อมูลจาก table
        $data['fac_list'] = $this->Fac_model->fac_list();

        $data['page'] = "factory/factory_info";
        $this->load->view('theme', $data);
    }

   
}
