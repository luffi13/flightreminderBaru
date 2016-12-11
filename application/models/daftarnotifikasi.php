<?php
Class Daftarnotifikasi extends CI_Model
{
 function daftar()
 {
   $query = "SELECT * FROM NOTIFIKASI";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 
}