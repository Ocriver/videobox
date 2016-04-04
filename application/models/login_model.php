<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 4/2/16
 * Time: 4:19 PM
 */

class login_model extends CI_Model {

    public function __construct()
    {
        var_dump(sys_get_temp_dir());
        $this->load->add_package_path(APPPATH.'third_party/ion-auth');
        $this->load->library('ion_auth');
    }

    public function login()
    {

        $identity = $this->input->post('inputEmail');
        $password = $this->input->post('inputPassword');

        $rememberme = $this->input->post('remember-me');

        $remember=FALSE;

        if($rememberme === 'remember-me')
        {
            $remember=TRUE;
        }

        return $this->ion_auth->login($identity, $password, $remember);

    }

    public function logout()
    {
        return $this->ion_auth->logout();
    }

    public function profile($user_id='')
    {
        //TODO: Completar profile
        return $this->ion_auth->user()->row();
    }

    public function logged_in()
    {
        return $this->ion_auth->logged_in();
    }

    
}


