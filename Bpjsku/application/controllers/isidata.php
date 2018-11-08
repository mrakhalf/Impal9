<?php

class isidata extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_isidata');
		$this->load->helper('url');

	}

	function tambah(){
		$this->load->view('home/Isidata');
	}

  function tambah_aksi()
	{
		$tanggalperiksa = $this->input->post('tanggalperiksa');
		$jamperiksa = $this->input->post('jamperiksa');
		$klinikrujuk = $this->input->post('klinikrujuk');

		$data = array(
			'tanggalperiksa' => $tanggalperiksa,
			'jamperiksa' => $jamperiksa,
			'klinikrujuk' => $klinikrujuk
			);
		$this->m_isidata->input_data($data,'isidata');
		redirect('Home/Berhasil');
	}

}
