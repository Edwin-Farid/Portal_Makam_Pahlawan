<img src="<?= base_url() ?>assets/dashboard/assets/img/hero_mp1.jpg" height="350px" class="d-block w-100" alt="...">

<main id="main">
    <section class="preview">
        <div class="container">
            <div class="section-title">
                <h2>Media Pendukung</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="card d-flex align-items-center border-0">
                        <img class="img-fluid mb-3" style="width:250px;height:200px;" src="<?= base_url() ?>assets/dashboard/assets/img/Wonderfull_Indonesia_Logo.png" alt="Icon" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="card d-flex align-items-center border-0">
                        <img class="img-fluid mb-3" style="width:180px;height:200px;" src="<?= base_url() ?>assets/dashboard/assets/img/NTB_Logo.png" alt="Icon" />

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="card d-flex align-items-center border-0">
                        <img class="img-fluid mb-3" style="width:200px;height:200px;" src="<?= base_url() ?>assets/dashboard/assets/img/Logo_NW.png" alt="Icon" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="card d-flex align-items-center border-0">
                        <img class="img-fluid mb-3" style="width:220px;height:200px;" src="<?= base_url() ?>assets/dashboard/assets/img/Unham_Logo.png" alt="Icon" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="preview" class="preview">
        <div class="container">
            <div class="section-title">
                <h2>Tampilan 360°</h2>
            </div>

            <iframe width="100%" height="100%" src="https://momento360.com/e/u/65b2b7d0d23a47eea7e9440f33101389?utm_campaign=embed&utm_source=other&heading=-7.1&pitch=11.04&field-of-view=75&size=medium" frameborder="0"></iframe>
        </div>
    </section>

    <?php $this->load->view('dashboard/page/lokasi'); ?>
</main>