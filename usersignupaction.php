<?php
include "connectionfile.php";

$useremail = $_POST['email'];
$userpassword = $_POST['password'];
$username = $_POST['displayname'];
$mobileno = $_POST['mobileno'];
$description = $_POST['description'];
$tempname = $_FILES['displaypic']['tmp_name'];
$filename = $_FILES['displaypic']['name'];

$path = "uploadedimages/".$filename;

move_uploaded_file($tempname,$path);

$select = "select * from user_signup_table where email = '$useremail'";

$res1 = mysqli_query($con,$select);
if (mysqli_num_rows($res1)>0){
    header("Location:pro_signup.php?result=3");
}
else{
    $insert = "insert into user_signup_table values ('$useremail','$userpassword' ,'$mobileno','$path' ,'$username' ,'$description','')";
    $result = mysqli_query($con, $insert);
    if ($result) {
        header("Location:usersignup.php?result=1");
    } else {
        header("Location:usersignup.php?result=2");
    }

}

?>
