<?php

class daftarRS extends CI_Model{

    public function getRs(){
        //get the data from controller and insert into the table 'users'
        $data = $this->db->get('rumahsakit');

        return $data;
    }
}
