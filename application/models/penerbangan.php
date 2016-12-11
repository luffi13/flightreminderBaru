<?php
Class Penerbangan extends CI_Model
{
 function tambah($kodepesawat, $namamaskapai, $asal, $tujuan, $jamkeberangkatan)
 {
    $data = array (
		'KODEPESAWAT' => $kodepesawat,
		'NAMAMASKAPAI' => $namamaskapai,
		'ASAL' => $asal,
		'TUJUAN' => $tujuan,
		'JAMKEBERANGKATAN' => $jamkeberangkatan
	);

	$this->db->insert('PENERBANGAN', $data);

 }

 
 function ubah_data($kodepesawat, $namamaskapai, $asal, $tujuan, $jamkeberangkatan, $kodelama)
 {
	$data = array (
		'KODEPESAWAT' => $kodepesawat,
		'NAMAMASKAPAI' => $namamaskapai,
		'ASAL' => $asal,
		'TUJUAN' => $tujuan,
		'JAMKEBERANGKATAN' => $jamkeberangkatan
	);


	$this->db->where('KODEPESAWAT', $kodelama);
    $this->db->update('PENERBANGAN', $data);

 }
	
 function hapus($kodepesawat)
 {
   $this->db->where('KODEPESAWAT', $kodepesawat);
   $this->db->delete('PENERBANGAN');

 }
}