<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metarial extends CI_Controller {



	public function metarial_insert()
	{
		$data['page'] = "metarial/metarial_insert";
		$this->load->view('theme',$data);
    }
    public function metarial_reavlist()
	{
		$data['page'] = "metarial/metarial_reavlist";
		$this->load->view('theme',$data);
    }
    public function metarial_reavel()
	{
		$data['page'] = "metarial/metarial_reavel";
		$this->load->view('theme',$data);
	}
	
	public function metarial_list()
	{
		$data['page'] = "metarial/metarial_list";
		$this->load->view('theme',$data);
	}
	
	public function metarial_importlist()
	{
		$data['page'] = "metarial/metarial_importlist";
		$this->load->view('theme',$data);
    }
}

