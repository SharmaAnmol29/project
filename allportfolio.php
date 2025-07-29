<?php
@session_start();
include("connectionfile.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Portfolio</title>
    <?php include("headerfiles.php"); ?>
    <script>
        function opnModelBooking(packageid, price) {
            document.getElementById('package_id').value = packageid;
            document.getElementById('price').value = price;
            $('#mdlAddBooking').modal('show');
        }

        function addBooking() {
            var xmlhttp = new XMLHttpRequest();
            var formData = new FormData();
            var package_id = document.getElementById('package_id').value;
            var price = document.getElementById('price').value;
            var address = document.getElementById('address').value;
            var fordate = document.getElementById("fordate").value;
            var fortime = document.getElementById("fortime").value;
            var paymentmethod = document.getElementById('paymentmethod').value;
            formData.append("package_id", package_id);
            formData.append("price", price);
            formData.append("address", address);
            formData.append("fordate", fordate);
            formData.append("fortime", fortime);
            formData.append("paymentmethod", paymentmethod);
            if (paymentmethod == "Online") {

            } else {

            }

        }
    </script>
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
            <h2>Our Portfolio</h2>
            <div class="row">
                <?php
                $qr = "select * from portfolio order by id DESC";
                $res = mysqli_query($con, $qr);
                while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <div class="col-md-4 col-sm-6 gallery-grid">
                        <div class="col-md-12 col-sm-12 singledivpck">
                            <a class="jzBoxLink item-hover" title="Events Venue">
                                <h3 class="text-center"><?php echo $row['event_name']; ?></h3>
                                <hr>
                                <div class="col-md-12 col-sm-12 text-center mb-3">
                                    <img src="<?php echo $row['photo'] ?>" style="width: 100%;height:200px;" alt="" />
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center"><span><?php echo $row['caption']; ?></span></div>
                                </div>
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
<?php include("footer.php"); ?>
<div id="mdlAddBooking" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-center" style="color: #263944">Booking Details</h2>
            </div>
            <div class="modal-body">
                <form id="frmAddBooking">
                    <div class="row mb-3">
                        <div class="col-md-12 col-sm-12">
                            <input type="hidden" name="package_id" id="package_id">
                            <input type="hidden" name="price" id="price">
                            <textarea name="address" required id="address" placeholder="Your Address"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 col-sm-12">
                            <input type="date" name="fordate" required id="fordate" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 col-sm-12">
                            <input type="time" name="fortime" required id="fortime" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 col-sm-12">
                            <select name="paymentmethod" id="paymentmethod" required class="form-control">
                                <option value="COD">COD</option>
                                <option value="Online">Online</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 col-sm-12">
                            <input type="button" onclick="addBooking()" value="Confirm Booking"
                                   class="btn text-white text-center "
                                   style="background: #263944;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn-close" data-dismiss="modal">&times;</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>