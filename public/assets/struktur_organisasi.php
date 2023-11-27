<?php include "connect.php" ?>
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
    <section class="news-section section-padding" id="section_5">
        <div class="container">
            <div class="row">
                <div class="news-block-top">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2 style="text-align: center;">Struktur Organisasi Bappeda</h2>
                    </div>
                    <!-- <a href="news-detail.html"> -->
                    <?php
                    $query = mysqli_query($koneksi_server, "SELECT * FROM gbr_new where id=4");
                    while ($content = mysqli_fetch_assoc($query)) : ?>
                        <center>
                            <img src="<?php echo $content['lokasi'] ?>" class="news-image img-fluid" alt="">
                        </center>
                    <?php endwhile; ?>
                </div><br>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
</body>

</html>