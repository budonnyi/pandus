<?php

use yii\helpers\Html;

?>

<div id="lang">
    <?php foreach ($langs as $lang) { ?>
        <?= Html::a($lang->name, ($lang->url == 'ru' ? '/ru' : '') . Yii::$app->getRequest()->getLangUrl(), ['class' => "section-scroll"]) ?>
    <?php } ?>
</div>
