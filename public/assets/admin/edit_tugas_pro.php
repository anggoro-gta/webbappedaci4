,<?php 
	include 'connect.php';

	if(isset($_POST['submit'])) {
	$id = $_POST['id'];
	$t = $_POST['teks'];
	$j = $_POST['judul'];

		$query = mysqli_query($koneksi_server, "UPDATE `tugas_fungsi` SET id = '$id' ,  `judul` = '$j' ,`teks` = '$t'  where `id` = '".$id."'");
		if($query){
			header('Location:tgs_pokok_fungsi.php');
		} else die('proses gagal!' . mysqli_error($koneksi_server));
			
	} else{
		header('Location:tgs_pokok_fungsi.php');
			
	}	
?>