<?php
    //$servername = "50.62.209.185:3306";
    //$username = "sha1";
    //$password = "sh@urya1";
    //$dbname = "mariannepaulson_";

    	$servername = "107.180.51.22";
		$username = "nilkanth_admin";
		$password = "root1";
		$dbname = "nilkanth_ravi";
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}				
	
	$sql = "select p.product_id, p.product_url, p.product_name, p.image, p.price, FORMAT((v.total_points / v.rating_number),1) as average_rating, v.rating_number
                from products p, post_rating v where p.product_id = v.post_id 
                order by average_rating desc limit 5";
    $result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row	
	    while($row = $result->fetch_assoc()) {	    				    
			$productname = $row["product_name"];
			$price = $row["price"];
			$imageurl = $row["image"];
			$average_rating = $row["average_rating"];
			$rating_number = $row["rating_number"];
   			$producturl = $row["product_url"];
   			$product_id = $row["product_id"];
             
        ?>
	        <div class="card col-lg-3 col-sm-5 px-0 product-card">

		        <div class="card-block">
			<h5 class="card-title product-title text-xs-center" style="color:DarkBlue"><?php echo $productname?></h5>
		        </div>

                <a target="_blank" href="<?php echo $producturl?>">
		            <img src="<?php echo $imageurl?>" alt="Card image" class="img-fluid" >
                </a>

		        <div class="card-block row container-fluid">			    

			        <h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1"> 
                        $<?php echo $price?>
                    </h6>			    

   			        <h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">
                        Rated <?php echo $average_rating?> stars (<?php echo $rating_number?> ratings)
                    </h6>			    
                    
   			        <h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1" style="color:DarkBlue">
                        <?php include 'reviews.php'; ?> 
                    </h6>			    

			        <button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10" onclick="window.location.href='product.php?id=<?php echo $product_id?>'">Buy</button>

		        </div>

	        </div>
        <?php

		} 
	}

	else {					    
		    
	}
	
?>

