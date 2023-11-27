<?php include "x_edit.php" ?>


<body>
    <form action="add_andat_pro.php" method='POST'>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>