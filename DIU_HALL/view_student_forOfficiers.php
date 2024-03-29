<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user_name']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
$sql="SELECT * FROM add_user";
$result=mysqli_query($data,$sql);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Dashboard</title>
    <link rel="stylesheet" href="admin_home.css">
    <link rel="stylesheet" href="admin_sidebar.css">
    <link rel="stylesheet" href="admin_home.css">
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
   include 'hallOfficer_sidebar.php';
   ?>
    <div class="content">
        <center>
        <h1>Details of Students</h1>
        <?php
        if($_SESSION['message'])
        {
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);

        ?>
         
        <br>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font: size 15px;">Name</th>
                <th style="padding: 20px; font: size 15px;">Student Id</th>
                <th style="padding: 20px; font: size 15px;">Email</th>
                <th style="padding: 20px; font: size 15px;">Phone</th>
                <th style="padding: 20px; font: size 15px;">Password</th>
                <th style="padding: 20px; font: size 15px;">Room</th>
                <th style="padding: 20px; font: size 15px;">Seat</th>
                <th style="padding: 20px; font: size 15px;">Delete</th>
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {
             ?>
            <tr>
                <td style="padding:20px">
                    <?php echo "{$info['user_name']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['student_id']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['phone']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['password']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['room']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['seat']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "<a onClick=\" javascript: return confirm('Are You sure to Delete this Info?');\" href='delete.php?student_id={$info['id']}'>Delete</a>"; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        </center>
    </div>
    <br>
    <br>
    <br>

    <?php
   include 'footer.php';
   ?>
</body>
</html>