<?php
include "connectionfile.php";

$email = $_POST['email'];
$bookingdate = date('Y-m-d');
$fordate = date('Y-m-d',strtotime($_POST['fordate']));
$fortime = $_POST['fortime'];
$amount = $_POST['amount'];
$status = "pending";
$method = $_POST['paymentmethod'];
$packageid = $_POST['package_id'];


$select = "select * from booking_table where user_email = '$email'";

$res1 = mysqli_query($con,$select);
if (mysqli_num_rows($res1)){
    $insert = "insert into booking_table values ('','$email','$packageid' ,'$bookingdate' ,'$fordate' ,'$amount' ,'$status' ,'$method', $fortime )";
    $result = mysqli_query($con, $insert);
    if ($result) {

        header("Location:userhomepage.php?bookingresult=1");
    }
}
else{
    header("Location:bookpackage.php?result=2");

}

?>