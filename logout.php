<?php 
    session_start();

    unset($_SESSION['userId']);


    session_destroy();


    header("location:admin/index.php");


?>