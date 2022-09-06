<section id="galeri" class="why-us section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Galeri Detail</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-5 mb-5 mb-md-0 me-0">
                <img src="<?= base_url() ?>upload/galeri/<?= $detail['gambar']; ?>" class="img-fluid mb-3 " style="height:280px;" alt="Pendiri NW">
            </div>
            <div class="col-lg-6 col-md-7">
                <h3><?= $detail['judul']; ?></h3>
                <?= $detail['deskripsi']; ?>
            </div>
        </div>
    </div>
</section>