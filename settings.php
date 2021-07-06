<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>


<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Cellular Planet </title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
	</head>
    <body>
        <?php include 'header.php'; ?><br><br><br>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                    <h4>Change Password</h4></div>
					<div class="panel-body">
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                       Old Password:<input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                       New Password:<input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                        Re-type New Password:<input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div><center>
                        <button type="submit" class="btn btn-primary">Change</button></center>
                        <?php
                        echo "<br><br><b class='red'>" .isset($_GET['error']). "</b>";
                        ?>
                    </form>
					</div>
                </div>
            </div>
        </div>
	</div>
</div>
	</div>
        <?php include 'footer.php'; ?>
    </body>
</html>