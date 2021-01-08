<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	public function product_list()
	{
		$data['page'] = "product/product_list";
		
		$this->load->view('theme',$data);
	}

	public function product_insert()
	{
		$data['page'] = "product/product_insert";
		$this->load->view('theme',$data);
	}
}
