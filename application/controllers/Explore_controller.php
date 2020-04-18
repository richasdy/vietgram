<?php

class Explore_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index(){
        $data = [];
        $responseUser = $this->m_user->getAllUser();
        $responsePost = $this->m_user->getAllPost();
        if($responseUser != false){
            $data['users'] = $responseUser;
        } else {
            $data['users'] = array();
        }

        if($responsePost != false){
            $data['posts'] = $responsePost;
        } else {
            $data['posts'] = array();
        }
        $this->load->view('explore.php',$data);
    }
}