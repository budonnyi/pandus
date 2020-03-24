<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Lang;

$lang = Lang::getCurrent()->url;

$route = $lang == 'ua' ? '' : '/' . $lang;

?>

<style>
    .btn:hover {
        background-color: dodgerblue !important;
        color: #fff;
    }
</style>

<section class="home-section home-full-height" id="home">
    <div class="hero-slider">
        <ul class="slides">
            <li class="bg-dark-30 restaurant-page-header bg-dark"
                style="background-image:url(&quot;/img/pandus.jpg&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"><?= Yii::t('main', 'ТОВ Хендікарс') ?></div>
                        <div class="font-alt mb-40 titan-title-size-4"><?= Yii::t('main', 'Пандуси для людей з інвалідністю') ?></div>
                        <a class="section-scroll btn btn-border-w btn-round"
                           href="<?= Url::to('catalog') ?>"><?= Yii::t('main', 'Детальніше') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark"
                style="background-image:url(&quot;/img/pandus2.jpg&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-40 titan-title-size-3"><?= Yii::t('main', 'Автомобільні пандуси') ?></div>

                        <a class="btn btn-border-w btn-round"
                           href="<?= Url::to('two-part-ramps') ?>"><?= Yii::t('main', 'Більше') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark"
                style="background-image:url(&quot;/img/pandus3.jpg&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"><?= Yii::t('main', 'Легкі та надійні') ?></div>
                        <div class="font-alt mb-40 titan-title-size-3"><?= Yii::t('main', 'Суцільні пандуси') ?></div>
                        <a class="section-scroll btn btn-border-w btn-round"
                           href="<?= Url::to('carbon-ramps') ?>"><?= Yii::t('main', 'Більше') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark"
                style="background-image:url(&quot;/img/pandus4.jpg&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"><?= Yii::t('main', 'Різні моделі') ?></div>
                        <div class="font-alt mb-40 titan-title-size-3"><?= Yii::t('main', 'Пандус з двох частин') ?></div>
                        <a class="section-scroll btn btn-border-w btn-round"
                           href="<?= Url::to('telescopic-ramps') ?>"><?= Yii::t('main', 'Перейти') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark"
                style="background-image:url(&quot;/img/pandus5.jpg&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"><?= Yii::t('main', "Для безбар'єрного доступу допоможуть") ?></div>
                        <div class="font-alt mb-40 titan-title-size-3"><?= Yii::t('main', 'Зручні повсякденні пандуси') ?></div>
                        <a class="section-scroll btn btn-border-w btn-round"
                           href="<?= Url::to('telescopic-ramps') ?>"><?= Yii::t('main', 'Взнати більше') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark"
                style="background-image:url(&quot;/img/feal_ramp_commercial.jpg&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"> <?= Yii::t('main', 'Швецькі сертифіковані') ?></div>
                        <div class="font-alt mb-40 titan-title-size-3"> <?= Yii::t('main', 'Безпечний автомобільний пандус') ?></div>
                        <a class="section-scroll btn btn-border-w btn-round"
                           href="<?= Url::to('commercial-ramps') ?>"><?= Yii::t('main', 'Деталі') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 restaurant-page-header bg-dark"
                style="background-image:url(&quot;/img/pandus6.jpg&quot;);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"> <?= Yii::t('main', 'Швецькі сертифіковані') ?></div>
                        <div class="font-alt mb-40 titan-title-size-3"> <?= Yii::t('main', 'Безпечний автомобільний пандус') ?></div>
                        <a class="section-scroll btn btn-border-w btn-round"
                           href="<?= Url::to('three-part-ramps') ?>"><?= Yii::t('main', 'Деталі') ?></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<div class="main">
    <section class="module" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><?= Yii::t('main', 'Про нас') ?></h2>
                    <div class="module-subtitle font-serif"><?= Yii::t('main', 'Працюємо для вас починаючи з 2015 року') ?></div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-lightbulb"></span></div>
                        <h3 class="features-title font-alt"><?= Yii::t('main', 'Готові рішення') ?></h3>
                        <p><?= Yii::t('main', 'Уважне ставлення до потреб кожного клієнта.') ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-gears"></span></div>
                        <h3 class="features-title font-alt"><?= Yii::t('main', 'Сертифікати') ?></h3>
                        <p><?= Yii::t('main', 'Усі товари сертифіковані у відповідності до законовдавства.') ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-tools-2"></span></div>
                        <h3 class="features-title font-alt"><?= Yii::t('main', 'Наявність на складі') ?></h3>
                        <p><?= Yii::t('main', 'Пандуси наявні на складі та готові для пересилання до користувача.') ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-genius"></span></div>
                        <h3 class="features-title font-alt"><?= Yii::t('main', 'Робота з прозорро') ?></h3>
                        <p><?= Yii::t('main', 'Працюємо з прозорро для забезпечення потреб покупців.') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="module-small bg-dark-90" data-background="" style="padding: 0px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="video-box">

                        <div class="video-title font-alt"
                             style="margin-bottom: 10px"><?= Yii::t('main', 'Презентація') ?></div>
                        <div class="video-subtitle font-alt"
                             style="margin-bottom: 25px"><?= Yii::t('main', 'Дивитись відео') ?></div>
                        <div class="" style="margin-bottom: 40px;">
                            <iframe src="https://www.youtube.com/embed/ho7AcXWEVCc"
                                    frameborder="0" width="560" height="320"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen style="max-width: 100%">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module pb-0" id="works">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><?= Yii::t('main', 'Пандуси') ?></h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter font-alt" id="filters">
                        <li><a class="current wow fadeInUp" href="#" data-filter="*"><?= Yii::t('main', 'Всі') ?></a>
                        </li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".wideramp"
                               data-wow-delay="0.2s"><?= Yii::t('main', 'Суцільні') ?></a>
                        </li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".twopart"
                               data-wow-delay="0.4s"><?= Yii::t('main', 'Роздільні') ?></a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".autoramp"
                               data-wow-delay="0.6s"><?= Yii::t('main', 'Автомобільні') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="works-grid works-grid-gut works-grid-3 works-hover-d" id="works-grid">
                <?php foreach ($catalog as $item) { ?>
                    <?php if ($item->id == 0) continue ?>
                    <li class="work-item <?= $item->class_name ?>">
                        <a href="<?= Url::to($route . '/' . $item->url) ?>">
                            <div class="work-image">
                                <img src="/category/<?= $item->image ?>"
                                     alt="<?= $item->{'name_' . $lang} ?>"/></div>
                            <div class="work-caption font-alt">
                                <h3 class="work-title"><?= $item->{'name_' . $lang} ?></h3>
                                <div class="work-descr"><?= Yii::t('main', $item->country_origyn) ?></div>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>

    </section>

    <hr class="divider-w">

    <style>
        .shop-item-title {
            height: 40px;
        }
    </style>
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><?= Yii::t('main', 'Інші товари') ?></h2>
                    <div class="module-subtitle font-serif"><?= Yii::t('main', 'Пандуси переносні та автомобільні представлені компанією Хендікарс') ?>
                    </div>
                </div>
            </div>
            <style>
                @media (max-width: 590px) {
                    .title-line {
                        display: none;
                        font-size: 10px;
                        word-break: normal;
                    }
                }
            </style>

            <div class="row">
                <div class="owl-carousel text-center" data-items="5" data-pagination="false"
                     data-navigation="false">

                    <?php if (!empty($carouselItems)) { ?>
                        <?php foreach ($carouselItems as $item) { ?>
                            <div class="owl-item">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="ex-product">
                                        <a href="/<?= $item->url . '.html' ?>">
                                            <img src="/product/<?= $item->image ?>" class="galery"
                                                 alt="<?= $item->{'name_' . $lang} ?>"/>
                                            <p class="title-line ">
                                                <a href="/<?= $item->url . '.html' ?>"><?= $item->{'name_' . $lang} ?></a>
                                            </p>
                                            <!--<p class="title-line item-title"><?/*= number_format($item->price, 2, ',', '\'') */?>
                                                грн </p>-->
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <hr class="divider-w">

    <section class="module" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><?= Yii::t('main', "Зв'язатись с нами") ?></h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="alt-features-item mt-0">
                        <div class="alt-features-icon"><span class="icon-map"></span></div>
                        <h3 class="alt-features-title font-alt"><?= Yii::t('main', 'Контакти') ?></h3>
                        <?= Yii::t('main', 'ТОВ Хендікарс') ?><br/>
                        <?= Yii::t('main', 'вул.Саперно-Слобідська, 22') ?><br/>
                        <?= Yii::t('main', 'м.Київ') ?><br/>
                        <a href="https://handycars.com.ua">https://handycars.com.ua</a><br>
                    </div>
                    <div class="alt-features-item mt-xs-60">
                        <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                        <h3 class="alt-features-title font-alt"><?= Yii::t('main', "Зв'язок") ?></h3>
                        Email: <a href="mailto:info@pandus.info">info@pandus.info</a><br/>
                        Тел: <a href="tel:+380962010191">+380 96 2010191</a><br/>
                        Тел: <a href="tel:+380660679771">+380 66 0679771</a><br/>
                    </div>
                </div>
                <div class="col-sm-8">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name')->textInput(['placeholder' => Yii::t('main', "Ваше ім'я")])->label(false) ?>
                    <?= $form->field($model, 'phone')->textInput(['placeholder' => Yii::t('main', 'Ваш Телефон')])->label(false) ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => Yii::t('main', 'Ваш Email')])->label(false) ?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => Yii::t('main', 'Ваше повідомлення')])->label(false) ?>
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('main', 'Відправити'), ['class' => 'btn btn-block btn-round btn-d', 'name' => 'contact-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>

    <style>
        .btn {
            border-radius: 0px;
        }

        .modal-content {
            border-radius: 0px;
        }
    </style>

</div>
