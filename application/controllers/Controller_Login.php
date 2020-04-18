<?php

class Controller_Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index() {
        $this->load->view('view_login');
    }

    public function login(){
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $result = $this->Model_user->login($data);
        if ($result) {
            $this->session->set_userdata('id',$result->id_user);
            $this->session->set_userdata('user',$data['username']);
            redirect('/controller_feeds');
        } else {
            $error = array('error_message' => "Username or Password ain't correct");
            $this->load->view('view_login', $error);
        }
    }
}
