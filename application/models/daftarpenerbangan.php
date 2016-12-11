<?php
Class Daftarpenerbangan extends CI_Model
{
 function daftar()
 {
   $query = "SELECT * FROM PENERBANGAN";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 function getData($key)
 {
   $query = "SELECT * FROM PENERBANGAN WHERE KodePesawat LIKE '%".$key."%' OR NamaMaskapai LIKE '%".$key."%'";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 
}