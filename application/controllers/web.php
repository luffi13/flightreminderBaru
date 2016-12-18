<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	function __construct()
 	{
	   	parent::__construct();
	   	$this->load->model('signup','',TRUE);
	  	$this->load->model('user','',TRUE);
 	}
 	public function newIndex(){

 		$this->load->view('/New_Template/header');

 		$this->load->view('/New_Template/index_page');
 	}

	public function index()
	{
		if(!empty($this->session->userdata('logged_in')))
    	{
      
            $post_array = $this->session->userdata('logged_in');
            
        $this->load->view('/New_Template/header');
        $this->load->view('/New_Template/navbar_logged_in');
        // $this->load->view('/New_Template/jaeger');
        $this->load->view('/New_Template/banner');             
            $this->load->view('penerbangan');  
              
           	
    	}
        else if(!empty($this->session->userdata('logged_in_admin'))){
        	
            redirect('admin');
        }
        else
        {
        	$this->load->view('/New_Template/header');
 		$this->load->view('/New_Template/navbar');
        // $this->load->view('/New_Template/jaeger');
        // $this->load->view('/New_Template/banner');             
        
 			$this->load->view('/New_Template/index_page');
        }

	}
	
	public function login()
	{
		if (!empty($this->session->userdata('logged_in'))) {
        # code...
        redirect('home', 'refresh');
      	}
		$this->load->helper(array('form'));
		$this->load->view('/template/header');
		$this->load->view('login');
		
			
	}

	public function signup()
	{
		$this->load->view('/template/header');
		$this->load->view('signup');
		
		//$this->load->view('/template/footer');
			
	}

	public function signup_akun()
	{
            $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'noTelp' => $this->input->post('noTelp'),
            );
             
            $data['akun'] = $this->signup->signup_akun($data['nama'],$data['username'],$data['email'],$data['password'],$data['noTelp']);

            $username = $this->input->post('username');
  			$password = $this->input->post('password');

			$result = $this->user->login($username, $password);
 
			   if($result)
			   {
			     $sess_array = array();
			     foreach($result as $row)
			     {
			       $sess_array = array(
			         //'id' => $row->id,
			         'username' => $row->username
			       );
			       $this->session->set_userdata('logged_in', $sess_array);
			     }
			     $session_data = $this->session->userdata('logged_in');
			     $data['username'] = $session_data['username'];
			     
        $this->load->view('/New_Template/header');
        $this->load->view('/New_Template/navbar_logged_in');
        // $this->load->view('/New_Template/jaeger');
        $this->load->view('/New_Template/banner');          
        $this->load->view('penerbangan', $data);
			   }
    }

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('web', 'refresh');
	}
}
