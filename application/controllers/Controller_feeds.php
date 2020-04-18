<?php

class Controller_feeds extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('Model_post');
    }

    public function index() {
        $username = $this->session->userdata('user');
        if ($username) {
            $data['allPost'] = $this->Model_post->getAllPost();
            $this->load->view('view_feed',$data);
        } else {
            redirect('/controller_Login');
        }
    }
}