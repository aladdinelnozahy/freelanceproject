<?php 
    include('includes/header.php'); 
        // start navbar 
    include('includes/navbar.php'); 
    
    if(!isset($_SESSION['userId'])){
        header("location:index.php");

    }
        // end navbar
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-3"> 
            <!-- start side bar -->
            <?php 
                if(isset($_SESSION['role']) && $_SESSION['role']==0){
                    include("includes/superadmin_sidebar.php");
                } else if(isset($_SESSION['role']) && $_SESSION['role']==1) {
                    include("includes/admin_sidebar.php");
                } else if (isset($_SESSION['role']) && $_SESSION['role']==2){
                    include("includes/user_sidebar.php");
                } else {
                    header('location:404.php');
                    // include("includes/sidebar.php");

                }
            ?>
            <!-- end side bar  -->
        </div>

        <div class="col-md-9" > 
            <!-- start card -->
            <!-- <input type="text" id="search" placeholder="search" class="form-control">
            <div class="result" ></div> -->
            <div class="card ">
                <h5 class="card-header">
                <?php 
                    echo setTitle();
                
                ?>
                </h5>
                
                <!-- <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    </div> -->
                <div class="card-body">
                    <?php 
                    if(isset($_GET['page'])){
                        include($_GET['page'].'.php' );
                    }
                    
                    ?>                        
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>

