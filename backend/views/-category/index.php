<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новая категория', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url',
            'parent_id',
            'name_ru',
            'name_ua',
            //'status',
            //'sort_order',
            //'description_short_ru:ntext',
            //'description_short_ua:ntext',
            //'description_ru:ntext',
            //'description_ua:ntext',
            //'image',
            //'video1',
            //'video2',
            //'description_image',
            //'viewed',
            //'meta_title_ru',
            //'meta_title_ua',
            //'meta_description:ntext',
            //'meta_keywords:ntext',

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
                        $url = \yii\helpers\Url::toRoute(['category/update', 'id' => $key]);
                        return $url;
                    }
                }
            ],

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
