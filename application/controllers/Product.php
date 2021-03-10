<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function product_list()
	{

		//get ข้อมูลจาก table
		$data['product_list'] = $this->Product_model->product_list();
		// echo "<pre>";
		// print_r($data['product_list']);
		// exit();

		$data['page'] = "product/product_list";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}
	public function product_stock_history()
	{
		$data['product_history'] = $this->Product_model->product_stock_history();
		/* echo "<pre>";
		print_r($data['product_history']);
		exit(); */
		$data['page'] = "product/product_stock_history";
		$this->checksession($data);
	}

	public function product_choose_product()
	{
		$data['page'] = "product/product_choose_product";
		$this->checksession($data);
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
		// echo '<pre>';
		// print_r ($data);
		// echo '<pre>';
		// exit();

		$data['page'] = "product/product_productbalance";
		
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	/* คงคลังของ supplier */
	public function product_balancesupplier()
	{
		$data['product_balancesupplier'] = $this->Product_model->product_balancesupplier();

		$data['page'] = "product/product_balancesupplier";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}


	public function product_exportreport()
	{
		$data['export'] = $this->Product_model->product_exportrepot();

		$data['page'] = "product/product_exportreport";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_manufacreport()
	{
		$data['product_manufac'] = $this->Product_model->product_manufacreport();

		$data['page'] = "product/product_manufacreport";
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


	public function product_exportbill()
	{
		$data['employee'] = $this->Employee_model->employee_list();

		$data['page'] = "product/product_exportbill";
		$this->checksession($data);
	}

	public function product_select($id)
	{
		$data['select'] = $this->Product_model->product_select($id);

		$this->checksession($data);
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

	public function product_order_detail($order_code)
	{
		$data['orderdetail'] = $this->Product_model->product_order_detail($order_code);
		//$data['product_list'] = $this->Product_model->product_list($order_code);

		$data['page'] = "product/product_orderdetail";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}

	public function product_importreport()
	{
		$data['product_import'] = $this->Product_model->product_importreport();

		/* echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit(); */

		$data['page'] = "product/product_importreport";
		$this->checksession($data);
	}

	public function product_import()
	{
		$data['product_list'] = $this->Product_model->product_list();

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
			'product_min' => $this->input->post('product_min'),
		);
		$this->Product_model->product_insert_db($input);
		redirect('product/product_list');
	}

	public function product_orderinsert()
	{
			$input = array(
				'order_code' => $this->input->post('countid'),
				'order_date' => $this->input->post('export_date'),
				'order_time' => $this->input->post('export_time'),
				'hub_id' => $this->input->post('hubid'),
				'owner' => $this->session->userdata('hub')
			);
			//Insert OrderBill
			$this->Product_model->product_orderinsert($input);
		
		$i = 0;
		foreach ($this->input->post('amount') as $checkbox) {
			if (@$this->input->post('checkbox')[$i] != "") {
				$order_detail = array(
					'order_code' => $this->input->post('countid'),
					'product_code' => $this->input->post('checkbox')[$i],
					'order_detail_amount' => $this->input->post('amount')[$i],
					'order_detail_price' => $this->input->post('price')[$i],
				);
				//Insert Order Detail
				$this->Product_model->product_orderdetail_insert($order_detail);
				
			}
			$i++;
		}

		$i = 0;
		foreach ($this->input->post('amount') as $checkbox) {
			if (@$this->input->post('checkbox')[$i] != "") {
				$product_stock = array(
					'product_code' => $this->input->post('checkbox')[$i],
					'product_stock_amount' => -$this->input->post('amount')[$i],
					'product_stock_date' => $this->input->post('export_date'),
					'product_stock_time' => $this->input->post('export_time'),
					'product_stock_status' => 2,
					'product_stock_category' => 1,
					'product_stock_user' => $this->session->userdata('id'),
					'order_code' => $this->input->post('countid'),
					'hub_id' => $this->session->userdata('hub')
					
				);
				$this->Product_model->product_stock_insert($product_stock);
				
				$balance = array(
					'product_code' => $this->input->post('checkbox')[$i],
					'product_stock_amount' => $this->input->post('amount')[$i],
					'product_stock_date' => $this->input->post('export_date'),
					'product_stock_time' => $this->input->post('export_time'),
					'product_stock_status' => 1,
					'product_stock_category' => 1,
					'product_stock_user' => $this->session->userdata('id'),
					'order_code' => $this->input->post('countid'),
					'hub_id' => $this->input->post('hubid')
				);
				$this->Product_model->product_stock_insert($balance);



				if($this->session->userdata('status') == 'supplier'){
					$input = array(
						'product_code' => $this->input->post('checkbox')[$i],
						'sale_stock_amount' => $this->input->post('amount')[$i],
						'sale_stock_date' => $this->input->post('export_date'),
						'sale_stock_time' => $this->input->post('export_time'),
						'sale_stock_status' => 1,
						'sale_stock_category' => 1,
						'sale_stock_user' => $this->session->userdata('id'),
						'employee_id' => $this->input->post('hubid')
					);
					//Insert import sale
					$this->Mobile_model->mobile_stock_insert($input);
				}

			}
			$i++;
		}
		redirect('product/product_stock_history');
	}

	public function product_insert_manufac()
	{

		$this->Product_model->product_insert_manufac(/* $input */);
		redirect('product/product_manufacreport');
	}

	public function product_insert_import()
	{
		$this->Product_model->product_insert_import(/* $input */);
		redirect('product/product_stock_history');
	}

	public function product_manufacinsert()
	{
		$data['product_list'] = $this->Product_model->product_list();
		/* echo '<pre>';
		print_r ($data);
		echo '<pre>'; */

		$data['page'] = "product/product_manufacinsert";
		$this->checksession($data);
		//$this->load->view('theme', $data);
	}


	/* UPDATE */
	public function product_update_db()
	{

		$this->Product_model->product_update_db();
		redirect('product/product_list');
	}
	public function product_sell_update()
	{
		$this->Product_model->product_sell_update();
		redirect('product/product_exportreport');
	}

	/* DELETE */
	public function product_delete($product_code)
	{
		$this->Product_model->product_delete($product_code);
		redirect('product/product_list');
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
