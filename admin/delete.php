<?php 

require 'functions.php';
    var_dump ('no data'+$_GET['id']);
    if (isset($_GET['id'])){
     $id= $_GET['id'];
     $deluser ="DELETE FROM create_users WHERE id='$id'";
        mysqli_query($connection,$deluser);
        header("location:dashboard.php?page=manageuser");
    }
?>