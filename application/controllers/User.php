<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function user_login()
    {
        $data['page'] = "user/user_login";
        $this->load->view('theme', $data);
    }

    public function user_list(){
        $data['user_data'] = $this->User_model->user_list();

        $data['page'] = "user/user_list";
        $this->load->view('theme', $data);
    }
    public function user_auth()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_username', 'Username', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $username = $this->input->post('user_username');
            $password = $this->input->post('user_password');

            $this->load->model('User_model');
            if($this->User_model->user_auth($username, $password))
            {
                $data['auth'] = $this->User_model->user_auth();
                foreach ($data['auth'] as $value) {
                    
                    $userdata = array(
                        'id' => $value['user_id'],
                        'username' => $value['user_username'],
                        'password' => $value['user_password'],
                        'name' => $value['user_name'],
                        'email' => $value['user_email'],
                        'tel' => $value['user_tel'],
                        'status' => $value['user_status'],
                        'hub' => $value['hub_id']
                    );
                    $this->session->set_userdata($userdata);
        
                    if ($value['user_status'] == 'admin') {
                        redirect('admin');
                    } else if ($value['user_status'] == 'factory') {
                        redirect('factory');
                    } else if ($value['user_status'] == 'supplier') {
                        redirect('supplier');
                    } else {
                        echo 'Incorrect';
                        exit();
                    } 
                }
            }
        
            else
            {
                $this->session->set_flashdata('error','Invalid Username or Password');
                $this->load->view('user/user_login');
                //redirect(base_url() . '/user/user_login');
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



    /* INSERT */
    public function user_insert(){
        $data['page'] = "user/user_insert";
        $this->checksession($data);
    }


    /* UPDATE */
    public function user_update_db()
    {
        $this->User_model->user_update_db();
        redirect('user/user_profile');
    }



    public function user_adminmanage($user_list)
	{
        $data['user_manage'] = $this->User_model->user_manage($user_list);

		$data['page'] = "user/user_adminmanage";
		$this->checksession($data);
	}

    /* DELETE */
	public function user_delete($user_id)
	{
		$this->User_model->user_delete($user_id);
		redirect('user/user_list');
	}

    public function user_update_adminmanage()
    {
        $this->User_model->user_update_adminmanage();
        redirect('user/user_list');
    }

    
    public function checksession($data)
    {
        if ($this->session->userdata('status') == 'admin') {

            $this->load->view('theme', $data);
        } else if ($this->session->userdata('status') == 'factory') {

            $this->load->view('factory', $data);
        } else {
            $this->load->view('supplier', $data);
        }
    }
    
}
