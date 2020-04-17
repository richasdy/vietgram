<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index() {
        if ($this->session->userdata('logged_in'))
            redirect('user');
        else {
            $data['title'] = 'Vietgram | Login';
            $this->load->view('login_view', $data);
        }
    }
    
    public function doLogin() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            if ($this->Login_model->loginCheck())
                $res['status'] = 'success';
            else {
                $res['status'] = 'error';
                $res['message'] = "Username or Password ain't Correct!";
            }
        } else {
            $res['status'] = 'error';
            $res['message'] = strip_tags(validation_errors());
        }
        echo json_encode($res);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }
}
