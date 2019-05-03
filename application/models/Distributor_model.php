<?php 

class Distributor_model extends CI_Model
{
	public $kd_distributor;
	public $nama_distributor;
	public $alamat;
	public $no_hp;
	
	function __construct()
	{
		$this->load->database();
	}

	function get_all() 
	{
		return $this->db->get('tbl_distributor')->result();
	}

	function insert_entry() 
	{
		$this->kd_distributor   = $this->input->post('kd_distributor');
		$this->nama_distributor = $this->input->post('nama_distributor');
		$this->alamat  			= $this->input->post('alamat');
		$this->nama_distributor = $this->input->post('nama_distributor');
		$this->no_hp            = $this->input->post('no_hp');

		return $this->db->insert('tbl_distributor', $this);
	}

	function edit_entry($kd_distributor)
	{
		$this->db->where('kd_distributor', $kd_distributor);
		return $this->db->get('tbl_distributor')->row_array();
	}

	function update_entry()
	{
		$this->kd_distributor   = $this->input->post('kd_distributor');
		$this->nama_distributor = $this->input->post('nama_distributor');
		$this->alamat  			= $this->input->post('alamat');
		$this->nama_distributor = $this->input->post('nama_distributor');
		$this->no_hp            = $this->input->post('no_hp');

		return $this->db->update('tbl_distributor', $this, array('kd_distributor' => $_POST['kd_distributor']));
	}

	function delete_entry($kode)
	{
		return $this->db->delete('tbl_distributor', array('kd_distributor' => $kode));
	}

	function auto_code()
	{
		$this->db->select_max('kd_distributor', 'kode');
		$k = $this->db->get('tbl_distributor')->row_array();
		$kd = substr($k['kode'], 1);
		$kode = $kd + 1;
		if ($kode < 10)
			$hasil = "D00".$kode;
		else if($kode < 100)
			$hasil = "D0".$kode;
		else
			$hasil = "D".$kode;
		return $hasil;
	}

	function num_dist() {
		$query = $this->db
						->select("*")
						->from("tbl_distributor")
						->get();
		return $query->num_rows();
	}

}

 ?>
