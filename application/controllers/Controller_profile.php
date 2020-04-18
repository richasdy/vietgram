<?php

class Controller_profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('Model_follow');
        $this->load->model('Model_post');
    }

    public function index() {
        $id = $this->session->userdata('id');
        $username = $this->session->userdata('user');
        if ($username) {
            $data = array( 
                'profile' => $this->Model_user->getUser($username),
                'post' => $this->Model_post->getPost($id),
                'followers' => $this->Model_follow->getFollowers($id),
                'following' => $this->Model_follow->getFollowing($id),
                'allPost' => $this->Model_post->getUserPost($id)
            );
            $this->load->view('view_profile',$data);
        } else {
            redirect('/controller_login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/controller_login');
    }

}