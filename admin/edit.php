<?php 
    if(isset($_GET['u_id'])){
        $id = $_GET['u_id'];
        $getUser = "SELECT * FROM create_users  WHERE  u_id='$id' ";
        $result = mysqli_query($connection,$getUser);
        // $row = mysqli_fetch_row($result);
        $row = $result->fetch_assoc();
        if (isset($_POST['submit'])){

            $username =$_POST['username'];
            $email =$_POST['email'];
            $name =$_POST['name'];
            $phone =$_POST['phone'];
            $password =$_POST['password'];
            $birthdate =$_POST['birthdate'];
            $role =$_POST['role'];

            $updated = "UPDATE create_users 
                        SET username = '$username',  
                        email = '$email'  ,  
                        name = '$name'  ,
                        phone = '$phone'  ,
                        pass = '$password'  ,
                        birtdate = '$birthdate' ,  
                        role = '$role'   
                        WHERE u_id ='$id'; ";
            // mysqli_query($connection,$updated);
            $retval = mysqli_query( $connection, $updated);
            
            if(! $retval ) {
               die(getMessage('Could not update data... ') );
            }
            getMessage('Updated data successfully');
        }   
        //     getMessage('Updated data successfully');
        // }

   

?>

<form  method="post"  class="formcenter text-center">
            
    <div class="form-check form-check-inline">
        <div class="form-group">
            <label >User Name</label>                   
            <input type="text" name="username" id="username" class="form-control" value ="<?= $row['username'] ?>" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" name="email" class="form-control" value ="<?= $row['email'] ?>"  >
        </div>
    </div>
    <span id="usError" class="error"> </span>
    <div class="form-check form-check-inline">
        <div class="form-group">
        <label > Name</label>
        <input type="text" name="name" id="name" class="form-control" value ="<?= $row['name'] ?>" >
        </div>
        <div class="form-group">
        <label > Phone </label>
        <input type="tel" name="phone" class="form-control"  aria-describedby="emailHelp"  value ="<?= $row['phone'] ?>">
        </div>
    </div>


    <div class="form-check form-check-inline">
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id= "password"  value ="<?= $row['pass'] ?>">
            </div>
            
            
            
    </div>

    <div class="form-group check-password">
        <span id="passError" class="error"> </span>
    </div>
        
            
        <!-- <div class="form-group">
            
            <label for="exampleInputPassword1">Git Link</label>
            <input type="link" class="form-control" id="exampleInputPassword1" >
        </div> -->
        <div class="form-group">
            <label>date of birth</label><br>
            <input type="text" name="birthdate" id="datepicker" value ="<?= $row['birthdate'] ?>">

            <!-- <script>
            loadDropDown("day",31,1);
            loadDropDown("month",12,1);
            loadDropDown("year",2020,1900);
            </script> -->
        
        </div>
        
        <div class="form-group">
            <label>user Role</label>
            <select class="form-control" name="role"  >          
            
            <?php
                if ($row['role'] == '0') {
                    echo " <option>super admin</option>";
                    }else if($users['role'] == 1 ){ 
                    echo " <option> admin</option>";
                    }else{
                        echo " <option>user </option>";
                    }
                ?>
            <option >..............</option>
            <option value="0">super admin</option>
            <option value="1">admin</option>
            <option value="2">user</option>

            </select>

        </div>

    <button id ="fullwidth" type="submit" name="submit" class="btn btn-primary  " ><i class="fas fa-sign-in-alt"></i> Edit</button>

</form>
<?php 
    
}
?> 