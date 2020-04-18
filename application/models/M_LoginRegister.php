<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_LoginRegister extends CI_Model{
    public function login($username,$password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function register($username,$fullname,$email,$phone,$gender,$password){
        $dataUser = array(
            'username' => $username,
            'password' => $password
        );

        $dataProfile = array(
            'email' => $email,
            'bio' => '',
            'gender' => $gender,
            'fullname' => $fullname,
            'phone_number' => $phone,
            'username' => $username,
            'website' => '',
            'photo' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png',
            'verified' => 0,
        );
        $query1 = $this->db->insert('user',$dataUser);
        $query2 = $this->db->insert('profile',$dataProfile);
        if($query1){
            if($query2){
                $this->db->select('*');
                $this->db->from('user');
                $this->db->where('username', $username);
                $this->db->where('password',$password);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                    return $query->row_array();
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}