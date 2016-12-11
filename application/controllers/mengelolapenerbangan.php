<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mengelolapenerbangan extends CI_Controller {
	
	function __construct()
    {
       parent::__construct();
       $this->load->model('daftarpenerbangan');
       $this->load->model('penerbangan');
       $this->load->model('kode');
     }

    public function index(){
    	$session_data = $this->session->userdata('logged_in_admin');
     	$data['username'] = $session_data['username'];
    	
    	$this->load->view('/template/header_admin',$data);
		$this->load->view('tambah_penerbangan');	
		$this->load->view('/template/footer_admin');
    }

	public function tambah()
	{
		$data = array(
            'kodepesawat' => strtoupper($this->input->post('kodepesawat')),
            'namamaskapai' => $this->input->post('namamaskapai'),
            'asal' => strtoupper($this->input->post('asal')),
            'tujuan' => strtoupper($this->input->post('tujuan')),
            'jamkeberangkatan' => $this->input->post('jamkeberangkatan'),
            );
             
        $data['penerbangan'] = $this->penerbangan->tambah($data['kodepesawat'],$data['namamaskapai'],$data['asal'],$data['tujuan'],$data['jamkeberangkatan']);	

        $data['penerbangan'] = $this->daftarpenerbangan->daftar();

			if($data['penerbangan'])
			{
				$session_data = $this->session->userdata('logged_in_admin');
     			$data2['username'] = $session_data['username'];
				
				$this->load->view('/template/header_admin',$data2);
				$this->load->view('home_admin', $data);	
				$this->load->view('/template/footer_admin');
			}	
	}

	public function ubah(){
		$kodepesawat = $this->input->post('kodepesawat');
		
		$data['kode'] = $this->kode->ubah($kodepesawat);

		$session_data = $this->session->userdata('logged_in_admin');
     	$data2['username'] = $session_data['username'];

	   	$this->load->view('/template/header_admin', $data2);
		$this->load->view('ubah_penerbangan', $data);	
		$this->load->view('/template/footer_admin');
    }
    
    public function ubah_data()
	{
		$data = array(
            'kodepesawat' => strtoupper($this->input->post('kodepesawat')),
            'namamaskapai' => $this->input->post('namamaskapai'),
            'asal' => strtoupper($this->input->post('asal')),
            'tujuan' => strtoupper($this->input->post('tujuan')),
            'jamkeberangkatan' => $this->input->post('jamkeberangkatan'),
            'kodelama' => $this->input->post('kodelama'),
            );
             
        $data['penerbangan'] = $this->penerbangan->ubah_data($data['kodepesawat'],$data['namamaskapai'],$data['asal'],$data['tujuan'],$data['jamkeberangkatan'],$data['kodelama']);	

        $data['penerbangan'] = $this->daftarpenerbangan->daftar();

			if($data['penerbangan'])
			{
				$session_data = $this->session->userdata('logged_in_admin');
     			$data2['username'] = $session_data['username'];	
				
				$this->load->view('/template/header_admin', $data2);
				$this->load->view('home_admin', $data);	
				$this->load->view('/template/footer_admin');
			}	
	}
	
	public function hapus()
	{
		$kodepesawat = $this->input->post('kodepesawat');
		
		$result['penerbangan'] = $this->penerbangan->hapus($kodepesawat);

		$data['penerbangan'] = $this->daftarpenerbangan->daftar();

			if($data['penerbangan'])
			{
				$session_data = $this->session->userdata('logged_in_admin');
     			$data2['username'] = $session_data['username'];
				
				$this->load->view('/template/header_admin', $data2);
				$this->load->view('home_admin', $data);	
				$this->load->view('/template/footer_admin');
			}
	}
}
