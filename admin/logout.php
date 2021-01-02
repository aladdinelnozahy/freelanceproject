<?php 
    session_start();

    unset($_SESSION['userId']);
var_dump($_SESSION);

    session_destroy();


    header("location:index.php");


?>