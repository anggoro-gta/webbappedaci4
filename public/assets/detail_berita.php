<?php
if (isset($_GET['id_berita'])) {
    $id_ber    = $_GET['id_berita'];
} else {
    die("Error. No ID Selected!");
}
include "connect.php";
$query    = mysqli_query($koneksi_server, "SELECT * FROM berita WHERE id_berita='$id_ber'");
$content    = mysqli_fetch_array($query);
?>

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
    <section class="about-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-12">
                    <img style="height: 300px; width: 100%;" src="bahan/<?php echo $content['lokasi'] ?>" alt="">
                </div>

                <div class="col-lg-6 col-md-5 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0"><?php echo $content['judul'] ?></h2>
                        <p class="text-muted mb-lg-4 mb-md-4"><?php echo $content['ket'] ?></p>
                    </div>
                </div>
                <p style="text-align: justify; font-size: 16px; color: black;"><?php echo $content['isi'] ?></p>

            </div>
        </div>
    </section>


    <?php include "footer.php" ?>
</body>

</html>