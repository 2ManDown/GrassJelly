<?php
defined('BASEPATH') or exit('No direct script access allowed');

class factory extends CI_Controller
{
    public function factory_info()
    {
        $data['page'] = "factory/factory_info";
        $this->load->view('theme', $data);
    }

}
