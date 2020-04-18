<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function loginCheck()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->get('users');

		if ($query->num_rows() > 0) {
			$data = array('username' => $username,
                          'logged_in' => TRUE,
                         );
			$this->session->set_userdata($data);
			return TRUE;
		} else
			return FALSE;
	}

}