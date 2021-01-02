<?php 
    session_start();

    unset($_SESSION['userId']);

    unset($_SESSION['name']);

    session_destroy();


    header("location:admin/index.php");


?>
