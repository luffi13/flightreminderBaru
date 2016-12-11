<?php
Class Notifikasi extends CI_Model
{
	function input($kodepergi, $tanggalpergi, $username, $jamkeberangkatan, $jamcheckin)
	{
		$data = array (
			'KODEPESAWAT' => $kodepergi,
			'USERNAME' => $username,
			'TANGGAL' => $tanggalpergi,
			'JAMBERANGKAT' => $jamkeberangkatan,
			'JAMCHECKIN' => $jamcheckin
			);

		$this->db->insert('NOTIFIKASI', $data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	function hapus($nomornotifikasi)
	{
		$this->db->where('NOMORNOTIFIKASI', $nomornotifikasi);
   		$this->db->delete('NOTIFIKASI');
	}

	function pergi($nomornotifikasi)
	{
		$query = "SELECT *  FROM NOTIFIKASI N, PENERBANGAN P, AKUN A WHERE N.KODEPESAWAT = P.KODEPESAWAT AND N.USERNAME = A.USERNAME AND NOMORNOTIFIKASI = '".$nomornotifikasi."'";

		$hasil = $this->db->query($query);

   		return $hasil->result();
	}
	/*
	function email()
	{
		$query = "SELECT *  FROM NOTIFIKASI N, AKUN A WHERE N.USERNAME = A.USERNAME AND N.USERNAME = 'linowsmr'";

		$hasil = $this->db->query($query);

   		return $hasil->result();
	}
	*/
	function ubah($pergi, $jamberangkat)
 	{
		$data = array (
			'JAMBERANGKAT' => $jamberangkat
		);

		$this->db->where('NOMORNOTIFIKASI', $pergi);
	    $this->db->update('NOTIFIKASI', $data);

	}

	function nomor_notifikasi($nomor)
	{
		$query = "SELECT *  FROM NOTIFIKASI N WHERE N.NOMORNOTIFIKASI = '".$nomor."'";

		$hasil = $this->db->query($query);

   		return $hasil->result();
	}
}