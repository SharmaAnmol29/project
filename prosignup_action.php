<?php
include "connectionfile.php";

$proemail = $_POST['email'];
$propassword = $_POST['password'];
$proname = $_POST['displayname'];
$logo = $_POST['logo'];
$pic = $_POST['pic'];
$description = $_POST['description'];
$basicprice = $_POST['basicprice'];
$mobileno = $_POST['mobileno'];
$otp = $_POST['otp'];

$select = "select * from professional_signup where email = '$proemail'";

$res1 = mysqli_query($con,$select);
if (mysqli_num_rows($res1)>0){
    header("Location:pro_signup.php?result=3");
}
else{
    $insert = "insert into professional_signup values ('','$proemail','$propassword' ,'$proname' ,'$logo' ,'$pic' ,'$description' ,'$basicprice' ,'$mobileno' ,'$otp' )";
    $result = mysqli_query($con, $insert);
    if ($result) {
        header("Location:pro_signup.php?result=1");
    } else {
        header("Location:pro_signup.php?result=2");
    }

}

?>