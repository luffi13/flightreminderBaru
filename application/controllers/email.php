<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Email extends CI_Controller {
  function __construct()
    {
       parent::__construct();
       $this->load->model('daftarpengguna');

     }


  function index()
  {
    $email = $this->input->post('email');
    $nomornotifikasi = $this->input->post('nomornotifikasi');
    $kodepesawat = $this->input->post('kodepesawat');
    $jamberangkat = $this->input->post('jamberangkat');
    $jamcheckin = $this->input->post('jamcheckin');

    $data = array('nomornotifikasi' => $nomornotifikasi, 'kodepesawat' => $kodepesawat, 'jamberangkat' => $jamberangkat, 'jamcheckin' => $jamcheckin);
    //$pesan = $this->input->post('pesan');
    $url = $_SERVER['HTTP_REFERER'];
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'luwandino@gmail.com', //isi dengan gmailmu!
      'smtp_pass' => 'manutdmilano', //isi dengan password gmailmu!
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
    $this->load->library('email', $config);
    $this->load->helper('form');
    $this->email->set_newline("\r\n");
    $this->email->from('luwandino@gmail.com');
    $this->email->to($email); //email tujuan. Isikan dengan emailmu!
    $this->email->subject('Notifikasi Anda');
    $this->email->message('
      <html>
        <head>
        </head>
        <body>
          <img src="http://3.bp.blogspot.com/-kxXdHyllGWc/VnEm02ypdQI/AAAAAAAAAIw/Bjq59Ww_otA/s1600/header.JPG"></img>
          <h1>Nomor Notifikasi</h1>
          <p>'.$nomornotifikasi.'</p><br>
          <h1>Kode Pesawat</h1>
          <p>'.$kodepesawat.'</p><br>
          <h1>Jam Berangkat</h1>
          <p>'.$jamberangkat.'</p><br>
          <h1>Jam Check-In</h1>
          <p>'.$jamcheckin.'</p><br>

          <h1>Verifikasi</h1>
          <p>Apabila Anda Sudah Melakukan Check-In, Dapat Membuka Tautan Di Bawah Ini</p>
          <p>http://localhost/flightreminder/index.php/verifikasi?nomornotifikasi='.$nomornotifikasi.'</p>

          <h1>Internet Check-In</h1>
          <h4>Garuda Indonesia<h4>
          <p>Layanan ini tersedia mulai dari 24 hingga 4 jam sebelum keberangkatan.</p>
          <p>Khusus untuk kota keberangkatan Jakarta (CGK) dengan tujuan domestik, layanan ini tersedia mulai dari 24 hingga 2 jam sebelum keberangkatan.
          <p>Tautan: https://www.garuda-indonesia.com/id/id/index.page? (Terdapat Pilihan Check-In di sisi kanan)</p>
          <h4>Citilink</h4>
          <p>Tautan: https://book.citilink.co.id/SearchWebCheckin.aspx</p>
          <h4>Lion Air</h4>
          <p>Tautan: https://wci-prod.sabresonicweb.com/SSW2010/JTC0/checkin.html?execution=e1s1</p>
          <h4>Batik Air</h4>
          <p>Tautan: https://wci-prod.sabresonicweb.com/SSW2010/IDC0/checkin.html?execution=e2s1</p>
        </body>
      </html>
    ');
    if($this->email->send())
    {
      $this->load->view('template/header_login');              
      $this->load->view('report_email');
      //echo 'Email sent. <a href="'.$url.'">KEMBALI</a>';
    }
    else
    {
      show_error($this->email->print_debugger());
    }
  }

  function index_pp()
  {
    $email = $this->input->post('email');
    $nomornotifikasi = $this->input->post('nomornotifikasi');
    $kodepesawat = $this->input->post('kodepesawat');
    $jamberangkat = $this->input->post('jamberangkat');
    $jamcheckin = $this->input->post('jamcheckin');

    $data = array('nomornotifikasi' => $nomornotifikasi, 'kodepesawat' => $kodepesawat, 'jamberangkat' => $jamberangkat, 'jamcheckin' => $jamcheckin);
    //$pesan = $this->input->post('pesan');
    $url = $_SERVER['HTTP_REFERER'];
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'luwandino@gmail.com', //isi dengan gmailmu!
      'smtp_pass' => 'manutdmilano', //isi dengan password gmailmu!
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
    $this->load->library('email', $config);
    $this->load->helper('form');
    $this->email->set_newline("\r\n");
    $this->email->from('luwandino@gmail.com');
    $this->email->to($email); //email tujuan. Isikan dengan emailmu!
    $this->email->subject('Notifikasi Anda');
    $this->email->message('
      <html>
        <head>
        </head>
        <body>
          <img src="http://3.bp.blogspot.com/-kxXdHyllGWc/VnEm02ypdQI/AAAAAAAAAIw/Bjq59Ww_otA/s1600/header.JPG"></img>
          <h1>Nomor Notifikasi</h1>
          <p>'.$nomornotifikasi.'</p><br>
          <h1>Kode Pesawat</h1>
          <p>'.$kodepesawat.'</p><br>
          <h1>Jam Berangkat</h1>
          <p>'.$jamberangkat.'</p><br>
          <h1>Jam Check-In</h1>
          <p>'.$jamcheckin.'</p><br>

          <h1>Verifikasi</h1>
          <p>Apabila Anda Sudah Melakukan Check-In, Dapat Membuka Tautan Di Bawah Ini</p>
          <p>http://localhost/flightreminder/index.php/verifikasi?nomornotifikasi='.$nomornotifikasi.'</p>

          <h1>Internet Check-In</h1>
          <h4>Garuda Indonesia<h4>
          <p>Layanan ini tersedia mulai dari 24 hingga 4 jam sebelum keberangkatan.</p>
          <p>Khusus untuk kota keberangkatan Jakarta (CGK) dengan tujuan domestik, layanan ini tersedia mulai dari 24 hingga 2 jam sebelum keberangkatan.
          <p>Tautan: https://www.garuda-indonesia.com/id/id/index.page? (Terdapat Pilihan Check-In di sisi kanan)</p>
          <h4>Citilink</h4>
          <p>Tautan: https://book.citilink.co.id/SearchWebCheckin.aspx</p>
          <h4>Lion Air</h4>
          <p>Tautan: https://wci-prod.sabresonicweb.com/SSW2010/JTC0/checkin.html?execution=e1s1</p>
          <h4>Batik Air</h4>
          <p>Tautan: https://wci-prod.sabresonicweb.com/SSW2010/IDC0/checkin.html?execution=e2s1</p>
        </body>
      </html>
    ');
    if($this->email->send())
    {
      $nomornotifikasipulang = $nomornotifikasi + 1;
      $nomor = array('nomorpergi' => $nomornotifikasi, 'nomorpulang' => $nomornotifikasipulang);
      $this->load->view('template/header_login');              
      $this->load->view('report_email_pp', $nomor);
      //echo 'Email sent. <a href="'.$url.'">KEMBALI</a>';
    }
    else
    {
      show_error($this->email->print_debugger());
    }
  }

  function smsGateway(){

    $email = $this->input->post('email');
    $nomornotifikasi = $this->input->post('nomornotifikasi');
    $kodepesawat = $this->input->post('kodepesawat');
    $jamberangkat = $this->input->post('jamberangkat');
    $jamcheckin = $this->input->post('jamcheckin');

    $result = $this->daftarpengguna->getUser('andrezacharyreinaldi@gmail.com');
    $noTelp= $result[0]->noTelp ;
    $nama = $result[0]->nama;
   $service_url ='http://localhost/sms/sendApi.php?tujuan='.$noTelp.'&nama='. urlencode($nama).'&penerbangan='.$kodepesawat.'&waktu='.$jamcheckin;
   //echo $service_url;
  $curl = curl_init($service_url);
 $curl_response = curl_exec($curl);
  redirect('home');
    // http://localhost/sms/sendApi.php?tujuan=+6281249553383&nama=luffi&penerbangan=GA303&maskapai=garuda&waktu=19.30
  } 
}?>