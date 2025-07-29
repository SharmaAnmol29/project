<?php
include("connectionfile.php");
$categoryname = $_GET['categoryname'];
$delete = "delete from category_table where category_name='$categoryname'";
$res = mysqli_query($con,$delete);
if($res){
    header("Location:categorylist.php");
}else{
    echo "<h1>Server Code Error</h1>";
}