<?php 
	require_once 'connect.php';

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $t = $_POST['teks'];
        $j = $_POST['judul'];

		$query = mysqli_query($koneksi_server, "INSERT INTO `kegiatan_unggulan` (`id`, `teks`, `judul`) VALUES ('', '$t', '$j')");
		if($query){
			header('location:visi_misi.php');
			
		} else die('gagal menambahkan!' );
			
	} else {
		header('location:visi_misi.php');
	}
?>