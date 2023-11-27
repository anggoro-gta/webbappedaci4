<?php 
include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi_server, "DELETE FROM gbr_gerak WHERE id = '".$id."'");
if($query){
	
	 header('Location: edit_slider.php');
} else die("gagal!" . mysqli_error($koneksi_server));

?>