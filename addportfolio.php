<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Category</title>
    <?php include("headerfiles.php"); ?>
</head>
<body>
</body>
<?php
include "proheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 mt-4 ">
            <div class="card-body offcanvas-body shadow-lg" style="border-radius:1rem">
                <form method="post" action="addportfolioaction.php" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2 class="text-center" style="color: #263944">Add Portfolio</h2>
                            <input class="form-control" type="name" name="name" id="name" placeholder="Enter Event Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <textarea class="form-control" name="caption" id="caption" placeholder="Enter Caption" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input class="form-control" type="file" name="photo" id="photo" placeholder="Select Photo" rows="3"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input class="form-control" type="file" name="video" id="video" placeholder="Select Video" rows="3"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" value="Submit" class="btn text-white text-center " style="background: #263944">
                        </div>
                        <?php
                        if(isset($_GET['result'])){
                            if($_GET['result'] == 1){
                                echo "<div class='alert alert-success'>Data Saved Successfully</div>";
                            }elseif ($_GET['result']==2){
                                echo "<div class='alert alert-danger'>Server Code Error.</div>";
                            }else{
                                echo "<div class='alert alert-danger'>Category ID already Exsits.</div>";
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>


