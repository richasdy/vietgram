<?php

class Controller_editprofile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index() {
        $username = $this->session->userdata('user');
        if ($username) {
            $data['profile'] = $this->Model_user->getUser($username);
            $this->load->view('view_editprofile',$data);
        } else {
            redirect('/controller_login');
        }
    }

    public function edit() {
        $id = $this->session->userdata('id');
        $data['username'] = $this->input->Model_post('username');
        $data['name'] = $this->input->Model_post('name');
        $data['website'] = $this->input->Model_post('website');
        $data['bio'] = $this->input->Model_post('bio');
        $data['email'] = $this->input->Model_post('email');
        $data['phone'] = $this->input->Model_post('phonenumber');
        $data['gender'] = $this->input->Model_post('gender');
        $this->Model_user->editUser($id,$data);
        redirect('/controller_profile');
    }
}