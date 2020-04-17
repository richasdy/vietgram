<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Feed | Vietgram';
            $data['main_view'] = 'feed';
            $data['id'] = 'feed';
            $this->load->view('template_view', $data);
        } else
            redirect('login');
    }

}
