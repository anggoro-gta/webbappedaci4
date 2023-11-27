<?php 
	require_once 'connect.php';

    if(isset($_POST['submit'])) {
        $id = $_POST['id_berita'];
        $j = $_POST['judul'];
        $i = $_POST['isi'];
        $tgl = $_POST['tanggal'];
        $g = $_POST['gambar'];
        $lks = $_POST['lokasi'];
        $ket = $_POST['ket'];

		$query = mysqli_query($koneksi_server, "INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal` , `gambar` , `lokasi` , ket) VALUES ('', '$j', '$i', '$tgl' , '$g' , '$lks' , '$ket')");
		if($query){
			header('location:edit_berita.php');
			
		} else die('gagal menambahkan!' . mysqli_query($koneksi_server));
			
	} else {
		header('location:edit_berita.php');
	}
?>