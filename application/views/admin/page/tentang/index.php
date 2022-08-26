<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Tentang</h1>
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
            <h5 class="card-title">Tentang</h5>
            <?php foreach ($tentang as $row) { ?>
              <form method="POST" action="<?= base_url() ?>Tentang/add_form">
                <input type="hidden" name="id" value="<?= $row['id']; ?>" id="">
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Tentang</label>
                  <div class="col-sm-10">
                    <textarea name="tentang" id="editor"><?= $row['tentang']; ?></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $this->load->view('admin/template/foot') ?>
<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>