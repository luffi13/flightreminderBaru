	
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   //$this->load->library('session');
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     //redirect('web/');
     echo "salah";
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
     echo "benar";
   }
  echo "here";
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
 
   //query the database
   $result = $this->user->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         //'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
    $result = $this->user->login_admin($username, $password);

    if($result)
      {
        $sess_array = array();
        foreach($result as $row)
        {
          $sess_array = array(
          //'id' => $row->id,
          'username' => $row->user_admin
        );
        $this->session->set_userdata('logged_in_admin', $sess_array);
        }
      return TRUE;    
      }
    }  
   /*else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }*/
 }
}
?>