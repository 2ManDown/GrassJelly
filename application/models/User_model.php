<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model

{
    public function user_list()
    {


        if ($this->session->userdata("status") ==  "admin") {
            $this->db->select('*');
            $this->db->from('gj_user');
            $this->db->where('user_status','factory');
            $this->db->or_where('user_status','supplier');
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    /* AUTHEN */
    public function user_auth()
    {
        $data = array(
            'user_username' => $this->input->post('user_username'),
            'user_email' => $this->input->post('user_email'),
            'user_password' => $this->input->post('user_password'),
        );

        $password = md5($data['user_password']);
        $this->db->select('*');
        $this->db->from('gj_user');
        $this->db->where('user_username', $data['user_username']);
        /* ->or_where('user_email', $data['user_email']); */
        $this->db->where('user_password', $password);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {

            //echo '<script language="javascript">';
            //echo 'alert("Username หรือ Password ไม่ถูกต้อง")';
            //echo '</script>';
            //$this->load->view('user/user_login');
            return $query->result_array();
        }
    }

    public function user_update_db()
    {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'user_name' => $this->input->post('user_name'),
            'user_password' => $this->input->post('user_password'),
            'user_email' => $this->input->post('user_email'),
            'user_tel' => $this->input->post('user_tel'),

        );
        /* echo '<pre>';
        print_r($data);
        echo '<pre>';
        exit(); */
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('gj_user', $data);
    }

    public function user_manage($user_list)
	{
		$query = $this->db->get_where('gj_user', array('user_id' => $user_list));
        return $query->result_array();
	}

    /* DELETE */
    public function user_delete($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->delete('gj_user');
    }

    public function user_update_adminmanage()
    {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'user_username' => $this->input->post('user_username'),
            'user_password' => md5($this->input->post('user_password')),
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_tel' => $this->input->post('user_tel'),
            'user_status' => $this->input->post('user_status'),
            

        );
        
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('gj_user', $data);
    }
}
