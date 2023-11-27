<?php 
	require_once 'connect.php';

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $t = $_POST['teks'];
        $j = $_POST['judul'];

		$query = mysqli_query($koneksi_server, "INSERT INTO `tugas_fungsi` (`id`, `teks`, `judul`) VALUES ('', '$t', '$j')");
		if($query){
			header('location:tgs_pokok_fungsi.php');
			
		} else die('gagal menambahkan!' . mysqli_query($koneksi_server));
			
	} else {
		header('location:tgs_pokok_fungsi.php');
	}
?>