<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_galeri extends CI_Model
{
	public function tampil_galeri()
	{
		return $this->db->get('galeri')->result_array();
	}

	public function add_form_galeri()
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"gambar" => $this->upload->data('file_name')
		];

		$this->db->insert('galeri', $data);
	}

	public function delete_form_galeri($id)
	{
		$this->db->delete('galeri', array('id' => $id));
	}

	public function get_form_galeri($id)
	{
		return $this->db->get_where('galeri', ['id' => $id])->row_array();
	}

	public function edit_form_galeri($id)
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"deskripsi" => $this->input->post('deskripsi', true),
		];
		if (@$_FILES['gambar']['name'] != null) {
			$data['gambar'] = $this->upload->data('file_name');
		}


		$this->db->where('id', $id);
		$this->db->update('galeri', $data);
	}
}
