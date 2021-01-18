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



    
}
