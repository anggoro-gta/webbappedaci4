<?php
    //koneksi menggunakan
    define('HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'db_web_bappeda');
    
    $koneksi_server=MySQLi_connect(HOST,DB_USER,DB_PASS);

    if(!$koneksi_server){
        die('Gagal terkoneksi : ');
    }
    $koneksi_database = mysqli_select_db($koneksi_server, DB_NAME);
        if(!$koneksi_database){
            die('Tidak bisa akses' . DB_NAME . ': ' . mysqli_error($koneksi_server));
        }    
?>

