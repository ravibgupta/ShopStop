<?php
	$servername = "107.180.48.124:3306";
	$username = "shaurya";
	$password = "mittal";
	$dbname = "sjdu";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}				
	
	$sql = "SELECT * FROM products";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row	
	    while($row = $result->fetch_assoc()) {	    				    
			$productname = $row["product_name"];
			$price = $row["price"];
			$imageurl = $row["image"];

?>
		

	<div class="card col-lg-3 col-sm-5 px-0 product-card">
		<div class="card-block">
			<h5 class="card-title product-title text-xs-center"><?php echo $productname?></h4>
		</div>
		<img src="<?php echo $imageurl?>" alt="Card image" class="img-fluid" >
		<div class="card-block row container-fluid">			    
			<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$<?php echo $price?></h6>			    
			<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10">Buy</button>
		</div>
	</div>

<?php		} 
	}

	else {					    
		    
	}
	
?>


