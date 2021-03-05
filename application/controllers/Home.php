<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('user/user_login');
	}

	public function admin(){

		$data['product_productbalance'] = $this->Product_model->product_productbalance();
		$data['material_materialbalance'] = $this->Material_model->material_materialbalance();
		$data['supplier_list'] = $this->Supplier_model->supplier_list();
		$data['hub_list'] = $this->Hub_model->hub_list();

	 	$data['page'] = "index";
		$this->load->view('theme',$data); 
	}

	public function factory(){
		$data['fac_info'] = $this->Fac_model->fac_list();
		$data['product_productbalance'] = $this->Product_model->product_productbalance();
		$data['material_materialbalance'] = $this->Material_model->material_materialbalance();
		$data['supplier_list'] = $this->Supplier_model->supplier_list();
		$data['hub_list'] = $this->Hub_model->hub_list();

	 	$data['page'] = "overview/overview_factory";
		$this->load->view('factory',$data); 
	}

	public function supplier(){
		
		$data['product_history'] = $this->Product_model->product_stock_history();
		$data['product_productbalance'] = $this->Product_model->product_productbalance();
		$data['hub_list'] = $this->Hub_model->hub_list();

	 	$data['page'] = "overview/overview_supplier";
		$this->load->view('supplier',$data); 
	}

	public function mobile_page(){
		
		/* echo "fffff"; exit(); */
	 	$data['page'] = "mobile/mobile_index";
		$this->load->view('mobile_page',$data ); 
	}
}
