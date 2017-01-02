<?php
	if(isset($_POST["review".$product_id]))
    {
		$summary = $_POST["summary"];
		$details = $_POST["details"];
        $product_id = $_POST["productid"];
        $rating = $_POST["rating".$product_id];
       	$servername = $_POST["servername"];
	    $username = $_POST["username"];
	    $password = $_POST["password"];
	    $dbname = $_POST["dbname"];


		$post = 'product_id='.$product_id.'&summary='.$summary.'&details='.$details.'&rating='.$rating.'&servername='.$servername.'&username='.$username.'&password='.$password.'&dbname='.$dbname;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.momconsulting.org/shopstop/review_reciever.php");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch);
		curl_close($ch);

   		$post = 'postID='.$product_id.'&ratingPoints='.$rating;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.momconsulting.org/rating.php");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch);
		curl_close($ch);

   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$_SERVER["REQUEST_URI"].'">';
	}	
?>
