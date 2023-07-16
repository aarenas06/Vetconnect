<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function Login()
	{
		$this->load->view('landing/login');
	}
	public function Registro()
	{
		$this->load->view('landing/registro');
	}
}
