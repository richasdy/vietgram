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
        $userData = array (
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                );
        $profileData = array (
                    'name' => $this->input->post('name'),
                    'website' => $this->input->post('website'),
                    'bio' => $this->input->post('bio'),
                    'phone_number' => $this->input->post('phone'),
                    'gender' => $this->input->post('gender')
                );
        $this->db->where('username',$user)->update('users', $userData);
        $user = $userData['username'];
        $this->db->where('username',$user)->update('profiles', $profileData);
        $this->session->set_userdata('username', $user);
    }

    public function searchCaption() {
        $search = $this->input->get('search');
        if (!empty($search)) {
            return $this->db->like('caption', $search)
                            ->get('photos')
                            ->result();
        }
    }

}