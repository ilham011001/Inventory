<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->session->userdata('is_logged')) 
			redirect('dashboard');
		
		$this->load->view('login');
	}

	public function process_login()
	{
		$data = $this->user_model->login();
		if ($data != FALSE) {
			$sess = array(
					'is_logged' => TRUE,
					'level'     => $data['level'],
					'kd_user'   => $data['kd_user']
			);
			$this->session->set_userdata($sess);
			redirect('dashboard');
		}
		redirect('auth');
	}

	public function process_logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}


}

?>
