<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model{
    public function getUserPost($username){
        $this->db->select('post.id_post,post.caption,post.photo,post.likes');
        $this->db->from('user_post');
        $this->db->join('post','user_post.id_post = post.id_post');
        $this->db->where('user_post.username',$username);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getAllPost(){
        $this->db->select('user_post.username,post.id_post,post.caption,post.photo,post.likes');
        $this->db->from('user_post');
        $this->db->join('post', 'user_post.id_post = post.id_post');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getUserById($username){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('profile','user.username = profile.username');
        $this->db->where('profile.username',$username);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function getAllUser(){
        $id = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('profile','user.username = profile.username');
        $this->db->not_like('user.username',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function countPost($username){
        $this->db->select('id_post');
        $this->db->from('user_post');
        $this->db->where('username',$username);
        $query = $this->db->count_all_results();
        return $query;
    }

    public function countFollowers($username){
        $this->db->select('username');
        $this->db->from('follow');
        $this->db->where('follow_to', $username);
        $query = $this->db->count_all_results();
        return $query;
    }

    public function countFollowing($username){
        $this->db->select('follow_to');
        $this->db->from('follow');
        $this->db->where('username',$username);
        $query = $this->db->count_all_results();
        return $query;
    }

    public function update($username,$data){
        $this->db->where('username',$username);
        $this->db->update('profile',$data);
    }
}