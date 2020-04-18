<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->model('User_model');
	}

	public function index() {
		if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Feed | Vietgram';
            $data['main_view'] = 'feed_view';
            $data['id'] = 'feed';
            $this->load->view('template_view', $data);
        } else
            redirect('login');
    }

    public function profile() {
        if ($this->session->userdata('logged_in')) {
            $data['profile'] = $this->User_model->getProfile();
            $data['photos'] = $this->User_model->getPhotos();
            $data['title'] = 'Profile | Vietgram';
            $data['main_view'] = 'profile_view';
            $data['id'] = 'profile';
            $this->load->view('template_view', $data);
        } else
            redirect('login');
    }

    public function edit_profile() {
        if ($this->session->userdata('logged_in')) {
            $data['profile'] = $this->User_model->getProfile();
            $data['title'] = 'Edit Profile | Vietgram';
            $data['main_view'] = 'edit_profile_view';
            $data['id'] = 'edit-profile';
            $this->load->view('template_view', $data);
        } else
            redirect('login');
    }

    public function update_profile() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run()) {
            $this->User_model->updateProfile();
            $res['status'] = 'success';
        } else {
            $res['status'] = 'error';
            $res['message'] = strip_tags(validation_errors());
        }
        echo json_encode($res);
    }

    public function getProfile() {
        $res = $this->User_model->getProfile();
        echo json_encode($res);
    }

}
