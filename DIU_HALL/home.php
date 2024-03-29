<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Design</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="navbar.css">
    <?php
   include 'boostrap_css.php';
    ?>
</head>
<body>
    <?php
   include 'navbar.php';
    ?>
    <div id="section-2" class="login-form">
        <div class="content">
            <h1>Welcome to DIU StayHUB</h1>
            <p class="par">Experience comfort and convenience like never before.<br> Explore our state-of-the-art facilities
                and make your stay memorable.</p>
                <a class="btn btn-primary" href="apply.php">Apply</a>
        </div>
        <div class="form">
            <form action="login_check.php" method="POST" class="form_deg">
            <center class="title_log">
            <h3><u>Login</u></h3>
                <h5>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage'];
                    ?>
				      </h5>
            </center>

            <div class="adm_int">
                <label class="label_text">User Name</label>
                <input class="input_deg" type="text" name="user_name">
            </div>
            <div class="adm_int">
                <label class="label_text">Password</label>
                <input class="input_deg" type="Password" name="password">
            </div>
            <center>
            <div class="adm_int">
                <input class="btn btn-primary" type="Submit" id="submit_btn" value="Login" >
       
            </div>
            </center>
           
            </form>
        </div>
    </div>

    <?php
   include 'footer.php';
   ?>
</body>
</html>

