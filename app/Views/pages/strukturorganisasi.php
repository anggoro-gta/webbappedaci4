<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="news-section section-padding" id="section_5">
    <div class="container">
        <div class="row">
            <div class="news-block-top">

                <div class="col-lg-12 col-12 mb-5">
                    <h2 style="text-align: center;">Struktur Organisasi Bappeda</h2>
                </div>
                <!-- <a href="news-detail.html"> -->
                <center>
                    <img src="<?= base_url(); ?>assets/<?= $datagbrempat[0]['lokasi']; ?>" class="news-image img-fluid" alt="">
                </center>

            </div><br>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>