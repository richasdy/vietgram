<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index() 
    {
        if ($this->session->userdata('logged_in'))
        {
            redirect('user');
        }
        else 
        {
            $data['title'] = 'Login';
            $this->load->view('LoginView', $data);
        }
    }
    
    public function login() 
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            if ($this->LoginModel->loginCheck())
                $data['status'] = 'success';
            else {
                $data['status'] = 'error';
                $data['message'] = "Username or Password Incorrect!";
            }
        } else {
            $data['status'] = 'error';
            $data['message'] = strip_tags(validation_errors());
        }
        echo json_encode($data);
    }

    public function logout() 
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
