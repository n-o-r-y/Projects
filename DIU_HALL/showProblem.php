<?php
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
$sql="SELECT * FROM suggestion";
$result=mysqli_query($data,$sql);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Dashboard</title>
    <link rel="stylesheet" href="admin_home.css">
    <link rel="stylesheet" href="hallOfficer_sidebar.css">
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
        <h1>Suggestions</h1>
        <br>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font: size 15px;">Name</th>
                <th style="padding: 20px; font: size 15px;">Email</th>
                <th style="padding: 20px; font: size 15px;">Suggestion</th>
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {
             ?>
            <tr>
                <td style="padding:20px">
                    <?php echo "{$info['name']}"; ?>
                </td>
                <td style="padding:20px">
                    <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding:40px">
                    <?php echo "{$info['suggestions']}"; ?>
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