<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < $countgbrgerak; $i++) { ?>
                            <div class="carousel-item active">
                                <img src="<?= base_url(); ?>assets/<?= $gbrgerak[$i]['lokasi']; ?>" class="carousel-image img-fluid" alt="...">
                            </div>
                        <?php } ?>
                        <div class="carousel-caption d-flex flex-column justify-content-end">
                            <h1>Bappeda</h1>
                            <p>Kabupaten Kediri</p>
                        </div>
                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img width="100%" src="<?= base_url(); ?>assets/bahan/images/peta-kab-kediri26.jpg" class="custom-text-box-image img-fluid" alt="peta-kediri">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2"><?= $firstcontent[0]['judul']; ?></h2>
                        <p class="mb-0" style="text-align: justify; font-size:16px;"><?= substr($firstcontent[0]['teks'], 0, 685); ?></p>
                        <a href="/detailkabkdr" type="button" class="btn btn-outline-danger btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="news-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 mb-5">
                <h2>Latest News</h2>
            </div>


            <div class="col-lg-7 col-12">
                <?php for ($i = 0; $i < $countberitalatest; $i++) { ?>
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="news-detail.html">
                                <img width="100%" src="<?= base_url(); ?>assets/bahan/<?= $beritalatest[$i]['lokasi']; ?>" class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    <?= $beritalatest[$i]['ket']; ?>
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        <?= $beritalatest[$i]['tgl_formated']; ?>
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By <?= $beritalatest[$i]['pengirim']; ?>
                                    </p>
                                </div>

                                <div class="news-block-comment">
                                    <p>
                                        <i class="bi-chat-left custom-icon me-1"></i>
                                        Comments
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="/detailberita/<?= $beritalatest[$i]['id_berita']; ?>" class="news-block-title-link"><?= $beritalatest[$i]['judul']; ?></a></h4>
                            </div>

                            <div class="news-block-body">
                                <p style="text-align: justify;"><?= substr($beritalatest[$i]['isi'], 0, 300); ?></p>
                            </div><br>
                        </div>
                    </div>
                <?php } ?>
                <a href="/beritakediriraya" type="button" class="btn btn-outline-danger btn-sm">More Articles</a>
            </div>

            <div class="col-lg-4 col-12 mx-auto">

                <!-- Search -->
                <!-- <form action="index.php" method="get">
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" value="cari" class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form> -->
                <!-- End Search -->

                <!--Google map-->
                <br>
                <h4> I'm Here!! </h4>
                <!-- <div style="width: 100%"><iframe id="map_google" width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br /> -->
                <div id="map_google" style="height: 300px;" class="img-responsive img-bordered"></div>
                <!-- end Google Maps-->

                <form class="custom-form contact-form" action="/contactnetizen" method="post" role="form" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <h2 style="color: 510700;">Contact form</h2>

                    <p style="color: white;" class="mb-4">Or, you can just send an email:
                        <a style="color: white;" href="mailto:bappeda@kedirikab.go.id">bappeda@kedirikab.go.id</a>
                    </p>
                    <input type="text" name="first-name" id="first-name" class="form-control" placeholder="First name" required>

                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="email" required>

                    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="no hp" required>

                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                    <button style="background: #510700;" name="submit" type="submit" class="form-control">Send Message</button>
                </form>

            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('javascriptkhusus'); ?>
<?php if (session()->getFlashdata('pesan') == 'successnetizen') : ?>
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "Terima kasih atas kritik, saran dan pertanyaannya...",
            icon: "success"
        });
    </script>
<?php endif; ?>
<?= $this->endSection(); ?>