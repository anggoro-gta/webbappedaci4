<?php include "x_edit.php" ?>


<body>

    <form action="add_slider_pro.php" method='POST' enctype="multipart/form-data">
        <div class="container">
            <h2>Tambah Slider</h2><br>
            
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Gambar</label>
                <div class="col-8">
                    <div class="input-group">                        
                        <input id="g" name="gambar" type="file" > 
                    </div>
                </div>
            </div>           

            <div class="form-group row">
                <label for="pass" class="col-4 col-form-label">Keterangan</label>
                <div class="col-8">
                    <div class="input-group">
                       
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