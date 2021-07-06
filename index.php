<?php
require("common.php");
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Cellular Planet </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
            </head>
    <body style="padding-top: 50px;">
        <?php
        include 'header.php';
		include 'check-if-added.php';
        ?>
        <div class="container" id="content">
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h2>Welcome to our Premium Mobile paradise</h2>
                <p><h3>We provide all brand Premium mobile at affordable prices!....</h3></p>
             </div>
            <hr>

            <div class="row text-center" id="products">
			       <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <center>
                            <img src="images/iphone 12 pro.jpg" alt=""></center>
                        <div class="caption">
                         <center><h3>Iphone 12 pro</h3>
                            <p>Price: Rs. 1,24,700.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                  if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
               
			   
                   <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/S20 ultra.jpg" alt="">
                        <div class="caption">
                            <center><h3>Samsung S20 Ultra </h3>
                            <p>Price: Rs. 48,999.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
			  
			       <div class="col-md-4 col-sm-6 home-feature">
                                   <div class="thumbnail"><center>
                                           <img src="images/ROG.jpg" alt=" "></center>
                        <div class="caption">
                           <center><h3>Asus ROG phone 5</h3>
                            <p>Price: Rs. 49,999.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
		</div>
                  
				   <div class="row text-center" id="products">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail"><center>
                            <img src="images/mi11 ultra.jpg" alt=""></center>
                        <div class="caption">
                            <center><h3>Xiaomi 11 Ultra 5G</h3>
                            <p>Price: Rs. 69,999.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else{
                                if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
				

                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail"><center>
                            <img src="images/oneplus.jpg" alt=""></center>
                        <div class="caption">
                            <center><h3>One plus 8pro</h3>
                            <p>Price: Rs. 55,000.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
				
				     <div class="col-md-4 col-sm-6">
                                         <div class="thumbnail"><center>
                                                 <img src="images/Nokia 8.3.jpg" alt=""></center>
                        <div class="caption">
                            <center><h3>Nokia 8.3 5G</h3>
                            <p>Price: Rs. 47,490.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                                         
                </div>
	       </div>
	  </div>
        <?php
        include 'footer.php';
        ?>
   
    </body> 
</html>