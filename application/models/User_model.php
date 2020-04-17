<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getProfile() {
        $username = $this->session->userdata('username');
        return $this->db->where('username',$username)
                        ->get('profiles')
                        ->row();
    }

    public function getPhotos() {
        $username = $this->session->userdata('username');
        return $this->db->where('username',$username)
                        ->get('photos')
                        ->result();
    }

}