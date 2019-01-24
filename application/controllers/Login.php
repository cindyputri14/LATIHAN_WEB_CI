<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
		$this->load->helper('url');
	}
	
	
	public function index()
	{
		if ($this->session->userdata('status') == 'logged in') {
			redirect('welcome/index');
		}
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Login";
			$this->load->view('login/login_view', $data);
		} else {
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password'));
			
			$where = array('username' => $username, 'password' => $password);
	
			$cek = $this->Login_Model->cek_login($where);
			if ($cek > 0) {
				
				$data_session = array(
					'status' => 'logged in'
				);
				
				$this->session->set_userdata( $data_session );
				
				return redirect('welcome/index');
			} else {
				$this->session->set_flashdata('pesan', 'anda gagal login');
				
				return redirect('Login/index');
			}
		}		
	}

	public function register()
	{
		$this->form_validation->set_rules('username', 'username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('contact', 'contact', 'required');
		$this->form_validation->set_rules('nis', 'nis', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		// $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$fname = $this->input->post('fname');
			$email = $this->input->post('email');
			$contact = $this->input->post('contact');
			$nis = $this->input->post('nis');
			$password = sha1($this->input->post('password'));
			
			$data = array(
				'username' => $username,
				'fname' => $fname,
				'email' => $email,
				'contact' => $contact,
				'nis' => $nis, 
				'password' => $password
			);
			
			$dataUser = $this->Login_Model->tambahUser($data);
			redirect('login/index');
		} else {
			echo "<script>alert('data yang anda masukkan kurang benar')</script>";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login/index');
	}

}