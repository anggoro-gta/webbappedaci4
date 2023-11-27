<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM informasi-pdf WHERE id ='".$id."'");
if($query) {

    header('Location: idks_pem_manusia.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>