<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('merk_model');
		if($this->session->userdata('is_logged') == FALSE)
			redirect('auth');
		$this->session->set_flashdata(array('active' => "merk"));
	}

	public function index()
	{
		$data = array(
			'page_title' => 'POS - Merk',
			'merks'      => $this->merk_model->get_all()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/merk/index');
		$this->load->view('primary/footer');
	}

	public function show($id)
	{
		
	}

	public function add()
	{
		$data = array(
			'page_title' => 'POS - Add Merk',
			'auto_code'  => $this->merk_model->auto_code()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/merk/_input');
		$this->load->view('primary/footer');	
	}

	public function store()
	{
		$check = $this->merk_model->insert_entry();
		if ($check)
			redirect('merk');
		else
			echo "Error while storing data";
	}

	public function edit($kd_jenis)
	{
		$data = array(
			'page_title' => 'POS - Add Merk',
			'merk'  => $this->merk_model->edit_entry($kd_jenis)
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/merk/_edit');
		$this->load->view('primary/footer');
	}

	public function update()
	{
		$check = $this->merk_model->update_entry();
		if ($check)
			redirect('merk');
		else
			echo "Error while updating data";
	}

}

?>
