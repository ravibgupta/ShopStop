
<?php
    $query = "SELECT review_id, summary, details, rating from reviews where product_id = " . $product_id;
    $reviews = $conn->query($query);
?>

    <a href="#" data-toggle="modal" data-target="#readReviews<?php echo $product_id ?>">View <?php echo $reviews->num_rows ?> Reviews</a><br>
    <a href="#" data-toggle="modal" data-target="#reviewModal<?php echo $product_id ?>">Add a Review</a>

  	<div class="modal fade" id="readReviews<?php echo $product_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	
          <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title text-xs-center" id="myModalLabel">Reviews</h4>
	      </div>

	      <form action="<?php echo basename($_SERVER['PHP_SELF'])?>" method="POST">
	      	<div class="modal-body">
              <table style="width:100%; border: 1px solid black; border-collapse: collapse; padding: 15px;">
              <tr>
                  <td class="card-title product-title text-xs-center" style="width:10%; border: 1px solid black; border-collapse: collapse; padding: 15px;">Rating</td>
                  <td class="card-title product-title text-xs-center" style="width:30%; border: 1px solid black; border-collapse: collapse; padding: 15px;">Summary</td>
                  <td class="card-title product-title text-xs-center" style="width:60%; border: 1px solid black; border-collapse: collapse; padding: 15px;">Details</td>
              </tr>

              <?php

        	if ($reviews->num_rows > 0) {
	            while($row = $reviews->fetch_assoc()) {	    				    
        			$review_id = $row["review_id"];
        			$summary = $row["summary"];
		        	$detail = $row["details"];
		        	$rating = $row["rating"];
              ?>
              
                <script language="javascript" type="text/javascript">
                    $(function() {
                        $("#review_star<?php echo $review_id ?>").codexworld_rating_widget({
                            starLength: '5',
                            initialValue: '<?php echo $rating?>',
                            callbackFunctionName: 'processRating',
                            imageDirectory: 'images/',
                            inputAttr: 'postID'
                        });
                    });
                </script>

                    <tr>
                        <td class="card-subtitle text-muted text-xs-center mb-1 mt-1" style="width:35%; border: 1px solid black; border-collapse: collapse; padding: 15px;"><?php echo $rating?> stars
                            <input name="review<?php echo $review_id ?>" value="0" id="review_star<?php echo $review_id ?>" type="hidden" postID="<?php echo $product_id ?>"/>
                        </td>
                        <td class="card-subtitle text-muted text-xs-center mb-1 mt-1" style="width:20%; border: 1px solid black; border-collapse: collapse; padding: 15px;"><?php echo $summary?></td>
                        <td class="card-subtitle text-muted text-xs-center mb-1 mt-1" style="width:45%; border: 1px solid black; border-collapse: collapse; padding: 15px;"><?php echo $detail?></td>
                    </tr>

               <?php

		                } 
	                }

	                else {					    
		    
	                }
	
                ?>

                </table>
  	        </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
	      </form>
	    </div>
	  </div>
	</div>


	<div class="modal fade" id="reviewModal<?php echo $product_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title text-xs-center" id="myModalLabel">Reviews</h4>
	      </div>

	      <form action="<?php echo basename($_SERVER['PHP_SELF'])?>" method="POST">
	      	<div class="modal-body">
			  	<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Review Summary</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="summary">
				  </div>
				</div>
			  	<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Review Details</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="details">
				  </div>
				</div>

    		    <input class="form-control" type="hidden" id="example-text-input" value="<?php echo $servername?>" name="servername">
    		    <input class="form-control" type="hidden" id="example-text-input" value="<?php echo $username?>" name="username">
    		    <input class="form-control" type="hidden" id="example-text-input" value="<?php echo $password?>" name="password">
    		    <input class="form-control" type="hidden" id="example-text-input" value="<?php echo $dbname?>" name="dbname">

    		    <input class="form-control" type="hidden" id="example-text-input" value="<?php echo $product_id?>" name="productid">
    
                <!--Start Yaniv-->

                <script language="javascript" type="text/javascript">
                    $(function() {
                        $("#rating_star<?php echo $product_id ?>").codexworld_rating_widget({
                            starLength: '5',
                            initialValue: '',
                            callbackFunctionName: 'processRating',
                            imageDirectory: 'images/',
                            inputAttr: 'postID'
                        });
                    });
                </script>

                     <h1></h1>
<!--                    <input name="rating<?php echo $product_id; ?>" value="0" id="rating_star<?php echo $product_id ?>" type="hidden" postID=<?php echo $product_id; ?>/>
                    <div class="overall-rating">(Click on stars to set rating)</div>
-->
			  	<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Rating</label>
				  <div class="col-xs-8">
                    <select name="rating<?php echo $product_id; ?>" id="rating_star<?php echo $product_id ?>"  style="width: 100%">
                          <option value="1">1 star</option>
                          <option value="2">2 stars</option>
                          <option value="3">3 stars</option>
                          <option value="4">4 stars</option>
                          <option value="5">5 stars</option>
                    </select>
                    </div>
				</div>
	      	</div>
		    <div class="modal-footer">
		       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		       <button type="submit" class="btn btn-primary bg-inverse text-white" name="review<?php echo $product_id?>">Submit</button>
		    </div>
	      </form>
	    </div>
	  </div>
	</div>

	<?php include 'review_router.php';?> 
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	