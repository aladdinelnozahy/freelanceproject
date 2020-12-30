<?php
require 'admin/config.php';
if(isset($_GET['k'])){
   
$description = '%' . $_GET['k'] . '%';
$sql = "SELECT freelancers.f_id, freelancers.f_name,freelancers.photo 
        FROM freelancers WHERE description LIKE '$description'";
        
 $query = mysqli_query($connection,$sql);
if(mysqli_num_rows($query) > 0){

    while($data = mysqli_fetch_array($query)){
  ?>
    <tr>
      <td>  
      <a href="profile.php?frid=<?= $data['f_id']?> ">
        <?php
        if($data['photo'] != NULL) { ?>
        <img src="admin/uploaded/<?= $data['photo']?>" width="60" height="60">
        <?php }else{ ?>

            <img src="admin/uploaded/img.jfif" width="60" height="60">

        <?php }
        ?>
        
      



       <?= $data['f_name']?>
        </a>
        </td>
    </tr>
 <?php
    }

}else{
 
    echo 'Not Found..';

  }
  
}
?>