<?php

class Uploadlaporandanacair extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_uploadlaporandanacair');
		$this->load->helper('url');
	}

	function tambah(){
		$this->load->view('petugasbpjs/Uploadlaporancair');
	}

  function tambah_aksi()
	{
		$tanggalupload = $this->input->post('tanggalupload');
		$waktuupload = $this->input->post('waktuupload');
		$subjek = $this->input->post('subjek');

		$data = array(
			'tanggalupload' => $tanggalupload,
			'waktuupload' => $waktuupload,
			'subjek' => $subjek
			);
		$this->m_uploadlaporandanacair->input_data($data,'uploadlaporandanacair');
		redirect('Petugasbpjs/Berhasilupload');
	}

}
