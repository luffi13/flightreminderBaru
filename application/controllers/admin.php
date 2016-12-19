<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
    {
       parent::__construct();
       $this->load->model('daftarpenerbangan');
       $this->load->model('daftarpengguna');
       $this->load->model('daftarnotifikasi');
     }

	public function index()
	{
		if(!empty($this->session->userdata('logged_in_admin')))
		{
			$session_data = $this->session->userdata('logged_in_admin');
   			$data['username'] = $session_data['username'];
			$data2['penerbangan'] = $this->daftarpenerbangan->daftar();

			if($data2['penerbangan'])
			{
				$this->load->view('/template/header_admin',$data);
				$this->load->view('home_admin', $data2);	
				$this->load->view('/template/footer_admin');
			}	
		}		
	}

	public function pengguna()
	{
		if(!empty($this->session->userdata('logged_in_admin')))
		{
			$session_data = $this->session->userdata('logged_in_admin');
     		$data['username'] = $session_data['username'];
			$data2['akun'] = $this->daftarpengguna->daftar();

			if($data2['akun'])
			{
				$this->load->view('/template/header_admin', $data);
				$this->load->view('akun_pengguna', $data2);	
				$this->load->view('/template/footer_admin');
			}	
		}		
	}

	public function notifikasi()
	{
		if(!empty($this->session->userdata('logged_in_admin')))
		{
			$session_data = $this->session->userdata('logged_in_admin');
     		$data['username'] = $session_data['username'];
			$data2['notifikasi'] = $this->daftarnotifikasi->daftar();

			if($data2['notifikasi'])
			{
				$this->load->view('/template/header_admin', $data);
				$this->load->view('daftar_notifikasi', $data2);	
				$this->load->view('/template/footer_admin');
			}	
		}		
	}

	public function broadcast()
	{
		if(!empty($this->session->userdata('logged_in_admin')))
		{
			$session_data = $this->session->userdata('logged_in_admin');
     		$data['username'] = $session_data['username'];

			$this->load->view('/template/header_admin', $data);
			$this->load->view('admin_broadcast');	
			$this->load->view('/template/footer_admin');
	
			
		}		
	}

	public function broadcastPesan(){
		$kodepesawat = $_GET['kodepesawat'];
		$pesan = $_GET['pesan'];
		if(!empty($this->session->userdata('logged_in_admin')))
		 {
			$session_data = $this->session->userdata('logged_in_admin');

			$listResult = $this->daftarnotifikasi->kontakNotifikasi("GA303");
			$listKontak = array();
			foreach ($listResult as $row ) {
				# code...
				$listKontak[]=urlencode($row->noTelp);
			}

			if(count($listKontak)!=0){

				$ch = curl_init();

				$kontakString = json_encode($listKontak);
			
				curl_setopt($ch, CURLOPT_URL,"http://localhost/sms/broadcast.php");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,
				            "listKontak=".$kontakString."&pesan=".$pesan);


				//echo $ch;
				 curl_exec ($ch);
				 $this->daftarnotifikasi->insertBroadcast($kodepesawat,$pesan);
				 redirect('admin/broadcast','berhasil');
			}
			else {
				# code...
				redirect('admin/broadcast','gagal');
			}
		}		
	}

	public function cekDatabase($kode, $pesan){
		$this->daftarnotifikasi->insertBroadcast($kode,$pesan);
	}
	
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('web', 'refresh');
	}

}