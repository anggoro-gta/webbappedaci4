<?php
require_once 'connect.php';



if (isset($_POST['submit'])) {
    $ket = $_POST['ket'];
    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];
    $dirUpload = "../bahan/images/slide/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);


    $query = mysqli_query($koneksi_server, "INSERT INTO `gbr_gerak` (`id`, `nama_file`, `lokasi`, `ket`) VALUES ('', '$namaFile', 'bahan/images/slide/$namaFile', '$ket')");
    if ($query) {
        header('location:edit_slider.php');
    } else die('gagal menambahkan!');
} else {
    header('location:edit_slider.php');
}
