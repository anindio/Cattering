<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= Url::base() ?>/assets/images/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= Url::base() ?>/assets/images/favicon.png">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link href="<?= Url::base() ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?= Url::base() ?>/assets/css/bootstraps.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
   <?= $content ?>
   

</body>x
<script src="<?= Url::base() ?>/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?= Url::base() ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= Url::base() ?>/assets/js/password.js" type="text/javascript"></script>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>