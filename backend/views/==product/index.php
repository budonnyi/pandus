<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новый товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'url:url',
            'name_ru',
            'name_ua',
            //'category_id',
            //'image',
            //'big_image',
            //'buy_also',
            //'see_also',
            //'class_name',
            //'country_origyn',
            //'download_files',
            //'description_ru:ntext',
            //'description_ua:ntext',
            //'description_short_ru:ntext',
            //'description_short_ua:ntext',
            //'video1',
            //'video2',
            //'manufacturer',
            //'price',
            //'sort_order',
            //'status',
            //'viewed',
            //'availability',
            //'meta_title',
            //'meta_title_ua:ntext',
            //'meta_keyword:ntext',
            //'meta_description_ru:ntext',
            //'meta_description_ua:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:260px;'],
                'header'=>'Управление',
                'template' => '{update}',
                'buttons' => [

                    //view button
                    'update' => function ($url, $model) {
                        return  Html::a('Редактировать', $url,
                            [ 'title' => 'View' ]) ;
                    },
                ],

                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'update') {
                        $url = \yii\helpers\Url::toRoute(['product/update', 'id' => $key]);
                        return $url;
                    }
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
