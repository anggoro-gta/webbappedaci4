<?php 
	include 'connect.php';	
	

	if(isset($_POST['submit'])) {
	$id = $_POST['id'];
    $ket = $_POST['ket'];
    $tgl = date('Y-m-d');
    $namaFile = $_FILES['gambar']['name'];
	$namaSementara = $_FILES['gambar']['tmp_name'];
	$dirUpload = "../bahan/galeri/";
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
	
	
		$query = mysqli_query($koneksi_server, "UPDATE `galeri` SET id = '$id' , `gambar` = '$namaFile' , `lokasi` = 'bahan/galeri/$namaFile' , `ket` = '$ket' , `tanggal` = '$tgl'");
		if($query){
			header('Location:galeri_bappeda.php');
		} else die('proses gagal!' . mysqli_error($koneksi_server));
			
	} else{
		header('Location:galeri_bappeda.php');
			
	}	
?>