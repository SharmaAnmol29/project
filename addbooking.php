<?php
@session_start();
date_default_timezone_set('Asia/Kolkata');
include("connectionfile.php");
$package_id = $_POST['package_id'];
$price = $_POST['price'];
$address = $_POST['address'];
$date1 = date('Y-m-d');
$paymentmethod = $_POST['paymentmethod'];
$fordate = date('Y-m-d',strtotime($_POST['fordate']));
$fortime = date('h:i',strtotime($_POST['fortime']));

$insert = "insert into booking_table values (null,'".$_SESSION['useremail']."','$package_id','$date1','$fordate','$fortime','$price','Pending','$paymentmethod','$address')";
$res = mysqli_query($con,$insert);
if($res){
error_reporting(E_STRICT);

require_once('class.phpmailer.php');
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();


$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)

$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "vmm.testing.email@gmail.com";  // GMAIL username
$mail->Password = "otp@1234";            // GMAIL password

$mail->SetFrom('vmm.testing.email@gmail.com', 'Wedding Planner');

$mail->AddReplyTo("vmm.testing.email@gmail.com", "Wedding Planner");

$mail->Subject = "Booking Confirmed";

$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $body = "You have Booked a Package($package_id) with us. We will contact you soon after order confirmation by Company.";

$mail->MsgHTML($body);

$address = $email;
$mail->AddAddress($address, "Wedding Planner");

$mail->Send();
    echo "thankspage.php?msg=1";
}else{
    echo "thankspage.php?msg=2";
}