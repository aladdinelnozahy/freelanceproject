<?php 
    require 'config.php';
    if(isset($_GET['ID'])){
        $fid=  $_GET['ID']; 
        $sql =  $sql = "SELECT * FROM freelancers WHERE f_id='$fid'";
        $query = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($query);
    }
?>
<table class="table table-bordered">
    <thead>
     <tr id="tblhead">
        <th>Name</th>
        <th>Email</th>
        <th>phone</th>
        <th>Profile Photo</th>
     </tr>
   </thead>
   <tbody>
    <tr>
        <td><?= $row['f_name']?></td>
        <td><?= $row['f_email']?></td>
        <td><?= $row['f_phone']?></td>
        <td>
        <img src="uploaded/<?= $row=['photo'];?>" width="50" height="50">
        </td>
    </tr>
    </tbody>
    </table>