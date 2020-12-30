<?php 
  $sql="SELECT f_name , f_id FROM freelancers ORDER BY f_name";
  $query= mysqli_query($connection ,$sql);
  $rows=  mysqli_fetch_array($query);
?>
<!-- start card -->
<select class="form-control" id="free">
  <option>Select Freelancer</option>
  <?php
    while ($rows= mysqli_fetch_array($query)){

  ?>
  <option value="<?= $rows['f_id'] ?>"><?= $rows['f_name'] ?> </option>
  <?php
    }
  ?>
</select> 
<div class="resulttbl"> </div>