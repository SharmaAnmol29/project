<?php
@session_start();
include("connectionfile.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Professionals</title>
    <?php include("headerfiles.php"); ?>
    <style>
        .container{
            width:1210px;
        }
    </style>
</head>
<body>
<?php
if (!isset($_SESSION['useremail'])) {
    include("publicheader.php");
} else {
    include("userheader.php");
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Our Professionals</h2>
            <div class="row">
                <?php
                $qr = "select * from professional_signup order by pid DESC";
                $res = mysqli_query($con,$qr);
                while($row = mysqli_fetch_array($res)){
                    ?>
                <div class="col-md-4 col-sm-6 gallery-grid">
                    <div class="col-md-12 col-sm-12 singledivpro">
                        <a href="allpackages.php?pid=<?php echo $row['pid']; ?>" class="jzBoxLink item-hover" title="Events Venue">
                            <img src="<?php echo $row['display_pic'] ?>" alt=" " style="width:100%;height:200px;" />
                            <hr>
                            <h3 class="bg-light"><?php echo $row['display_name']; ?></h3>
                            <div class="row">
                                <div class="col-md-4 col-sm-12"><span><i class="fa fa-phone-square"></i> <?php echo $row['mobile_no']; ?></span></div>
                                <div class="col-md-8 col-sm-12 text-right text-lowercase"><span><i class="fa fa-envelope-square"></i> <?php echo $row['email']; ?></span></div>
                            </div>
                            <hr>
                            <p class="text-justify"><?php echo $row['description']; ?></p>
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-bottom">
    <?php
    include "footer.php";
    ?>
</div>
</body>
</html>

