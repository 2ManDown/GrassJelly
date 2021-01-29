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

            if ($value['user_status'] == 'ADMIN') {
                redirect('admin');
            } else if ($value['user_status'] == 'FACTORY') {
                redirect('factory');
            } else if ($value['user_status'] == 'SUPPLYER') {
            } else {
                echo 'Incorrect';
                exit();
            }
        }



        /* $data['page'] = "index";
        $this->load->view('theme', $data); */
    }




    /* get data มาโชว์ */
    public function user_profile()
    {
        /* get ข้อมูลจาก table */
        $data['user_profile'] = $this->User_model->user_list();

        $data['page'] = "user/user_profile";
        $this->load->view('theme', $data);
    }

    /* UPDATE */
    public function user_update_db()
    {
        $this->User_model->user_update_db();
        redirect('user/user_profile');
    }
}
