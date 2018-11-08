<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugasbpjs extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function loginpetugasbpjs()
	{
		$this->load->view('Petugasbpjs/loginpetugasbpjs');
	}

  public function uploadlaporancair()
	{
		$this->load->view('Petugasbpjs/Uploadlaporancair');
	}

  public function berhasilupload()
	{
		$this->load->view('Petugasbpjs/Berhasilupload');
	}
}
