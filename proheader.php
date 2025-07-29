<?php
@session_start();
@ob_start();
if (!isset($_SESSION['PROFID']))
{
    header("Location:prologin.php");
}
?>
<div class="banner">
    <div class="header">
        <div class="container">
            <div class="header-left">
                <div class="w3layouts-logo">
                    <h1>
                        <a href="prohomepage.php">Wedding <span>Planner</span></a>
                    </h1>
                </div>
            </div>
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="prohomepage.php">Home</a></li>
<!--                            <li><a class="active" href="about.html">About</a></li>-->
                            <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Packages<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-bounce-to-bottom" href="addpackage.php">Add Package</a></li>
                                    <li><a class="hvr-bounce-to-bottom" href="usersignup.php">View Package</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-bounce-to-bottom" href="addportfolio.php">Add Portfolio</a></li>
                                    <li><a class="hvr-bounce-to-bottom" href="pro_signup.php">View Portfolio</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-bounce-to-bottom" href="pro_profile_update.php">Profile</a></li>
                                    <li><a class="hvr-bounce-to-bottom" href="pro_password_change.php">Change Password</a></li>
                                    <li><a class="hvr-bounce-to-bottom" href="sessiondestroy.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="agileinfo-top-heading">
        <h2>Wedding Planner</h2>
    </div>
</div>
