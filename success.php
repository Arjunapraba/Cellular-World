<?php

require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = isset($_SESSION['user_id']);
$item_ids_string =isset( $_GET['item_id']);

$query = "UPDATE users_items SET status='Confirmed' WHERE user_id='". $user_id ."' AND item_id IN ('". $item_ids_string ."') and status='Added to cart' ";
mysqli_query($con, $query) or die(mysqli_error($con));
?>

<html>
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success |Mobile Store</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'header.php'; ?><br><br><br>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="index.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div><br><br><br>
        <?php include 'footer.php';
        ?>
    </body>
</html>