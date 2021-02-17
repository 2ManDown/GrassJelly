<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub extends CI_Controller{
    public function hub_list(){
        $data['hub_list'] = $this->Hub_model->hub_list();
        $data['product_list'] = $this->Product_model->product_list();
        $data['page'] = "product/product_exportbill";
		    $this->checksession($data);
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
