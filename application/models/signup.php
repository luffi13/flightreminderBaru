<?php
Class Signup extends CI_Model
{
	function signup_akun($nama, $username, $email, $password, $noTelp)
	{
		$data = array (
			'USERNAME' => $username,
			'NAMA' => $nama,
			'EMAIL' => $email,
			'PASSWORD' => MD5($password),
			'NOTELP' => $noTelp
			);

		$this->db->insert('AKUN', $data);
	}
}