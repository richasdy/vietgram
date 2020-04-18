<?php

class EditProfile_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->library('session');
    }

    public function index(){
        $data = [];
        $username = $this->session->userdata('username');
        $responseUser = $this->M_User->getUserById($username);
        if ($responseUser != false) {
            $data['user'] = $responseUser;
        } else {
            $data['user'] = array();
        }
        $this->load->view('edit-profile',$data);
    }

    public function updateUser(){
        $username = $this->session->userdata('username');
        $data = array(
            'fullname' => $this->input->post('full-name'),
            'website' => $this->input->post('website'),
            'bio' => $this->input->post('bio'),
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('phone'),
            'gender' => $this->input->post('gender'),
        );
        $res = $this->M_User->update($username,$data);
        redirect('Profile_controller/index');
    }
}