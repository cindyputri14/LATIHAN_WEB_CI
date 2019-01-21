<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Halo extends CI_Controller {

	public function index()
	{
		$data['judul'] = "My First CI APP";
		$this->load->view('template/header', $data);
		$this->load->view('halo/index', $data);
		$this->load->view('template/footer', $data);
	}

}

/* End of file Halo.php */
