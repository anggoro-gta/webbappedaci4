<?php
session_start();

if (isset($_SESSION['HAK'])) {
 include "connect.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bappeda Kab. Kediri</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">

</head>


<body>
    <?php include "navbar.php" ?>
    <?php include "slider.php" ?>
    <?php include "content.php" ?>
    <?php include "footer.php" ?>

</body>

</html>

<?php } else {
    header('location:popup/akses_ditolak.php');
}
?>