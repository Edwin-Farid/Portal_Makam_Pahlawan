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

    public function galeri()
    {
        $data['galeri'] = $this->M_galeri->tampil_galeri();

        $this->load->view('dashboard/templates/header');
        $this->load->view('dashboard/templates/nav');
        $this->load->view('dashboard/page/galeri', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function tentang()
    {
        $data['tentang'] = $this->M_tentang->tampil_tentang();

        $this->load->view('dashboard/templates/header');
        $this->load->view('dashboard/templates/nav');
        $this->load->view('dashboard/page/tentang', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function jasa()
    {
        $data['jasa'] = $this->M_jasa->tampil_jasa();

        $this->load->view('dashboard/templates/header');
        $this->load->view('dashboard/templates/nav');
        $this->load->view('dashboard/page/jasa', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_galeri->get_form_galeri($id);

        $this->load->view('dashboard/templates/header');
        $this->load->view('dashboard/templates/nav');
        $this->load->view('dashboard/page/galeri_detail', $data);
        $this->load->view('dashboard/templates/footer');
    }
}
