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

    public function metarial_reavellist($metarial_code)
    {
        $query = $this->db->get_where('gj_metarial', array('metarial_code' => $metarial_code));
        return $query->result_array();
    }

    public function metarial_im()
    {

        /* INNER JOIN */
        $this->db->select('mt.metarial_code,mt.metarial_name,im.*');
        $this->db->from('gj_metarial as mt');
        $this->db->join('gj_immetarial as im', 'mt.metarial_code = im.metarial_code');

        $query = $this->db->get();
        $query->result_array();

        return $query->result_array();
    }
}
