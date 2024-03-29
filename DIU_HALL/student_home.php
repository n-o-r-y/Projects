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
<html>

<head>
  <link rel="stylesheet" type="text/css" href="student_home.css">
  <link rel="stylesheet" href="payment.css">
  <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php
   include 'student_home_de.php';
   ?>
  <div class="button-container">

  <!-- Header -->
        <div class="header">
          <h2>Hall Management</h2>
        </div>
        
    <!-- Row 1 -->
    <div class="button-wrap">
      <a href="student_home_de.php">
      <button class="custom-button">
        <img src="real-estate.png" alt="Button Logo">
      </button>
      </a>
      <div class="button-text"></div>
    </div>
    <div class="button-wrap">
      <button class="custom-button">
        <img src="sleeping.png" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>
    <div class="button-wrap">
    <a href="payment.php">
      <button class="custom-button">
        <img src="money.png" alt="Button Logo">
      </button>
    </a>
      <div class="button-text"></div>
    </div>

    <!-- Row 2 -->
    <div class="button-wrap">
      <a href="apply.php">
      <button class="custom-button">
        <img src="bus.png" alt="Button Logo">
      </button>
      </a>
      <div class="button-text"></div>
    </div>

    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>

    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>

    <!-- Row 3 -->
    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>

    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>

    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>

    <!-- Row 4 -->
    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>

    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>
    
    <div class="button-wrap">
      <button class="custom-button">
        <img src="#" alt="Button Logo">
      </button>
      <div class="button-text"></div>
    </div>
  </div>
  
  <?php
   include 'footer.php';
   ?>
</body>

</html>