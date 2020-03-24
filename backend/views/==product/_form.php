<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList([
        \yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(), 'id', 'name_ru'),
    ]) ?>

    <div>
        <?php if(!empty($model->image)) {?>
            <img src="/img/product/<?= $model->image ?>" width="250">
        <?php } ?>
    </div>
    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <div>
        <?php if(!empty($model->image)) {?>
            <img src="/img/product/<?= $model->big_image ?>" width="250">
        <?php } ?>
    </div>
    <?= $form->field($model, 'bigImageFile')->fileInput() ?>

    <?= $form->field($model, 'class_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_origyn')->dropDownList([
        'Швеція' => 'Швеція',
        'Україна' => 'Україна'
    ]) ?>

    <?= $form->field($model, 'description_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'standard',
            'inline' => false,
        ]),
    ]); ?>

    <?= $form->field($model, 'description_ua')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'standard',
            'inline' => false,
        ]),
    ]); ?>

    <?= $form->field($model, 'description_short_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'basic',
            'inline' => false,
        ]),
    ]); ?>

    <?= $form->field($model, 'description_short_ua')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'basic',
            'inline' => false,
        ]),
    ]); ?>

    <?= $form->field($model, 'manufacturer')->dropDownList([
        'BraunAbility' => 'BraunAbility',
        'Норма Трейд' => 'Норма Трейд'
    ]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Shown',
        '0' => 'Hidden'
    ]) ?>

    <?= $form->field($model, 'availability')->dropDownList([
        '1' => 'on store',
        '0' => 'unavailible'
    ]) ?>

    <?= $form->field($model, 'meta_title_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'meta_title_ua')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'meta_keyword_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'meta_keyword_ua')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'meta_description_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'meta_description_ua')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
