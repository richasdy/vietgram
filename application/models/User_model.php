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

    public function updateProfile() {
        $user = $this->session->userdata('username');
        $dataUser = array (
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                );
        $dataProfile = array (
                    'name' => $this->input->post('name'),
                    'website' => $this->input->post('website'),
                    'bio' => $this->input->post('bio'),
                    'phone_number' => $this->input->post('phone'),
                    'gender' => $this->input->post('gender')
                );
        $this->db->where('username',$user)->update('users', $dataUser);
        $user = $dataUser['username'];
        $this->db->where('username',$user)->update('profiles', $dataProfile);
        $this->session->set_userdata('username', $user);
    }

}