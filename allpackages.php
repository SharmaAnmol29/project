<?php
@session_start();
include("connectionfile.php");
$pid = $_GET['pid'];
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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>

    </style>
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
            // var address = document.getElementById('address').value;
            var fordate = document.getElementById("fordate").value;
            var fortime = document.getElementById("fortime").value;
            var paymentmethod = document.getElementById('paymentmethod').value;
            formData.append("package_id", package_id);
            formData.append("price", price);
            // formData.append("address", address);
            formData.append("fordate", fordate);
            formData.append("fortime", fortime);
            formData.append("paymentmethod", paymentmethod);
            if (paymentmethod == "Online") {
                var options = {
                    "key": "rzp_test_dRWiKHS7zr2Gki",
                    "amount": price * 100,
                    "name": "Wedding Planner",
                    "description": "Best Place for Destination Weddings",
                    "image": "",
                    "handler": function (response) {
                        //alert(response.razorpay_payment_id);
                        if (response.razorpay_payment_id == "") {
                            //alert('Failed');
                            //  window.location.href = "booking.php?q=" + flightid + "&date=" + flightdate + "&status=failed";
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    console.log(this.responseText);
                                    var output = this.responseText;
                                    window.location.href = output;
                                } else {
                                    document.getElementById("output").innerHTML = "Processing....";
                                }
                            };
                            xmlhttp.open('POST','bookpackageaction.php',true);
                            xmlhttp.send(formData);
                        }
                    },
                    "prefill": {
                        "name": "",
                        "email": ""
                    },
                    "notes": {
                        "address": ""
                    },
                    "theme": {
                        "color": "#F37254"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        var output = this.responseText;
                        window.location.href = output;
                    } else {
                        document.getElementById("output").innerHTML = "Processing....";
                    }
                };
                xmlhttp.open('POST','bookpackageaction.php',true);
                xmlhttp.send(formData);
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
            <h2>Our Packages</h2>
            <div class="row">
                <?php
                $qr = "select * from packages where professional_id=$pid";
                $res = mysqli_query($con, $qr);
                while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <div class="col-md-4 col-sm-6 gallery-grid">
                        <div class="col-md-12 col-sm-12 singledivpck">
                            <a class="jzBoxLink item-hover" title="Events Venue">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <?php
                                    if ("Basic" == $row['package_name'] || "BASIC" == $row['package_name']) {
                                        echo "<img src='images/basic.png' alt='' />";
                                    } elseif ("Silver" == $row['package_name'] || "SILVER" == $row['package_name']) {
                                        echo "<img src='images/standard.png' alt='' />";
                                    } elseif ("Gold" == $row['package_name'] || "GOLD" == $row['package_name']) {
                                        echo "<img src='images/premium.png' alt='' />";
                                    } else {
                                        echo "<img src='images/standard.png' alt='' />";
                                    }
                                    ?>
                                </div>

                                <h3 class="text-center"><?php echo $row['package_name']; ?></h3>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center"><span><i
                                                    class="fa fa-rupee"></i> <?php echo $row['price']; ?></span></div>
                                </div>
                                <hr>
                                <p class="text-justify"><?php echo $row['description']; ?></p>
                                <?php
                                if(isset($_SESSION['useremail']))
                                {
                                ?>
                                    <div class="col-md-12 col-sm-12" style="display: inline-block;margin-top: 20px;">
                                        <a onclick="opnModelBooking(<?php echo $row[0]; ?>,<?php echo $row['price'] ?>)"
                                           class="btnBookNow">BOOK NOW</a>
                                    </div>
                                    <div class="col-md-12" id="output"></div>
                                <?php
                                }
                                ?>
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
                            <input type="hidden" name="amount" required id="amount"
                                      class="form-control"></input>
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
                                   style="background: #263944;color:#ffffff;">
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