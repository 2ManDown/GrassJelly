<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplyer_model extends CI_Model
{
    public function supplyer_list(){
        
        return $this->db->get('gj_supplyer')->result_array();
    }
    public function supplyer_detail($supplyer_code){
        
        /* Get Data from Primary Key */
        $fetch = array('supplyer_code' => $supplyer_code);
        $query = $this->db->get_where('gj_supplyer', $fetch);
        return $query->result_array();
    }


    /* INSERT */
    public function supplyer_insert_db($input)
    {
        $this->db->insert('gj_supplyer', $input);
    }


    /* UPDATE */
    public function supplyer_update_db(){
        $input = array(
			'supplyer_code' => $this->input->post('supplyer_code'),
			'supplyer_name' => $this->input->post('supplyer_name'),
			'supplyer_address' => $this->input->post('supplyer_address'),
			'supplyer_tel' => $this->input->post('supplyer_tel'),
			'supplyer_detail' => $this->input->post('supplyer_detail'),
			'supplyer_img' => $this->input->post('supplyer_img'),
        );
        
        $this->db->where('supplyer_code', $input['supplyer_code']);
        $this->db->update('gj_supplyer', $input);
    }

    
}
