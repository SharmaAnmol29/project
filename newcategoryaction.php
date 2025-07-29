<?php
include "connectionfile.php";

$categoryname = $_POST['categoryname'];
$description = $_POST['description'];

$select = "select * from category_table where category_name = '$categoryname'";

$res1 = mysqli_query($con,$select);
if (mysqli_num_rows($res1)>0){
    header("Location:newcategory.php?result=3");
}
else{
    $insert = "insert into category_table values ('','$categoryname','$description')";
    $result = mysqli_query($con, $insert);
    if ($result) {
        header("Location:newcategory.php?result=1");
    } else {
        header("Location:newcategory.php?result=2");
    }

}

?>
