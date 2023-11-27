<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM informasi-pdf WHERE id ='".$id."'");
if($query) {

    header('Location: data_perkem_inflasi.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>