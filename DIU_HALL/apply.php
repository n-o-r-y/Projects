<?php
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);

if(isset($_POST['add_user']))
{
    $username=$_POST['user_name'];
    $user_id=$_POST['student_id'];
    $user_dept=$_POST['department'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_mom_phone=$_POST['mothers_phone'];
    $user_dad_phone=$_POST['fathers_phone'];
    $usertype="student";

    $sql = "INSERT INTO applied_students(user_name,student_id,department,email, phone,mothers_phone,fathers_phone,user_type) 
    VALUES('$username','$user_id','$user_dept','$user_email', '$user_phone', '$user_mom_phone','$user_dad_phone','$usertype')";
  
    $result=mysqli_query($data,$sql);
    if($result)
    {
        echo "
<script type='text/javascript'>
            alert('Applied Successfull');
        </script>";
    }
    else
    {
        echo "
<script type='text/javascript'>
            alert('Try Again');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Applied Students</title>
    <link rel="stylesheet" href="apply.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="payment.css">
    <?php
   include 'boostrap_css.php';
    ?>
  </head>
  <body>
   
    <?php include 'navbar.php'; ?>
    <center>
    <br>
    <h1>Apply For DIU HALL</h1>
    <br>
    <br>
        <div class="input">
            <form action="#" method="POST">
                <div>
                   <input type="text" name="user_name" placeholder="Full Name" />
                </div>
                <br>
                <div>
                <input type="text" name="student_id" placeholder="ID" />
                </div>
                <br>
                <div>
                <input type="text" name="department"  placeholder="Department Name" />
                </div>
                <br>
                <div>
                <input type="mail" name="email" placeholder="Email" />
                </div>
                <br>
                <div>
                <input type="text" name="phone" placeholder="Phone Number" />
                </div>
                <br>
                <div>
                <input type="text" name="mothers_phone" placeholder="Mother's Phone Number" />
                </div>
                <br>
                <div>
                <input type="text" name="fathers_phone" placeholder="Father's Phone Number" />
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" name="add_user" value="Applied">
                </div>
            </form>
        </div>
        </center>
  
    <div class="info">
      <p class="terms"> By clicking sing up button, you are in agreement of the terms and condtions. </p>
      <br />
      <a href="home.php" id="acc">Already have an account?</a>
    </div>
     <?php
    include 'footer.php';
    ?>
  </body>
</html>