<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="news-detail-header-section text-center">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h1 class="text-white"><?= $detaildata[0]['judul']; ?></h1>
            </div>

        </div>
    </div>
</section>
<div class="news-block-info">
    <div class="news-block-body">
        <br>
        <p style="text-align: justify; margin: 0 8% 0 8%; font-size:21px;"><?= $detaildata[0]['teks']; ?></p><br><br>
    </div>
</div>

<?= $this->endSection(); ?>