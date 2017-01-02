<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Most Visited Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/all_products_style.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-dark bg-inverse topnav">
		  <div class="nav navbar-nav container">
		  	<a class="navbar-brand" href="index.php">
		  		Shop Stop
		  	</a>		  	
		    <a class="nav-item nav-link ml-2" href="index.php">Home <span class="sr-only">(current)</span></a>
		    <a class="nav-item nav-link" href="all_products.php">All Products</a>
<!--MP-->   <a class="nav-item nav-link" href="all_reviews.php">Best Reviewed Products</a>   
<!--MP-->   <a class="nav-item nav-link active" href="all_visits.php">Most Visited Products</a>   
		    <a class="nav-item nav-link" href="#">About</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
		  </div>
		</nav>
	</header>

    	<!-- Login modal Starts Here -->

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title text-xs-center" id="myModalLabel">Login</h4>
	      </div>
	      <div class="modal-body">
	        <form action="">
			  	<div class="form-group row">
				  <label for="example-text-input" class="col-xs-2 col-form-label">Username</label>
				  <div class="col-xs-10">
				    <input class="form-control" type="text" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-xs-2 col-form-label">Password</label>
				  <div class="col-xs-10">
				    <input class="form-control" type="password" id="example-search-input">
				  </div>
				</div>
				<div class="row text-white">
				  <div class="offset-md-2 col-xs-5">
				    <a class="btn btn-block btn-social btn-facebook">
					    <span class="fa fa-facebook"></span> Sign in with Facebook
					</a>
				  </div>
				  <div class="col-xs-5">
				    <a class="btn btn-block btn-social btn-google">
					   <span class="fa fa-google"></span> Sign in with Google
					</a>
				  </div>
				</div>

			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary bg-inverse text-white">Login</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Login modal Ends Here -->

	<!-- Signup modal Starts Here -->

	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title text-xs-center" id="myModalLabel">Sign Up</h4>
	      </div>

	      <form action="index.php" method="POST">
	      	<div class="modal-body">
	      		<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">First Name</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="firstname">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Last Name</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="lastname">
				  </div>
				</div>
			  	<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Email</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="email" id="example-text-input" name="email">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Username</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="username">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Password</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="password" id="example-text-input" name="password">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-xs-4 col-form-label">Retype Password</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="password" id="example-search-input">
				  </div>
				</div>
				<div class="row text-white mb-2">
				  <div class="offset-md-4 col-xs-4">
				    <a class="btn btn-block btn-social btn-facebook">
					    <span class="fa fa-facebook"></span> Facebook
					</a>
				  </div>
				  <div class="col-xs-4">
				    <a class="btn btn-block btn-social btn-google">
					   <span class="fa fa-google"></span> Google
					</a>
				  </div>
				</div>			
	      	</div>
		    <div class="modal-footer">
		       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		       <button type="submit" class="btn btn-primary bg-inverse text-white" name="signup">Sign Up</button>
		    </div>
	      </form>
	    </div>
	  </div>
	</div>

	<?php include 'signup_router.php';?>

	<!-- Signup modal Ends Here -->


	<div class="container mt-2">
		<div id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingOne">
		      <h5 class="mb-0">
		        <a data-toggle="collapse" class="text-white" data-parent="#accordion" href="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
		          Top 5 most visited products in the marketplace
		        </a>
		      </h5>
		    </div>
		    <div id="collapseZero" class="collapse" role="tabpanel" aria-labelledby="headingOne">
		      <div class="card-block">			
		      	<?php include 'visits_combined.php';?>
		      </div> 
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingOne">
		      <h5 class="mb-0">
		        <a data-toggle="collapse" class="text-white" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Top 5 most visited products at San Jose Downtown University
		        </a>
		      </h5>
		    </div>
		    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
		      <div class="card-block">			
		      	<?php include 'visits_shaurya.php';?>
		      </div> 
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingTwo">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Top 5 most visited products at AGI Financials
		        </a>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="card-block">
		        <?php include 'visits_yaniv.php';?>
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingThree">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Top 5 most visited products at Ultra Running Inc.
		        </a>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="card-block">
		        <?php include 'visits_marianne.php';?>
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingThree">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          Top 5 most visited products at Trek the Himalayas.
		        </a>
		      </h5>
		    </div>
		    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="card-block">
		        <?php include 'visits_venkatesh.php';?>
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingThree">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
		          Top 5 most visited products at Nilkanthvarni Industries.
		        </a>
		      </h5>
		    </div>
		    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="card-block">
		        <?php include 'visits_ravi.php';?>
		      </div>
		    </div>
		  </div>


		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	
</body>
</html>