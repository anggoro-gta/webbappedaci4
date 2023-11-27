<?php 
	require_once 'connect.php';

	$fn = $_POST['first-name'];
	$email = $_POST['email'];
	$hp = $_POST['no_hp'];
	$message = $_POST['message'];
	$tgl = date('Y-m-d');
	 

	mysqli_query($koneksi_server, "SELECT * FROM ungkapan_netizen WHERE nama_pengirim = '".$fn."'");
	
		$query = mysqli_query($koneksi_server, "INSERT INTO `ungkapan_netizen` (`id_ukpnet`, `nama_pengirim`, `alamat_email`, `no_hp`, `tanggal_dikirim`, `opinion`) VALUES ('', '$fn', '$email ', '$hp','$tgl', '$message')");
		if($query == TRUE){
			header('location:http://localhost/Bappeda/index.php');
			
		}
?>