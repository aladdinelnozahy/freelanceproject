<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>	
<div id="abutton" class="btn-group btn-group-lg" role="group" aria-label="...">
	<a  href="signup.php" class="btn btn-danger"> Signup</a>
	<a id="onh"  href="" class="btn btn-warning"> Guest </a>
	<a  href="logout.php" class="btn btn-danger"> logout</a>

	<a  href="admin/index.php" class="btn btn-success"> Login</a>
</div>


<div class="container">
	<div class="jumbotron">
		<h1 class="display-4">Welcome To Arab Freelancers</h1>
		<input type="text" id="search" placeholder="search" class="form-control">
  			<div class="result" ></div>
	</div>

</div>
<hr class="hrstyle" >

<div class="container">
<h1 class="mar">About us</h1>

	<div class="row  "  >
                 
		<div class=" col-3 ">
			<div class="card-body">
				
				<img src="imgs/2.png" height="100%" width="100%">
			
			</div>
		</div>
		<div class=" col-9 ">
			<div class="card-body">
				<p class="fonto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla, sem eu sollicitudin ultricies, ipsum neque consequat sem, eu facilisis erat sem ut justo. Aenean sodales commodo magna, non feugiat mauris bibendum vel. Suspendisse orci nulla, interdum sed velit non, dignissim viverra sem. Cras nec eleifend eros. Ut convallis at ante a tincidunt. Sed venenatis sodales dolor, at vehicula tellus vulputate commodo. Proin malesuada vitae risus id malesuada. Duis et augue quam. Maecenas justo lorem, malesuada sed condimentum id, faucibus ac urna.</p>

				

			</div>
		</div>
	</div>         
</div>
<hr class="hrstyle" >
<div class="container">
<h1 class="mar">Our Vision</h1>

	<div class="row  "  >
                 
		
		<div class=" col-9 ">
			<div class="card-body">
				<p class="fonto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla, sem eu sollicitudin ultricies, ipsum neque consequat sem, eu facilisis erat sem ut justo. Aenean sodales commodo magna, non feugiat mauris bibendum vel. Suspendisse orci nulla, interdum sed velit non, dignissim viverra sem. Cras nec eleifend eros. Ut convallis at ante a tincidunt. Sed venenatis sodales dolor, at vehicula tellus vulputate commodo. Proin malesuada vitae risus id malesuada. Duis et augue quam. Maecenas justo lorem, malesuada sed condimentum id, faucibus ac urna.</p>

			</div>
		</div>
		<div class=" col-3 ">
			<div class="card-body">
				
				<img src="imgs/1.png" height="100%" width="100%">
			
			</div>
		</div>
	</div>         
</div>


<hr class="hrstyle" >

<div class="container " >
<h1 class="mar">Our Mission</h1>

                 
	<div class=" col-3 ">
			<div class="card-body">
				
				<img id="mission" src="imgs/3.png" width="700">
			
			</div>
		</div>
		<div class=" col-12 ">
			<div class="card-body">
				<p class="fonto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla, sem eu sollicitudin ultricies, ipsum neque consequat sem, eu facilisis erat sem ut justo. Aenean sodales commodo magna, non feugiat mauris bibendum vel. Suspendisse orci nulla, interdum sed velit non, dignissim viverra sem. Cras nec eleifend eros. Ut convallis at ante a tincidunt. Sed venenatis sodales dolor, at vehicula tellus vulputate commodo. Proin malesuada vitae risus id malesuada. Duis et augue quam. Maecenas justo lorem, malesuada sed condimentum id, faucibus ac urna.</p>

			</div>
		</div>
		
	</div>         



	
<?php
include 'includes/footer.php';
	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/dashboard/');
	// exit;
?>
<!-- Something is wrong with the XAMPP installation :-( -->
