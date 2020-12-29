<div class="card list-group ">
<a href="dashboard.php?page=home.php" class=" list-group-item list-group-item-action  active  " id="dash">
<i class="fas fa-tachometer-alt"></i> Dashboard</a>  


    
    <a href="dashboard.php?page=manageuser.php  " class="list-group-item list-group-item-action">
    <i class="fas fa-user-cog"></i> Manage Users <span class="badge badge-primary"><?= getTotals('create_users') ?></span>
    </a>

    <a href="dashboard.php?page=freelancers.php" class="list-group-item list-group-item-action">
    <i class="fas fa-briefcase"> </i>  Freelancers <span class="badge badge-danger"><?= getTotals('freelancers') ?>
    </a>
    
</div>
