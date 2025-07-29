<?php
include("connectionfile.php");
$categoryname = $_POST['categoryname'];
$description = $_POST['description'];
$upt = "update category_table set description='$description' where category_name='$categoryname'";
$res = mysqli_query($con,$upt);
if($res){

    header("Location:categorylist.php?result=1");
}else{

    header("Location:categorylist.php");
}