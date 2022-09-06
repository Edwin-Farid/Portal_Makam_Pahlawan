<header id="header">
  <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container-fluid">
      <a href="<?= base_url('Dashboard') ?>" class="navbar-brand active">
        <h2 class="m-0">MAKAM PAHLAWAN</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a href="<?= base_url('Dashboard') ?>" class="nav-link ">HOME</a></li>
          <li class="nav-item"><a href="<?= base_url('Dashboard/tentang') ?>" class="nav-link ">TENTANG</a></li>
          <li class="nav-item"><a href="<?= base_url('Dashboard/galeri') ?>" class="nav-link ">GALERI</a></li>
          <li class="nav-item"><a href="<?= base_url('Dashboard/jasa') ?>" class="nav-link ">JASA-JASA</a></li>
          <li class="nav-item"><a href="<?= base_url('Dashboard' . "#lokasi") ?>" class="nav-link ">LOKASI</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>