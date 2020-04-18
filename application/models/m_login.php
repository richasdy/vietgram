<?php
    class M_login extends CI_Model{
        function cek_login($username,$password){
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
    }
?>