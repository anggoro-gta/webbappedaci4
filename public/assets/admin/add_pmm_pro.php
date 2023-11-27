<?php 
	require_once 'connect.php';

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $t = $_POST['teks'];
        $j = $_POST['judul'];

		$query = mysqli_query($koneksi_server, "INSERT INTO `bidang_pmm` (`id`, `teks`, `judul`) VALUES ('', '$t', '$j')");
		if($query){
			header('location:pmm.php');
			
		} else die('gagal menambahkan!' . mysqli_query($koneksi_server));
			
	} else {
		header('location:pmm.php');
	}
?>