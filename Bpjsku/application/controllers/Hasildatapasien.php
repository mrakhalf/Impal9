<?php

class Hasildatapasien extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_hasildatapasien');
		$this->load->helper('url');
	}

	function tambah(){
		$this->load->view('home/Hasildatapasien');
	}

  function tambah_aksi()
	{
		$rumahsakit = $this->input->post('rumahsakit');
		$nomorantrian = $this->input->post('nomorantrian');
		$waktu = $this->input->post('waktu');
    $keluhan = $this->input->post('keluhan');

		$data = array(
			'rumahsakit' => $rumahsakit,
			'nomorantrian' => $nomorantrian,
			'waktu' => $waktu,
      'keluhan' => $keluhan
			);
		$this->m_hasildatapasien->input_data($data,'hasildatapasien');
		redirect('Home/inputhasilperiksa');
	}

}
