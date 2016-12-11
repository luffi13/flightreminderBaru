<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mengelolanotifikasi extends CI_Controller {
	
	function __construct()
    {
       parent::__construct();
       $this->load->model('daftarnotifikasi');
       $this->load->model('notifikasi');
     }

	public function hapus()
	{
		$nomornotifikasi = $this->input->post('nomornotifikasi');
		
		$result['notifikasi'] = $this->notifikasi->hapus($nomornotifikasi);

		$data['notifikasi'] = $this->daftarnotifikasi->daftar();

			if($data['notifikasi'])
			{
				$session_data = $this->session->userdata('logged_in_admin');
     			$data2['username'] = $session_data['username'];
				
				$this->load->view('/template/header_admin', $data2);
				$this->load->view('daftar_notifikasi', $data);	
				$this->load->view('/template/footer_admin');
			}
	}
}
