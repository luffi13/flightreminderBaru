<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbangan extends CI_Controller {

	function __construct()
    {
       parent::__construct();
       $this->load->model('searchpenerbangan');
       $this->load->model('notifikasi');
       $this->load->model('Kode');
       //$this->load->model('daftarpenerbangan');
     }

    public function index()
	{
		if(!empty($this->session->userdata('logged_in')))
    	{
      
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            
            $this->load->view('template/header_login');              
            $this->load->view('penerbangan',$data);  
              
           	
    	}
        else{
            redirect('web/login');
        }		
	}

    public function pergi()
    {
        $pergi = strtoupper($this->input->post('kodepergi'));
        $tanggal = $this->input->post('tanggalpergi');
        $username = $this->input->post('username');
        $jam = $this->Kode->jam($pergi);

        if(!$jam)
        {
            $jam = $this->Kode->jam_pagi($pergi);

            if(!$jam)
            {
                $jam = $this->Kode->jam_dini($pergi);
            }
        }
        $checkin = $this->Kode->checkin($pergi);

        $data2 = $this->notifikasi->input($pergi,$tanggal,$username,$jam,$checkin);
        $nomor = array('nomor' => $data2);
        

        $data['penerbangan'] = $this->searchpenerbangan->searchpergi($pergi);
        $data['nomor']=$data2;

        if($data['penerbangan'])
        {
            $this->load->view('template/header_login');
            $this->load->view('tampilpenerbangan',$data);
            //$this->load->view('selanjutnya', $nomor);
        }   
    }

    public function pulangpergi()
    {
        $pergi = strtoupper($this->input->post('kodepergi'));
        $tanggal = $this->input->post('tanggalpergi');
        $username = $this->input->post('username');
        $jam = $this->Kode->jam($pergi);

        if(!$jam)
        {
            $jam = $this->Kode->jam_pagi($pergi);

            if(!$jam)
            {
                $jam = $this->Kode->jam_dini($pergi);
            }
        }

        $checkin = $this->Kode->checkin($pergi);

        $data2 = $this->notifikasi->input($pergi,$tanggal,$username,$jam,$checkin);
     
        $data['penerbangan'] = $this->searchpenerbangan->searchpergi($pergi);

        if($data['penerbangan'])
        {
            $pulang = strtoupper($this->input->post('kodepulang'));
            $tanggal_pulang = $this->input->post('tanggalpulang');
            $username = $this->input->post('username');
            $jam_pulang = $this->Kode->jam($pulang);

            if(!$jam_pulang)
            {
                $jam_pulang = $this->Kode->jam_pagi($pergi);

                if(!$jam_pulang)
                {
                    $jam_pulang = $this->Kode->jam_dini($pergi);
                }
            }

            $checkin_pulang = $this->Kode->checkin($pulang);

            $data3 = $this->notifikasi->input($pulang,$tanggal_pulang,$username,$jam_pulang,$checkin_pulang);
            $nomor = array('nomorpergi' => $data2, 'nomorpulang' => $data3);

            $data4['penerbangan'] = $this->searchpenerbangan->searchpulang($pulang);
            if($data4['penerbangan'])
            {
                $this->load->view('template/header_login');
                $this->load->view('tampilpenerbanganpergi',$data);
                $this->load->view('tampilpenerbanganpulang', $data4);    
                $this->load->view('selanjutnyapp.php', $nomor);
            }
            
        }   
    }
	
}
