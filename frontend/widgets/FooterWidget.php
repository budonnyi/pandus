<?php

namespace frontend\widgets;

use common\models\Product;
use Yii;
use yii\base\Widget;

class FooterWidget extends Widget
{

    public function run()
    {
        $storeProducts = Product::find()->where(['<>', 'availability', 0])->limit(2)->orderBy(['id' => SORT_DESC])->all();
        $popularProducts = Product::find()->where(['in', 'id', [93, 160, 159]])->limit(3)->orderBy(['id' => SORT_DESC])->all();

        return $this->render('footer', ['storeProducts' => $storeProducts, 'popularProducts' => $popularProducts]);
    }
}
