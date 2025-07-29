<?php
include("connectionfile.php");
include("headerfiles.php");

$categoryname = $_GET['categoryname'];
$sel1 = "select * from category_table where category_name='$categoryname'";
$res1 = mysqli_query($con,$sel1);
$row1 = mysqli_fetch_array($res1);
$description = $row1['description'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
</head>
<body>
<?php
include "publicheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-4">
            <div class="card-body offcanvas-body shadow-lg" style="border-radius:1rem">
                <h2 class="text-center" style="color:#263944 ">Update User Details</h2>
                <form method="post" action="editcategoryaction.php">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Enter New Name</label>
                            <input type="name" name="categoryname" id="categoryname" class="form-control" placeholder="<?php echo $categoryname; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Enter New Description</label>
                            <textarea type="description" name="description" id="description" class="form-control" placeholder="<?php echo $description; ?>"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="background:#263944"><i class="fa-solid fa-pencil"></i> Update</button>
                            <!--                        <input type="submit" value="Update" class="btn btn-primary">-->
                        </div>
                        <?php
                        if(isset($_GET['result'])){
                            if($_GET['result'] == 1){
                                echo "<div class='alert alert-success'>Data Updated Successfully</div>";
                            }else {
                                echo "<div class='alert alert-danger'>Server Code Error.</div>";
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