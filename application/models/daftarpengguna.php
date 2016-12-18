<?php
Class Daftarpengguna extends CI_Model
{
 function daftar()
 {
   $query = "SELECT * FROM AKUN";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 function getUser($email)
 {
   $query = "SELECT * FROM AKUN WHERE email LIKE '".$email."'";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 
}