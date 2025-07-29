<?php
include("connectionfile.php");

$email = $_POST['email'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];

$sel1 = "select * from professional_signup where email='$email'";
$res1 = mysqli_query($con,$sel1);
if(mysqli_num_rows($res1)>0){
    $row = mysqli_fetch_array($res1);
    if($oldpassword  == $row['password']){
        $upd = "update professional_signup set password='$newpassword' where email='$email'";
        $res2 = mysqli_query($con,$upd);
        if($res2){
            header("Location:pro_password_change_action.php?result=Password Updated Successfully");
        }else{
            header("Location:pro_password_change_action.php?result=Server Code Error");
        }
    }else{
        header("Location:pro_password_change_action.php?result=Wrong Old Password");
    }
}else{
    header("Location:pro_password_change_action.php?result=Incorrect Email ID");
}


