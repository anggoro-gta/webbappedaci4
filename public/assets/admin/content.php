<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img width="100%" src="../bahan/images/peta-kab-kediri26.jpg" class="custom-text-box-image img-fluid" alt="peta-kediri">
                </div>

                <div class="col-lg-6 col-12">
                    <?php
                    $query = mysqli_query($koneksi_server, "SELECT * FROM isi_content where id=1");
                    while ($content = mysqli_fetch_assoc($query)) : ?>
                        <div class="custom-text-box">
                            <h2 class="mb-2"><?php echo $content['judul'] ?></h2>
                            <p class="mb-0" style="text-align: justify; font-size:16px;"><?php echo substr($content['teks'], 0, 685) ?></p>
                            <a href="kab_kediri.php" type="button" class="btn btn-outline-danger btn-sm">Read More</a>
                        </div>
                    <?php endwhile; ?>
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
                <a href="edit_berita.php" type="button" class="btn btn-danger btn-sm">Edit Berita</a>
                <br><br>
                <?php

                $batas = 2;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;

                $query = mysqli_query($koneksi_server, "select * from berita ");
                $jumlah_data = mysqli_num_rows($query);
                $total_halaman = ceil($jumlah_data / $batas);

                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $data = mysqli_query($koneksi_server, "select * from berita where judul like '%" . $cari . "%' limit $halaman_awal, $batas");
                } else {
                    $data = mysqli_query($koneksi_server, "select * from berita limit $halaman_awal, $batas");
                }
                $nomor = $halaman_awal + 1;
                while ($content = mysqli_fetch_array($data)) {                
                ?>
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="news-detail.html">
                                <img width="100%" src="../bahan/<?php echo $content['lokasi'] ?>" class="news-image img-fluid" alt="">
                            </a>

                            <div class="news-category-block">
                                <a href="#" class="category-block-link">
                                    <?php echo $content['ket'] ?>
                                </a>
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        <?php echo $content['tanggal'] ?>
                                    </p>
                                </div>

                                <div class="news-block-author mx-5">
                                    <p>
                                        <i class="bi-person custom-icon me-1"></i>
                                        By <?php echo $content['pengirim'] ?>
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
                                <h4><a href="detail_berita.php?id_berita=<?= $content['id_berita'] ?>" class="news-block-title-link"><?php echo $content['judul'] ?></a></h4>
                            </div>

                            <div class="news-block-body">
                                <p style="text-align: justify;"><?php echo substr($content['isi'], 0, 300) ?></p>
                            </div><br>
                        </div>
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

            <div class="col-lg-4 col-12 mx-auto">

                <!-- Search -->
                <form action="index.php" method="get">
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" value="cari" class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>

                <!-- End Search -->

                <!--Google map-->
                <br>
                <h4> I'm Here!! </h4>
                <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Soekarno%20Hatta%20No%201%20kediri+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div><br />
                <!-- end Google Maps-->


                <form class="custom-form contact-form" action="proses_message.php" method="post" role="form">
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