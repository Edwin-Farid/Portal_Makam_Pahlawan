<section id="galeri" class="why-us section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Galeri</h2>
        </div>

        <div class="row">
            <?php foreach ($galeri as $row) : ?>
                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="card d-flex align-items-center border-0 bg-transparent shadow-none">
                        <a href="<?= base_url() ?>Dashboard/detail/<?= $row['id']; ?>"><img class="img-fluid mb-3" style="width:250px;height:280px;" src="<?= base_url() ?>upload/galeri/<?= $row['gambar']; ?>" alt="<?= $row['gambar']; ?>" /></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>