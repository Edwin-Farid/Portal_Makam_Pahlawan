<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_jasa');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{
		$data['jasa'] = $this->M_jasa->tampil_jasa();
		$this->load->view('admin/page/jasa/index', $data);
	}

	public function add_form()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() == false) {
			redirect('jasa');
		} else {
			$this->M_jasa->add_form_jasa();
			redirect('jasa');
		}
	}

	public function edit_form($id)
	{

		$data['jasa'] = $this->M_jasa->get_form_jasa($id);

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/page/jasa/edit', $data);
		} else {
			$this->M_jasa->edit_form_jasa($id);
			redirect('jasa');
		}
	}

	public function delete_form($id)
	{
		$this->M_jasa->delete_form_jasa($id);
		redirect('jasa');
	}
}
