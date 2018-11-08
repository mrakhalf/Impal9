<?php

class ModelReg extends CI_Model{
    public function add_user($data){
        //get the data from controler and insert into the table 'users'
        return $this->db->insert('user', $data);
    }
}
