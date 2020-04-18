<?php

class Profile_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->library('session');
    }

    public function index(){
        $data = [];
        $username = $this->session->userdata('username');
        $responseUser = $this->M_User->getUserById($username);
        $responsePost = $this->M_User->getUserPost($username);
        $data['sumFollowers'] = $this->M_User->countFollowers($username);
        $data['sumFollowing'] = $this->M_User->countFollowing($username);
        $data['sumPost'] = $this->M_User->countPost($username);
        if($responseUser != false){
            $data['user'] = $responseUser;
        } else {
            $data['user'] = array();
        }

        if($responsePost != false){
            $data['post'] = $responsePost;
        } else {
            $data['post'] = array();
        }
        $this->load->view('profile.php',$data);
    }
}