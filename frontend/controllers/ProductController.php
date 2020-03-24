<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use common\models\Lang;


class ProductController extends AppController
{
    public function actionView($url)
    {
        $this->layout = 'subordinary';

        $product = Product::find()->where(['url' => $url])->one();
        $category = Category::find()->where(['id' => $product->category_id])->one();

        $similarProducts = Product::find()
            ->where(['category_id' => $product->category_id])
            ->andWhere(['<>', 'id', $product->id ])
            ->all();

        $lang = Lang::getCurrent()->url;

        $product->viewedCounter();

        $this->setMeta(
            $product->{'name_' . $lang} . ' ' . $category->{'meta_title_' . $lang},
            $product->{'name_' . $lang} . ', ' . $category->{'meta_keywords_' . $lang},
            $product->{'name_' . $lang} . ' ' . $category->{'meta_description_' . $lang});

        if (empty($product)) {
            throw new \yii\web\HttpException(404, 'Такого товара не существует.');
        }

        return $this->render('view', compact('product', 'images', 'similarProducts'));
    }
}
