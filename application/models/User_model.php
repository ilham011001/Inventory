<?php 

class User_model extends CI_Model
{
	public $username;
	public $password;
	public $level;
	
	function __construct()
	{
		$this->load->database();
	}

	function get_all() 
	{
		return $this->db->get('tbl_user')->result();
	}

	function insert_entry() 
	{
		$this->username 	= $this->input->post('username');
		$this->password  	= $this->input->post('password');
		$this->level        = $this->input->post('level');

		return $this->db->insert('tbl_user', $this);
	}

	function edit_entry($kd_user)
	{
		$this->db->where('kd_user', $kd_user);
		return $this->db->get('tbl_user')->row_array();
	}

	function update_entry()
	{
		$this->username 	= $this->input->post('username');
		$this->password  	= $this->input->post('password');
		$this->level        = $this->input->post('level');

		return $this->db->update('tbl_user', $this, array('kd_user' => $_POST['kd_user']));
	}

	function delete_entry($kode)
	{
		return $this->db->delete('tbl_user', array('kd_user' => $kode));
	}

	function login()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$row = $this->db->get('tbl_user');
		if ($row->num_rows() > 0) 
			return $row->row_array();
		return FALSE;
	}

	function get_data()
	{

	}

	function num_user() {
		$query = $this->db->select("*")
						->from("tbl_user")
						->get();
		return $query->num_rows();
	}

}

 ?>
