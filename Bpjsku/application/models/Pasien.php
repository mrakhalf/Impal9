<?php

class Pasien extends CI_Model{
    public function get_dokter_pasien($username_dokter){
      $data = $this->db->get_where('user', array('Dokter' => $username_dokter));

      return $data->result_array();
    }
}
