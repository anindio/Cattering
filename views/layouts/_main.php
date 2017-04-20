<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Restaurant </title>

    <link href="css/style.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/flags/US.png" /> English(US)
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="#"><img src="images/flags/ID.png" /> Indonesian</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i> Like
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i> Tweet
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-gittip"></i> Gittip
                        </a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="main" style="background-image: url('images/bg_landing.jpg')">

        <!--    Change the image source '/images/bg_landing.jpg')" with your favourite image.     -->

        <div class="cover black" data-color="black"></div>

        <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

        <div class="container">
            <h1 class="logo cursive">
                Catering
            </h1>
            <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->

            <div class="content">
                <h4 class="motto">Login and enjoy our food !</h4>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                        <form class="form-inline" method="post" id="login" role="form">
                            <div>
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control transparent text-center" placeholder="Username / Email">
                            </div>
                            <div class="form-login">
                                <input type="password" class="sr-only" />
                                <input type="password" id="pwd" name="pwd" class="form-control transparent text-center" placeholder="Password">
                            </div>
                            <input type="checkbox" id="show-hide" name="show-hide" value="" />
                            <label for="show-hide">Show password</label>
                            <div class="form-login">
                                <button type="submit" class="btn btn-success btn-fill">Sign In</button>
                                <button type="submit" class="btn btn-warning btn-fill">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                &copy; 2017 WinTech
            </div>
        </div>
    </div>

</body>x
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/password.js" type="text/javascript"></script>

</html>