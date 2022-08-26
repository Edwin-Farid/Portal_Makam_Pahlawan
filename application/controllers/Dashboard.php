<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_tentang');
        $this->load->model('M_galeri');
        $this->load->model('M_jasa');
    }
    public function index()
    {
        // menyimpan data dari model
        $data['tentang'] = $this->M_tentang->tampil_tentang();
        $data['galeri'] = $this->M_galeri->tampil_galeri();
        $data['jasa'] = $this->M_jasa->tampil_jasa();

        $this->load->view('dashboard/templates/header');
        $this->load->view('dashboard/templates/nav');
        $this->load->view('dashboard/page/index', $data);
        $this->load->view('dashboard/templates/footer');
    }
}
