<?php

use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Lang;

$lang = (Lang::getCurrent()->url);

$this->params['breadcrumbs'][] = [
    'template' => "<li>{link}</li>\n", //  шаблон для этой ссылки
    'label' => 'Продукция', // название ссылки
    'url' => ['/category'] // сама ссылка
];

?>

<div class="main">
    <section class="module" style="padding: 100px 0 50px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mb-sm-40">
                    <a class="gallery" href="#">
                        <img src="/product/<?= $product->image ?>"
                             alt="<?= $product->{'name_' . $lang} ?>"/>
                    </a>
                    <ul class="product-gallery">
                        <?php if (isset($images)) : ?>
                            <?php foreach ($images as $img) : ?>
                                <li>
                                    <a class="gallery" href="assets/images/shop/product-8.jpg"></a>
                                    <img src="assets/images/shop/product-8.jpg" alt="Single Product"/></li>
                            <?php endforeach ?>
                        <?php endif ?>
                    </ul>

                    <script>
                        $('.gallery').on('click', function () {
                            return false;
                        })
                    </script>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="product-title font-alt"
                                style="font-size: 32px"><?= $product->{'name_' . $lang} ?></h1>
                        </div>
                    </div>
                    <div class="row mb-20">
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-12">
                            <div class="price font-alt">
                                <span class="amount" style="font-size: 28px">
                                    <?= number_format($product->price, 2, ',', '\'') ?> грн
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-40">
                        <div class="col-sm-12">
                            <div class="description">
                                <p style="margin-top: 24px;"><?= $product->{'description_short_' . $lang} ?></p>

                                <?php if (!empty($product->{'technical_' . $lang})) { ?>
                                    <h3 class="font-alt"
                                        style="margin-top: 50px; font-size: 24px"><?= Yii::t('main', 'Технічні параметри') ?></h3>
                                    <p><?= $product->{'technical_' . $lang} ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-20">
                        <div class="col-sm-4 mb-sm-20">
                            <input id="qty" class="form-control input-lg" type="number" name="" value="1" max="5"
                                   min="1"
                                   required="required"/>
                        </div>
                        <style>
                            .btn:hover {
                                background-color: dodgerblue !important;
                                color: #fff;
                            }
                        </style>
                        <div class="col-sm-8">
                            <a class="add-to-cart btn btn-lg btn-block btn-round btn-b" data-id="<?= $product->id ?>"
                               href="<?= Url::to(['cart/add/', 'id' => $product->id]) ?>">
                                <?= Yii::t('main', 'Додати у кошик') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="divider-w">
    <section class="module-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><?= Yii::t('main', 'Схожа продукція') ?></h2>
                </div>
            </div>
            <div class="row multi-columns-row">
                <?php foreach ($similarProducts as $item) { ?>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image">
                                <img src="/product/<?= $item->image ?>"
                                     alt="<?= $item->{'name_' . $lang} ?>"/>
                                <div class="shop-item-detail">
                                    <a class="add-to-cart btn btn-round btn-b" data-id="<?= $item->id ?>">
                                        <span class="icon-basket">
                                            <?= Yii::t('main', 'Додати у кошик') ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a
                                        href="<?= $item->url . '.html' ?>"><?= $item->{'name_' . $lang} ?></a>
                            </h4><?= number_format($item->price, 2, ',', '\'') ?> грн
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
