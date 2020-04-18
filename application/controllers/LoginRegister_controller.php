<?php
class LoginRegister_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_LoginRegister');
        $this->load->library('session');
    }

    public function index(){
        $this->session->sess_destroy();
        $this->load->view('login-page');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $succes = $this->M_LoginRegister->login($username,$password);
        if($succes != false){
            $dataSession = array(
                'username' => $username
            );
            $this->session->set_userdata($dataSession);
            redirect('Feed_controller/index');
        } else {
            redirect('LoginRegister_controller/index');
        }
    }

    public function registerIndex(){
        $this->load->view('register-page');
    }

    public function register(){
        $username = $this->input->post('username');
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $gender = $this->input->post('gender');
        $password = $this->input->post('password');
        $succes = $this->M_LoginRegister->register($username,$fullname,$email,$phone,$gender,$password);
        if($succes != false){
            $this->session->userdata('username');
            var_dump($succes);
        } else {
            redirect('LoginRegister_controller/registerIndex');
        }
    }
}