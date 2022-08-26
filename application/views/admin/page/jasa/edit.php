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
            <form method="post" action="<?= base_url('jasa/edit_form/');
                                        echo $jasa['id']; ?>" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul" value="<?= $jasa['judul']; ?>" class="form-control" id="judul">
                  <input type="hidden" name="id" class="form-control" value="<?= $jasa['id']; ?>" id="id">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea name="deskripsi" id="editor1"><?= $jasa['deskripsi']; ?></textarea>
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
</main>

<?php $this->load->view('admin/template/foot') ?>
<script>
  tinymce.init({
    selector: 'textarea#editor1',
    menubar: false
  });
</script>