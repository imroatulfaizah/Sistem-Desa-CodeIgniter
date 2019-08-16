<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Penduduk extends CI_Model {

	
	private $_table = "ktp";

	public $no_ktp;
	public $no_kk;
	public $nama;

	public function rules(){

		return [
			['field' => 'no_ktp',
			 'label' => 'No KTP',
			 'rules' => 'required'],

			 ['field' => 'no_kk',
			 'label' => 'No KK',
			 'rules' => 'numeric'],

			 ['field' => 'nama',
			 'label' => 'Nama',
			 'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["no_ktp" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->no_ktp = $post["no_ktp"];
		$this->no_kk = $post["no_kk"];
		$this->nama = $post["nama"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->no_ktp = $post["no_ktp"];
		$this->no_kk = $post["no_kk"];
		$this->nama = $post["nama"];
		$this->db->update($this->_table, $this, array('no_ktp' => $post['no_ktp']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("no_ktp" => $id));
	}


}

/* End of file Model_Penduduk.php */
/* Location: ./application/models/Penduduk/Model_Penduduk.php */