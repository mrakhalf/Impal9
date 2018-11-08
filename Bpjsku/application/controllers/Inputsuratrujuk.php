<?php


class Inputsuratrujuk extends CI_Controller{

	function __construct(){
		parent::__construct();
  	$this->load->model('SuratRujuk');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->InputSuratRujuk->tampil_data()->result();
		$this->load->view('Klinik/Inputsuratrujukan',$data);
	}

	function tambah(){
		$this->load->view('Klinik/Inputsuratrujukan');
	}

	function tambah_aksi(){
		$namapasien = $this->input->post('namapasien');
		$keluhan = $this->input->post('keluhan');

		$data = array(
			'namapasien' => $namapasien,
			'keluhan' => $keluhan,
			);
		$this->SuratRujuk->input_data($data);
    redirect('klinik/berhasilinputsurat');
	}
}
