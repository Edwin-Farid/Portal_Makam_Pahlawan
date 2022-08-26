<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <section class="section dashboard">
    <div class="row">
      <div class="col-xxl-12 col-md-4">
        <div class="card info-card sales-card">
          <div class="d-flex align-items-center card-body">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="<?= base_url() ?>assets/dashboard/assets/img/Logo_NW.png" alt="">
            </a>
            <h5 class="card-title">Selamat Datang di Sistem Admin | Makam Pahlawan </h5>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php $this->load->view('admin/template/foot') ?>