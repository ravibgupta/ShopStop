<?php

	$sql = "select p.product_id, p.product_url, p.product_name, p.image, p.price, v.visit_count
                from products p, visits v where p.product_id = v.product_id 
                order by visit_count desc limit 5";
	
    // Get Marianne visits	
    $servername = "50.62.209.185:3306";
	$username = "sha1";
	$password = "sh@urya1";
	$dbname = "mariannepaulson_";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}				
	
    $visits_site = $conn->query($sql);
    if ($visits_site->num_rows > 0) {
        while($product = $visits_site->fetch_array())
        {
            $result[] = $product;
        }
    }

    // Get Yaniv visits	
	$servername = "107.180.46.159:3306";
	$username = "shaurya1";
	$password = "mittal";
	$dbname = "ycuser";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}				
	
    $visits_site = $conn->query($sql);
    if ($visits_site->num_rows > 0) {
        while($product = $visits_site->fetch_array())
        {
            $result[] = $product;
        }
    }

    // Get Shaurya visits	
	$servername = "107.180.48.124:3306";
	$username = "shaurya";
	$password = "mittal";
	$dbname = "sjdu";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}				
	
    $visits_site = $conn->query($sql);
    if ($visits_site->num_rows > 0) {
        while($product = $visits_site->fetch_array())
        {
            $result[] = $product;
        }
    }

    // Get Venkatesh visits	
    $servername = "107.180.108.18:3306";
	$username = "shauryamittal";
	$password = "shauryamittal";
	$dbname = "websiteuser123";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}				
	
    $visits_site = $conn->query($sql);
    if ($visits_site->num_rows > 0) {
        while($product = $visits_site->fetch_array())
        {
            $result[] = $product;
        }
    }
     // Get Ravi's visits	
    $servername = "107.180.51.22";
		$username = "nilkanth_admin";
		$password = "root1";
		$dbname = "nilkanth_ravi";

        $conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}				
	
    $visits_site = $conn->query($sql);
    if ($visits_site->num_rows > 0) {
        while($product = $visits_site->fetch_array())
        {
            $result[] = $product;
        }
    }

    // create key array
    foreach ($result as $key => $row) {
        $visits[$key]  = $row["visit_count"];
    }

    //sort results based on key (visits)
    array_multisort($visits, SORT_DESC, $result);

    //loop through the results showing up to 5
    for ($row = 0; $row < count($result) && $row < 5; $row++) {
    		$product_id = $result[$row]["product_id"];
   			$productname = $result[$row]["product_name"];
			$price = $result[$row]["price"];
			$imageurl = $result[$row]["image"];
			$visit_count = $result[$row]["visit_count"];
			$producturl = $result[$row]["product_url"];
?>

	<div class="card col-lg-3 col-sm-5 px-0 product-card">
		<div class="card-block">
			<h5 class="card-title product-title text-xs-center" style="color:DarkBlue"><?php echo $productname?></h5>
		</div>
        <a target="_blank" href="<?php echo $producturl?>">
		<img src="<?php echo $imageurl?>" alt="Card image" class="img-fluid" ></a>
		<div class="card-block row container-fluid">			    
			<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$<?php echo $price?></h6>			    
   			<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">Visits: <?php echo $visit_count?></h6>			    

			<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10" onclick="window.location.href='product.php?id=<?php echo $product_id?>'">Buy</button>
		</div>
	</div>

<?php	
     }
	
?>


