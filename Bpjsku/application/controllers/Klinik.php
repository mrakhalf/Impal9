<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klinik extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function loginklinik()
	{
		$this->load->view('Klinik/Loginklinik');
	}

	public function inputsuratrujukan()
	{
		$this->load->view('Klinik/Inputsuratrujukan');
	}

	public function berhasilinputsurat()
	{
		$this->load->view('Klinik/Berhasilinputsurat');
	}
}
