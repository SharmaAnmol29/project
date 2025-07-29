<?php
@session_start();
@ob_start();
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
<?php include("proheader.php"); ?>
<div class="container">
    <div class="row">
        <h1 class="text-center text-primary">Welcome to Professional HomePage</h1>
    </div>
</div>
<?php include("footer.php"); ?>

</body>
</html>