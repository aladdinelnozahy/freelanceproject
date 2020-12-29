<?php
// Read From DB (Select)
$sql ="SELECT * FROM create_users ";
$result =  mysqli_query($connection,$sql);



if(mysqli_num_rows($result)>0 ) {
// if($result=mysqli_query($connection,$sql)){
?>
<!-- start card -->
<input type="text" id="search" placeholder="search" class="form-control">
  <div class="result" ></div>




  
<table class="table ">
  <thead class="thead-dark" style="text-align: center;">
    <tr>
      <th > User Name </th>
      <th > Email </th>
      <th > Phone </th>
      <th >User Role </th>
      <th class="text-center" > Operation s </th>
    </tr>
  </thead>
  <tbody style="text-align: center;">
  
    <?php
    // Fetch_Data 

    while  ($users = mysqli_fetch_array($result)){ ?>
      <tr>
      <!-- Display Data -->
        <td> <?= $users['username']?>  </td>
        <td> <?= $users['email']?> </td>              
        <td> <?= $users['phone']?> </td>
        <td> <?php 
        
        if ($users['role'] == 0) {
          echo 'Super Admin';
        }else if($users['role'] == 1 ){ 
          echo 'Admin';
        }else{
            echo'User';
          }
        ?> </td>
        <td >
          <a href="dashboard.php?page=edit&id=<?= $users['id'] ?>" class="btn btn-primary btn-sm">edit</a>
          <a href="delete.php?id=<?= $users['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      
    </tr>


  <?php  } ?>


    
  </tbody>
</table>
<?php 
}else{
    
   getMessage('Thair is no users data','red' );
}?>
      
