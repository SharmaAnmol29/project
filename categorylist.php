<?php
include("connectionfile.php");
include "headerfiles.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
</head>
<body>
<?php
include "publicheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card-body offcanvas-body shadow-lg" style="border-radius:1rem">
                <h2 class="text-center " style="color: #263944">Category List</h2>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                    $select = "select category_id,category_name,description from category_table";
                    $res = mysqli_query($con,$select);
                    while($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$row['category_id']."</td>";
                        echo "<td>".$row['category_name']."</td>";
                        echo "<td>".$row['description']."</td>";
                        echo "<td><a href='Editcategory.php?categoryname=".$row['category_name']."' class='btn btn-primary text-white'>Edit</a></td>";
                        echo "<td><a href='deletecategory.php?categoryname=".$row['category_name']."' class='btn btn-danger text-white'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="col-md-6 offset-3">
            <?php
            if(isset($_GET['result'])){
                if($_GET['result'] == 1){
                    echo "<div class='alert alert-success alert-dismissible'>Data Updated Successfully <button class='btn-close' type='button' data-bs-dismiss='alert'></button></div>";
                }else {
                    echo "<div class='alert alert-danger'>Server Code Error.</div>";
                }
            }
            ?>
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

