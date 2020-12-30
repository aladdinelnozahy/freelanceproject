<?php   session_start(); ?>
<nav id="colo" class="back navbar navbar-expand-lg navbar-dark ">
    <div class="row">
        <div class="col-sm">
            <img id="logo" src="media/free2.png" alt="freelancing logo">
            <p class="navbar-brand"  >Arab freelancers</p>
        
        </div>
    </div>

    <div class="col-sm" >
        <hr >                           
    </div>
        <div class="collapse navbar-collapse" id="userdropdown">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="bordline" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php  if(session_id() != ''){ ?>
                    <?= ucwords( $_SESSION['name']);  ?>
              <?php  }else {?>
                <?php  }?> 
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- <a class="dropdown-item" href="logout.php">Dashboard</a> -->
                     <a class="dropdown-item" href="admin/logout.php">Logout</a>
                </div>
            </div>                        
        </div>       
</nav>  