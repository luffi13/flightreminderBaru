<?php
Class Daftarnotifikasi extends CI_Model
{
 function daftar()
 {
   $query = "SELECT * FROM NOTIFIKASI";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 function kontakNotifikasi($kodePenerbangan){
    $query = "SELECT DISTINCT noTelp FROM akun WHERE username IN (SELECT DISTINCT Username FROM NOTIFIKASI WHERE KodePesawat = '".$kodePenerbangan."')";

   $hasil = $this->db->query($query);

   return $hasil->result();

 }

 function insertBroadcast($kodePenerbangan,$pesan){
 	$data = array(
 			'id'=>"",
 			'pesan'=>$pesan,
 			'kodePenerbangan'=>$kodePenerbangan
 		);
 	$this->db->insert('BROADCAST',$data);

 }

 
}