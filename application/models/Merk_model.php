<?php 

class Merk_model extends CI_Model
{
	public $kd_jenis;
	public $jenis;
	
	function __construct()
	{
		$this->load->database();
	}

	function get_all() 
	{
		return $this->db->get('tbl_jenis')->result();
	}

	function insert_entry() 
	{
		$this->kd_jenis = $this->input->post('kd_jenis');
		$this->jenis    = $this->input->post('jenis');

		return $this->db->insert('tbl_jenis', $this);
	}

	function edit_entry($kd_jenis)
	{
		$this->db->where('kd_jenis', $kd_jenis);
		return $this->db->get('tbl_jenis')->row_array();
	}

	function update_entry()
	{
		$this->kd_jenis = $this->input->post('kd_jenis');
		$this->jenis    = $this->input->post('jenis');

		return $this->db->update('tbl_jenis', $this, array('kd_jenis' => $_POST['kd_jenis']));
	}

	function delete_entry($kode)
	{
		return $this->db->delete('tbl_jenis', array('kd_jenis' => $kode));
	}

	function auto_code()
	{
		$this->db->select_max('kd_jenis', 'kode');
		$k = $this->db->get('tbl_jenis')->row_array();
		$kd = substr($k['kode'], 1);
		$kode = $kd + 1;
		if ($kode < 10)
			$hasil = "M00".$kode;
		else if($kode < 100)
			$hasil = "M0".$kode;
		else
			$hasil = "M".$kode;
		return $hasil;
	}

	

}

 ?>
