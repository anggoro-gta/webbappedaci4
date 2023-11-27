<?php
include("connect.php");

$namaFile = $_FILES['upload']['name'];
$namaSementara = $_FILES['upload']['tmp_name'];
$tgl = date('Y-m-d');


$dirUpload = "../bahan/files/";
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

mysqli_query($koneksi_server, "SELECT * FROM upload_new");

$query = mysqli_query($koneksi_server, "INSERT INTO `upload_new` (`id`, `namafile`, `url`, `tgl_upload`, `cek_link`)
 VALUES ('', '$namaFile', 'files/$namaFile', '$tgl', '0')");


if($query){
	header('Location:dok_rpd.php');
} else die('proses gagal!' . mysqli_error($koneksi_server));
	
?>
