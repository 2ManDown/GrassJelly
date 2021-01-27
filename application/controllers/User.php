<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function user_login()
    {
        /* echo 'User'; 
        exit(); */
        $data['page'] = "user/user_login";
        $this->load->view('theme', $data);
    }
    /* get data มาโชว์ */
    public function user_profile()
    {
        /* get ข้อมูลจาก table */
        /* $data['user_profile'] = $this->User_model->user_list();
 */
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