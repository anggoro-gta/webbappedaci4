<?php include "x_edit.php" ?>

<body>

    <form action="proses_add_dok_rpd.php" method='POST' enctype="multipart/form-data">
        <div class="container">
            <h2>Tambah Data Dok. RPD</h2><br>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Upload File</label>
                <div class="col-8">
                    <div class="input-group">                        
                        <input id="upload" name="upload" type="file" >
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