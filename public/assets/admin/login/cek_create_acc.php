<?php 
	require_once '../../connect.php';

	$username = $_POST['username'];
	$password = $_POST['pass'];

	
	$cek_username = mysqli_query($koneksi_server, "SELECT * FROM user WHERE user = '".$username."'");
	if($cek_username->num_rows == 0){
		$query = mysqli_query($koneksi_server, "INSERT INTO `user` (`id`, `user`, `pass`, `level`) VALUES ('', '$username', '$password ', '1')");
		if($query == TRUE){
			header('location:../login.php');

		} else{
			header('location:../popup/buat_akun_gagal.php');
			
		}	
	} else {	
		header('location:../popup/buat_akun_gagal.php');
	}
?>