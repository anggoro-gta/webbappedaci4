<?php 
	require_once 'connect.php';

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $j = $_POST['judul'];
        $i = $_POST['isi'];

		$query = mysqli_query($koneksi_server, "INSERT INTO `sekretariat` VALUES ('', '$j', '$i')");
		if($query){
			header('location:sekretariat.php');
			
		} else die('gagal menambahkan!');
			
	} else {
		header('location:sekretariat.php');
	}
?>