<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('daftarRS');
		$this->load->model('daftarDokter');
		$this->load->model('m_isidata');
	}

	public function FormDokter(){
		$this->load->view('Admin/Dashboard/DaftarStaff');
	}

	public function LaporanDanaCair(){
		$this->load->view('Petugasrs/Laporandanacair');
	}

	public function Admin() {
		$this->load->view('Admin/index_home');
	}

	public function DashboardAdmin(){
		 $this->load->view('Admin/Dashboard/index');
	}

	public function index()
	{
		$this->load->view('homepage');
	}

	public function about()
	{
		$this->load->view('About');
	}

	public function services()
	{
		$this->load->view('services');
	}

	public function Berhasil()
 	{
	 	$this->load->view('Berhasil');
 	}

	public function news()
	{
		$this->load->view('news');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function datahasilperiksa()
	{
		$this->load->view('Petugasrs/Datahasilperiksa');
	}

	public function uploadlaporancair()
	{
		$this->load->view('Petugasbpjs/Uploadlaporancair');
	}

	public function uploadlaporandanacair()
	{
		$this->load->view('Petugasrs/Uploadlaporandanacair');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function daftarulang()
	{
		$this->load->view('Petugasrs/Daftarulang');
	}

	public function laporanadministrasi()
	{
		$this->load->view('Petugasbpjs/Laporanadministrasi');
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}

	public function uploadlaporanadministrasi()
	{
		$this->load->view('Petugasrs/uploadlaporanadministrasi');
	}

	public function daftarcalon()
	{
		$this->load->view('Petugasrs/Daftarcalon');
	}

	public function pilihrs()
	{
		$x['data']=$this->daftarRS->getRs();
		$this->load->view('Pilihrs',$x);
	}

	public function pilihdokter()
	{
		$x['data']=$this->daftarDokter->getDr();
		$this->load->view('PilihDokter',$x);

	}

	public function isidata($username_dokter)
	{
		$username = $this->session->userdata('username');
		$data = array(
        'dokter' => $username_dokter,
    );
		$this->m_isidata->update_input_dokter($username,$data,'user');
		$this->load->view('Isidata');
	}

	public function Hasildatapasien()
	{
		$this->load->view('Dokter/Hasildatapasien');
	}

	public function inputhasilperiksa()
	{
		 $this->load->view('Dokter/Inputhasilperiksa');
	}

	public function Berhasilinputsuratperiksa()
	{
		 $this->load->view('Dokter/Berhasilinput');
	}
	public function logout() {
			//unset the logged_in session and redirect to login page
			$this->session->unset_userdata('logged_in');
			redirect('Home/index');
	}
}
