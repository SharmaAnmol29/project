<?php
include("connectionfile.php");

$email = $_POST['email'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];

$sel1 = "select * from user_signup_table where email='$email'";
$res1 = mysqli_query($con,$sel1);
if(mysqli_num_rows($res1)>0){
    $row = mysqli_fetch_array($res1);
    if($oldpassword  == $row['password']){
        $upd = "update user_signup_table set password='$newpassword' where email='$email'";
        $res2 = mysqli_query($con,$upd);
        if($res2){
            header("Location:user_password_change.php?result=Password Updated Successfully");
        }else{
            header("Location:user_password_change.php?result=Server Code Error");
        }
    }else{
        header("Location:user_password_change.php?result=Wrong Old Password");
    }
}else{
    header("Location:user_password_change.php?result=Incorrect Email ID");
}



