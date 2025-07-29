<?php
include "connectionfile.php";

$email = $_POST['email'];
$password = $_POST['password'];
$select = "select * from admin_table where email='$email'";
$run = mysqli_query($con,$select);
if(mysqli_num_rows($run)>0){
    $row = mysqli_fetch_array($run);
    if($password  == $row['password']){
        session_start();
        $_SESSION['logged_in'] = true;
        header("Location:adminhome.php");
    }else{
        header("Location:adminlogin.php?result=wrong id or password");
    }
}