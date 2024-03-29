<?php
session_start();
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
if($_GET['employee_id'])
{
    $user_id=$_GET['employee_id'];
    $sql="DELETE FROM hall_officers WHERE id='$user_id'";
    $result=mysqli_query($data,$sql);
    if($result)
    {
        $_SESSION['message']='Delete Successfull';
        header("location:view_hallOfficers.php");
    }
}
?>