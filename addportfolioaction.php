<?php
include "connectionfile.php";
@session_start();
$profid= $_SESSION['PROFID'];
$eventname = $_POST['eventname'];
$photo = $_POST['photo'];
$video = $_POST['video'];
$caption = $_POST['caption'];

$select = "select * from portfolio where event_name = '$eventname'";

$res1 = mysqli_query($con,$select);
if (mysqli_num_rows($res1)>0){
    header("Location:addportfolio.php?result=3");
}
else{
    $insert = "insert into portfolio values ('','$eventname','$caption','$photo','$video','$fk')";
    $result = mysqli_query($con, $insert);
    if ($result) {
        header("Location:addportfolio.php?result=1");
    } else {
        header("Location:addportfolio.php?result=2");
    }

}
//$fullname = $_POST['fullname'];
//$tempname = $_FILES['photo']['tmp_name'];
//$filename = $_FILES['photo']['name'];
//
//move_uploaded_file($tempname,"uploadedimages/$filename");


?>

