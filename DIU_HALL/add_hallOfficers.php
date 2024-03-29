<?php
session_start();
if(!isset($_SESSION['user_name']))
{
    header("location:home.php");
}
else if($_SESSION['user_type']=='student')
{
    header("location:home.php");
}
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
if(isset($_POST['add_hallOfficers']))
{
    $username=$_POST['user_name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_pass=$_POST['password'];
    $user_room=$_POST['room'];
    $user_id=$_POST['employee_id'];
    $usertype="officers";

    $sql = "INSERT INTO hall_officers(user_name,employee_id,email, phone, password,room,user_type)
     VALUES('$username','$user_id','$user_email', '$user_phone', '$user_pass','$user_room','$usertype')";
    $sql2 = "INSERT INTO user(user_name,email, phone,user_type,password)
    VALUES('$username','$user_email', '$user_phone','$usertype','$user_pass')";
    
    $result=mysqli_query($data,$sql);
    $result2=mysqli_query($data,$sql2);
    if($result)
    {
        echo "<script type='text/javascript'>
            alert('Data Added');
        </script>";
    }
    else
    {
        echo "<script type='text/javascript'>
            alert('Data Not Added');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Dashboard</title>
    <link rel="stylesheet" href="admin_home.css">
    <link rel="stylesheet" href="admin_sidebar.css">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="footer.css">
    <style type="text/css">
        label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top:10px;
            padding-bottom: 10px;
        }
        .div_deg
        {
            width:400px;
        }
    </style>
    <?php
   include 'boostrap_css.php';
    ?>
</head>
<body>
<div>
  <?php
   include 'navbar.php';
   ?>

      <div class="logout">
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
  </div>
  <?php
   include 'admin_sidebar.php';
   ?>
   <center>
   <div>
    <br>
    <h1>Add Hall Officers</h1>
    <br>
    <br>
        <div class="div_deg">
            <form action="#" method="POST">

                <div>
                    <label>User Name :</label>
                    <input type="text" name="user_name">
                </div>
                <div>
                    <label>Employee Id :</label>
                    <input type="text" name="employee_id">
                </div>
                <div>
                    <label>Email : </label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label>Phone :</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label>Password :</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <label>Room Number:</label>
                    <input type="text" name="room">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" name="add_hallOfficers" value="Add">
                </div>
            </form>
        </div>
        </center>
        <br>
    <br> 
    <?php
   include 'footer.php';
   ?>
</body>
</html>