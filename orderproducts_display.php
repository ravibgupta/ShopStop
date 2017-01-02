<?php


session_start();
error_reporting(0);

?>
		  		
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/all_products_style.css">
	  <!-- Latest compiled and minified CSS -->
	  

	  
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>
	<header>
		<nav class="navbar navbar-dark bg-inverse topnav">
		  <div class="nav navbar-nav container">
		  	<a class="navbar-brand" href="index.php">
		  		Shop Stop
		  	</a>		  	
		    <a class="nav-item nav-link active ml-2" href="index.php">Home <span class="sr-only">(current)</span></a>
		    <a class="nav-item nav-link" href="all_products.php">All Products</a>
			<a class="nav-item nav-link" href="all_reviews.php">Best Reviewed Products</a>   
			<a class="nav-item nav-link" href="all_visits.php">Most Visited Products</a>   
		    <a class="nav-item nav-link" href="#top">Top Rated</a>
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
		         <b>Order Summary</b>
		        </a>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne">

		      <div class="card-block">			
		      	<?php include 'orderdisplay.php';?>
		      </div> 
		    </div>
		  </div>
	</div>




	
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	
</body>
</html>