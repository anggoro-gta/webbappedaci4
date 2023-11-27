<main>
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $query = mysqli_query($koneksi_server, "SELECT * FROM gbr_gerak");
                            while ($slide = mysqli_fetch_assoc($query)) : ?>

                                <div class="carousel-item active">
                                    <img src=../<?php echo $slide['lokasi'] ?> class="carousel-image img-fluid" alt="...">
                                </div>

                            <?php endwhile; ?>
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
                        <div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section><br>
    <a href="edit_slider.php" type="button" class="btn btn-danger btn-sm">Edit Slider</a>
