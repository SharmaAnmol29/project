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
    <title>Thanks Page</title>
    <?php include("headerfiles.php"); ?>
    <style>
        .container{
            width:1210px;
        }
    </style>
</head>
<body>
<?php
include "userheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-3">Thanks Page</h2>
            <h1 class="text-center mb-3">Thanks for Booking with us. We will contact you soon...</h1>
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

