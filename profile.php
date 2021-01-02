<?php 
include 'includes/header.php' ;
include 'includes/navbar.php' ;
require 'admin/config.php';

$id=$_GET['frid'];
$sqlfree = "SELECT *  FROM freelancers WHERE f_id='$id'";
$sqlfSkills = "SELECT *  FROM details WHERE f_id='$id'";

$query = mysqli_query($connection,$sqlfree);
$querySkills = mysqli_query($connection,$sqlfSkills);

$data = mysqli_fetch_array($query);
$skilldata =mysqli_fetch_array($querySkills);


?>

    
    <div class="center" id="portofolio" style="background-image: url('media/cover.jpg');">
        
        <img id="imgsize" src="media/co.png" alt="profile img" >
        <h1>           
        <?= ucwords( $data['f_name']); ?>

        </h1>
    </div>
    <div class="mini">
    <?= ucwords( $data['f_job']); ?>

    </div>
    
        
    
    
    <div class="accordion " id="accordionExample">
        <div class="card oco">
          <div class="card-header " id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white;">
                About
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            <?= ucwords( $data['description']); ?>
            </div>
          </div>
        </div>
        <div class="card oco">
          <div class="card-header " id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white;" >
                Skills
              </button>
            </h2>
          </div>
          
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
            <?php
        // Fetch_Data 
        
           do {?>
            <?= ucwords( $skilldata['Skills']); ?>
            <br>
            <?php  }while  ($skilldata = mysqli_fetch_array($querySkills)) ?>
            </div>
          </div>
      
        </div>
        <div class="card oco">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button  class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white;">
                Courses
              </button>
            </h2>
          </div>
      
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>

          
        </div>
      </div>
    


      <div class="card contact col-md-5" >


          <?php 
          // var_dump($data);
            if(isset($_POST['c_name'])){
              $c_name =$_POST['c_name'];
              $c_email =$_POST['c_email'];
              $c_message =$_POST['c_message'];
              $f_id=$data['f_id'];



              $sql ="INSERT INTO `contact`(`c_name`, `c_email`, `c_message`, `f_id`) 
                     VALUES ('$c_name','$c_email','$c_message',$f_id)";
                            mysqli_fetch_array($query);

              if(mysqli_query($connection,$sql)){
                echo'Thanks';
              }else{
                echo 'Error Inserting Data Try again';
              }

            }

          ?>

        <form method="post">
          <div class="card-body formc">
            <h2 id="contacth">contact</h2>
              <div class="form-group" style="width: 25rem;">
                
                <label >Your Name :</label>
                <input type="text" name="c_name"  class="form-control"  >
            
                <label for="c_email">Your Email :</label>
                <input type="email" name="c_email" class="form-control"  >

                <label for="exampleInputEmail1">Your Message :</label>
                <textarea  name="c_message" rows="4" cols="30" ></textarea>

                <button  type="submit" name="submit" class="btn btn-success  " ><i class="fas fa-sign-in-alt"></i> Send</button>
                            

              </div>
          </div>
        </form>
      </div>


      
      <a  href="" ><button id="goup"  type="button" class="btn btn-warning"> <i class="fas fa-arrow-up"></i> </button> </a>


<?php include 'includes/footer.php' ?>