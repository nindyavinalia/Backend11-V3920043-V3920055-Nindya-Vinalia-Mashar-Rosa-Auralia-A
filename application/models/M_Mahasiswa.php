<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {

	function getDataMahasiswa() {
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}

	function insertDataMahasiswa($data) {
		$this->db->insert('tb_mahasiswa', $data);
	}

	function getDataMahasiswaDetail($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tb_mahasiswa');
		return $query->row();
	}

	function updateDataMahasiswa($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('tb_mahasiswa', $data);
	}

	function deleteDataMahasiswa($id) {
		$this->db->where('id', $id);
		$this->db->delete('tb_mahasiswa');
	}

}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */