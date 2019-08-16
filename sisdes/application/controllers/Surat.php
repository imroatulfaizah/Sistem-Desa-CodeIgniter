<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_penduduk');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["ktp"] = $this->model_penduduk->getAll();
		$this->load->view("surat/pilih_surat", $data);
	}

	public function sppak(){
		$html = $this->load->view('surat/sppak',null,true);
		$this->pdfgenerator->generate($html,'Surat Pernyataan Penambahan Anggota Keluarga');
	}

	public function spwwn(){
		$html = $this->load->view('surat/spwwn',null,true);
		$this->pdfgenerator->generate($html,'Surat Pernyataan Wakil Wali Nikah');
	}

	public function spk(){
		$html = $this->load->view('surat/spk',null,true);
		$this->pdfgenerator->generate($html,'Surat Pernyataan Kelahiran');
	}

	public function skck($id=null){
		$data["ktp"] = $ktp->getById($id);
		$html = $this->load->view('surat/skck',null,true);
		$this->pdfgenerator->generate($html,'Surat Keterangan SKCK');
	}

	public function spanak(){
		$html = $this->load->view('surat/spanak',null,true);
		$this->pdfgenerator->generate($html,'Surat Pernyataan Anak Kandung');
	}

	public function sprw(){
		$html = $this->load->view('surat/sprw',null,true);
		$this->pdfgenerator->generate($html,'Surat Pernyataan RW');
	}

}

/* End of file Surat.php */
/* Location: ./application/controllers/Surat.php */