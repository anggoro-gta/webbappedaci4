<?php session_start();

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
        <main>
            <section class="news-section section-padding">
                <div class="container">
                    <div class="col-lg-12 col-12 mb-5">
                        <h2 style="text-align: center;">DOKUMEN RANCANGAN PEMBANGUNAN DAERAH</h2>
                    </div>
                    <div class="row">
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi_server, "SELECT * FROM isi_content where id=2");
                        while ($dokrpd = mysqli_fetch_assoc($query)) :
                        ?>
                            <?php echo $dokrpd['teks'] ?><br><br>
                        <?php endwhile; ?>
                        <div>
                            <a href="add_dok_rpd.php" type="button" class="btn btn-danger btn-sm">Add File</a><br><br>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col">Tanggal Upload</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi_server, "SELECT * FROM upload_new");
                                while ($dokrpd = mysqli_fetch_assoc($query)) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $dokrpd['namafile'] ?></td>
                                        <td><?php echo $dokrpd['tgl_upload'] ?></td>
                                        <td>
                                            <a href="hapus_dok_rpd.php?id=<?php echo $dokrpd['id'] ?>"> Hapus </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>

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