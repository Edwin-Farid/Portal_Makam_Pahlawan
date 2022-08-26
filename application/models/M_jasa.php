<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jasa extends CI_Model
{
	public function tampil_jasa()
	{
		return $this->db->get('jasa')->result_array();
	}

	public function add_form_jasa()
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"deskripsi" => $this->input->post('deskripsi', true),
		];

		$this->db->insert('jasa', $data);
	}

	public function delete_form_jasa($id)
	{
		$this->db->delete('jasa', array('id' => $id));
	}

	public function get_form_jasa($id)
	{
		return $this->db->get_where('jasa', ['id' => $id])->row_array();
	}

	public function edit_form_jasa($id)
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"deskripsi" => $this->input->post('deskripsi', true),
		];
		$this->db->where('id', $id);
		$this->db->update('jasa', $data);
	}
}
