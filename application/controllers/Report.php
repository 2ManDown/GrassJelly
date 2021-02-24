<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function exportbill($ordercode){
        $data['order'] = $this->Product_model->product_order_detail($ordercode);
        $data['fac'] = $this->Fac_model->fac_list();
       
        
        $this->load->view('report/report',$data);
    }

    public function revealbill($ordercode){
        $data['order'] = $this->Material_model->material_order_detail($ordercode);
        $data['fac'] = $this->Fac_model->fac_list();
        
        $this->load->view('report/report_reveal',$data);
    }
}

?>