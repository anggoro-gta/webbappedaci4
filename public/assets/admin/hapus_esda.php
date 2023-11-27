<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM bidang_esda WHERE id ='".$id."'");
if($query) {

    header('Location: edit_esda.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>