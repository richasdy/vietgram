<?php

class EditProfile_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->library('session');
    }
}