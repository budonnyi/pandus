<?php

use common\models\Lang;
use yii\helpers\Html;

$lang = (Lang::getCurrent()->url);

?>

<div id="delivery-rules-ru" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Способы доставки</h4>
            </div>
            <div class="modal-body">
                <p>1. Новая Почта.</p>
                <p>2. Интайм.</p>
                <p>3. Деливери.</p>
                <p>4. Самовывоз.</p>
                <p>Вы приезжаете к нам на предприятие и принимаете товар.
                    Этот способ доставки удобен тем людям, у которых есть свой микроавтобус или грузовой вид транспорта,
                    автомобиль с прицепом и т.д.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="delivery-rules-ua" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Способи доставки</h4>
            </div>
            <div class="modal-body">
                <p>1. Нова Пошта.</p>
                <p>2. Інтайм.</p>
                <p>3. Делівері.</p>
                <p>4. Самовивіз.</p>
                <p>Ви приїжджаєте до нас на підприємство і приймаєте товар.
                    Цей спосіб доставки зручний тим людям, у яких є свій мікроавтобус або вантажний вид транспорту,
                    автомобіль з причепом і т.д.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="payment-rules-ru" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Способы оплаты товара</h4>
            </div>
            <div class="modal-body">
                <p>1.Оплата на карту Приват Банка.</p>
                <p>2.Оплата согласно полученного счета на расчетный счет.</p>
                <p>3.Наложенным платежом при получении товара у перевозчика.</p>
            </div>
        </div>
    </div>
</div>

<div id="payment-rules-ua" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Способи оплати товару</h4>
            </div>
            <div class="modal-body">
                <p>1.Оплата на карту Приват Банку.</p>
                <p>2.Оплата згдно наданого рахунку на розрахунковий рахунок.</p>
                <p>3.Наложеним платежем при отримані товару у перевізника.</p>
            </div>
        </div>
    </div>
</div>

<div class="module-small bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h5 class="widget-title font-alt">HANDYcars</h5>
                    <p><?= Yii::t('main', 'Компанія з 2015 року займається постачанням виробів для людей з івалідністю.') ?></p>
                    <p>Тел: <a href="tel:+380962010191">+38 096 2010191</a></p>
                    <p>Тел: <a href="tel:+380660679771">+38 066 0679771</a></p>
                    <p>Email: <a href="mailto:info@pandus.info"> info@pandus.info</a></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget">
                    <h5 class="widget-title font-alt"><?= Yii::t('main', 'Інформація') ?></h5>
                    <ul class="widget-posts">
                        <li class="clearfix">
                            <a href="#" data-toggle="modal" data-id=""
                               data-target="#delivery-rules-<?= $lang ?>"><?= Yii::t('main', 'Способи доставки') ?></a>
                        </li>
                        <li class="clearfix">
                            <a href="#" data-toggle="modal" data-id=""
                               data-target="#payment-rules-<?= $lang ?>"><?= Yii::t('main', 'Способи оплати') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhandycarsltd%2F&tabs=timeline&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="340" height="130" style="border:none; overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" class="pull-right">
                </iframe>
            </div>
        </div>
    </div>
</div>

<hr class="divider-d">
<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <a href="https://www.braunability.eu/" target="_blank">
                    <?= Html::img('/img/logo-bae-header.png', ['class' => 'pull-left', 'height' => '50', 'alt' => 'BraunAbility
                            logotype']) ?>
                </a>
                <p class="copyright font-alt text-center">&copy; 2015&nbsp;
                    <a href="https://handycars.com.ua"><?= Yii::t('main', 'Хендікарс ТОВ') ?>,
                        handycars.com.ua
                    </a>
                </p>
            </div>
            <div class="col-sm-3">
                <div class="footer-social-links">
                    <a href="https://www.facebook.com/handycarsltd" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#"><i class="fa fa-instagram" target="_blank"></i></a>
                    <a href="https://www.youtube.com/channel/UC4eXRfe0dY8F5L8Ik4zUR3w"><i class="fa fa-youtube"
                                                                                          target="_blank"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
