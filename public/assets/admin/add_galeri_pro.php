<?php
require_once 'connect.php';



if (isset($_POST['submit'])) {
    $ket = $_POST['ket'];
    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];
    $dirUpload = "../bahan/galeri/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    $tgl = date('Y-m-d');

    $query = mysqli_query($koneksi_server, "INSERT INTO `galeri` (`id`, `gambar`, `lokasi`, `ket`, `tanggal`) VALUES ('', '$namaFile', 'bahan/galeri/$namaFile', '$ket', '$tgl')");
    if ($query) {
        header('location:galeri_bappeda.php');
    } else die('gagal menambahkan!');
} else {
    header('location:galeri_bappeda.php');
}
