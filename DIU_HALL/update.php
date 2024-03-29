<?php
session_start();
$host="localhost";
$user="root";
$password="";
$database="diu_hall";
$data=mysqli_connect($host,$user,$password,$database);
if(isset($_GET['student_id']))
{
    $user_id=$_GET['student_id'];
    $update_sql = "UPDATE information SET name='Rahat' WHERE id='$user_id'";
if ($data->query($update_sql) === TRUE) {
    echo "Record with ID '$user_id' updated successfully";
} else {
    echo "Error updating record: " . $data->error;
}
}
?>