<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
		$this->load->helper('url');
		$this->load->database();
		if ( $this->session->userdata('status') != 'logged in' ) {
			return redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function dashboard($nama, $gender)
	{
		$data['nama_lengkap'] = $nama;
		$data['jenis_kelamin'] = $gender;
		$this->load->view('beranda', $data);
	}

	public function profil()
	{
		$this->load->view('profil');
	}

	public function utama()
	{
		$this->load->view('utama');
	}

	public function event()
	{
		$this->load->view('event');
	}

	public function gallery()
	{
		$this->load->view('gallery');
	}
}
