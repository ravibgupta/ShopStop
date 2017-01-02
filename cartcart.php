 <?php
// Start the session
session_start();
error_reporting(0);


            include "connection_venkatesh.php";

            $company = "San Jose Downtown University";

            $conn = venkateshConnection();
    
            // Check connection
            if ($conn->connect_error) {
                echo("error");
                die("Connection failed: " . $conn->connect_error);
            }   
    
?>

 <?php 
  
    if(isset($_POST['submit'])){ 
          
        foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
            }
            else{ 
                $_SESSION['cart'][$key]['quantity']=$val; 
            } 
        } 
          
    } 
  
?> 
  


<form method="post" action="orderproducts_display.php"> 
      
    <div class="container">
    <div class = "row">
            
            <table class = "table table-hover">
                <thead>
                    <tr>
                    <th class="col-md-7">Product</th>
                    <th class="col-md-2">Quantity</th>  
                    <th class="col-md-1">Price</th>
                    <th class="col-md-2">Total</th>
                    <th> </th>
                    </tr>
                </thead>
          
        <?php 
       
        
                   // { 
                     //  if($value==0)
                       //{
                         
                       //unset($_SESSION['cart'][$key]); 
                       //}
                    //} 

        //echo $_SESSION['cart']['4001']['quantity']*$row['price']; 
          
            $sql="SELECT * FROM cartproducts WHERE product_id IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value)
                    { 
                        $sql.=$id.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).") ORDER BY product_id ASC"; 
                    $result=mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
                    $totalprice=0; 
                     if ($result->num_rows > 0) 
                     {
                       
                    while($row = $result->fetch_assoc())
                    { 
                        //$row = $result->fetch_assoc()
                        $subtotal=$_SESSION['cart'][$row['product_id']]['quantity']*$row['price']; 
                        //echo "hello";
                        //echo $_SESSION['cart'];
                        //echo $_SESSION['cart'][$row['id_product']];
                        //echo $row['price'];
                        //echo "$_SESSION['cart'][$row['id_product']]";
                         
                        $totalprice+=$subtotal; 
                    ?> 
                    <tbody>
                        <tr> 
                        <td class="col-md-7">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src=<?php echo  $row["image"]?> style="width: 150px; height: 150px;"> </a>
                            <div class="media-body">

                                <h6 class="media-heading" style="margin-left: 100px"><?php echo $row["product_name"]?></a></h6>
                                
                               
                            </div>
                        </div></td>

                        <td class="col-md-2" style="text-align: center">
                        <input type="number" name="quantity[<?php echo $row['product_id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['product_id']]['quantity'] ?>" class="form-control text-center" >
                        
                        </td>
                        <td class="col-md-1 text-center"><strong><?php echo $row['price']?>$</strong></td>
                        <td class="col-md-2 text-center"><strong><?php echo $_SESSION['cart'][$row['product_id']]['quantity']*$row['price']?>$</strong></td>
                        
                           
                        </tr> 
                        </tbody>
                    <?php 
                          
                    }
                    } 
        ?> 
                    <tr> 
                        <td class="thumbnail pull-right" colspan="4">Total Price:<strong><?php echo $totalprice ?>$</strong></td> 
                    </tr> 
          
    </table>

    <br />
    <button class="btn pull-right" type="submit" name="submit">Continue Checkout</button>  
    <button type="submit" name="submit">Update Cart</button> 
    </div>
</form> 
<br /> 
<p>To remove an item set its quantity to 0. </p>
