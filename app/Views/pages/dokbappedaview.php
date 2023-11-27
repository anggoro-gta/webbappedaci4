<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="news-section section-padding">
    <div class="container">
        <div class="col-lg-12 col-12 mb-5">
            <h2 style="text-align: center;">DOKUMEN RANCANGAN PEMBANGUNAN DAERAH</h2>
        </div>
        <div class="row">
            <?= $datacontent[0]['teks']; ?><br><br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama File</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $hitungdatadokumen; $i++) { ?>
                        <tr>
                            <td><?= $i + 1; ?></td>
                            <td><?= $datadokumen[$i]['namafile']; ?></td>
                            <td><?= $datadokumen[$i]['tgl_upload']; ?></td>
                            <?php if ($datadokumen[$i]['cek_link'] == 0) { ?>
                                <td>
                                    <a target="_blank" href="<?= base_url(); ?>assets/bahan/<?= $datadokumen[$i]['url']; ?>">Download</a>
                                </td>
                            <?php } else { ?>
                                <td>
                                    <a target="_blank" href=" <?= $datadokumen[$i]['url']; ?>">Download</a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</section>
<?= $this->endSection(); ?>