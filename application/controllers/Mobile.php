<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobile extends CI_Controller{

    public function mobile_stock()
	{
		$data['sale_stockbalance'] = $this->Mobile_model->mobile_stockbalance();

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

    public function mobile_stock_history()
	{
		$data['sale_history'] = $this->Mobile_model->mobile_stock_history();
		$data['page'] = "mobile/mobile_stock_history";
		$this->checksession($data);

	}

    public function mobile_return_product()
	{
		$data['product_list'] = $this->Product_model->product_list();

		$data['page'] = "mobile/mobile_return_product";
		$this->checksession($data);

	}

	public function mobile_orderinsert()
	{
		$input = array(
			
			'order_sale_code' => $this->input->post('countid'),
			'order_sale_date' => $this->input->post('sale_date'),
			'order_sale_time' => $this->input->post('sale_time'),

			'employee_id' => $this->session->userdata('employee'),

		);
		//Insert OrderBill
		$this->Mobile_model->mobile_orderinsert($input);


		$i = 0;
		foreach ($this->input->post('amount') as $checkbox) {
			if (@$this->input->post('checkbox')[$i] != "") {
				$order_detail = array(
					'order_sale_code' => $this->input->post('countid'),
					'product_code' => $this->input->post('checkbox')[$i],
					'order_detailsale_amount' => $this->input->post('amount')[$i],
					'order_detailsale_price' => $this->input->post('price')[$i]
				);
				//Insert Order Detail
				$this->Mobile_model->mobile_orderdetail_insert($order_detail);
				
			}
			$i++;
		}

		$i = 0;
		foreach ($this->input->post('amount') as $checkbox) {
			if (@$this->input->post('checkbox')[$i] != "") {
				$product_stock = array(
					'product_code' => $this->input->post('checkbox')[$i],
					'sale_stock_amount' => -$this->input->post('amount')[$i],
					'sale_stock_date' => $this->input->post('sale_date'),
					'sale_stock_time' => $this->input->post('sale_time'),
					'sale_stock_status' => 2,
					'sale_stock_category' => 1,
					'sale_stock_user' => $this->session->userdata('id'),
					'order_sale_code' => $this->input->post('countid'),
					'employee_id' => $this->session->userdata('employee'),
				);
				//echo '<pre>';
				//print_r($product_stock);
				$this->Mobile_model->mobile_stock_insert($product_stock);
			}
			$i++;
		}

		redirect('mobile/mobile_stock');
	}
	
	public function mobile_return_insert()
	{
		
		$i = 0;
		foreach ($this->input->post('amount') as $checkbox) {
			if (@$this->input->post('checkbox')[$i] != "") {
				$product_stock = array(
					'product_code' => $this->input->post('checkbox')[$i],
					'product_stock_amount' => $this->input->post('amount')[$i],
					'product_stock_date' => $this->input->post('sale_date'),
					'product_stock_time' => $this->input->post('sale_time'),
					'product_stock_status' => 1,
					'product_stock_category' => 2,
					'product_stock_user' => $this->session->userdata('id'),
					/* 'order_sale_code' => $this->input->post('countid'), */
					'hub_id' => $this->session->userdata('hub'),
				);
				/* echo '<pre>';
				print_r($product_stock);
				exit(); */
				$this->Mobile_model->mobile_return_insert($product_stock);
			}
			$i++;
		}

		$i = 0;
		foreach ($this->input->post('amount') as $checkbox) {
			if (@$this->input->post('checkbox')[$i] != "") {
				$product_stock = array(
					'product_code' => $this->input->post('checkbox')[$i],
					'sale_stock_amount' => -$this->input->post('amount')[$i],
					'sale_stock_date' => $this->input->post('sale_date'),
					'sale_stock_time' => $this->input->post('sale_time'),
					'sale_stock_status' => 2,
					'sale_stock_category' => 1,
					'sale_stock_user' => $this->session->userdata('id'),
					
					'employee_id' => $this->session->userdata('employee'),
				);
				//echo '<pre>';
				//print_r($product_stock);
				$this->Mobile_model->mobile_stock_insert($product_stock);
			}
			$i++;
		}

		redirect('mobile/mobile_stock');
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