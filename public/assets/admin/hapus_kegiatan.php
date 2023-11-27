<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM kegiatan_unggulan WHERE id ='".$id."'");
if($query) {

    header('Location: edit_kegiatan.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>