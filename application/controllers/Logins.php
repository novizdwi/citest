<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('User_role_model');
    }
    
    public function ceklogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        if($this->login_lib->set_login($username, $password)){
            redirect('/employee');
        }
        else 
            redirect('');
    }

    public function ceklogout(){
        $this->login_lib->destroy();
        redirect('');
    }

}

?>