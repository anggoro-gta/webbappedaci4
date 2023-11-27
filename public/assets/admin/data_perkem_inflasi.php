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

        <title>BAPPEDA Kab. Kediri</title>

        <!-- CSS FILES -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">

    </head>

    <body id="section_1">
        <?php include "navbar.php" ?>
        <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2 style="text-align: center;">Perkembangan Tingkat Inflasi</h2>
                        <center>
                            <a href="edit_data_perkem_inflasi.php" type="button" class="btn btn-danger btn-sm">Edit</a><br><br>
                        </center>
                    </div>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi_server, "SELECT * FROM informasi_pdf where id=3");
                    while ($data = mysqli_fetch_assoc($query)) :
                    ?>
                        <div class="news-block">
                            <embed src="../bahan/upload_pdf/<?php echo $data['nama_file'] ?>" width=100% height=800></embed>
                        </div>
                    <?php endwhile; ?>
                    <!-- </div> -->
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