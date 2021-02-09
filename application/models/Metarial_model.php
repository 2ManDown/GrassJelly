<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Metarial_model extends CI_Model

{
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
        $this->db->order_by('im.immetarial_id','desc');

        $query = $this->db->get();
        $query->result_array();

        return $query->result_array();
    }

    public function metarial_reavlist()
    {
        /* INNER JOIN */
        $this->db->select('mt.metarial_id,mt.metarial_name,rm.*');
        $this->db->from('gj_metarial as mt');
        $this->db->join('gj_reavelmetarial as rm', 'mt.metarial_code = rm.metarial_code');
        $this->db->order_by('rm.reavelmetarial_id','desc');

        $query = $this->db->get();
        $query->result_array();

        return $query->result_array();
    }

    public function metarial_reavinsert($input)
    {
        $this->db->insert('gj_reavelmetarial', $input);
    }

    /* START IMPROT METARIAL */
    public function metarial_importlist($metarial_code)
    {
        $query = $this->db->get_where('gj_metarial', array('metarial_code' => $metarial_code));
        return $query->result_array();
    }

    public function metarial_import($metarial_code)
    {
        $query = $this->db->get_where('gj_metarial', array('metarial_code' => $metarial_code));
        return $query->result_array();
    }

    public function metarial_iminsert($input)
    {
        $this->db->insert('gj_immetarial', $input);
    }
    /* END IMPROT METARIAL */

    public function metarial_delete($metarial_manage)
    {
        $this->db->where('metarial_code', $metarial_manage);
        $this->db->delete('gj_metarial');
    }
    
    /* ส่งข้อมูลไปหน้าจัดการ */
    public function metarial_manage($metarial_manage)
    {
        $query = $this->db->get_where('gj_metarial', array('metarial_code' => $metarial_manage));
        return $query->result_array();
    }

}
