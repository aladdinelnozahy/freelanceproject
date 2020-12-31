<?php   session_start(); ?>
<nav id="colo" class="back navbar navbar-expand-lg navbar-dark ">
    <div class="row">
        <div class="col-sm">
            <img id="logo" src="media/free2.png" alt="freelancing logo">
            <a href="..\index.php" class="btn navbar-brand" ><p class=""  >Arab freelancers</p><a>
        
        </div>
    </div>

    <div class="col-sm" >
        <hr >                           
    </div>
        <div class="collapse navbar-collapse" id="userdropdown">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="bordline" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php  
                if( isset($_SESSION['name']) && $_SESSION['name'] == true ){ ?>
                    <?= ucwords( $_SESSION['name']);  ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- <a class="dropdown-item" href="logout.php">Dashboard</a> -->
                     <a class="dropdown-item" href="admin/logout.php">Logout</a>
                </div>
                <?php  }else {?>
                    Hi, Guest!
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="signup.php" class="btn btn-danger"> signup</a>
                     <a class="dropdown-item" href="admin/index.php">Login</a>
                </div>
                <?php  }?> 
            </div>                        
        </div>       
</nav>  