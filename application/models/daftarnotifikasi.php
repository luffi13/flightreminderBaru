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

 
}