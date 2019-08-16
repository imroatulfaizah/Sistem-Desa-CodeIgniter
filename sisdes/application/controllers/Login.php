<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login',false);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$adminData = $this->MyModel->getAdmin($username,$password);
		
		if ($adminData >= 1) {
			$array_sess = array(
				'login' => 'true'
			);		
			$this->session->set_userdata($array_sess);
			redirect('Home/index','refresh');
		}else{
			echo 'gagal';
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login/index');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */