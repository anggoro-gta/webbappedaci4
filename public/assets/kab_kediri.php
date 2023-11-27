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

    <?php
    $query = mysqli_query($koneksi_server, "SELECT * FROM isi_content where id=1");
    while ($content = mysqli_fetch_assoc($query)) : ?>
        <section class="news-detail-header-section text-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h1 class="text-white"><?php echo $content['judul'] ?></h1>
                    </div>

                </div>
            </div>
        </section>
        <div class="news-block-info" >
            <div class="news-block-body">
                <br><p style="text-align: justify; margin: 0 8% 0 8%; font-size:21px;"><?php echo $content['teks'] ?></p><br><br>
            </div>
        </div>
    <?php endwhile; ?>
    <?php include "footer.php" ?>

</body>

</html>