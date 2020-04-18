<?php

class Explore_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function index(){
        $data = [];
        $data['title'] = "Explore | Vietgram";
        $responseUser = $this->M_User->getAllUser();
        $responsePost = $this->M_User->getAllPost();
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
        $this->load->view('header',$data);
        $this->load->view('explore.php',$data);
    }

    public function followTo(){
        $person = $_GET['username'];
        $username = $this->session->userdata('username');
        $this->M_User->updateFollow($person,$username);
        redirect('Profile_controller/index');
    }
}