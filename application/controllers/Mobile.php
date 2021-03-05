<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobile extends CI_Controller{

    public function mobile_stock()
	{
		$data['product_productbalance'] = $this->Product_model->product_productbalance();

		$data['page'] = "mobile/mobile_stock";
		$this->checksession($data);

	}

    public function mobile_sale()
	{
		$data['product_list'] = $this->Product_model->product_list();

		$data['page'] = "mobile/mobile_sale";
		$this->checksession($data);

	}

    public function mobile_account()
	{

		$data['page'] = "mobile/mobile_account";
		$this->checksession($data);

	}

    public function mobile_import()
	{

		$data['page'] = "mobile/mobile_import";
		$this->checksession($data);

	}
	

    public function checksession($data)
	{
		if ($this->session->userdata('status') == 'admin') {
			$this->load->view('theme', $data);
		}
		else if ($this->session->userdata('status') == 'factory') {
			$this->load->view('factory', $data);
		} 
		else if ($this->session->userdata('status') == 'supplier') {
			$this->load->view('supplier', $data);
		}
		else {
			$this->load->view('mobile_page', $data);
		}
	}
}