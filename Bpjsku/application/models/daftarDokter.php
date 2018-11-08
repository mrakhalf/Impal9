<?php

class daftarDokter extends CI_Model{

    public function getDr(){
        //get the data from controller and insert into the table 'users'
        $data = $this->db->get_where('user', array('Level' => 'Dokter'));

        return $data;
    }
}
