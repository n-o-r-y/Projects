<?php
session_start();
if(!isset($_SESSION['user_name']))
{
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="admin_home.css">
  <link rel="stylesheet" href="hallOfficer_sidebar.css">
  <link rel="stylesheet" href="payment.css">
  <link rel="stylesheet" href="footer.css">
  <?php
   include 'boostrap_css.php';
    ?>
</head>

<body>
    <?php
   include 'hallOfficer_sidebar.php';
   ?>
    <?php
    include 'navbar.php';
    ?>
    <div class="logout">
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
  <div class="container">
  <div class="profile-circle">
    <img src="man.png" alt="Profile Image">
    <div class="profile-text">Hey, <?php echo $_SESSION['user_name']; ?></div>
</div>
  <br>
  <br>
    <div class="search-box">
      
      <div class="search-text">What do you want?</div>

      <input class="search-input" type="text" placeholder="Search for person">
    </div>
  </div>

    <div class="buttons">
      <div class="button-wrap">
        <button class="custom-button">
          <img src="email.png" alt="Button Logo">
        </button>
        <div class="button-text">Application</div>
      </div>
      <div class="button-wrap">
        <button class="custom-button">
          <img src="h.png" alt="Button Logo">
        </button>
        <div class="button-text">Problems</div>
      </div>
      <div class="button-wrap">
        <button class="custom-button">
          <img src="service.png" alt="Button Logo">
        </button>
        <div class="button-text">Service team</div>
      </div>
      <div class="button-wrap">
        <button class="custom-button">
          <img src="images/meeting.png" alt="Button Logo">
        </button>
        <div class="button-text">Meeting</div>
      </div>
    </div>
  </div>


  <?php
   include 'footer.php';
   ?>
</body>

</html>