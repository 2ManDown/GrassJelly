<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub_model extends CI_Model
{
    public function hub_list(){
        $query = $this->db->get('gj_hub');
        return $query->result_array();
        //return $this->db->get('gj_hub')->result_array();
    }
}