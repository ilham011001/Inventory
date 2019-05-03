<?php 

class Transaksi_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get_all()
	{

	}

	function get_tmp()
	{
		return $this->db->get('q_tmp')->result();
	}

	function sum_jumlah()
	{
		return $this->db->get('tbl_tmp_transaksi')->num_rows();
	}

	function insert_tmp()
	{
		$data = array(
					'kd_barang' => $this->input->post('kd_barang'),
					'jumlah_beli' => $this->input->post('jumlah_beli'),
					'sub_total' => $this->input->post('sub_total')
		);
		return $this->db->insert('tbl_tmp_transaksi', $data);
	}

	function update_tmp($jumlah_awal, $harga_awal)
	{
		$jumlah_beli = $this->input->post('jumlah_beli') + $jumlah_awal;
		$harga = $harga_awal + $this->input->post('sub_total');
		$data = array(
					'jumlah_beli' => $jumlah_beli,
					'sub_total' => $harga
		);
		$this->db->where('kd_barang', $this->input->post('kd_barang'));
		return $this->db->update('tbl_tmp_transaksi', $data);
	}

	function delete_item($kd_temp) {
		$this->db->where('kd_temp', $kd_temp);
		return $this->db->delete('tbl_tmp_transaksi');
	}

	function truncate_tmp() {
		$sql = "TRUNCATE TABLE tbl_tmp_transaksi";
		return $this->db->query($sql);
	}

	function get_temp()
	{
		return $this->db->get('tbl_tmp_transaksi')->result();
	}

	function sum_temp() {
		$sql = "SELECT SUM(sub_total) as total FROM tbl_tmp_transaksi";
		$f = $this->db->query($sql)->row_array();
		return $f['total'];
	}

	function insert_transaksi($data)
	{
		return $this->db->insert('tbl_transaksi', $data);
	}

	function check_data($kd_barang) {
		$this->db->where('kd_barang', $kd_barang);
		return $this->db->get('tbl_tmp_transaksi');
	}

	function auto_code()
	{
		$this->db->select_max('kd_transaksi', 'kode');
		$k = $this->db->get('tbl_transaksi')->row_array();
		$kd = substr($k['kode'], 2);
		$kode = $kd + 1;
		if ($kode < 10)
			$hasil = "FA00".$kode;
		else if($kode < 100)
			$hasil = "FA0".$kode;
		else
			$hasil = "FA".$kode;
		return $hasil;
	}

	function get_faktur($no_faktur) {
		$this->db->where('kd_transaksi', $no_faktur);
		return $this->db->get('q_transaksi');
	}

}


 ?>
