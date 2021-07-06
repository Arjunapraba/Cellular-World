<?php
require 'common.php'

 .$name =isset( $_POST['name']);
  $name = mysqli_real_escape_string($con, $name);

 $email = isset($_POST['email']);
 $email = mysqli_real_escape_string($con, $email);
 
 $msg=isset($_POST['msg']);
 $msg=mysqli_real_escape_string($con,$msg);
 
  $regex_email = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
  
  if(preg_match($regex_email,$email)){
	  echo "Enter a valid mail id";
  }
  else{
    $query = "INSERT INTO contact(name,email,message)VALUES('" . $name . "','" . $email . "','" . $msg . "')";
    $result=mysqli_query($con, $query) or die(mysqli_error($con));
	echo "You're Form has been sent";
  }
  ?>