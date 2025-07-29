<?php
@session_start();
if(!isset($_SESSION['useremail'])){
    header("Location:userlogin.php");
}
include "connectionfile.php";
$email = $_SESSION['useremail'];
$sel1 = "select booking_table.*,packages.package_name,price,description from booking_table,packages where packages.package_id=booking_table.package_id and user_email ='$email'";
$res1 = mysqli_query($con,$sel1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php"); ?>
</head>
<body>
<?php include("userheader.php"); ?>
<h1 class="text-center">You are now logged in.</h1>
<br><br><br><br><br><br><br><br><br>
<div class="posts">
    <div class="container">
        <div class="w3-agileits-heading">
            <h3><span>Booked Packages</span></h3>
        </div>
        <div class="posts-grids">
            <div class="col-md-4 w3-agile-post-grids">
                <?php
                //                $pid = $_GET['package_id'];
                //                $select = "select * from packages where package_id=$pid";
                //                $res = mysqli_query($con,$select);
                $i = 1;
                while($row1 = mysqli_fetch_array($res1)){
                if ($i != 2 && $i != 5) {
                ?>
                <div class="w3-agile-post-info">
                    <h3><?php echo $row1['package_id']; ?>"><?php echo $row1['package_name']; ?></h3>
                    <h4><?php echo $row1['package_id']; ?>"><?php echo $row1['price']; ?></h4>
                    <p><?php echo $row1['description']; ?></p>
                </div>
            </div>
            <?php
            $i++;
            } else {
                ?>
                <div class="col-md-4 w3-agile-post-grids">
                    <div class="w3-agile-post-info">
                        <h4><?php echo $row1['package_name']; ?></a></h4>
                        <h4><?php echo $row1['price']; ?></h4>
                        <p><?php echo $row1['description']; ?></p>
                    </div>
                </div>
                <?php
            }
            }
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>