<?php 
include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM galeri WHERE id = '".$id."'");
if($query){
	
	 header('Location: galeri_bappeda.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>