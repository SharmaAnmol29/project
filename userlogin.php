<?php
include"headerfiles.php";
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Admin</title>
</head>
<body>
<?php
include "publicheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card-body offcanvas-body shadow-lg" style="border-radius:1rem">
                <form method="post" action="userloginaction.php">
                    <h2 class="text-center" style="color: #263944">User Login</h2>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" value="Login" class="btn text-white text-center " style="background: #263944;color:#fff;">
                        </div>
                        <?php
                        if (isset($_GET['result'])) {
                            echo "<div class='alert alert-info'>" . $_GET['result'] . "</div>";
                        }
                        ?>
                    </div>
                </form>
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

