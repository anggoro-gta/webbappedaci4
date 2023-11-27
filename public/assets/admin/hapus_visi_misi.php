<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM visi_misi WHERE id ='".$id."'");
if($query) {

    header('Location: edit_visi_misi.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>