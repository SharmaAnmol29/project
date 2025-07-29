<?php
include("connectionfile.php");
$email = $_POST['email'];
$newname = $_POST['displayname'];
$newlogo = $_POST['logo'];
$newpic = $_POST['pic'];
$description = $_POST['description'];
$newprice = $_POST['basicprice'];
$newmobileno = $_POST['mobileno'];
$upt = "update professional_signup set description='$description',logo='$newlogo',display_pic= '$newpic',mobile_no='$newmobileno',basic_price='$newprice',display_name='$newname' where email='$email'";
$res = mysqli_query($con,$upt);
if($res){

    header("Location:pro_profile_update.php?result=1");
}else{

    header("Location:pro_profile_update.php");
}