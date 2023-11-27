<?php
session_start();

if (isset($_SESSION['HAK'])) {
    include "connect.php" ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bappeda Kab. Kediri</title>

        <!-- CSS FILES -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">

    </head>

    <body id="section_1">
        <?php include "navbar.php" ?>
        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Galeri Bappeda </h2><br>
                    </div>

                    <div class="edit" style="align-items: right;">
                        <a href="add_galeri.php" type="button" class="btn btn-danger btn-sm">Add Galeri</a><br><br>
                    </div>

                    <?php
                    $batas = 6;
                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $data = mysqli_query($koneksi_server, "select * from galeri");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);

                    $data_pegawai = mysqli_query($koneksi_server, "select * from galeri limit $halaman_awal, $batas");
                    $nomor = $halaman_awal + 1;
                    while ($content = mysqli_fetch_array($data_pegawai)) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img style="height: 200px;" src="../<?php echo $content['lokasi'] ?>" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3" style="color: black;"><?php echo $content['ket'] ?></h5>
                                        <p>Upload : <?php echo $content['tanggal'] ?></p>
                                    </div>
                                    <a href="edit_galeri.php?id=<?= $content['id'] ?>" class="custom-btn btn">Edit
                                        <a href="hapus_galeri.php?id=<?= $content['id'] ?>" class="custom-btn btn">Hapus</a></a>

                                </div>
                            </div><br><br><br><br>
                        </div>
                    <?php
                    }
                    ?>

                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" <?php if ($halaman > 1) {
                                                            echo "href='?halaman=$previous'";
                                                        } ?>>Previous</a>
                            </li>
                            <?php
                            for ($x = 1; $x <= $total_halaman; $x++) {
                            ?>
                                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                            <?php
                            }
                            ?>
                            <li class="page-item">
                                <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                            echo "href='?halaman=$next'";
                                                        } ?>>Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <?php include "footer.php" ?>
    </body>

    </html>
<?php } else {
    header('location:popup/akses_ditolak.php');
}
?>