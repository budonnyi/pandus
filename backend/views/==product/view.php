<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            'url:url',
            'name_ru',
            'name_ua',
            'category_id',
            'image',
            'big_image',
            'buy_also',
            'see_also',
            'class_name',
            'country_origyn',
            'download_files',
            'description_ru:ntext',
            'description_ua:ntext',
            'description_short_ru:ntext',
            'description_short_ua:ntext',
            'video1',
            'video2',
            'manufacturer',
            'price',
            'sort_order',
            'status',
            'viewed',
            'availability',
            'meta_title',
            'meta_title_ua:ntext',
            'meta_keyword:ntext',
            'meta_description_ru:ntext',
            'meta_description_ua:ntext',
        ],
    ]) ?>

</div>
