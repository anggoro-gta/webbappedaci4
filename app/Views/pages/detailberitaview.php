<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img style="height: 300px; width: 100%;" src="<?= base_url(); ?>assets/bahan/<?= $detailberita[0]['lokasi']; ?>" alt="">
            </div>

            <div class="col-lg-6 col-md-5 col-12">
                <div class="custom-text-block">
                    <h2 class="mb-0"><?= $detailberita[0]['judul']; ?></h2>
                    <p class="text-muted mb-lg-4 mb-md-4"><?= $detailberita[0]['ket']; ?></p>
                </div>
            </div>
            <p style="text-align: justify; font-size: 16px; color: black;"><?= $detailberita[0]['isi']; ?></p>

        </div>
        <a href="/beritakediriraya" type="button" class="btn btn-outline-danger btn-sm">Back</a>
    </div>
</section>
<?= $this->endSection(); ?>