<?php

class Controller_explore extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_follow');
        $this->load->model('Model_user');
    }

    public function index() {
        $id = $this->session->userdata('id');
        if ($id) {
            $data['users'] = $this->Model_user->getSomeUser($id);
            $this->load->view('view_explore',$data);
        } else {
            redirect('/controller_login');
        }
    }

    public function search() {
        $id = $this->session->userdata('id');
        $username = $this->input->get('search'); 
        $data['users'] = $this->Model_user->searchUser($username, $id);
        $this->load->view('view_explore',$data);
    }

    public function add($id) {
        $data['id_user'] = $this->session->userdata('id');
        $data['id_user_follow'] = $id;
        $followed = $this->Model_follow->checkFollowing($data); 
        if (!$followed) {
            $this->Model_follow->addFollowing($data);
            redirect('/controller_explore');
        }
        
    }
}