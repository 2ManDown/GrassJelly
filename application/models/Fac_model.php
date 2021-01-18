<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fac_model extends CI_Model

{
    public function fac_list()
    {
        $query = $this->db->get('gj_fac');
        return $query->result_array();
    }
}
