<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UbahJam extends CI_Controller {

	function __construct()
    {
       parent::__construct();
       $this->load->model('notifikasi');
    }
    public function index()
    {
        $pergi = $this->input->post('nomornotifikasi');
        $jamberangkat = $this->input->post('jamberangkat');

        $data = array('pergi' => $pergi, 'jamberangkat' => $jamberangkat);

        if($data)
        {

            $this->load->view('/New_Template/header');
            $this->load->view('/New_Template/navbar_logged_in');
            // $this->load->view('/New_Template/jaeger');

            $this->load->view('/New_Template/banner');  

            $this->load->view('/New_Template/ubah_jam_pp',$data);  
        
            $this->load->view('/New_Template/script');  
        }
        else
            echo "gagal";
    }

    public function index_pp()
    {
        $pergi = $this->input->post('nomornotifikasi');
        $jamberangkat = $this->input->post('jamberangkat');

        $data = array('pergi' => $pergi, 'jamberangkat' => $jamberangkat);

        if($data)
        {

            $this->load->view('/New_Template/header');
            $this->load->view('/New_Template/navbar_logged_in');
            // $this->load->view('/New_Template/jaeger');

            $this->load->view('/New_Template/banner');  

            $this->load->view('/New_Template/ubah_jam_pp',$data);  

            $this->load->view('/New_Template/script');  
            // $this->load->view('rubahjampp',$data);
        }
        else
            echo "gagal";
    }

    public function index_pp2()
    {
        $pergi = $this->input->post('nomornotifikasi');
        $jamberangkat = $this->input->post('jamberangkat');

        $data = array('pergi' => $pergi, 'jamberangkat' => $jamberangkat);

        if($data)
        {
            $this->load->view('template/header_login');  
            $this->load->view('rubahjampp2',$data);
        }
        else
            echo "gagal";
    }

    public function ubah()
    {
        $pergi = $this->input->post('nomornotifikasi');
        $jamberangkat = $this->input->post('jamberangkat');

        $data['notifikasi'] = $this->notifikasi->ubah($pergi, $jamberangkat);
        $data2['notifikasi'] = $this->notifikasi->pergi($pergi);

        if($data2['notifikasi'])
        {
            $this->load->view('template/header_login');  
            $this->load->view('halaman_notifikasi',$data2);
        }
        else
            echo "gagal";
    }

    public function ubah_pp()
    {
        $pergi = $this->input->post('nomornotifikasi');
        $jamberangkat = $this->input->post('jamberangkat');

        $pulang = $pergi + 1;
        $data['notifikasi'] = $this->notifikasi->ubah($pergi, $jamberangkat);
        $data2['notifikasi'] = $this->notifikasi->pergi($pergi);
        $data3['notifikasi'] = $this->notifikasi->pergi($pulang);

        if($data2['notifikasi'])
        {
            $this->load->view('template/header_login');  
            $this->load->view('halaman_notifikasi_pp2',$data2);
            $this->load->view('halaman_notifikasi_pp',$data3);
        }
        else
            echo "gagal";
    }

    public function ubah_pp2()
    {
        $pulang = $this->input->post('nomornotifikasi');
        $jamberangkat = $this->input->post('jamberangkat');

        $pergi = $pulang - 1;
        $data['notifikasi'] = $this->notifikasi->ubah($pulang, $jamberangkat);
        $data2['notifikasi'] = $this->notifikasi->pergi($pulang);
        $data3['notifikasi'] = $this->notifikasi->pergi($pergi);

        if($data2['notifikasi'])
        {
            $this->load->view('template/header_login');  
            $this->load->view('halaman_notifikasi_pp2',$data3);
            $this->load->view('halaman_notifikasi_pp',$data2);
        }
        else
            echo "gagal";
    }
}
