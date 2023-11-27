<?php include "x_edit.php" ?>


<body>
    <?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi_server, "SELECT * FROM galeri WHERE id = $id");
    while ($siswa = mysqli_fetch_assoc($query)) :
    ?>
        <form action="edit_galeri_pro.php?id=<?php echo $siswa['id'] ?>" method='POST' enctype="multipart/form-data">
            <div class="container">
                <h2>Edit Data Galeri</h2><br>

                <div class="form-group row">
                    <label for="pass" class="col-4 col-form-label">Gambar</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-tag"></i>
                                </div>
                            </div>
                            <input id="g" name="gambar" type="file" class="form-control" value="<?php echo $siswa['gambar'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-4 col-form-label">Keterangan</label>
                    <div class="col-8">
                        <div class="input-group">
                            
                            <textarea id="editor" name="ket" type="text" class="form-control" value="<?php echo $siswa['ket'] ?>">
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