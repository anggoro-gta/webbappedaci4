<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="news-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 mb-5">
                <h2 style="text-align: center;">Perkembangan Tingkat Inflasi</h2>
            </div>
            <div class="news-block">
                <embed src="<?= base_url(); ?>assets/bahan/<?= $datainflasi[0]['lokasi']; ?>" width=100% height=800></embed>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>