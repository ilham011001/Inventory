<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('merk_model');
		$this->load->model('barang_model');
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


	public function barang()
	{
		$data = array(
			'page_title' => 'POS - distributors',
			'barangs'      => $this->barang_model->get_query()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('report/barang');
		$this->load->view('primary/footer');
	}

	function barang_filter()
	{
		$data = array(
			'page_title' => 'POS - distributors',
			'barangs'    => NULL,
			'from' => NULL,
			'to'  => NULL
		);
		$from = $this->input->post('from');
		$to   = $this->input->post('to');

		if ($from != NULL){
			$data['barangs'] = $this->barang_model->filter_tgl($from, $to);
			$data['from'] = $from;
			$data['to'] = $to;
		}
		

		$this->load->view('primary/header', $data);
		$this->load->view('report/barang_masuk');
		$this->load->view('primary/footer');
	}

	function barang_stok()
	{
		

		
			$data['barangs'] = $this->barang_model->filter_stok();
			
		
		

		$this->load->view('primary/header', $data);
		$this->load->view('report/barang_stok');
		$this->load->view('primary/footer');	
	}

	function excel_barang()
	{
		$filter = $this->input->post('filter');

		if ($filter == "tgl"){
			$from = $this->input->post('from');
			$to = $this->input->post('to');
			$data['barangs'] = $this->barang_model->filter_tgl($from, $to);
		}
		else if ($filter == "stok"){
			$data['barangs'] = $this->barang_model->filter_stok();
		}
		else{
			$data['barangs'] = $this->barang_model->get_query();
		}

		$this->load->view('excel/barang', $data);
	}


}

?>
