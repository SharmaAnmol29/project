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
<?php
if (!isset($_SESSION['useremail'])) {
    include("publicheader.php");
} else {
    include("userheader.php");
}
?>
<div class="gallery">
    <div class="container">
        <div id="jzBox" class="jzBox">
            <div id="jzBoxNextBig"></div>
            <div id="jzBoxPrevBig"></div>
            <img src="#" id="jzBoxTargetImg" alt=""/>
            <div id="jzBoxBottom">
                <div id="jzBoxTitle"></div>
                <div id="jzBoxMoreItems">
                    <div id="jzBoxCounter"></div>
                    <i class="arrow-left" id="jzBoxPrev"></i>
                    <i class="arrow-right" id="jzBoxNext"></i>
                </div>
                <i class="close" id="jzBoxClose"></i>
            </div>
        </div>
        <div class="gallery-grids-row">
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g1.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g1.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g2.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g2.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g3.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g3.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g4.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g4.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g5.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g5.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g6.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g6.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g7.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g7.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g3.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g3.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g1.jpg" class="jzBoxLink item-hover" title="Events Venue">
                        <img src="images/g1.jpg" alt=" " class="img-responsive" />
                        <div class="view-caption">
                            <p>Full View</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <script src="js/jzBox.js"></script>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>