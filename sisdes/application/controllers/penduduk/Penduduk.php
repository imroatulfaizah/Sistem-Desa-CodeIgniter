<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_penduduk');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["ktp"] = $this->model_penduduk->getAll();
		$this->load->view("penduduk/list", $data);
	}

	public function add(){
		$ktp = $this->model_penduduk;
		$validation = $this->form_validation;
		$validation->set_rules($ktp->rules());

		if ($validation->run()) {
			$ktp->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("penduduk/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('penduduk/penduduk');

		$ktp = $this->model_penduduk;
		$validation = $this->form_validation;
		$validation->set_rules($ktp->rules());

		if ($validation->run()) {
			$ktp->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["ktp"] = $ktp->getById($id);
		if (!$data["ktp"]) show_404();

		$this->load->view("penduduk/edit_form", $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();


		if ($this->model_penduduk->delete($id)) {
			redirect(site_url('penduduk/penduduk'));
		}
	}

}

/* End of file Penduduk.php */
/* Location: ./application/controllers/Penduduk/Penduduk.php */