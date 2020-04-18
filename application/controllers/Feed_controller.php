<?php

class Feed_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index(){
        $data = [];
        $response = $this->m_user->getAllPost();
        if($response != false){
            $data['post'] = $response;
        } else {
            $data['post'] = array();
        }
        $this->load->view('feed',$data);
    }
}