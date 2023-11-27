<?php
session_start();

if (isset($_SESSION['HAK'])) {
    include "connect.php";
    include "x_edit.php" ?>

    <body>
        <?php
        $id = $_GET['id'];
        $query = mysqli_query($koneksi_server, "SELECT * FROM analisis_data WHERE id = $id");
        while ($andat = mysqli_fetch_assoc($query)) :
        ?>
            <form action="edit_andat_pro.php?id=<?php echo $andat['id'] ?>" method='POST'>
                <div class="container">
                    <h2>Edit Data </h2><br>
                    <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">No</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-circle-o"></i>
                                    </div>
                                </div>
                                <input id="id" name="id" type="text" class="form-control" value="<?php echo $andat['id'] ?>">
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
                                <input id="j" name="judul" type="text" class="form-control" value="<?php echo $andat['judul'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pass" class="col-4 col-form-label">Isi</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea id="editor" name="isi" type="text" class="form-control" value=""><?php echo $andat['teks'] ?></textarea>
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

<?php } else {
    header('location:popup/akses_ditolak.php');
}
?>