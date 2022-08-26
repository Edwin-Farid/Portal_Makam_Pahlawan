<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Admin"));
		}
		$this->load->model('M_tentang');
	}

	public function index()
	{
		$data['tentang'] = $this->M_tentang->tampil_tentang();
		$this->load->view('admin/page/tentang/index', $data);
	}

	public function add_form()
	{
		$id = $this->input->post('id');

		$this->form_validation->set_rules('tentang', 'Tentang', 'required');

		if ($this->form_validation->run() == false) {
			redirect('Tentang');
		} else {
			$this->M_tentang->add_form_tentang($id);
			$this->session->set_flashdata('success', 'Simpan Success!!');
			redirect('Tentang');
		}
	}
}
