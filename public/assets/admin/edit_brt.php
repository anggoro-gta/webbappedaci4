<?php include "x_edit.php" ?>

<body>
    <?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi_server, "SELECT * FROM berita WHERE id_berita = $id");
    while ($siswa = mysqli_fetch_assoc($query)) :
    ?>
        <form action="edit_brt_pro.php?id_berita=<?php echo $siswa['id_berita'] ?>" method='POST' enctype="multipart/form-data">
            <div class="container">
                <h2>Edit Data Berita</h2><br>

                <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">No</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-circle-o"></i>
                                </div>
                            </div>
                            <input id="id" name="id_berita" type="text" class="form-control" value="<?php echo $siswa['id_berita'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">Judul </label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-code"></i>
                                </div>
                            </div>
                            <input id="j" name="judul" type="text" class="form-control" value="<?php echo $siswa['judul'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-4 col-form-label">Isi</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea id="editor" name="isi" type="text" class="form-control" value=""><?php echo $siswa['isi'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-4 col-form-label">Tanggal</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-tag"></i>
                                </div>
                            </div>
                            <input id="tgl" name="tanggal" type="text" class="form-control" value="<?php echo $siswa['tanggal'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-4 col-form-label">Gambar</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input id="g" name="gambar" type="file" class="form-control" value=""><?php echo $siswa['gambar'] ?></input>


                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-4 col-form-label">Keterangan</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-tag"></i>
                                </div>
                            </div>
                            <textarea id="editor" name="ket" type="text" class="form-control"><?php echo $siswa['ket'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>

    <?php endwhile; ?>

</body>

</html>