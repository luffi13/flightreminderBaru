<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI


class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('daftarpenerbangan');
 }
 
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
    //menambahkan auto complete
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('template/header_login');
     $this->load->view('penerbangan', $data);
   }
   else if($this->session->userdata('logged_in_admin'))
   {
     redirect('admin');
    
   }
   else
   {
     //If no session, redirect to login page
     redirect('web', 'refresh');
    
   }
 }

 function getJson(){

  if (!isset($_REQUEST['query'])){
    return;
  }
  $key = $_REQUEST['query'];

  $dataPenerbangan = $this->daftarpenerbangan->getData($key);
  if(count($dataPenerbangan)==0){
    return ;
  }
      $json = array();
    foreach ($dataPenerbangan as $key => $value) {
          # code...
        $json[] = array('label'=>$value->KodePesawat, 
          'value'=>$value->KodePesawat);

          // $kode[]=$value->KodePesawat;
          // $asal[]=$value->Asal;
          // $tujuan[]=$value->Tujuan;
          // $jamBerangkat[]=$value->JamKeberangkatan;
          // $maskapai[]=$value->NamaMaskapai;
        }    
        

        echo json_encode($json);
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
 
}
 
?>