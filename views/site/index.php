<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Restaurant';
?>
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
                            <img src="<?= Url::base() ?>/assets/images/flags/US.png" /> English(US)
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="#"><img src="<?= Url::base() ?>/assets/images/flags/ID.png" /> Indonesian</a>
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
    <div class="main" style="background-image: url('<?= Url::base() ?>/assets/images/bg_landing.jpg')">

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
                                <input type="email" class="form-controls transparent text-center" placeholder="Username / Email">
                            </div>
                            <div class="form-login">
                                <input type="password" class="sr-only" />
                                <input type="password" id="pwd" name="pwd" class="form-controls transparent text-center" placeholder="Password">
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
        <div class="footers">
            <div class="container">
                &copy; 2017 WinTech
            </div>
        </div>
    </div>