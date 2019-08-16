<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {

	public function get(){
		return $this->db->get('ktp');
	}

	public function getAdmin($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('admin');
		return $result->num_rows();
	}

	public function getNum($tableName){
		$rows = $this->db->get($tableName);
		return $rows->num_rows();
	}

}

/* End of file MyModel.php */
/* Location: ./application/models/MyModel.php */