<?php

require("common.php");

 
  $name =isset( $_POST['name']);
  $name = mysqli_real_escape_string($con, $name);

  $email = isset($_POST['email']);
  $email = mysqli_real_escape_string($con, $email);

  $password =isset( $_POST['password']);
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = isset($_POST['contact']);
  $contact = mysqli_real_escape_string($con, $contact);

  $city =isset($_POST['city']);
  $city = mysqli_real_escape_string($con, $city);

  $address =isset($_POST['address']);
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
 

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die(mysqli_error($con));
  $num = mysqli_num_rows($result);
  
   if ($num>0) {
    $m1= "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' .m1);
  } else if(!preg_match($regex_email, $email)) {
    $m1= "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m1);
  } 
    $query = "INSERT INTO users(name,email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    $result=mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    header('location: index.php');
 
?>
