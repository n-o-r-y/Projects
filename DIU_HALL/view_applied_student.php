<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
$sql="SELECT * FROM applied_students";
$result=mysqli_query($data,$sql);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Dashboard</title>
    <link rel="stylesheet" href="hallOfficer_sidebar.css">
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
        <h1>Details of Applied Students</h1>
         
        <br>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font: size 15px;">Name</th>
                <th style="padding: 20px; font: size 15px;">Student Id</th>
                <th style="padding: 20px; font: size 15px;">Department</th>
                <th style="padding: 20px; font: size 15px;">Email</th>
                <th style="padding: 20px; font: size 15px;">Phone</th>
                <th style="padding: 20px; font: size 15px;">Mother's Phone Number</th>
                <th style="padding: 20px; font: size 15px;">Fathers's Phone Number</th>
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
                    <?php echo "{$info['department']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['phone']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['mothers_phone']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['fathers_phone']}"; ?>
                </td>
                <td style="padding: 20px">
                    <?php echo "<a href='add_applied_student.php?student_id={$info['id']}'>Add Done</a>"; ?>
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