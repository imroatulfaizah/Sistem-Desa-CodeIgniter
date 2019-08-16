<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (empty($this->session->userdata('login'))) {
			redirect('Login/index','refresh');
		}
	}

	public function index(){
		$rows_penduduk['jml_penduduk'] = $this->MyModel->getNum('ktp');
		$rows_penduduk['jml_pendatang'] = 100;
		$this->load->view('home',$rows_penduduk,false);
	}

	// public function pdf(){
	// 	$data['warga'] = $this->MyModel->get_mahasiswa()->result();
	// 	$html = $this->load->view('tes', $data,true);
	// 	$this->pdfgenerator->generate($html,'surat');
	// }

	public function penduduk(){
		$data['penduduk'] = $this->MyModel->get()->result();
		$this->load->view('penduduk', $data,false);
	}
}
