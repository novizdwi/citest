<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_lib{
    
    // constructor
    private $ci;
    public function __construct(){   

        $this->ci =& get_instance();
        $this->ci->load->model('Role_model');
        $this->ci->load->model('Login_model');
        $this->ci->load->model('User_role_model');
        
    }

    public function cek_session(){
        $Auth = $this->get_session();
		if (empty($Auth['username']) || ($Auth['role'] ==='user')) {
			return redirect ('');			
		}
    }

    public function get_session(){
        return [
                'username' => $this->ci->session->userdata('username'),
                'role' =>     $this->ci->session->userdata('role'),
                ];
    }

    public function set_login($param_user, $param_password){

        $outp = false;
        $user = $this->ci->Login_model->get($param_user);

        if (!empty($user) && $user->is_active === 'TRUE') {         
            $role_id = $this->ci->User_role_model->get_role_id($user->user_id);  
            
            if (!empty($role_id))
                $role = $this->ci->Role_model->find($role_id->role_id);
                if ($this->hashPassword($user->salt, $param_password) === $user->password && !empty($role)) {
                    $this->Set_session(['username' => $param_user, 'role' => $role->description]);
                
                // get session
                if (!empty($this->get_session()['username'])) {
                    $outp = true;
                }
            }  
        }

        return $outp;
    }

    public function destroy(){
        $this->ci->session->sess_destroy();
    }

    public function Set_session($data){

        $this->ci->session->set_userdata($data);
    }

    public function hashPassword($salt, $password){
        return hash('sha256', $salt . $password);
    }
}

?>