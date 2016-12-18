<?php
Class Kode extends CI_Model
{

 function ubah($kodepesawat)
 {
   $query = "SELECT * FROM PENERBANGAN WHERE KODEPESAWAT = '".$kodepesawat."'";

   $hasil = $this->db->query($query);

   return $hasil->result();
 }

 function jam($kodepergi)
 {
   $query = "SELECT SUBTIME(JAMKEBERANGKATAN,'03:00:00') AS JAMBERANGKAT,  SUBTIME(JAMKEBERANGKATAN,'00:30:00') AS JAMCHECKIN FROM PENERBANGAN WHERE KODEPESAWAT = '".$kodepergi."'";

   $hasil = $this->db->query($query);
   if (count($hasil->result())==0) {
      # code...
      return '0';
   }
   	return $hasil->row()->JAMBERANGKAT;
   //}
   //else
   //{
   //	return $hasil->result();   	
   //}

 }

 function jam_pagi($kodepergi)
 {
   $query = "SELECT SUBTIME(JAMKEBERANGKATAN,'02:00:00') AS JAMBERANGKAT,  SUBTIME(JAMKEBERANGKATAN,'00:30:00') AS JAMCHECKIN FROM PENERBANGAN WHERE KODEPESAWAT = '".$kodepergi."' AND JAMKEBERANGKATAN <= '07:00:00'";

   $hasil = $this->db->query($query);

   if($hasil)
   {
   	return $hasil->row()->JAMBERANGKAT;
   }
   else
   {
   	return $hasil->result();   	
   }
 }

 function jam_dini($kodepergi)
 {
   $query = "SELECT SUBTIME(JAMKEBERANGKATAN,'01:30:00') AS JAMBERANGKAT,  SUBTIME(JAMKEBERANGKATAN,'00:30:00') AS JAMCHECKIN FROM PENERBANGAN WHERE KODEPESAWAT = '".$kodepergi."' AND JAMKEBERANGKATAN <= '07:00:00'";

   $hasil = $this->db->query($query);

   return $hasil->row()->JAMBERANGKAT;
 }

 function checkin($kodepergi)
 {
   $query = "SELECT SUBTIME(JAMKEBERANGKATAN,'00:30:00') AS JAMCHECKIN FROM PENERBANGAN WHERE KODEPESAWAT = '".$kodepergi."'";

   $hasil = $this->db->query($query);

   return $hasil->row()->JAMCHECKIN;
 }
} 