<?php 
	include 'connect.php';
	
	if(isset($_POST['submit'])) {
	$id = $_POST['id'];
	$j = $_POST['judul'];
	$i = $_POST['isi'];

		$query = mysqli_query($koneksi_server, "UPDATE `analisis_data` SET id = '$id', `judul` = '$j' , `teks` = '$i' where `id` = '".$id."'");
		if($query){
			header('Location:analisis_data.php');
		} else die('proses gagal!' . mysqli_error($koneksi_server));
			
	} else{
		header('Location:analisis_data.php');
			
	}	
?>