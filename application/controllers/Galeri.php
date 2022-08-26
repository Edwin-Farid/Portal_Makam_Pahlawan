<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_galeri');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{
		$data['galeri'] = $this->M_galeri->tampil_galeri();
		$this->load->view('admin/page/galeri/index', $data);
	}

	public function add_form()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ($this->form_validation->run() == false) {
			redirect('Galeri');
		} else {
			$config['upload_path']  = './upload/galeri/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']     = 2048;
			$this->load->library('upload', $config);

			if (@$_FILES['gambar']['name'] != null) {
				if ($this->upload->do_upload('gambar')) {
					$this->M_galeri->add_form_galeri();
					redirect('galeri');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');
					redirect('Galeri', $error);
				}
			} else {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', 'Input Data Gagal !! Max_Size :2.48 MB Width:2807px Height :3433px');
				redirect('Galeri', $error);
			}
		}
	}

	public function edit_form($id)
	{

		$data['galeri'] = $this->M_galeri->get_form_galeri($id);

		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/page/galeri/edit', $data);
		} else {
			$config['upload_path']  = './upload/galeri/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']     = 2048;
			$this->load->library('upload', $config);

			if (@$_FILES['gambar']['name'] != null) {
				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->M_galeri->get_form_galeri($id);
					if ($gambar['gambar'] != null) {
						$target_file = './upload/galeri/' . $gambar['gambar'];
						unlink($target_file);
					}
					$this->M_galeri->edit_form_galeri($id);
					redirect('Galeri');
				} else {
					$error = $this->upload->display_errors();
					echo $error;
				}
			} else {
				$this->M_galeri->edit_form_galeri($id);
				redirect('Galeri');
			}
		}
	}

	public function delete_form($id)
	{
		$gambar = $this->M_galeri->get_form_galeri($id);
		if ($gambar['gambar'] != null) {
			$target_file = './upload/galeri/' . $gambar['gambar'];
			unlink($target_file);
		}

		$this->M_galeri->delete_form_galeri($id);
		redirect('Galeri');
	}
}
