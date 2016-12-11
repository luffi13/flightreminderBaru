<?php
Class Searchpenerbangan extends CI_Model
{
 function searchpergi($pergi)
 {
   $query = "SELECT * FROM PENERBANGAN WHERE KODEPESAWAT = '".$pergi."'";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 function searchpulang($pulang)
 {
   $query = "SELECT * FROM PENERBANGAN WHERE KODEPESAWAT = '".$pulang."'";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }
}