<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Metarial_model extends CI_Model

{
    /* Metarial_model */
    /* INSERT */
    public function metarial_insert_db($input)
    {
        $this->db->insert('gj_metarial', $input);
    }

    public function metarial_list()
    {
        $query = $this->db->get('gj_metarial');
        return $query->result_array();
    }
}
