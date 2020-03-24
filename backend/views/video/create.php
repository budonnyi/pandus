<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Widget */

$this->title = 'Новое видео';
$this->params['breadcrumbs'][] = ['label' => 'Video', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widget-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
