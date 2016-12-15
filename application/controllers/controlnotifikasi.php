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

            $this->load->view('/New_Template/header');
            $this->load->view('/New_Template/navbar_logged_in');
            // $this->load->view('/New_Template/jaeger');
            $this->load->view('/New_Template/banner');  
            $this->load->view('/New_Template/halaman_notifikasi_pp',$data);
            $this->load->view('/New_Template/script');
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
                $this->load->view('/New_Template/header');
                $this->load->view('/New_Template/navbar_logged_in');
        // $this->load->view('/New_Template/jaeger');
                $this->load->view('/New_Template/banner');

                $this->load->view('/New_Template/halaman_notifikasi_pp',$data);                
                $this->load->view('/New_Template/halaman_notifikasi_pp',$data2);

                $this->load->view('/New_Template/script');         
                // $this->load->view('halaman_notifikasi_pp2',$data);
                // $this->load->view('halaman_notifikasi_pp',$data2);
            }
            
        }
        else
            echo "gagal";
    }
}
