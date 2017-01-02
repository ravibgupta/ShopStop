<?php	
	
		setcookie($_GET["id"], "product_id", time()+60000, "/");
		$id = $_GET["id"];
		//$id = 2;
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
					    $product_id = $row["product_id"];

					}

				}

			}

		}

		elseif($id>1000 and $id<=2000){
			include "connection_yaniv.php";

			$company = "Isaacagam Housing";

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
					    $product_id = $row["product_id"];

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
					    $product_id = $row["product_id"];

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
					    $product_id = $row["product_id"];
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
					    $product_id = $row["product_id"];

					}
				}
			}
		}



	

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $productname?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fontawesome-stars.css">
	<link rel="stylesheet" type="text/css" href="css/stars.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/product_style.css">
</head>
<body>
	<header>
	
		<nav class="navbar navbar-dark bg-inverse topnav">
		  <div class="nav navbar-nav container topnav">
		  	<a class="navbar-brand" href="index.php">
		  		Shop Stop
		  	</a>		  	
		    <a class="nav-item nav-link active ml-2" href="index.php">Home <span class="sr-only">(current)</span></a>
		    <a class="nav-item nav-link" href="all_products.php">All Products</a>
<!--MP-->   <a class="nav-item nav-link" href="all_reviews.php">Best Reviewed Products</a>   
<!--MP-->   <a class="nav-item nav-link" href="all_visits.php">Most Visited Products</a>  
		    <a class="nav-item nav-link" href="#">About</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
		  </div>
		</nav>

	</header>



	<div class="container mt-3">
		<div class="row">
			<img class="col-sm-7" src="<?php echo $image_url?>">		
			<h2 class="col-sm-5 display-5 text-sm-left text-xs-center"><?php echo $productname?><p class="lead company-name">by  <?php echo $company?></p></h2>
			<p class="col-xs-4 mt-1 price">$<?php echo $price?></p>

			<button type="button" class="btn bg-inverse text-white col-xs-3 add-to-cart ml-1" onclick="window.location.href='extrapage.php?action=add&selectedid=<?php echo urldecode($product_id)?>'">Add To Cart</button>
			

			<button type="button" class="btn bg-inverse text-white col-xs-3 add-to-cart mt-2 ml-1" onclick="window.location.href='<?php echo $product_url?>'">View on Child Website</button>
		</div>
		<div class="row"><p class="offset-xs-1 col-sm-10" id="description"><?php echo $description?></p></div>
	</div>


	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	
	<script src="js/jquery.barrating.min.js"></script>

	<script type="text/javascript">
	   $(function() {
	   	

	      $('#example').barrating({
	        theme: 'fontawesome-stars'
	      });

	      $('#example').barrating('set', 3);

	   });

	</script>

	<?php include ("socialMedia.php")?>
</body>
</html>