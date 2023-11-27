<?php include "x_edit.php" ?>

<body>

    <form action="add_berita_pro.php" method='POST'>
        <div class="container">
            <h2>Masukan Data Berita</h2><br>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Judul</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-code"></i>
                            </div>
                        </div>
                        <input id="j" name="judul" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-4 col-form-label">Isi</label>
                <div class="col-8">
                    <div class="input-group">                        
                        <textarea id="editor" name="isi" type="text" class="form-control"></textarea>
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
                        <input id="tgl" name="tanggal" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-4 col-form-label">Gambar</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-tag"></i>
                            </div>
                        </div>
                        <input id="g" name="gambar" type="file" class="form-control">
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
                        <input id="ket" name="ket" type="text" class="form-control">
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
</body>

</html>