<?php
include("connectionfile.php");

$email = $_POST['email'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];

$sel1 = "select * from admin_table where email='$email'";
$res1 = mysqli_query($con,$sel1);
if(mysqli_num_rows($res1)>0){
    $row = mysqli_fetch_array($res1);
    if($oldpassword  == $row['password']){
        $upd = "update admin_table set password='$newpassword' where email='$email'";
        $res2 = mysqli_query($con,$upd);
        if($res2){
            header("Location:admin_password_change_action.php?result=Password Updated Successfully");
        }else{
            header("Location:admin_password_change_action.php?result=Server Code Error");
        }
    }else{
        header("Location:admin_password_change_action.php?result=Wrong Old Password");
    }
}else{
    header("Location:admin_password_change_action.php?result=Incorrect Email ID");
}



