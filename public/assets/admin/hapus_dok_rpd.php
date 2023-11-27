<?php 
include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM upload_new WHERE id = '".$id."'");
if($query){
	
	 header('Location: dok_rpd.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>