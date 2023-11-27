<?php include "x_edit.php" ?>

<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "SELECT * FROM kegiatan_unggulan WHERE id = $id");
while ($siswa = mysqli_fetch_assoc($query)) :
?>
    <form action="edit_kegiatan_pro.php?id=<?php echo $siswa['id'] ?>" method='POST' enctype="multipart/form-data">
        <div class="container">
            <h2>Update</h2><br>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">No</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-circle-o"></i>
                            </div>
                        </div>
                        <input id="id" name="id" type="text" class="form-control" value="<?php echo $siswa['id'] ?>">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="pass" class="col-4 col-form-label">Judul</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-book"></i>
                            </div>
                        </div>
                        <input id="j" name="judul" type="text" class="form-control" value="<?php echo $siswa['judul'] ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Keterangan</label>
                <div class="col-8">
                    <div class="input-group">
                        
                        <textarea id="editor" name="teks" type="text" class="form-control" ><?php echo $siswa['teks'] ?></textarea>
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