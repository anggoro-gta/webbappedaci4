<?php include "x_edit.php" ?>


<body>
    <form action="add_sekre_pro.php" method='POST'>
        <div class="container">
            <h2>Add Data </h2><br>
            <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Judul </label>
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
                        <div class="input-group-prepend">

                        </div>
                        <textarea id="editor" name="isi" type="text" class="form-control"></textarea>
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