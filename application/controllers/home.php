<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
        $data['title'] = 'Vietgram | Login';
		$this->load->view('index',$data);
	}

	public function login()
	{
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) {
            redirect('home');
        } else {
            $uname = $this->input->post('username',true);
            $pass = $this->input->post('password',true);
            $data = $this->M_user->login($uname,$pass);
            if (count($data) == 1) {
                $this->session->set_userdata('user', $data[0]);
                redirect('feed');
            } else {
                redirect('home'); //login gagal
            }
        }
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
