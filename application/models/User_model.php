<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model

{
    public function user_list()
    {
        $query = $this->db->get('gj_user');
        return $query->result_array();
    }

    /* AUTHEN */
    public function user_auth()
    {
        $data = array(
            'user_username' => $this->input->post('user_username'),
            'user_password' => $this->input->post('user_password'),
        );
        $password = md5($data['user_password']);
        $this->db->select('*');
        $this->db->from('gj_user');
        $this->db->where('user_username', $data['user_username']);
        $this->db->where('user_password', $password);

        $query = $this->db->get();
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
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('gj_user', $data);
    }
}
