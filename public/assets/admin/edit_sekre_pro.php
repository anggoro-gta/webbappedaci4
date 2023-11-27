<?php 
	include 'connect.php';
	
	if(isset($_POST['submit'])) {
	$id = $_POST['id'];
	$j = $_POST['judul'];
	$i = $_POST['isi'];

		$query = mysqli_query($koneksi_server, "UPDATE `sekretariat` SET id = '$id', `judul` = '$j' , `teks` = '$i' where `id` = '".$id."'");
		if($query){
			header('Location:sekretariat.php');
		} else die('proses gagal!' . mysqli_error($koneksi_server));
			
	} else{
		header('Location:sekeretariat.php');
			
	}	
?>