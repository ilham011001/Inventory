<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		if($this->session->userdata('is_logged') == FALSE)
			redirect('auth');
		$this->session->set_flashdata(array('active' => "user"));
	}

	public function index()
	{
		$data = array(
			'page_title' => 'POS - User',
			'users'      => $this->user_model->get_all()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/user/index');
		$this->load->view('primary/footer');
	}

	public function show($id)
	{
		
	}

	public function add()
	{
		$data = array(
			'page_title' => 'POS - Add User'
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/user/_input');
		$this->load->view('primary/footer');	
	}

	public function store()
	{
		$check = $this->user_model->insert_entry();
		if ($check)
			redirect('user');
		else
			echo "Error while storing data";
	}

	public function edit($kd_user)
	{
		$data = array(
			'page_title' => 'POS - Add distributors',
			'user'       => $this->user_model->edit_entry($kd_user)
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/user/_edit');
		$this->load->view('primary/footer');
	}

	public function update()
	{
		$check = $this->user_model->update_entry();
		if ($check)
			redirect('user');
		else
			echo "Error while updating data";
	}

}

?>
