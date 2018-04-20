
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {
	
	public function index()
	{
		$this->load->view('layout/dash/header');
		$this->load->view('dash/index');
		$this->load->view('layout/dash/footer');
	}
}
