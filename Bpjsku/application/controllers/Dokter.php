<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Pasien');
	}

	public function logindokter()
	{
		$this->load->view('Dokter/Logindokter');
	}

	public function pilihpasien()
	{
		$username = $this->session->userdata('username');
		$pasien = $this->Pasien->get_dokter_pasien($username);
		$data = array(
	    'Pasien' => $pasien
		);
		$this->load->view('Dokter/Pilihpasien', $data);
	}

	public function hasildatapasien()
	{
		$this->load->view('Dokter/Hasildatapasien');
	}

	public function inputhasilperiksa()
	{
		$this->load->view('Dokter/Inputhasilperiksa');
	}

	public function berhasilinput()
	{
		$this->load->view('Dokter/Berhasilinput');
	}
}
