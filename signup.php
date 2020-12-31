<?php 
    include 'includes/header.php'; 
    include 'includes/navbar.php'; 
    require 'admin/config.php'; 

if(isset($_POST['submit'])){
    /** Uploaded directory */

    $path =$_FILES['photo']['tmp_name'];
    $filename = $_FILES['photo']['name'];
    $dir = dirname(__FILE__) . '/Admin/uploaded/';

    move_uploaded_file($path,$dir.$filename) ;

    $name=$_POST['name'];
    $email=$_POST['email']; 
    $password=$_POST['pass'];
    $phone=$_POST['phone'];
    $job=$_POST['job'];
    $description=$_POST['description'];



    // $errors =array();
    // if (empty ($username)){
    //   $errors[] = 'User Name Field Is Required';
    // }
    // if (empty ($email)){
    //   $errors[] = 'Email Address Field Is Required';
    // }
    // if(empty($password)){
    //   $errors[]='Password Field Is Required';
    // }


    $addfreelancer = "INSERT INTO `freelancers`(`f_id`, `f_name`, `f_job`, `f_phone`, `pass`, `f_email`, `photo`, `description`) 
                    VALUES (null,'$name', '$job','$phone','$password','$email','$filename','$description' )";
    if(mysqli_query($connection,$addfreelancer)){
    
        $success='Data saved successfully';
        echo $success;




    }



}

?>
<br>
<br>
<br>
<br>
<div class="card" style="width:50em;">
<h1> Sign Up</h1>
    <div class="card-body">
   
    
            <!-- onsubmit="checkPassword();return false" -->
        <form  method="post" enctype="multipart/form-data"  class="formcenter text-center">
        
               
                <div class="form-group">
                    <label > Name</label>
                    <input type="text" name="name"  class="form-control" >
                </div>
                <div class="form-group">
                    <label > email address</label>
                    <input type="emai" name="email" class="form-control" >
                </div>
                
                <div class="form-group">
                    <label > Password</label>
                    <input type="password" name="pass" class="form-control" >
                </div>
                <div class="form-group">
                    <label > Phone </label>
                    <input type="tel" name="phone" class="form-control" >
                </div>
                <div class="form-group">
                    <label > Job</label>
                    <input type="text" name="job" class="form-control" >
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control"  > </textarea>
                </div>

                <div class="form-group">
                    <label for="photo">photo</label>
                    <input type="file" name="photo" class="form-control"  >
                </div>
                
              

        

            <button id ="fullwidth" type="submit" name="submit" class="btn btn-primary  " ><i class="fas fa-sign-in-alt"></i> Create</button>

        </form> 
    </div>
</div>
