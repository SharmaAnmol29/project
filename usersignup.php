<?php
include"headerfiles.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Signup</title>
</head>
<body>
<?php
include "publicheader.php";
?>
<div class="container ">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 mt-3 ">
            <div class="card-body offcanvas-body shadow-lg" style="border-radius:1rem">
                <form method="post" action="usersignupaction.php" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2 class="text-center">Create a user account</h2>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input class="form-control" name="displayname" id="dispalyname" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input class="form-control" name="mobileno" id="mobileno" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label class="form-label">Select Display Pic</label>
                            <input class="form-control" type="file" name="displaypic" id="dispalypic" placeholder="pic">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" value="Submit" class="btn text-white text-center " style="background: #263944">
                        </div>
                        <?php
                        if(isset($_GET['result'])){
                            if($_GET['result'] == 1){
                                echo "<div class='alert alert-success alert-dismissible'><button class='btn-close' type='button' data-bs-dismiss='alert'></button>User Created Successfully</div>";
                            }elseif ($_GET['result']==2){
                                echo "<div class='alert alert-danger'>Server Code Error.</div>";
                            }else{
                                echo "<div class='alert alert-danger'>ID already Exsits.</div>";
                            }
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