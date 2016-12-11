	
<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('username, password');
   $this -> db -> from('akun');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function login_admin($username, $password)
 {
   $this -> db -> select('user_admin, pass_admin');
   $this -> db -> from('admin');
   $this -> db -> where('user_admin', $username);
   $this -> db -> where('pass_admin', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>