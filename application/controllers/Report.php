<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function exportbill(){
        $this->load->view('report/report');
    }
}

?>