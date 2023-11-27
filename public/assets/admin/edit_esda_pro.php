<?php 
	include 'connect.php';

	if(isset($_POST['submit'])) {
	$id = $_POST['id'];
	$t = $_POST['teks'];
	$j = $_POST['judul'];

		$query = mysqli_query($koneksi_server, "UPDATE `bidang_esda` SET id = '$id' , `teks` = '$t' , `judul` = '$j'  where `id` = '".$id."'");
		if($query){
			header('Location:esda.php');
		} else die('proses gagal!' . mysqli_error($koneksi_server));
			
	} else{
		header('Location:esda.php');
			
	}	
?>