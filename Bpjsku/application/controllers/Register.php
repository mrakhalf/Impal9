<?php

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();

        //load our Register model here
        $this->load->model('RegisterModel', 'register');
    }

    //registration form page
    public function index() {
        //check if the user is already logged in
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            redirect('Home/Daftar');
        }
        //load the register page views
        $this->load->view('Home/Daftar');
    }

    //register validation and logic
    public function doRegister() {
        //set the form validation here
        $this->form_validation->set_rules('namalengkap', 'namalengkap', 'required|min_length[3]');
        $this->form_validation->set_rules('idbpjs', 'idbpjs', 'required|min_length[3]');
        $this->form_validation->set_rules('nomortlp', 'nomortlp', 'required|min_length[3]');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|min_length[3]');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Username already exists.');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        $this->form_validation->set_rules('passwordkonfirmasi', 'Password', 'required|min_length[4]');

        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect('Home/daftar');
        } else {
            //if not get the input values
            $namalengkap = $this->input->post('namalengkap');
            $idbpjs = $this->input->post('idbpjs');
            $nomortlp = $this->input->post('nomortlp');
            $alamat = $this->input->post('alamat');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $passwordkonfirmasi = md5($this->input->post('password'));

            $data = [
                'namalengkap' => $namalengkap,'idbpjs' => $idbpjs, 'nomortlp' => $nomortlp, 'alamat' => $alamat, 'username' => $username, 'password' => $password, 'passwordkonfirmasi' => $passwordkonfirmasi,'Level'=>'Pasien'
            ];

            //pass the input values to the register model
            $insert_data = $this->register->add_user($data);

            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Berhasil Daftar, Login Sekarang!');
                redirect('Home/login');
            }
        }
    }
}
