<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		$queryAllMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
		$DATA = array('queryAllMhs' => $queryAllMahasiswa);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah_mhs');
	}

	public function halaman_edit($id)
	{
		$queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($id);
		$DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('halaman_edit_mhs', $DATA);
	}

	public function fungsiTambah()
	{
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jurusan = $this->input->post('jurusan');
		$angkatan = $this->input->post('angkatan');
		$tanggal = $this->input->post('tanggal');
		$foto =$_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'jpg|png|gif';
		
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			echo "upload gagal"; die();
		}else{
			$foto=$this->upload->data('file_name');
		}
	}
		


		$ArrInsert = array(
			'id' => $id,
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'jurusan' => $jurusan,
			'angkatan' => $angkatan,
			'tanggal' => $tanggal,
			'foto' => $foto
		);

		$this->M_Mahasiswa->insertDataMahasiswa($ArrInsert);
		if ($result) {
            $this->session->set_flashdata('pesan', 'Status berhasil di ubah, success');
        } else {
            $this->session->set_flashdata('pesan', 'Status gagal di ubah, error');
        }

        redirect('home');
    }

	

	public function fungsiEdit()
	{
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jurusan = $this->input->post('jurusan');
		$angkatan = $this->input->post('angkatan');
		$tanggal = $this->input->post('tanggal');
		$foto =$_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
		
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			echo "upload gagal"; die();
		}else{
			$foto=$this->upload->data('file_name');
		}
	}

		$ArrUpdate = array(
			'id' => $id,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'jurusan' => $jurusan,
			'angkatan' => $angkatan,
			'tanggal' => $tanggal,
			'foto' => $foto
		);

		$this->M_Mahasiswa->updateDataMahasiswa($id, $ArrUpdate);
		 if ($result) {
            $this->session->set_flashdata('pesan', 'Status berhasil di ubah, success');
        } else {
            $this->session->set_flashdata('pesan', 'Status gagal di ubah, error');
        }

        redirect('home');
    }


	public function fungsiDelete($id)
	{
		

	if ($this->M_Mahasiswa->deleteDataMahasiswa($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil di hapus, success');
        } else {
            $this->session->set_flashdata('pesan', 'Data gagal di hapus, error');
        }
        redirect('home');
    }
}
