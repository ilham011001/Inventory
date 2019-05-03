<?php 

class Barang_model extends CI_Model
{
	public $kd_barang;
	public $nama_barang;
	public $kd_jenis;
	public $kd_distributor;
	public $stok;
	public $harga_barang;
	public $gambar;
	public $keterangan;
	public $tanggal_masuk;
	
	function __construct()
	{
		$this->load->database();
	}

	function get_all() 
	{
		return $this->db->get('tbl_barang')->result();
	}

	function get_query()
	{
		return $this->db->get('q_barang')->result();
	}

	function insert_entry($foto) 
	{
		$this->kd_barang   				= $this->input->post('kd_barang');
		$this->nama_barang 				= $this->input->post('nama_barang');
		$this->kd_jenis  				= $this->input->post('kd_jenis');
		$this->kd_distributor 			= $this->input->post('kd_distributor');
		$this->stok            			= $this->input->post('stok');
		$this->harga_barang             = $this->input->post('harga_barang');
		$this->gambar            		= $foto;
		$this->keterangan               = $this->input->post('keterangan');
		$this->tanggal_masuk            = date('Y-m-d');

		return $this->db->insert('tbl_barang', $this);
	}

	function edit_entry($kd_barang)
	{
		$this->db->where('kd_barang', $kd_barang);
		return $this->db->get('tbl_barang')->row_array();
	}

	function update_entry($foto)
	{
		$this->kd_barang   				= $this->input->post('kd_barang');
		$this->nama_barang 				= $this->input->post('nama_barang');
		$this->kd_jenis  				= $this->input->post('kd_jenis');
		$this->kd_distributor 			= $this->input->post('kd_distributor');
		$this->stok            			= $this->input->post('stok');
		$this->harga_barang             = $this->input->post('harga_barang');
		// $this->gambar            		= $this->input->post('gambar');
		$this->keterangan               = $this->input->post('keterangan');

		return $this->db->update('tbl_barang', $this, array('kd_barang' => $_POST['kd_barang']));
	}

	function delete_entry($kode)
	{
		return $this->db->delete('tbl_barang', array('kd_distributor' => $kode));
	}

	function auto_code()
	{
		$this->db->select_max('kd_barang', 'kode');
		$k = $this->db->get('tbl_barang')->row_array();
		$kd = substr($k['kode'], 1);
		$kode = $kd + 1;
		if ($kode < 10)
			$hasil = "B00".$kode;
		else if($kode < 100)
			$hasil = "B0".$kode;
		else
			$hasil = "B".$kode;
		return $hasil;
	}

	function filter_tgl($from, $to)
	{
		$sql = "SELECT * FROM q_barang WHERE tanggal_masuk BETWEEN '$from' AND '$to'";
		return $this->db->query($sql)->result();
	}

	function filter_stok()
	{
		$this->db->where('stok', '0');
		return $this->db->get('q_barang')->result();
	}

	function num_barang() {
		$query = $this->db->select("*")
						->from("tbl_barang")
						->get();
		return $query->num_rows();
	}

}

 ?>
