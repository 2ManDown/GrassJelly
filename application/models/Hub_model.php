<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub_model extends CI_Model
{
    public function hub_list(){
        $query = $this->db->get('gj_hub');
        return $query->result_array();
        //return $this->db->get('gj_hub')->result_array();
    }

    
    public function hub_insert_db($input)
    {
        $this->db->insert('gj_hub', $input);
    }
    public function hub_stock($hub_id)
    {
        $query = $this->db->get_where('gj_product', array('hub_id' => $hub_id));
        return $query->result_array();
    }
    public function hub_manage($hub_id)
    {
        $query = $this->db->get_where('gj_hub', array('hub_id' => $hub_id));
        return $query->result_array();
    }

    public function hub_update_db(){
        $input = array(
            'hub_id' => $this->input->post('hub_id'),
            'hub_name' => $this->input->post('hub_name'),
			'hub_address' => $this->input->post('hub_address'),
			'hub_tel' => $this->input->post('hub_tel'),
			'hub_email' => $this->input->post('hub_email'),
  
        );
        $this->db->where('hub_id', $input['hub_id']);
        $this->db->update('gj_hub', $input);
    }

    public function hub_delete($hub_id)
    {
        $this->db->where('hub_id', $hub_id);
        $this->db->delete('gj_hub');
    }
}