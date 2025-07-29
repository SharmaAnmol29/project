<?php
include("connectionfile.php");
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
</head>
<body>
<!-- banner -->
<div class="banner">
    <div class="header">
        <div class="container">
            <div class="header-left">
                <div class="w3layouts-logo">
                    <h1>
                        <a href="index.php">Wedding <span>Planner</span></a>
                    </h1>
                </div>
            </div>
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a class="active" href="index.php">Home</a></li>
                            <li><a href="allprofessionals.php">Our Professionals</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="allportfolio.php">Portfolio</a></li>
                            <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">User<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-bounce-to-bottom" href="userlogin.php">Login</a></li>
                                    <li><a class="hvr-bounce-to-bottom" href="usersignup.php">SignUp</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Professional<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-bounce-to-bottom" href="prologin.php">Login</a></li>
                                    <li><a class="hvr-bounce-to-bottom" href="pro_signup.php">SignUp</a></li>
                                </ul>
                            </li>
                            <!--                            <li><a href="gallery.html">Gallery</a></li>-->
                            <!--                            <li><a href="blog.html">Blog</a></li>-->
                            <!--                            <li><a href="contact.html">Contact</a></li>-->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="w3layouts-banner-slider">
        <div class="container">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="agileits-banner-info">
                                <h3>Enjoy <span>your best day ever</span></h3>
                                <div class="w3-button">
                                    <a href="index.php">More</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="agileits-banner-info">
                                <h3>Create <span>your special day</span></h3>
                                <div class="w3-button">
                                    <a href="index.php">More</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <script src="js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
                <!--banner Slider starts Here-->
            </div>
        </div>
    </div>
</div>
<!-- //banner -->

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="w3l-banner-bottom-grids">
            <div class="col-md-4 w3l-banner-bottom-grid">
                <div class="bottom-icon">
                    <i class="fa fa-cog" aria-hidden="true"></i>

                </div>
                <div class="bottom-text">
                    <h4>Latest Anamika Khanna Wedding Collection 2021-22</h4>
                    <p>A bridal dream come true, Anamika Khanna's creations have this feminine and delicate quality that
                        possibly no other designer is able to encapsulate. Her creations are glorious yet rooted in a
                        way, ma.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 w3l-banner-bottom-grid">
                <div class="bottom-icon">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                </div>
                <div class="bottom-text">
                    <h4>Favour Walls Are Majorly Trending, & They Look Pretty Amazing!</h4>
                    <p>Ooh, this one not only looks so good, but is so Insta and Pin-worthy too! Favour walls are the
                        new in-thing when it comes to wedding decor trends these days, and they do another job- display
                        the favo.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 w3l-banner-bottom-grid">
                <div class="bottom-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="bottom-text">
                    <h4>Add The Charm Of Mogras Into Your Wedding!</h4>
                    <p>Mogra is a bloom that has been a part of the great Indian wedding for aeons of time. Its
                        delicate, gorgeous to look at and has a fragrance that will enchant you. While it was primarily
                        used in gajras.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <div class="welcome-grids">
            <div class="col-md-6 w3ls-welcome-left">
                <div class="w3ls-welcome-left-img">

                </div>
            </div>
            <div class="col-md-6 w3ls-welcome-right">
                <div class="w3ls-welcome-right-info">
                    <h2>Some Words <span>About Us</span></h2>
                    <p>India's favourite wedding planning website & app with over 1.5 millon monthly dedicated users.
                        Wedding Planner is a swanky alternative to the outdated wedding planning process. A
                        one-stop-shop
                        for all things weddings, you can find inspiration,ideas and vendors within your budget.
                        <span>Wedding Planner has been trusted by over 2 million brides & grooms all over the world to plan their big day. So sit back, log on to Wedding Planner, and plan the wedding of your dreams!</span>
                    </p>
                </div>
                <div class="agileits-border">
                    <div class="agileinfo-red"></div>
                    <div class="agileinfo-red agileinfo-green"></div>
                    <div class="agileinfo-red agileinfo-blue"></div>
                    <div class="agileinfo-red agileinfo-yellow"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- services -->
<div class="services">
    <div class="container">
        <div class="w3-agileits-heading">
            <h3>Best <span>Services</span></h3>
        </div>
        <div class="wthree-services-grids">
            <?php
            $select = "select * from professional_signup order by pid DESC LIMIT 0,6";
            $res = mysqli_query($con, $select);
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
                if ($i != 2 && $i != 5) {
                    ?>

                    <div class="col-md-4 w3-agileits-services-grid">
                        <a href="allprofessionals.php" class="proLinks">
                            <!--                    <i class="fa fa-cogs" aria-hidden="true"></i>-->
                            <img src="<?php echo $row['logo']; ?>" width="80"/>
                            <h4><?php echo $row['display_name']; ?></h4>
                            <p><?php echo $row['description']; ?></p>
                        </a>
                    </div>
                    <?php
                    $i++;
                } else {
                    ?>
                    <div class="col-md-4 w3-agileits-services-grid agile-services1">
                        <a href="allprofessionals.php" class="proLinks">
                            <!--                    <i class="fa fa-cogs" aria-hidden="true"></i>-->
                            <img src="<?php echo $row['logo']; ?>" width="80"/>
                            <h4><?php echo $row['display_name']; ?></h4>
                            <p><?php echo $row['description']; ?></p>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>


            <!--            <div class="col-md-4 w3-agileits-services-grid">-->
            <!--                <i class="fa fa-heart" aria-hidden="true"></i>-->
            <!--                <h4>Quisque a rhoncus tortor</h4>-->
            <!--                <p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur-->
            <!--                    volutpat.</p>-->
            <!--            </div>-->
            <!--            <div class="col-md-4 w3-agileits-services-grid">-->
            <!--                <i class="fa fa-plane" aria-hidden="true"></i>-->
            <!--                <h4>Quisque a rhoncus tortor</h4>-->
            <!--                <p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur-->
            <!--                    volutpat.</p>-->
            <!--            </div>-->
            <!--            <div class="col-md-4 w3-agileits-services-grid agile-services2">-->
            <!--                <i class="fa fa-paper-plane" aria-hidden="true"></i>-->
            <!--                <h4>Quisque a rhoncus tortor</h4>-->
            <!--                <p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur-->
            <!--                    volutpat.</p>-->
            <!--            </div>-->
            <!--            <div class="col-md-4 w3-agileits-services-grid">-->
            <!--                <i class="fa fa-road" aria-hidden="true"></i>-->
            <!--                <h4>Quisque a rhoncus tortor</h4>-->
            <!--                <p>Nam dolor arcu, interdum eget purus non, blandit accumsan justo. Duis faucibus eros dapibus efficitur-->
            <!--                    volutpat.</p>-->
            <!--            </div>-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- posts -->
<div class="posts">
    <div class="container">
        <div class="w3-agileits-heading">
            <h3>Recent <span>Posts</span></h3>
        </div>
        <div class="posts-grids">
            <div class="col-md-4 w3-agile-post-grids">
                <div class="w3-agile-post-img">
                    <a href="single.html">
                        <ul>
                            <li>Sept</li>
                            <li>24</li>
                        </ul>
                    </a>
                </div>
                <div class="w3-agile-post-info">
                    <h4><a href="single.html">Party Hall</a></h4>
                    <p>A room used for dining, social gatherings, or meetings accommodating large numbers of people.
                        Birthday Party Places and many more in 16+ cities across India.</p>
                </div>
            </div>
            <div class="col-md-4 w3-agile-post-grids">
                <div class="w3-agile-post-img w3-agile-post-img1">
                    <a href="single.html">
                        <ul>
                            <li>Oct</li>
                            <li>06</li>
                        </ul>
                    </a>
                </div>
                <div class="w3-agile-post-info">
                    <h4><a href="single.html">Melting Flowers</a></h4>
                    <p>A banquet hall, function hall, or reception hall, is a special purpose room, or a building, used
                        for hosting large social and business events.</p>
                </div>
            </div>
            <div class="col-md-4 w3-agile-post-grids">
                <div class="w3-agile-post-img w3-agile-post-img2">
                    <a href="single.html">
                        <ul>
                            <li>Nov</li>
                            <li>17</li>
                        </ul>
                    </a>
                </div>
                <div class="w3-agile-post-info">
                    <h4><a href="single.html">The Wedding Experience</a></h4>
                    <p>A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs
                        vary greatly between cultures, ethnic groups.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //posts -->

<?php include("footer.php"); ?>

</body>
</html>
