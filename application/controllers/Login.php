<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->view('layout/login/header');
		$this->load->view('login/index');
		$this->load->view('layout/login/footer');
	}
}
