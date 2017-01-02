 <?php
// Start the session
session_start();
error_reporting(0);


            include "connection_venkatesh.php";

            $company = "San Jose Downtown University";

            $conn = venkateshConnection();
    
            // Check connection
            if ($conn->connect_error)
            {
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

<form method="post" action="order_success.php"> 
      
    <div class="container">
    <div class = "row">
            <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong></strong></h3>
                </div>

                 <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
            
           
                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
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
                                    <td class="text-center"><?php echo $row["product_name"]?></td>
                                    <td class="text-center"><?php echo $row["price"]?></td>
                                    <td class="text-center"><?php echo $_SESSION['cart'][$row['product_id']]['quantity'] ?></td>
                                    <td class="text-right">$<?php echo $_SESSION['cart'][$row['product_id']]['quantity']*$row['price']?></td>
                                </tr>
                    
                        </tbody>
                    <?php 
                          
                    }
                    } 
        ?> 
                    
                        <p style="float:right" class="thumbnail pull-right" colspan="4">Total Price:<strong><?php echo $totalprice ?>$</strong></p> 
                    
          
    </table>

    
    
    </div>

<br>
<br>
    <div id="wrapper" style="float:left">
    <div class="container" align="center" >
    <div class="row" >
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-primary" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <div class="panel-heading" style = "background: black">

                <h3 class="panel-title" style = "display: inline;color: white;font-size:20px">
                        Payment Details
                    </h3>

                   
                    
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked" >
                <li class="active" ><a  href=""><span class="badge pull-right"><span class="glyphicon glyphicon-usd" ></span><?php echo $totalprice ?></span> Final Payment</a>
                </li>
            </ul>
            <br/>
            

             <button name="submit" style = "background: black" class="btn btn-success btn-lg btn-block" type="submit" value="submit">Submit</button>
        </div>
    </div>
</div>
</div>

</form> 

