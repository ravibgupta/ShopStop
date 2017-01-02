<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop Stop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	

</head>
<?php

    $recent = array();
	foreach ($_COOKIE as $key => $value) {
		if($value == "product_id"){
			array_push($recent, $key);
		}    
	}

	if(isset($_POST['submit'])) {


		include 'connection_shaurya.php';

		$conn = shauryaConnection();
		
		// Check connection
		if ($conn->connect_error) {
			echo("error");
		    die("Connection failed: " . $conn->connect_error);
		}				
			
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM market_users WHERE email = '$email' AND password = '$password'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		    // output data of each row	
            echo '<script>
					$(document).ready(function(){
						$(".signin-button").hide();
                        $("#email-navbar").show();
					});                   
				</script>';
		}
		else{
			echo '<script>
					$(document).ready(function(){
						$("#failureModal").modal("show");
                        $("#email-navbar").hide();
					});
				</script>';
		}
      
   	}
?>
<body>

	<header>

		<nav class="navbar navbar-dark bg-inverse topnav">
		  <div class="nav navbar-nav container">
		  	<a class="navbar-brand" href="index.php">
		  		Shop Stop
		  	</a>		  	
		    <a class="nav-item nav-link active ml-2" href="index.php">Home <span class="sr-only">(current)</span></a>
		    <a class="nav-item nav-link" href="all_products.php">All Products</a>
<!--MP-->   <a class="nav-item nav-link" href="all_reviews.php">Best Reviewed Products</a>   
<!--MP-->   <a class="nav-item nav-link" href="all_visits.php">Most Visited Products</a>   
		    <a class="nav-item nav-link" href="#top">Top Rated</a>
		    <a class="nav-item nav-link" href="#">About</a>
		    <a class="nav-item nav-link float-lg-right signin-button" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
		    <a class="nav-item nav-link float-lg-right signin-button" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
            <a class="nav-item nav-link float-lg-right signin-button" href="#" data-toggle="modal" id = "email-navbar" data-target="#signupModal"><?php echo $email;?></a>
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
	      <form action="index.php" method="POST">
		      	<div class="modal-body">	        
				  	<div class="form-group row">
					  <label for="example-text-input" class="col-xs-2 col-form-label">Username</label>
					  <div class="col-xs-10">
					    <input class="form-control" type="text" id="example-text-input" name="email">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-search-input" class="col-xs-2 col-form-label">Password</label>
					  <div class="col-xs-10">
					    <input class="form-control" type="password" id="example-search-input" name="password">
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
		      	</div>
		    <div class="modal-footer">
		       	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <input type="submit" class="btn btn-primary bg-inverse text-white" name="submit"></input>
		    </div>
		  </form>      
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

	<!-- Signup Failure Starts here -->

	<div class="modal fade" id="failureModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Login Failed</h4>
	      </div>
	      <div class="modal-body">
	        Incorrect E-Mail or Password!
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary bg-inverse text-white" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Signup failure modal Ends Here -->

	<!-- Carousel Starts here -->

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner" role="listbox">
	    <div class="carousel-item active">
	      <img src="img/study.jpg" alt="First slide" class="carousel-images">
	      <div class="carousel-caption mb-1">
		    <h3>San Jose Downtown University</h3>
		    <p>Take various courses and explore the universe of knowledge</p>
			<button type="button" class="btn btn-outline-secondary">Explore</button>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/house.jpg" alt="Second slide" class="carousel-images">
	      <div class="carousel-caption mb-1">
		    <h3>Real Estate</h3>
		    <p>Looking to purchase a house. Here is all you need</p>
			<button type="button" class="btn btn-outline-secondary">Explore</button>
		  </div>
	    </div>
	    <div class="carousel-item">
<!--MP--> <img src="img/ultra.jpg" alt="Second slide" class="carousel-images">
	      <div class="carousel-caption mb-1">
<!--MP--> 		    <h3>Ultra Running Inc.</h3>
<!--MP--> 		    <p>Find your trail with the best gear</p>
			<button type="button" class="btn btn-outline-secondary">Explore</button>
		  </div>
	    </div>
	  </div>
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="icon-prev" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="icon-next" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- End of Carousel -->

		<!-- Recently Visited products -->
	<div class="container mt-2" id="top">
		<div class="container display-4 text-xs-center mb-3"> Recently Visited Products</div>

		<?php

			$recent = array_reverse($recent);

			foreach ($recent as $id) {
				

				if($id>0 and $id<=1000){
					include "connection_shaurya.php";

					$company = "San Jose Downtown University";

					$conn = shauryaConnection();
			
					// Check connection
					if ($conn->connect_error) {
						echo("error");
					    die("Connection failed: " . $conn->connect_error);
					}	
					$sql = "SELECT * FROM products WHERE product_id = $id";
					$result = $conn->query($sql);


					if ($result->num_rows > 0) {

						if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {	   

								$productname = $row["product_name"];
							    $price = $row["price"];
							    $image_url = $row["image"];
							    $rating = $row["rating"];
							    $review = $row["review"];
							    $description = $row["description"];
							    $product_url = $row["product_url"];

							}

						}

					}

				}

				elseif($id>1000 and $id<=2000){
					include "connection_yaniv.php";

					$company = "Yaniv Company";

					$conn = yanivConnection();
			
					// Check connection
					if ($conn->connect_error) {
						echo("error");
					    die("Connection failed: " . $conn->connect_error);
					}	
					$sql = "SELECT * FROM products WHERE product_id = $id";
					$result = $conn->query($sql);


					if ($result->num_rows > 0) {

						if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {	   

								$productname = $row["product_name"];
							    $price = $row["price"];
							    $image_url = $row["image"];
							    $rating = $row["rating"];
							    $review = $row["review"];
							    $description = $row["description"];
							    $product_url = $row["product_url"];

							}

						}

					}

				}

				elseif($id>2000 and $id<=3000){
					include "connection_marianne.php";

					$company = "Mom Consultancy";

					$conn = marianneConnection();
			
					// Check connection
					if ($conn->connect_error) {
						echo("error");
					    die("Connection failed: " . $conn->connect_error);
					}	
					$sql = "SELECT * FROM products WHERE product_id = $id";
					$result = $conn->query($sql);


					if ($result->num_rows > 0) {

						if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {	   

								$productname = $row["product_name"];
							    $price = $row["price"];
							    $image_url = $row["image"];
							    $rating = $row["rating"];
							    $review = $row["review"];
							    $description = $row["description"];
							    $product_url = $row["product_url"];

							}
						}
					}
				}



				elseif($id>3000 and $id<=4000){
					include "connection_ravi.php";

					$company = "Nilkanthvarni Industries ";

					$conn = raviConnection();
			
					// Check connection
					if ($conn->connect_error) {
						echo("error");
					    die("Connection failed: " . $conn->connect_error);
					}	
					$sql = "SELECT * FROM products WHERE product_id = $id";
					$result = $conn->query($sql);


					if ($result->num_rows > 0) {

						if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {	   

								$productname = $row["product_name"];
							    $price = $row["price"];
							    $image_url = $row["image"];
							    $rating = $row["rating"];
							    $review = $row["review"];
							    $description = $row["description"];
							    $product_url = $row["product_url"];
							}
						}
					}
				}



				elseif($id>4000 and $id<=5000){
					include "connection_venkatesh.php";

					$company = "Trek The Himalayas";

					$conn = venkateshConnection();
			
					// Check connection
					if ($conn->connect_error) {
						echo("error");
					    die("Connection failed: " . $conn->connect_error);
					}	
					$sql = "SELECT * FROM products WHERE product_id = $id";
					$result = $conn->query($sql);


					if ($result->num_rows > 0) {

						if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {	   

								$productname = $row["product_name"];
							    $price = $row["price"];
							    $image_url = $row["image"];
							    $rating = $row["rating"];
							    $review = $row["review"];
							    $description = $row["description"];
							    $product_url = $row["product_url"];

							}
						}
					}
				}?>
				<div class="card col-lg-3 col-sm-5 px-0 product-card">
					<div class="card-block">
						<h5 class="card-title product-title text-xs-center"><?php echo $productname?></h4>
					</div>
					<img src="<?php echo $image_url?>" alt="Card image" class="img-fluid" >
					<div class="card-block row container-fluid">			    
						<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$<?php echo $price?></h6>			    
						<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10" onclick="window.location.href='product.php?id=<?php echo urldecode($id)?>'">Buy</button>
					</div>
				</div>

				<?php
			}

	?>

	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	
</body>
</html>