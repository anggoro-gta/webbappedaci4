<?php
    session_start();
    unset($_SESSION['HAK']);
    header(('location:login/login.php'));
?>