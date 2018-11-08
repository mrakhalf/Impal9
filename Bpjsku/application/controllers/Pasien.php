<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
  public function pilihDokter()
  {
      $username = $this->session->userdata('username');
      

  }

}
