<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Verifikasi extends CI_Controller {
	function __construct()
    {
       parent::__construct();
       $this->load->model('notifikasi');
    }

  	function index()
	{
    //$data['notifikasi'] = $this->notifikasi->email();
    //$this->load->helper('url');
		$nomor = $this->input->get('nomornotifikasi');
		$data['notifikasi'] = $this->notifikasi->nomor_notifikasi($nomor);

		$this->load->view('/template/header_login');
    	$this->load->view('halaman_verifikasi',$data);
	}	
}?>