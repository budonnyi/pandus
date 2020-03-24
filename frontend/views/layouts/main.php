<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use frontend\widgets\LangWidget;
use common\models\Lang;

AppAsset::register($this);

$lang = Lang::getCurrent()->url;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link href="/dist/lib/animate.css/animate.css" rel="stylesheet">
    <link href="/dist/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/dist/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="/dist/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="/dist/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/dist/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/dist/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="/dist/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="/dist/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="/dist/css/colors/default.css" rel="stylesheet">

    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">

    <?php $this->head() ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157120612-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-157120612-1');
    </script>

</head>
<!--<body>-->
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<?php $this->beginBody() ?>
<style>
    .navbar-custom .nav li > a {
        font-size: 14px !important;
    }

    .modal-content {
        color: #000;
        border-radius: 0px;
    }

    .btn {
        border-radius: 0px;
    }
</style>
<main>
    <div class="page-loader">
        <div class="loader"><?= Yii::t('main', 'Завантаження...') ?></div>
    </div>
    <div class="">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                            data-target="#custom-collapse"><span
                                class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand"
                       href="<?= $lang == 'ru' ? '/ru' : '/' ?>"><?= Yii::t('main', 'Пандус Інфо') ?></a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= $lang == 'ru' ? '/ru' : '/' ?>"><?= Yii::t('main', 'Головна') ?></a></li>
                        <li><a class="section-scroll" href="#services"><?= Yii::t('main', 'Про нас') ?></a></li>
                        <li><a class="section-scroll" href="#works"><?= Yii::t('main', 'Каталог') ?></a></li>
<!--                        <li><a class="section-scroll" href="#alt-features">--><?//= Yii::t('main', 'Можливості') ?><!--</a></li>-->
                        <li><a class="section-scroll" href="#contact"><?= Yii::t('main', 'Контакт') ?></a></li>
                        <li><a class="section-scroll" href="#" onclick="return getCart()"><span
                                        class="icon-basket"></span></a></li>
                        <li><a class="section-scroll"
                               href="<?= $lang == 'ru' ? '/' : '/ru' ?>"><?= $lang == 'ru' ? 'ua' : 'ru' ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="">
            <?= $content ?>
            <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
    </div>

    <?= \frontend\widgets\FooterWidget::widget() ?>

    <!--<style>
        .shown {
            visibility: visible;
        }

        .hide {
            visibility: hidden;
        }
    </style>-->

    <?php $buttonContinue = '<button type="button" class="btn btn-default" data-dismiss="modal">' .
        Yii::t('main', 'Продовжити перегляд') .
        '</button>' ?>

    <?php $buttonSuccess = '<a id="button-success" href="' . Url::to(['cart/view']) .
        '" class="btn btn-success">' .
        Yii::t('main', 'Обробити') . '</a>' ?>

    <?php
    Modal::begin([
        'header' => '<h2>' . Yii::t('main', 'Кошик') . '</h2>',
        'size' => 'modal-lg',
        'id' => 'cart',
        'footer' => $buttonContinue . $buttonSuccess,

    ]);
    Modal::end();
    ?>

    <!--<script src="/dist/lib/jquery/dist/jquery.js"></script>-->
    <!--    <script src="/dist/lib/bootstrap/dist/js/bootstrap.min.js"></script>-->
    <script src="/dist/lib/wow/dist/wow.js"></script>
    <script src="/dist/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="/dist/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="/dist/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="/dist/lib/flexslider/jquery.flexslider.js"></script>
    <script src="/dist/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <!--<script src="/dist/lib/smoothscroll.js"></script>-->
    <script src="/dist/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="/dist/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <!--<script async="" defer=""-->
    <!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>-->
    <script src="/dist/js/plugins.js"></script>
    <script src="/dist/js/main.js"></script>
    <script src="/js/cart.js"></script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
