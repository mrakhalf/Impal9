<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();

        //load the Login Model
        $this->load->model('m_logAdmin');
    }

    public function doLogin() {
        //get the input fields from login form
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //send the email pass to query if the user is present or not
        $check_login = $this->m_logAdmin->LoginAdmin($username, $password);
        //if the result is query result is 1 then valid user
        if ($check_login) {
            //if yes then set the session 'loggin_in' as true
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('logged_in', true);
            redirect('Home/DashboardAdmin');
        } else {
            //if no then set the session 'logged_in' as false
            $this->session->set_userdata('logged_in', false);

            //and redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect('Home/Admin');
        }
    }
}
