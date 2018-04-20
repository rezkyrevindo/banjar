<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan_b extends CI_Controller {
	
	public function index()
	{
		$this->load->view('layout/permohonan_b/header');
		$this->load->view('permohonan_b/index');
		$this->load->view('layout/permohonan_b/footer');
	}
}
