<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function user_login()
    {
        $data['page'] = "user/user_login";
        $this->load->view('theme', $data);
    }

    public function user_auth()
    {
        $data['auth'] = $this->User_model->user_auth();

        foreach ($data['auth'] as $value) {
            /* echo '<pre>';
            print_r($value);
            echo '<pre>';
            exit(); */
            $userdata = array(
                'id' => $value['user_id'],
                'username' => $value['user_username'],
                'password' => $value['user_password'],
                'name' => $value['user_name'],
                'email' => $value['user_email'],
                'tel' => $value['user_tel'],
                'status' => $value['user_status'],

            );
            $this->session->set_userdata($userdata);

            if ($value['user_status'] == 'admin') {
                redirect('admin');
            } else if ($value['user_status'] == 'factory') {
                redirect('factory');
            } else if ($value['user_status'] == 'supplyer') {
                redirect('supplyer');
            } else {
                echo 'Incorrect';
                exit();
            }
        }
    }

    public function user_logout()
    {
        $userdata = array('id','name','username','password','tel','email','status');
        $this->session->unset_userdata($userdata);
        redirect('');
    }


    /* get data มาโชว์ */
    public function user_profile()
    {
        /* get ข้อมูลจาก table */
        $data['user_profile'] = $this->User_model->user_list();

        $data['page'] = "user/user_profile";
        $this->checksession($data);
        // $this->load->view('theme', $data);
    }

    /* UPDATE */
    public function user_update_db()
    {
        $this->User_model->user_update_db();
        redirect('user/user_profile');
    }


    public function checksession($data)
    {
        if ($this->session->userdata('status') == 'ADMIN') {

            $this->load->view('theme', $data);
        } else if ($this->session->userdata('status') == 'FACTORY') {

            $this->load->view('factory', $data);
        } else {
            $this->load->view('supplyer', $data);
        }
    }
}
