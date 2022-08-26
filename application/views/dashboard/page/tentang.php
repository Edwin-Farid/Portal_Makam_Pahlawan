<section id="tentang" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?= base_url() ?>assets/dashboard/assets/img/pendiri_nw.jpg" class="img-fluid" alt="Pendiri NW">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <h3>Siapa itu Bapak Maulana Syaikh?</h3>
                <?php foreach ($tentang as $row) : ?>
                    <?= $row['tentang']; ?>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>