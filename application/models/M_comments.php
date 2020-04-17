<?php

class M_comments extends CI_model
{
	public function getAllComments()
	{
		$query = $this->db->query("SELECT * FROM comments");
		return $query->result_array();
	}

	public function getComments($uname)
	{
		$query = $this->db->query("SELECT * FROM profile WHERE username = '".$uname."'");
		return $query->row_array();
	}

	
}
