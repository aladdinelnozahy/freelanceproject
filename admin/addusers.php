<?php 

  if(isset($_POST['submit'])){
    
    $username =$_POST['username'];
    $email =$_POST['email'];
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    // $birthdate =$_POST['birthdate'];
    $role =$_POST['role'];


    $errors =array();
    if (empty ($username)){
      $errors[] = 'User Name Field Is Required';
    }
    if (empty ($email)){
      $errors[] = 'Email Address Field Is Required';
    }
    if(empty($password)){
      $errors[]='Password Field Is Required';
    }
    // checkUser('$username','$email','create_users','');

    
    $sql ="SELECT username,email from create_users WHERE username ='$username'
         OR email ='$email'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)== 1 ){
      getMessage('username or email address already taken');
    }else {
    
      // /insert into db
      $addUser= "INSERT INTO create_users VALUES (NULL,
      '$username',
      '$email',
      '$name',
      '$phone',
      '$password',
      '$role')";
      mysqli_query($connection,$addUser);

      

      getMessage('User Created successfully ');
      header("Location:addusers.php");

    }
  }
   
?>
<!-- start card -->
<div class="card-body">
  
        <!-- onsubmit="checkPassword();return false" -->
            <form  method="post" onsubmit="checkPassword();" class="formcenter text-center">
              <?php 
                if (!empty($errors)){
              ?>
                  <div class="alert alert-danger">
                    <?php
                      for($e = 0 ; $e < count($errors); $e++){
                        echo "<li>$errors[$e] </li>";
                      }
                    ?>
                  </div>
              <?php } ?>
            
                <div class="form-check form-check-inline">
                    <div class="form-group">
                        <label >User Name</label>
                        <input type="text" name="username" id="username" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" name="email" class="form-control"  >
                    </div>
                </div>
                <span id="usError" class="error"> </span>
                <div class="form-check form-check-inline">
                  <div class="form-group">
                    <label > Name</label>
                    <input type="text" name="name" id="name" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label > Phone </label>
                    <input type="tel" name="phone" class="form-control"  aria-describedby="emailHelp">
                  </div>
                </div>


                <div class="form-check form-check-inline">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id= "password" >
                      </div>
                      
                      <div class="form-group ">
                        <label for="exampleInputEmail1"> Confirm Password</label>
                        <input type="password" name="confirm" class="form-control" id=" confirm"  >
                      </div>
                      
                </div>

                <div class="form-group check-password">
                  <span id="passError" class="error"> </span>
                </div>
                    
                      
                    <!-- <div class="form-group">
                      
                      <label for="exampleInputPassword1">Git Link</label>
                      <input type="link" class="form-control" id="exampleInputPassword1" >
                    </div> -->
                    <!-- <div class="form-group">
                      <label>date of birth</label><br>
                      <input type="text" name="birthdate" id="datepicker"> -->

                      <!-- <script>
                        loadDropDown("day",31,1);
                        loadDropDown("month",12,1);
                        loadDropDown("year",2020,1900);
                      </script> -->
                    
                    <!-- </div> -->
                    
                    <div class="form-group">
                      <label>user Role</label>
                      <select class="form-control" name="role">
                        <option value="">select role</option>
                        <option value="0">super admin</option>
                        <option value="1">admin</option>
                        <option value="2">user</option>

                      </select>

                    </div>

                <button id ="fullwidth" type="submit" name="submit" class="btn btn-primary  " ><i class="fas fa-sign-in-alt"></i> Create</button>

              </form> 
</div>




