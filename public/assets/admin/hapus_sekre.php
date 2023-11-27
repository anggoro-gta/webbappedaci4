<?php 

include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM sekretariat WHERE id ='".$id."'");
if($query) {

    header('Location: sekretariat.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>