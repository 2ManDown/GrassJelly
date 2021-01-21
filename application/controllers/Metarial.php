<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metarial extends CI_Controller {



	public function metarial_insert()
	{
		$data['page'] = "metarial/metarial_insert";
		$this->load->view('theme',$data);
	}
	public function metarial_addinfo()
	{
		$data['page'] = "metarial/metarial_addinfo";
		$this->load->view('theme',$data);
	}
    
    public function metarial_reavel($metarial_code)
	{
		$data['metarial_code'] = $this->Metarial_model->metarial_reavellist($metarial_code);


		$data['page'] = "metarial/metarial_reavel";
		$this->load->view('theme',$data);
	}
	
	public function metarial_reavlist()
	{
		$data['page'] = "metarial/metarial_reavlist";
		$this->load->view('theme',$data);
		
	}

	public function metarial_importlist()
	{
		$data['metarial_im'] = $this->Metarial_model->metarial_im();

		$data['page'] = "metarial/metarial_importlist";
		$this->load->view('theme',$data);
	}
	
	public function metarial_exp()
	{
		$data['page'] = "metarial/metarial_exp";
		$this->load->view('theme',$data);
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
		$this->load->view('theme', $data);
	}


}

