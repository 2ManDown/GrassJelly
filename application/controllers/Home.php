<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('user/user_login');
	}

	public function admin(){

		$data['product_productbalance'] = $this->Product_model->product_productbalance();
		$data['export'] = $this->Product_model->product_exportrepot();
		$data['material_materialbalance'] = $this->Material_model->material_materialbalance();
		$data['supplier_list'] = $this->Supplier_model->supplier_list();
		$data['hub_list'] = $this->Hub_model->hub_list();

	 	$data['page'] = "index";
		$this->load->view('theme',$data); 
	}

	public function factory(){
	 	$data['page'] = "index";
		$this->load->view('factory',$data); 
	}

	public function supplier(){
	 	$data['page'] = "index";
		$this->load->view('supplier',$data); 
	}
}
