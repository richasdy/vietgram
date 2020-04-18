<?php

class Explore_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Follow_model');
        $this->load->model('User_model');
    }

    public function index() {
        $id = $this->session->userdata('id');
        if ($id) {
            $data['users'] = $this->User_model->getSomeUser($id);
            $this->load->view('explore-view',$data);
        } else {
            redirect('/login_controller');
        }
    }

    public function search() {
        $id = $this->session->userdata('id');
        $username = $this->input->get('search'); 
        $data['users'] = $this->User_model->searchUser($username, $id);
        $this->load->view('explore-view',$data);
    }

    public function add($id) {
        $data['id_user'] = $this->session->userdata('id');
        $data['id_user_follow'] = $id;
        $followed = $this->Follow_model->checkFollowing($data); 
        if (!$followed) {
            $this->Follow_model->addFollowing($data);
            redirect('/explore_controller');
        }
        
    }
}