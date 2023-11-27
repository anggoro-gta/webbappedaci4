<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col-md-4">
        <!-- <img src="bahan/img/KediriLagi.png" class="custom-text-box-image img-fluid" style="align: center;"> -->
    </div>
    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>VISI, MISI, TUJUAN DAN SASARAN</h2>
                    <div class="mb-0" style="text-align: justify; font-size:18px;">
                        <p>
                            Dokumen Rencana Strategis (Renstra) Bappeda Kabupaten Kediri Tahun 2011 – 2015
                            memuat/berisi Visi, Misi, Tujuan dan Sasaran yang akan dicapai sebagai berikut :
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <?php for ($i = 0; $i < $hitungvisimisi; $i++) { ?>
                        <div class="custom-text-box">
                            <h2 class="mb-2"><?= $visimisi[$i]['judul']; ?></h2>
                            <!-- <h5 class="mb-3">Kind Heart Charity, Non-Profit Organization</h5> -->
                            <p class="mb-0" style="text-align: justify; font-size:16px;"><?= $visimisi[$i]['teks']; ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2"><?= $kegunggulan[0]['judul']; ?></h2>
                        <!-- <h5 class="mb-3">Kind Heart Charity, Non-Profit Organization</h5> -->
                        <p class="mb-0" style="text-align: justify; font-size:16px;"><?= $kegunggulan[0]['teks']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>