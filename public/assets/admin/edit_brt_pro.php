<?php 
	include 'connect.php';
	
	$namaFile = $_FILES['gambar']['name'];
	$namaSementara = $_FILES['gambar']['tmp_name'];
	$dirUpload = "../bahan/images/";
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		

	if(isset($_POST['submit'])) {
	$id = $_POST['id_berita'];
	$j = $_POST['judul'];
	$i = $_POST['isi'];
	$tgl = $_POST['tanggal'];
	$ket = $_POST['ket'];

		$query = mysqli_query($koneksi_server, "UPDATE `berita` SET id_berita = '$id' , `judul` = '$j' , `isi` = '$i' , `tanggal` = '$tgl' , `gambar` = '$namaFile' , `lokasi` = 'images/$namaFile' , `ket` = '$ket' where `id_berita` = '".$id."'");
		if($query){
			header('Location:edit_berita.php');
		} else die('proses gagal!' . mysqli_error($koneksi_server));
			
	} else{
		header('Location:edit_berita.php');
			
	}	
?>