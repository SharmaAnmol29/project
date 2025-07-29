<?php
include "headerfiles.php";
session_start();
if (isset($_SESSION['logged_in']))
{
    ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php
include "adminheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1 class="text-center">Admin login page </h1>
        </div>
    </div>
</div>
<div class="offcanvas-bottom">
    <?php
    include "footer.php";
    ?>
</div>
    <?php
}
else
{
    echo '<h1 class="text-center">You are not logged in. <a href="homepage.php">Click here</a> to Go To Homepage.</h1>';
}
?>

</body>
</html>

