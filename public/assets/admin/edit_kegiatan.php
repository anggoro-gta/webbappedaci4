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
        <link href="css/style.css" rel="stylesheet">
        <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    </head>

    <body>
        <?php include "navbar.php" ?>

        <br><br><br>
        <div class="container-lg">

            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>UPDATE
                                </h2>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Judul</th>
                                <th>Aksi</th>


                            </tr>
                        </thead>
                        <tbody>

                            <a href="add_kegiatan.php" type="button" class="btn btn-danger btn-sm">Add New</a>

                            <?php
                            $query = mysqli_query($koneksi_server, "SELECT * FROM kegiatan_unggulan");
                            while ($siswa = mysqli_fetch_assoc($query)) :
                            ?>
                                <tr>

                                    <td><?php echo $siswa['id'] ?></td>
                                    <td><?php echo substr($siswa['teks'], 0, 100) ?></td>
                                    <td><?php echo $siswa['judul'] ?></td>
                                    <td>
                                        <a href="edit_keg_unggul.php?id=<?php echo $siswa['id'] ?>">Edit |
                                        </a>
                                        <a href="hapus_kegiatan.php?id=<?php echo $siswa['id'] ?>"> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div><br><br><br><br>

        <?php include "footer.php" ?>
    </body>

    </html>

<?php } else {
    header('location:popup/akses_ditolak.php');
}
?>