<?php   session_start(); ?>
<nav id="colo" class="back navbar navbar-expand-lg navbar-dark ">
    <div class="row">
        <div class="col-sm">
            <img id="logo" src="media/free2.png" alt="freelancing logo">
            <a href="..\index.php" class="btn navbar-brand" ><p class=""  >Arab freelancers</p><a>
        
        </div>
    </div>

    <div class="col-sm-6" >
        <hr >                           
    </div>
        <div class="collapse navbar-collapse" id="userdropdown">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="bordline" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= ucwords( $_SESSION['name']); ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="direct.php">Profile</a>
                     <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>                        
        </div>       
</nav>  