<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI


class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('daftarpenerbangan');
       $this->load->model('daftarnotifikasi');
 }
 
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
    //menambahkan auto complete
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     
        $this->load->view('/New_Template/header');
        $this->load->view('/New_Template/navbar_logged_in');
        // $this->load->view('/New_Template/jaeger');
        $this->load->view('/New_Template/banner');          
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

 function showNotif(){

   if($this->session->userdata('logged_in'))
   {
    //menambahkan auto complete
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     // var_dump($data);
     $data2['notifikasi'] = $this->daftarnotifikasi->daftar_notif_user($data['username']);
     
        $this->load->view('/New_Template/header');
        $this->load->view('/New_Template/navbar_logged_in');
        if($data2['notifikasi'])
        {
          // $this->load->view('/template/header_admin',$data);\
            $this->load->view('/New_Template/list_notification', $data2); 
          // $this->load->view('/template/footer_admin');
        } 
        // $this->load->view('/New_Template/jaeger');
        // $this->load->view('/New_Template/banner');          
        // $this->load->view('penerbangan', $data);
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