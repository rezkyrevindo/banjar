<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function index()
	{
		$this->load->view('layout/register/header');
		$this->load->view('register/index');
		$this->load->view('layout/login/footer');
	}
}
