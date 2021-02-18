<?php
defined('BASEPATH') or exit('No direct script access allowed');

class supplier_model extends CI_Model
{
    public function supplier_list(){
        
        return $this->db->get('gj_supplier')->result_array();
    }
    public function supplier_detail($supplier_code){
        
        /* Get Data from Primary Key */
        $fetch = array('supplier_code' => $supplier_code);
        $query = $this->db->get_where('gj_supplier', $fetch);
        return $query->result_array();
    }


    /* INSERT */
    public function supplier_insert_db($input)
    {
        $this->db->insert('gj_supplier', $input);
    }


    /* UPDATE */
    public function supplier_update_db(){
        $input = array(
			'supplier_code' => $this->input->post('supplier_code'),
			'supplier_name' => $this->input->post('supplier_name'),
			'supplier_address' => $this->input->post('supplier_address'),
			'supplier_tel' => $this->input->post('supplier_tel'),
			'supplier_detail' => $this->input->post('supplier_detail'),
			'supplier_img' => $this->input->post('supplier_img'),
        );
        
        $this->db->where('supplier_code', $input['supplier_code']);
        $this->db->update('gj_supplier', $input);
    }

    /* DELETE */
    public function supplier_delete($supplier_code)
    {
        $this->db->where('supplier_code', $supplier_code);
        $this->db->delete('gj_supplier');
    }

    
}
