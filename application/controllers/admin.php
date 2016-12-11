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
	
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('web', 'refresh');
	}

}