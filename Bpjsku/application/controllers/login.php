<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();

        //load the Login Model
        $this->load->model('LoginModel', 'login');
    }

    public function index() {
        //check if the user is already logged in
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in){
            //if yes redirect to welcome page
            redirect('Home/Pilihrs');
        }
        //if not load the login page
        $this->load->view('home/login');
    }

    public function doLogin() {
        //get the input fields from login form
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        //send the email pass to query if the user is present or not
        $check_login = $this->login->checkLogin($username, $password);

        //if the result is query result is 1 then valid user
        if ($check_login->num_rows()>0) {
            $data=$check_login->row_array();
            $this->session->set_userdata('logged_in', true);

            if ($data['Level'] == 'Pasien'){
              $this->session->set_userdata('username',$username);
              $this->session->set_userdata('logged_in', true);
              redirect('Home/Pilihrs');

            }else if ($data['Level'] == 'Dokter'){
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('logged_in', true);
              redirect('Dokter/Pilihpasien');

            }else if ($data['Level']=='Bpjs'){
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('logged_in', true);
              redirect('Petugasbpjs/Uploadlaporancair');

            }else if ($data['Level']=='Klinik'){
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('logged_in', true);
              redirect('Klinik/Inputsuratrujukan', $username);

            }else if ($data['Level']=='Rs'){
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('logged_in', true);
              redirect('Petugasrs/Daftarcalon');
            }
        } else {
            //if no then set the session 'logged_in' as false
            $this->session->set_userdata('logged_in', false);

            //and redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect('home/login');
        }
    }


}
