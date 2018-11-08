<?php

class m_Logadmin extends CI_Model {

    public function LoginAdmin($username, $password) {
        //query the table 'users' and get the result count
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('Admin');

        return $query->num_rows();
    }
}
