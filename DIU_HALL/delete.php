<?php
session_start();
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM add_user WHERE id='$user_id'";
    $result=mysqli_query($data,$sql);
    if($result)
    {
        $_SESSION['message']='Delete Successfull';
        header("location:view_student.php");
    }
}
?>