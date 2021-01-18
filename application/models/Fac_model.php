<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fac_model extends CI_Model

{
    public function fac_list()
    {
        $query = $this->db->get('gj_fac');
        return $query->result_array();
    }

    public function factory_update_db(){
        $data = array(
            'fac_id' => $this->input->post('fac_id'),
            'fac_name' => $this->input->post('fac_name'),
            'fac_address' => $this->input->post('fac_address'),
            'fac_branch' => $this->input->post('fac_branch'),
            'fac_subdistrict' => $this->input->post('fac_subdistrict'),
            'fac_vatnumber' => $this->input->post('fac_vatnumber'),
            'fac_district' => $this->input->post('fac_district'),
            'fac_tel' => $this->input->post('fac_tel'),
            'fac_province' => $this->input->post('fac_province'),
            'fac_email' => $this->input->post('fac_email'),
            'fac_postcode' => $this->input->post('fac_postcode'),
        );

        $this->db->where('fac_id',$data['fac_id']);
        $this->db->update('gj_fac',$data);
        
    }
}
