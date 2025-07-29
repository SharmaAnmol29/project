<?php
@session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php"); ?>
</head>
<body>
<?php
include "proheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card-body offcanvas-body shadow-lg" style="border-radius:1rem">
                <h1 class="text-center text-primary">User Change Password</h1>
                <form method="post" action="pro_pass_change_action.php">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Email ID</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Enter Old Password</label>
                            <input type="password" name="oldpassword" id="oldpassword" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Enter New Password</label>
                            <input type="password" name="newpassword" id="newpassword" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" value="Change Password" class="btn btn-primary">
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
<?php
include "footer.php";
?>
</body>
</html>