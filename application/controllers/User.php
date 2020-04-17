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

}
