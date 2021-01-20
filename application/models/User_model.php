<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model

{
    public function user_list()
    {
        $query = $this->db->get('gj_user');
        return $query->result_array();
    }

    public function user_update_db()
    {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'user_name' => $this->input->post('user_name'),
            'user_password' => $this->input->post('user_password'),
            'user_passagain' => $this->input->post('user_passagain'),
            'user_email' => $this->input->post('user_email'),
            'user_tel' => $this->input->post('user_tel'),
            
        );
        $this->db->where('user_id',$data['user_id']);
        $this->db->update('gj_user',$data);
        
    }

}