<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Jasa-Jasa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Form</li>
      </ol>
    </nav>
  </div>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Jasa-Jasa</h5>
            <form method="post" action="<?= base_url('jasa/add_form') ?>" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea name="deskripsi" id="editor1"></textarea>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data jasa-jasa</h5>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($jasa as $row) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td>
                      <a href="<?= base_url() ?>Jasa/edit_form/<?= $row['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url() ?>Jasa/delete_form/<?= $row['id']; ?>"><i class="bi bi-trash-fill"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $this->load->view('admin/template/foot') ?>
<script>
  tinymce.init({
    selector: 'textarea#editor1',
    menubar: false
  });
</script>