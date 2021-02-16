<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub_model extends CI_Model
{
    public function hub_list(){
        
        return $this->db->get('gj_hub')->result_array();
    }
    public function hub(){
        return $this->db->get('gj_hub')->result_array();
    }
}