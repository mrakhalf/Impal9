<?php

class Inputhasilperiksa extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_inputhasilperiksa');
		$this->load->helper('url');
	}

	function tambah(){
		$this->load->view('home/Inputhasilperiksa');
	}

  function tambah_aksi()
	{
		$namapasien = $this->input->post('namapasien');
		$resepobat = $this->input->post('resepobat');
		$hasilperiksa = $this->input->post('hasilperiksa');

		$data = array(
			'namapasien' => $namapasien,
			'resepobat' => $resepobat,
			'hasilperiksa' => $hasilperiksa
			);
		$this->m_inputhasilperiksa->input_data($data,'inputhasilperiksa');
		redirect('Home/Berhasilinputsuratperiksa');
	}

}
