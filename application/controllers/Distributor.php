<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('distributor_model');
		$this->session->set_flashdata(array('active' => "distributor"));
	}

	public function index()
	{
		$data = array(
			'page_title' => 'POS - distributors',
			'distributors'      => $this->distributor_model->get_all()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/distributor/index');
		$this->load->view('primary/footer');
	}

	public function show($id)
	{
		
	}

	public function add()
	{
		$data = array(
			'page_title' => 'POS - Add distributors',
			'auto_code'  => $this->distributor_model->auto_code()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/distributor/_input');
		$this->load->view('primary/footer');	
	}


	public function store()
	{
		$check = $this->distributor_model->insert_entry();
		if ($check)
			redirect('distributor');
		else
			echo "Error while storing data";
	}

	public function edit($kd_distributor) 
	{
		$data = array(
			'page_title' => 'POS - Edit distributors',
			'auto_code'  => $this->distributor_model->auto_code(),
			'distributor' => $this->distributor_model->edit_entry($kd_distributor)
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/distributor/_edit');
		$this->load->view('primary/footer');	
	}

	public function update()
	{
		$check = $this->distributor_model->update_entry();
		if ($check)
			redirect('distributor');
		else
			echo "Error while updating data";
	}

}

?>
