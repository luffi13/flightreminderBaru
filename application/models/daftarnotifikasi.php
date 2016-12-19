<?php
Class Daftarnotifikasi extends CI_Model
{
 function daftar()
 {
   $query = "SELECT * FROM NOTIFIKASI";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 function daftar_notif_user($email){
   $query = "SELECT * FROM NOTIFIKASI WHERE username LIKE '".$email."' ORDER BY NOMORNOTIFIKASI DESC";

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