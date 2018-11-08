<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugasrs extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function loginpetugasrs()
	{
		$this->load->view('Petugasrs/Loginpetugasrs');
	}

	public function daftarcalon()
	{
		$this->load->view('Petugasrs/Daftarcalon');
	}
}
