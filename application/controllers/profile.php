<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_profile');
		$this->load->model('M_photo');
	}

	public function index()
	{
        $data['title'] = 'Profile | Vietgram';
        $user = $this->session->userdata('user');
        $data['profile'] = $this->M_profile->getProfile($user['username']);
        $data['photo'] = $this->M_photo->getPhoto($user['username']);
       
        $this->load->view('templates/header',$data);
		$this->load->view('profile',$data);
		$this->load->view('templates/footer');
	}
	public function edit()
	{
		$user = $this->session->userdata('user');
		$data['title'] = 'Edit Profile | Vietgram';
		$data['profile'] = $this->M_profile->getProfile($user['username']);
		$uname = $data['profile']['username'];
		$this->form_validation->set_rules('username', 'username','required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header',$data);
			$this->load->view('edit-profile',$data);
			$this->load->view('templates/footer');
        } else {
           	$update = array(
            	'name' => $this->input->post('name'),
            	'username' => $this->input->post('username'),
            	'website' => $this->input->post('website'),
            	'bio' => $this->input->post('bio'),
            	'email' => $this->input->post('email'),
            	'phone' => $this->input->post('phone'),
            	'gender' => $this->input->post('gender'),
            	'ava' => $data['profile']['ava'],
            	'follower' => $data['profile']['follower'],
            	'following' => $data['profile']['following']
            );
           	//print_r($update);
            $this->M_profile->editProfile($uname,$update);
            redirect('profile');
        }
    }
		
	
}
