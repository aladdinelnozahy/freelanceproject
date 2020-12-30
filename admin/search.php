<?php 
    require ('config.php');

    if(isset($_GET['k'])){

        $name = '%' . $_GET['k'] .'%' ;
        $sql = "SELECT * FROM  create_users WHERE name LIKE '$name' or username LIKE '$name'";
        $query = mysqli_query ($connection,$sql);
        if(mysqli_num_rows($query) > 0){
            while($data= mysqli_fetch_array($query)){
                echo "<a href='#'>".$data['name'] ." </a> <br>";
            }
        }else{
            echo'Not Found ...';
        }
    }


?>

