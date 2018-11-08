<?php

class LoginModel extends CI_Model {

    public function checkLogin($username, $password) {
        //query the table 'users' and get the result count
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');

        return $query;
    }
}
