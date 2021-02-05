<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Metarial extends CI_Controller
{



	public function metarial_insert($metarial_code)
	{
		$data['metarial_code'] = $this->Metarial_model->metarial_importlist($metarial_code);

		$data['page'] = "metarial/metarial_insert";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}
	public function metarial_addinfo()
	{
		$data['page'] = "metarial/metarial_addinfo";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function metarial_reavel($metarial_code)
	{
		$data['metarial_code'] = $this->Metarial_model->metarial_reavellist($metarial_code);

		$data['page'] = "metarial/metarial_reavel";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function metarial_reavlist()
	{
		/* get data form database */
		$data['metarial_reavlist'] = $this->Metarial_model->metarial_reavlist();

		$data['page'] = "metarial/metarial_reavlist";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function metarial_importlist()
	{
		$data['metarial_im'] = $this->Metarial_model->metarial_im();

		$data['page'] = "metarial/metarial_importlist";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function metarial_exp()
	{
		$data['page'] = "metarial/metarial_exp";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function metarial_insert_db()
	{
		$input = array(
			'metarial_code' => $this->input->post('metarial_code'),
			'metarial_name' => $this->input->post('metarial_name'),
			'metarial_volume' => $this->input->post('metarial_volume'),
			'metarial_price' => $this->input->post('metarial_price'),
			'metarial_unit' => $this->input->post('metarial_unit'),
			'metarial_expdate' => $this->input->post('metarial_expdate'),
		);
		$this->Metarial_model->metarial_insert_db($input);
		redirect('metarial/metarial_list');
	}

	public function metarial_list()
	{
		//get ข้อมูลจาก table
		$data['metarial_list'] = $this->Metarial_model->metarial_list();

		$data['page'] = "metarial/metarial_list";
		//$this->load->view('theme', $data);
		$this->checksession($data);
	}

	public function metarial_reavinsert()
	{
		$input = array(
			'reavelmetarial_id' => $this->input->post('reavelmetarial_id'),
			'metarial_code' => $this->input->post('metarial_code'),
			'reavelmetarial_amount' => $this->input->post('reavelmetarial_amount'),
			'reavelmetarial_revdate' => $this->input->post('reavelmetarial_revdate'),
			
		);
		$this->Metarial_model->metarial_reavinsert($input);
		redirect('metarial/metarial_reavlist');
	}

	public function metarial_iminsert()
	{
		$input = array(
			'immetarial_id' => $this->input->post('immetarial_id'),
			'metarial_code' => $this->input->post('metarial_code'),
			'immetarial_amount' => $this->input->post('immetarial_amount'),
			'immetarial_sumprice' => $this->input->post('immetarial_sumprice'),
			'immetarial_imdate' => $this->input->post('immetarial_imdate'),
			
		);
		$this->Metarial_model->metarial_iminsert($input);
		redirect('metarial/metarial_importlist');
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

	public function metarial_manage($metarial_manage)
	{
		$data['metarial_manage'] = $this->Metarial_model->metarial_manage($metarial_manage);

		$data['page'] = "metarial/metarial_manage";
		$this->checksession($data);
	}

	public function metarial_delete($metarial_manage)
	{
		$this->Metarial_model->metarial_delete($metarial_manage);
		redirect('metarial/metarial_list');
	}
}
