<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_profile');
	}

	public function index()
	{
		$data['title'] = 'Feed | Vietgram';
		$user = $this->session->userdata('user');
		$data['friends'] = $this->M_profile->getExplore($user['username']);
		//print_r($data['friends']);
		$this->load->view('templates/header',$data);
		$this->load->view('explore',$data);
		$this->load->view('templates/footer');

	}

}
