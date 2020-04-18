<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->model('UserModel');
	}

	public function index() 
    {
		if ($this->session->userdata('logged_in')) {
            if ($this->input->get('search'))
                $data['search'] = $this->UserModel->searchCaption();
            $data['title'] = 'Feed';
            $data['main_view'] = 'FeedView';
            $data['id'] = 'feed';
            $this->load->view('MainView', $data);
        } else
            redirect('login');
    }

    public function profile() 
    {
        if ($this->session->userdata('logged_in')) {
            $data['profile'] = $this->UserModel->getProfile();
            $data['photos'] = $this->UserModel->getPhotos();
            $data['title'] = 'Profile';
            $data['main_view'] = 'ProfileView';
            $data['id'] = 'profile';
            $this->load->view('MainView', $data);
        } else
            redirect('login');
    }

    public function editProfile() 
    {
        if ($this->session->userdata('logged_in')) {
            $data['profile'] = $this->UserModel->getProfile();
            $data['title'] = 'Edit Profile';
            $data['main_view'] = 'EditProfileView';
            $data['id'] = 'edit-profile';
            $this->load->view('MainView', $data);
        } else
            redirect('login');
    }

    public function updateProfile() 
    {
        if ($this->input->post('username') != $this->session->userdata('username'))
            $is_unique = '|is_unique[users.username]';
        else
            $is_unique =  '';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required'.$is_unique);
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run()) {
            $this->UserModel->updateProfile();
            $data['status'] = 'success';
        } else {
            $data['status'] = 'error';
            $data['message'] = strip_tags(validation_errors());
        }
        echo json_encode($data);
    }

    public function getProfile() 
    {
        $data = $this->UserModel->getProfile();
        echo json_encode($data);
    }

}
