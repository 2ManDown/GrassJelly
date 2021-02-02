<?php
defined('BASEPATH') or exit('No direct script access allowed');

class factory extends CI_Controller
{
    public function factory_info()
    {
        //get ข้อมูลจาก table
        $data['fac_info'] = $this->Fac_model->fac_list();

        $data['page'] = "factory/factory_info";
        //$this->load->view('theme', $data);
        $this->checksession($data);
    }

    public function factory_update_db(){
        $this->Fac_model->factory_update_db();
        redirect('factory/factory_info');
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
