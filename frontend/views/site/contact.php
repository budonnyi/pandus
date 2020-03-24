<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\models\Lang;

$lang = Lang::getCurrent()->url;
$this->title = 'Контакт';

?>

<div class="main">
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
                        <?= Yii::t('main', 'м.Київ') ?><br/><br>


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
</div>
