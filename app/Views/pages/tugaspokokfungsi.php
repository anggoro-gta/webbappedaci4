<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col-md-4">
        <!-- <img src="bahan/images/KediriLagi.png" class="custom-text-box-image img-fluid"> -->
    </div>
    <section class="section-padding" id="section_3">
        <!-- <div class="container"> -->
        <div class="row">
            <div class="col-lg-12 col-12 text-center mb-4">
                <h2>TUGAS POKOK DAN FUNGSI</h2>
            </div>
        </div>
        <!-- <div class="col-lg-6 col-12"> -->
        <?php for ($i = 0; $i < $hitungtgsfungsi; $i++) { ?>
            <div class="custom-text-box">
                <h2 class="mb-2"><?= $datatgsfungsi[$i]['judul']; ?></h2>
                <!-- <h5 class="mb-3">Kind Heart Charity, Non-Profit Organization</h5> -->
                <p class="mb-0" style="text-align: justify; font-size:16px;"><?= $datatgsfungsi[$i]['teks']; ?></p>
            </div>
        <?php } ?>
        <!-- </div> -->
        <!-- </div> -->
    </section>
</div>
<?= $this->endSection(); ?>