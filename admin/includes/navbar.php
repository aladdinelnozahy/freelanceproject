<?php   session_start(); ?>
<nav id="colo" class="back navbar navbar-expand-lg navbar-dark ">
    <div class="row all">
        <div class="col-sm">
            <img id="logo" src="media/free2.png" alt="freelancing logo">
                <a href="../index.php" class="btn navbar-brand" ><p class=""  >Arab freelancers</p><a>
        
        </div>
        
        <div  class="btn-group" id = bordline role="group" aria-label="...">
            <p class="icon"  id="username"  aria-haspopup="true" aria-expanded="false"> <?= ucwords( $_SESSION['name']); ?>  </p>           
            <a class="icon"  href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
     
        </div>
    
       

      
    </div>


  
                
</nav>  