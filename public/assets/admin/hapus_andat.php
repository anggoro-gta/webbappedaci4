<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM analisis_data WHERE id ='".$id."'");
if($query) {

    header('Location: analisis_data.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>