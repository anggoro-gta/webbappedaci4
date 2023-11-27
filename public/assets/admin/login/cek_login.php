<?php
if (isset($_POST['login'])) {
    session_start();

    include "../connect.php";
    if((isset($_POST['username'])) AND (isset($_POST['pass']))){
        $u = $_POST['username'];
        $p = $_POST['pass'];

        $qr = "select * from user where user='".$u."' AND pass='".$p."'";
        $result = mysqli_query($koneksi_server,$qr);
        $n = mysqli_num_rows($result);
        if($n<>0){
            while($hasil=mysqli_fetch_array($result)){
                $_SESSION['ID'] = $hasil['id'];
                $_SESSION['USER'] = $hasil['user'];
                $_SESSION['HAK'] = $hasil['level'];

                if ($hasil['level']==1){
                    header('location:../admin.php');
                    
                }else{
                    header('location:../popup/login_gagal.php');
                }
                
            }
        }else{
            header('location:../popup/login_gagal.php');
        }
    }else{
        header('location:../popup/akses_ditolak.php');
    }
}
?>