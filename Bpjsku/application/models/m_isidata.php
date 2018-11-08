<?php

class M_isidata extends CI_Model{
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_input_dokter($username,$data,$table){
		$this->db->where('username', $username);
    $this->db->update('user', $data);
	}
}
