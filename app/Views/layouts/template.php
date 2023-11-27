<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="<?= base_url(); ?>/icon/Kediri.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $tittle; ?></title>

    <!-- CSS FILES -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body>
    <!-- navbar dan sidebar -->
    <?= $this->include('layouts/navbarsidebar'); ?>

    <!-- section isinya disini -->
    <?= $this->renderSection('content'); ?>
    <!-- section isinya disini -->

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="bahan/images/logo-kdr.png" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Our Friends</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Pemkab Kediri</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">BAPPEDA Jatim</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Kominfo Kab. Kediri</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">DPMPTSP Kab. Kediri</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Dinkes Kab. Kediri</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: (0354) 689995" class="site-footer-link">
                            (0354) 689995
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:bappeda@kedirikab.go.id" class="site-footer-link">
                            bappeda@kedirikab.go.id
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        Jalan Soekarno-Hatta Nomor 1 Kediri
                    </p>

                    <a href="https://www.google.com/maps/dir//-7.8095878,112.0427931/@-7.8094402,112.0426782,19.97z/data=!4m2!4m1!3e2?entry=ttu" target="_blank" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © <?php echo date('Y'); ?> <a href="#">Bappeda Kabupaten Kediri</a></p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALcj9sgW4DClNXnTDHvBzPxSImtJQixTM" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>
    <script src="<?= base_url(); ?>assets/js/click-scroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/counter.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
    <script src="<?= base_url(); ?>assets/js/map_track.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
    <?= $this->renderSection('javascriptkhusus'); ?>
</body>

</html>