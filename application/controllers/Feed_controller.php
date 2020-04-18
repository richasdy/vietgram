<?php

class Feed_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function index(){
        $data = [];
        $data['title'] = "Feed | Vietgram";
        $response = $this->M_User->getAllPost();
        if($response != false){
            $data['post'] = $response;
        } else {
            $data['post'] = array();
        }
        $this->load->view('header',$data);
        $this->load->view('feed',$data);
    }
}