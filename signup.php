<?php
require("common.php");
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | <h3>Cellular Planet</h3> </title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                       			<div class="panel panel-primary">
	                            <div class="panel-heading">SIGN-UP</div>
	                            <div class="panel-body"><p class="text-warning">Signup to make a puchase</p>
                                <form role="form" method="POST" action="signup_script.php">
                            <div class="form-group">
                           Name:<input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                            Email:<input type="email" class="form-control"  placeholder="Email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"  name="email" required ="true"> <?php echo isset($_POST['m1']); ?>
                            </div>
                            <div class="form-group">
                            Password:<input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                           Contact:<input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                            City:<input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                            Address:<input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            </form> 
	                   <div><center> <a href="signup_script.php" class="btn btn-primary" type="save" value="submit"> Sign-Up</a><center></div>
	                      <div class="panel-footer"><p>Already have an account?<a href="login.php" target="_blank">Login</a></p></div>
                        </div></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>

