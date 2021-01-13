<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function user_login()
    {
        $data['page'] = "user/user_login";
        $this->load->view('theme', $data);
    }
    public function user_profile()
    {
        $data['page'] = "user/user_profile";
        $this->load->view('theme', $data);
    }
}