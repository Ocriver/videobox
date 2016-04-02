<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class my_ion_auth
{
    public function __construct()
    {
        require_once APPPATH.'third_party/ion-auth/libraries/ion_auth.php';
    }
}