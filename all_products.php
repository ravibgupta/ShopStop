<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Products</title>
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
		    <a class="nav-item nav-link active" href="all_products.php">All Products</a>
<!--MP-->   <a class="nav-item nav-link" href="all_reviews.php">Best Reviewed Products</a>   
<!--MP-->   <a class="nav-item nav-link" href="all_visits.php">Most Visited Products</a>   
		    <a class="nav-item nav-link" href="#">About</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
		  </div>
		</nav>
	</header>
	<div class="container mt-2">
		<div id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingOne">
		      <h5 class="mb-0">
		        <a data-toggle="collapse" class="text-white" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Products from San Jose Downtown University
		        </a>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne">

		      <div class="card-block">			
		      	<?php include 'products_shaurya.php';?>
		      </div> 
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingTwo">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Products from Isaacagam
		        </a>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="card-block">
		        <?php include 'products_yaniv.php';?>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingThree">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Products by Ultra Running Inc
		        </a>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="card-block">
		        <?php include 'products_marianne.php';?>
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingFour">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          Products by Trek The Himalayas
		        </a>
		      </h5>
		    </div>
		    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
		      <div class="card-block">
		      	<?php include 'products_venkatesh.php';?>
		      </div>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-header bg-inverse" role="tab" id="headingFive">
		      <h5 class="mb-0">
		        <a class="collapsed text-white" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
		          Products by Nilkanthvarni Industries
		        </a>
		      </h5>
		    </div>
		    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
		      <div class="card-block">
		      	<?php include 'products_ravi.php';?>
		      </div>
		    </div>
		  </div>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	
</body>
</html>