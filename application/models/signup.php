<?php
Class Signup extends CI_Model
{
	function signup_akun($nama, $username, $email, $password)
	{
		$data = array (
			'USERNAME' => $username,
			'NAMA' => $nama,
			'EMAIL' => $email,
			'PASSWORD' => MD5($password)
			);

		$this->db->insert('AKUN', $data);
	}
}