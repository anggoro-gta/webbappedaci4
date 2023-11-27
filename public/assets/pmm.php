<?php include "connect.php" ?>

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
    <div class="container">
        <div class="col-md-4">
            <!-- <img src="bahan/img/KediriLagi.png" class="custom-text-box-image img-fluid" alt=""> -->
        </div>
        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>BIDANG I PEMBANGUNAN MANUSIA DAN MASYARAKAT</h2>
                    </div>
                    <!-- <div class="col-lg-6 col-12"> -->
                        <?php
                        $query = mysqli_query($koneksi_server, "SELECT * FROM bidang_pmm");
                        while ($content = mysqli_fetch_assoc($query)) : ?>
                            <div class="custom-text-box">
                                <h2 class="mb-2"><?php echo $content['judul'] ?></h2>
                                <!-- <h5 class="mb-3">Kind Heart Charity, Non-Profit Organization</h5> -->
                                <p class="mb-0" style="text-align: justify; font-size:16px;"><?php echo $content['teks'] ?></p>
                            </div>
                        <?php endwhile; ?>
                    <!-- </div> -->
                </div>
            </div>
        </section>
    </div>
    <?php include "footer.php" ?>

</body>
</html>