<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM berita WHERE id_berita ='".$id."'");
if($query) {

    header('Location: edit_berita.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>