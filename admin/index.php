<?php
  session_start();
  require ('functions.php');
  
  if(isset($_POST['submit'])){
    $userName = $_POST['username'];
    $password =$_POST['password'];

    
    // echo $userName . '<br>' .  $password ;
      if(empty($userName)){
        $usError='User Name is Required.';
      }if (empty($password)){
        $passError ='Password is Required.';
      }

    // login


        $login = "SELECT * FROM create_users
                WHERE (username ='$userName' OR email='$userName' )
                AND pass='$password'";
        $check = mysqli_query($connection,$login);



        if (mysqli_num_rows($check) == 1){
            $user= mysqli_fetch_array($check);
            $_SESSION['name']=$user['name'];
            $_SESSION['userId']=$user['id'];
            $_SESSION['role']=$user['role'];
          header("location:dashboard.php?page=home");
          }else{
           getMessage('Invalid login');
           }
  }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <!-- start style  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/app.css">
    <!-- end style -->
    <script>
      
    </script>
</head>
<body>
  
  <form method="post"  class="log formcenter text-center col-md-9">
    <h1 class="admin" >Admin login</h1>

    <div class="form-group">
      <label for="exampleInputEmail1">User name or Email Address</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Enter User Name or Email" ><br>
      <span  > 
        <?php 
          if(isset($usError)){
          //  echo getMessage($logerr);
            echo$usError;
          }
        ?>
      </span>
    </div>
    <div class="form-group">
      
      <label for="exampleInputPassword1">Password</label>
      <input type="password" id="passw" name="password" class="form-control" placeholder="Enter Password" >
      <span > 

      <?php 
        if(isset($passError)){
          echo$passError;
        }
      ?>
      </span>

    </div>
    <div class="form-group form-check">
        <!-- <div class="form-check">
            <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..."> 
            <label class="form-check-label" for="exampleCheck1">Keep Me Logged In </label>

        </div> -->
    </div>
    <span id="error"></span>
    <button  id ="loggo" name="submit" type="submit" class="btn btn-primary  " > <i class="fas fa-sign-in-alt"></i> Submit</button>
  </form> 

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/app.js"></script> 
</body>
</html>