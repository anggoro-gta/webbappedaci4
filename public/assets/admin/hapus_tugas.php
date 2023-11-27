<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM tugas_fungsi WHERE id ='".$id."'");
if($query) {

    header('Location: edit_tugas.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>