<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function product_list()
	{
		
		//get ข้อมูลจาก table
		$data['product_list'] = $this->Product_model->product_list();

		$data['page'] = "product/product_list";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_insert()
	{
		$data['page'] = "product/product_insert";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_productbalance()
	{
		$data['product_productbalance'] = $this->Product_model->product_productbalance();

		$data['page'] = "product/product_productbalance";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}


	public function product_exportreport()
	{
		$data['product_export'] = $this->Product_model->product_exportreport();

		$data['page'] = "product/product_exportreport";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_exp()
	{
		$data['page'] = "product/product_exp";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_detail($product_code)
	{
		$data['product_list'] = $this->Product_model->product_detail($product_code);

		$data['page'] = "product/product_detail";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

/* 	public function product_select($product_code)
	{
		$data['product_select'] = $this->Product_model->product_detail($product_code);

		$data['page'] = "product/product_import";
		$this->load->view('theme', $data);
	} */

	public function product_exportbill()
	{
		$data['page'] = "product/product_exportbill";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_select($id){
		$data['select'] = $this->Product_model->product_select($id);

		$this->checksession($data);
	}

	public function product_manufacinsert()
	{
		$data['product_list'] = $this->Product_model->product_list();

		$data['page'] = "product/product_manufacinsert";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_manufacdetail($id)
	{
		$data['manufac_detail'] = $this->Product_model->product_manufacdetail($id);

		/* echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit(); */

		$data['page'] = "product/product_manufacdetail";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_selldetail($sell_id)
	{
		$data['selldetail'] = $this->Product_model->product_selldetail($sell_id);

		$data['page'] = "product/product_selldetail";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_importreport()
	{
		$data['product_importreport'] = $this->Product_model->product_importreport();

		$data['page'] = "product/product_reportim";
		$this->checksession($data);
		//$this->load->view('theme', $data);

	}

	public function product_import()
	{
		$data['product_import'] = $this->Product_model->product_import();

		$data['page'] = "product/product_import";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}


	/* INSERT */
	public function product_insert_db()
	{
		$input = array(
			'product_code' => $this->input->post('product_code'),
			'product_name' => $this->input->post('product_name'),
			'product_detail' => $this->input->post('product_detail'),
			'product_volume' => $this->input->post('product_volume'),
			'product_price' => $this->input->post('product_price'),
			'product_unit' => $this->input->post('product_unit'),
		);
		$this->Product_model->product_insert_db($input);
		redirect('product/product_list');
	}


	/* UPDATE */
	public function product_update_db(){

		$this->Product_model->product_update_db();
		redirect('product/product_list');
	}
	public function product_sell_update(){
		$this->Product_model->product_sell_update();
		redirect('product/product_exportreport');
	}

	/* DELETE */
	public function product_delete($product_code)
	{
		$this->Product_model->product_delete($product_code);
		redirect('product/product_list');
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
