<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Material extends CI_Controller
{


	public function material_stock_history()
	{
		$data['material_history'] = $this->Material_model->material_stock_history();

		$data['page'] = "material/material_stock_history";
		$this->checksession($data);
		/* echo "<pre>";
		print_r($data['material_history']);
		exit(); */
	}
	public function material_insert($material_code)
	{
		$data['material_code'] = $this->Material_model->material_importlist($material_code);

		$data['page'] = "material/material_insert";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}
	public function material_addinfo()
	{
		$data['page'] = "material/material_addinfo";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	
	public function material_reavlist()
	{
		/* get data form database */
		$data['material_reavlist'] = $this->Material_model->material_reavlist();
		
		$data['page'] = "material/material_reavlist";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}
	
	public function material_importlist()
	{
		$data['material_im'] = $this->Material_model->material_im();
		
		$data['page'] = "material/material_importlist";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}
	
	public function material_import()
	{
		$data['material_list'] = $this->Material_model->material_materialbalance();
		$data['material_suppiler'] = $this->Material_model->material_supplierlist();
		
		$data['page'] = "material/material_import";
		$this->checksession($data);
		
	}
	
	public function material_insert_import()
	{
		$input = array(
			'material_code' => $this->input->post('material_code'),
			'material_stock_amount' => $this->input->post('material_stock_amount'),
			'material_stock_date' => $this->input->post('material_stock_date'),
			'material_stock_time' => $this->input->post('material_stock_time'),
			'material_stock_status' => $this->input->post('material_stock_status'),
			'material_stock_comment' => $this->input->post('material_stock_comment'),
			'material_stock_user' => $this->input->post('material_stock_user'),
			'supplier_id' => $this->input->post('supplier_id'),
			
		);

		$this->Material_model->material_insert_stock($input);
		redirect('material/material_stock_history');
	}

	public function material_reavel()
	{
		$data['material_list'] = $this->Material_model->material_materialbalance();
		$data['material_suppiler'] = $this->Material_model->material_supplierlist();

		$data['page'] = "material/material_reavel";
		$this->checksession($data);
	}

	public function material_insert_reavel()
	{
		$input = array(
			'material_code' => $this->input->post('material_code'),
			'material_stock_amount' => -$this->input->post('material_stock_amount'),
			'material_stock_date' =>  $this->input->post('material_stock_date'),
			'material_stock_time' => $this->input->post('material_stock_time'),
			'material_stock_status' => $this->input->post('material_stock_status'),
			'material_stock_comment' => $this->input->post('material_stock_comment'),
			'material_stock_user' => $this->input->post('material_stock_user'),
			//'supplier_id' => $this->input->post('supplier_id'),
			
		);
		/* print_r($input);
		exit(); */
		$this->Material_model->material_insert_stock($input);
		redirect('material/material_stock_history');
	}
	
	public function material_exp()
	{
		$data['page'] = "material/material_exp";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function material_insert_db()
	{
		$input = array(
			'material_code' => $this->input->post('material_code'),
			'material_name' => $this->input->post('material_name'),
			'material_volume' => $this->input->post('material_volume'),
			'material_unit' => $this->input->post('material_unit'),
		);
		$this->Material_model->material_insert_db($input);
		redirect('material/material_listinfo');
	}

	public function material_materialbalance()
	{
		//get ข้อมูลจาก table
		$data['material_materialbalance'] = $this->Material_model->material_materialbalance();
		
		$data['page'] = "material/material_materialbalance";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function material_listinfo()
	{
		//get ข้อมูลจาก table
		$data['material_list'] = $this->Material_model->material_materialbalance();

		$data['page'] = "material/material_listinfo";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function material_reavinsert()
	{
		$input = array(

			'material_code' => $this->input->post('material_code'),
			'reavelmaterial_amount' => $this->input->post('reavelmaterial_amount'),
			'reavelmaterial_revdate' => $this->input->post('reavelmaterial_revdate'),

		);
		$this->Material_model->material_reavinsert($input);
		redirect('material/material_reavlist');
	}

	/* public function material_iminsert()
	{
		$input = array(
			//'immaterial_id' => $this->input->post('immaterial_id'),
			'material_code' => $this->input->post('material_code'),
			'immaterial_amount' => $this->input->post('immaterial_amount'),
			'immaterial_price' => $this->input->post('immaterial_price'),
			'immaterial_sumprice' => $this->input->post('immaterial_sumprice'),
			'immaterial_imdate' => $this->input->post('immaterial_imdate'),
			'immaterial_expdate' => $this->input->post('immaterial_expdate'),

		);
		$this->Material_model->material_iminsert($input);
		redirect('material/material_importlist');
	} */


	public function checksession($data){
		if($this->session->userdata('status') == 'admin'){

			$this->load->view('theme', $data);
		}else if($this->session->userdata('status') == 'factory'){

			$this->load->view('factory', $data);
		}else{
			$this->load->view('supplier', $data);
		}
	}

	public function material_manage($material_manage)
	{
		$data['material_manage'] = $this->Material_model->material_manage($material_manage);

		$data['page'] = "material/material_manage";
		$this->checksession($data);
	}

	public function material_delete($material_manage)
	{
		$this->Material_model->material_delete($material_manage);
		redirect('material/material_listinfo');
	}

	/* UPDATE of Controller */
	public function material_update_db(){
		
        $this->Material_model->material_update_db();
        redirect('material/material_listinfo');
	}

}
