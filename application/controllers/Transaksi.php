<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('barang_model');
		if($this->session->userdata('is_logged') == FALSE)
			redirect('auth');
		$this->session->set_flashdata(array('active' => "transaksi"));
	}

	public function index()
	{
		$data = array(
					'page_title' => 'POS - Transaksi',
					'tmps'       => $this->transaksi_model->get_tmp(),
					'auto_code'  => $this->transaksi_model->auto_code(),
					'barangs'    => $this->barang_model->get_query(),
					'sum_total' => $this->transaksi_model->sum_temp(),
					'sum_jumlah'=> $this->transaksi_model->sum_jumlah()
				);
		$this->load->view('primary/header');
		$this->load->view('kasir/_transaksi', $data);
		$this->load->view('primary/footer');
	}

	public function process_tmp() {
		$kd_barang = $this->input->post('kd_barang');
		$row = $this->transaksi_model->check_data($kd_barang);
		if ($row->num_rows() > 0){
			$data = $row->row_array();
			$jumlah_awal = $data['jumlah_beli'];
			$harga_awal = $data['sub_total'];
			$check = $this->transaksi_model->update_tmp($jumlah_awal, $harga_awal);
		}
		else{
			$check = $this->transaksi_model->insert_tmp();
		}

		if ($check)
			echo "success";
		else
			echo "Gagal";
	}

	public function delete_item($kd_temp)
	{
		$check = $this->transaksi_model->delete_item($kd_temp);
		if ($check)
			redirect('transaksi');
		else
			echo "gagal";
	}

	public function delete_all_item()
	{
		$data = $this->transaksi_model->get_temp();
		foreach ($data as $value) {
			$check = $this->transaksi_model->delete_item($value->kd_temp);
		}
		if ($check)
			redirect('transaksi');
		else
			echo "gagal";	
	}

	public function move_to_transaksi()
	{
		$code = $this->transaksi_model->auto_code();
		$data = $this->transaksi_model->get_temp();
		$total = $this->transaksi_model->sum_temp();
		foreach ($data as $value) {
			$data = array(
				'kd_transaksi' => $code,
				'kd_barang'    => $value->kd_barang,
				'jumlah_beli'  => $value->jumlah_beli,
				'tanggal_transaksi' => NULL,
				'kd_user'      => $_SESSION['kd_user'],
				'sub_total'    => $value->sub_total,
				'total_harga'  => $total
			);
			$this->transaksi_model->insert_transaksi($data);
		}
		$check = $this->transaksi_model->truncate_tmp();
		if ($check)
			redirect('transaksi/faktur/'.$code);
		else
			echo "Error while inserting data";

	}

	public function faktur($no_faktur)
	{
		$faktur = $this->transaksi_model->get_faktur($no_faktur);
		$data = array(
			'faktur' => $faktur->row_array(),
			'barangs' => $faktur->result()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('kasir/_faktur');
		$this->load->view('primary/footer');
	}

}

?>
