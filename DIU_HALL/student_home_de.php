<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
$sql="SELECT * FROM add_user";
$result=mysqli_query($data,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .user_details
      {
        margin-top: 70px;
        margin-right: 200px;
      }
    </style>
</head>
<body>
<div class="user_details">
  <?php
        if ($result) {
            $userDetails = $result->fetch_assoc();
            echo "<h3>Profile</h3>";
            echo "<p>Name: " . $_SESSION['user_name'] . "</p>";
            echo "<p>Student ID: " . "203-15-14472". "</p>";
            echo "<p>Email: " . "shakil@diu.edu.bd" . "</p>";
            echo "<p>Transport Card: " . "OK" . "</p>";
            echo "<p>Hall Clearance: " . "OK" . "</p>";
        } 
  ?>
  </div>
</body>
</html>