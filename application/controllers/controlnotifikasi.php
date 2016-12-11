<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlNotifikasi extends CI_Controller {

	function __construct()
    {
       parent::__construct();
       $this->load->model('notifikasi');
    }

    public function pergi()
    {
        $pergi = $this->input->post('nomornotifikasipergi');

        $data['notifikasi'] = $this->notifikasi->pergi($pergi);

        if($data['notifikasi'])
        {
            $this->load->view('template/header_login');  
            $this->load->view('halaman_notifikasi',$data);
        }
        else
            echo "gagal";
    }

    public function pergipulang()
    {
        $pergi = $this->input->post('nomornotifikasipergi');
        $pulang = $this->input->post('nomornotifikasipulang');

        $data['notifikasi'] = $this->notifikasi->pergi($pergi);

        if($data['notifikasi'])
        {
            $data2['notifikasi'] = $this->notifikasi->pergi($pulang);

            if($data2['notifikasi'])
            {
                $this->load->view('template/header_login');  
                $this->load->view('halaman_notifikasi_pp2',$data);
                $this->load->view('halaman_notifikasi_pp',$data2);
            }
            
        }
        else
            echo "gagal";
    }
}