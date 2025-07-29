<?php
@session_start();
include "connectionfile.php";
$profid=$_SESSION['PROFID'];
$packagename = $_POST['packagename'];
$packageprice = $_POST['packageprice'];
$description = $_POST['description'];
$select = "select * from packages where package_name = '$packagename'";

$res1 = mysqli_query($con,$select);
if (mysqli_num_rows($res1)>0){
    header("Location:newcategory.php?result=3");
}
else{
    $insert = "insert into packages values ('','$packagename' ,'$packageprice','$description' ,'$profid' )";
    $result = mysqli_query($con, $insert);
    if ($result) {
        header("Location:addpackage.php?result=1");
    } else {
        header("Location:addpackage.php?result=2");
    }

}

?>
