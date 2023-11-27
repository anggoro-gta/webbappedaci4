<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-4">
                <h2>Galeri </h2><br><br>
            </div>

            <!-- <div class="dropdown" style="align-items: right;">
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Archive
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">2015</a>
                    </div>
                </div> -->

            <br><br><br>
            <?php $hitung = count($data['beritakediriraya']) ?>

            <?php for ($i = 0; $i < $hitung; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block-wrap">
                        <img style="height: 200px;" src="<?= base_url(); ?>assets/bahan/<?= $data['beritakediriraya'][$i]['lokasi']; ?>" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3" style="color: black;"><?= $data['beritakediriraya'][$i]['ket']; ?></h5>
                                <p>Upload : <?= $data['beritakediriraya'][$i]['tgl_formated']; ?></p>
                            </div>
                        </div>
                    </div><br><br><br><br>
                </div>
            <?php } ?>
            <?= $data['pager']->links(); ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>