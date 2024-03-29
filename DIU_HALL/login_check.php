<?php
    error_reporting(0);
    session_start();

    $host="localhost";
    $user="root";
    $password="";
    $database="diu_hall";
    $data=mysqli_connect($host,$user,$password,$database);#store the database in data variable


    if($data===false)
    {
        die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST") #if click on the login then the post method will work
    {
        $name= $_POST['user_name'];
        $pass= $_POST['password'];
        
        $sql="SELECT* FROM user WHERE user_name='".$name."' AND password='".$pass."'"; #user is the table name
        
        $result=mysqli_query($data,$sql);#check the given and the table user name and pass
        $row=mysqli_fetch_array($result);#get some specific data
      
        if($row["user_type"]=="student")
        {
            
			$_SESSION['user_name']=$name;
			$_SESSION['user_type']="student";
            header("location:student_home.php");
        }
        else if($row["user_type"]=="admin")
        {
            
			$_SESSION['user_name']=$name;
			$_SESSION['user_type']="admin";
            header("location:admin_home.php");
        }
        else if($row["user_type"]=="officers")
        {
            
			$_SESSION['user_name']=$name;
			$_SESSION['user_type']="officers";
            header("location:hall_officerHome.php");
        }
        else
        {
         
            $message= "username or password do not match";
			$_SESSION['loginMessage']=$message;
			header("location:home.php");
        }

    }
?>