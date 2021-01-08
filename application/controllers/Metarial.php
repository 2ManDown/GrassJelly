<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metarial extends CI_Controller {



	public function metarial_insert()
	{
		$data['page'] = "metarial/metarial_insert";
		$this->load->view('theme',$data);
	}
}
