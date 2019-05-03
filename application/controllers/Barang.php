<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->model('merk_model');
		$this->load->model('distributor_model');
		if($this->session->userdata('is_logged') == FALSE)
			redirect('auth');
		$this->session->set_flashdata(array('active' => "barang"));
	}

	public function index()
	{
		$data = array(
			'page_title' => 'POS - distributors',
			'barangs'      => $this->barang_model->get_query()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/barang/index');
		$this->load->view('primary/footer');
	}

	public function show($id)
	{
		
	}

	public function add()
	{
		$data = array(
			'page_title' => 'POS - Add Barang',
			'auto_code'  => $this->barang_model->auto_code(),
			'merks'      => $this->merk_model->get_all(),
			'distributors' => $this->distributor_model->get_all()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/barang/_input');
		$this->load->view('primary/footer');	
	}


	public function store()
	{
		$nmfile = $this->input->post('gambar')."_".time();
		$config['upload_path']   = './upload/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['file_name']     = $nmfile;
		$this->load->library('upload', $config);
		
		if($_FILES['gambar']['name']){
			if($this->upload->do_upload('gambar')){
				$gbr  = $this->upload->data();
				$foto = $gbr['file_name'];
				$check = $this->barang_model->insert_entry($foto);
				if ($check)
					redirect('barang');
				else
					echo "Error while storing data";
			}else{
				echo "gagal upload";
			}
		}else{
			echo "<script>alert('Gagal Upload foto');document.location.href='../siswa'</script>";
		}
		// 	//memasukan buku ke database
		// 	$book = $this->user_model->inTable('book', $field_book);
		// 	if ($book){
		// 		// mengecek buku terakhir yang telah dibuat
		// 		$id = $this->user_model->getCreateBookRecent()->row_array();
		// 		redirect('perpoos/write_chapter/'.$id['id_book']);
		// 	}
		// 	else
		// 		redirect('perpoos/writebox');

		// $check = $this->barang_model->insert_entry();
		// if ($check)
		// 	redirect('barang');
		// else
		// 	echo "Error while storing data";
	}

	public function edit($kd_barang)
	{
		$data = array(
			'page_title' => 'POS - Edit Barang',
			'barang'     => $this->barang_model->edit_entry($kd_barang),
			'merks'      => $this->merk_model->get_all(),
			'distributors' => $this->distributor_model->get_all()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('admin/barang/_edit');
		$this->load->view('primary/footer');
	}

	public function update()
	{
		$check = $this->barang_model->update_entry();
		if ($check)
			redirect('barang');
		else
			echo "Error while updating data";
	}

	function get_data($kd_barang) {
		$db = $this->barang_model->edit_entry($kd_barang);
		echo json_encode($db) ;
	}

	function report()
	{
		$data = array(
			'page_title' => 'POS - distributors',
			'barangs'      => $this->barang_model->get_query()
		);
		$this->load->view('primary/header', $data);
		$this->load->view('report/barang');
		$this->load->view('primary/footer');
	}

}

?>
