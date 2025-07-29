<?php
include "connectionfile.php";

$email = $_POST['email'];
$password = $_POST['password'];
$select = "select * from user_signup_table where email='$email'";
$run = mysqli_query($con,$select);
if(mysqli_num_rows($run)>0){
    $row = mysqli_fetch_array($run);
    if($password  == $row['password']){
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['useremail'] = $email;
        $_SESSION['mobileno'] = $row['mobile_no'];
        header("Location:userhomepage.php");
    }else{
        header("Location:userlogin.php?result=Server Code Error");
    }
}