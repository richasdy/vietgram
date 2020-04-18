<?php
class LoginRegister_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('session');
    }

    public function index(){
        $this->session->sess_destroy();
        $this->load->view('index');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $succes = $this->m_login->login($username,$password);
        if($succes != false){
            $dataSession = array(
                'username' => $username
            );
            $this->session->set_userdata($dataSession);
            redirect('Feed_c/index');
        } else {
            redirect('Login/index');
        }
    }
}