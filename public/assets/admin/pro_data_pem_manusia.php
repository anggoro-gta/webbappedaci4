<?php
include("connect.php");

$namaFile = $_FILES['upload']['name'];
$namaSementara = $_FILES['upload']['tmp_name'];



$dirUpload = "../bahan/upload_pdf/";
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

mysqli_query($koneksi_server, "SELECT * FROM informasi_pdf");

$query = mysqli_query($koneksi_server, "INSERT INTO `informasi_pdf` (`id`, `nama_file`, `lokasi`, `ket`)
 VALUES ('4', '$namaFile', 'upload_pdf/$namaFile', '')");

if($query){
	header('Location:edit_data_kependuk.php');
} else die('proses gagal!' . mysqli_error($koneksi_server));
	
	
?>
