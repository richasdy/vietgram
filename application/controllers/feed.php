<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_feed');
		$this->load->model('M_comments');		
	}

	public function index()
	{
		$data['title'] = 'Feed | Vietgram';
		$data['feed'] = $this->M_feed->getAllFeed();
		$data['comments'] = $this->M_comments->getAllComments();

		$this->load->view('templates/header',$data);
		$this->load->view('feed',$data);
		$this->load->view('templates/footer');

	}

}
