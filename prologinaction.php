<?php
@session_start();
include "connectionfile.php";

$email = $_POST['email'];
$password = $_POST['password'];
$select = "select * from professional_signup where email='$email'";
echo $select;
$run = mysqli_query($con,$select);
//$row1 = mysqli_fetch_array($run);
//$pid= $row1['pid'];
if(mysqli_num_rows($run)>0){
    $row = mysqli_fetch_array($run);
    if($password  == $row['password']){
        $_SESSION['logged_in'] = true;
        $_SESSION['PROFID']= $row['pid'];
        header("Location:prohomepage.php");
    }else{
        header("Location:prologin.php?result=Server Code Error");
    }
}
?>