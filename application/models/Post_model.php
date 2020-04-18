<?php

class post_model extends CI_Model {

    public function getAllPost() {
        $this->db->join('users', 'post.id_user = users.id_user');
        return $this->db->get('post')->result();
    }
    
    public function getPost($id) {
        $this->db->where('id_user',$id);
        $query = $this->db->get('post');
        return $query->num_rows();
    }
    
    public function getUserPost($id) {
        $this->db->where('id_user',$id);
        return $this->db->get('post')->result();
    }
}