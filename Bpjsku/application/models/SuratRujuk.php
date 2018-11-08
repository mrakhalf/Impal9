<?php

class SuratRujuk extends CI_Model{

	function tampil_data(){
		return $this->db->get('inputsuratrujuk');
	}

	function input_data($data){
		$this->db->insert('inputsuratrujuk',$data);
	}
}
