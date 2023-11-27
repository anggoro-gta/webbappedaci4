<!doctype html>
<html lang="en">

<head>
    <title>Login Bappeda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<style>
    .ftco-section {
        padding: 70px;
    }
</style>

<body>
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Sign Up</h3>
                        <form action="cek_create_acc.php" method='POST' class="login-form">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="pass" class="form-control rounded-left" placeholder="Password" required>
                            </div>
							
                            <div class="form-group">
                                <button type="submit" name="buat" class="form-control btn btn-primary rounded submit px-3">Create</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="login.php">Go back login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>